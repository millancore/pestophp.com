<?php

namespace App\Vite;

class ViteManager
{
    private ?Manifest $manifest = null;
    private string $defaultManifestName = 'manifest.json';
    private string $defaultManifestFolder = '.vite';

    private string $distBasePath;

    /**
     * @throws ViteManifestNotFoundException
     */
    public function __construct(
        public readonly string $dist,
        public readonly ?string $customManifest = null,
        public readonly string $host = 'localhost',
        public readonly int $port = 5173,
    )
    {
        $this->distBasePath = basename($dist);
        $this->loadManifest($this->customManifest ?? $this->dist);
    }

    /**
     *  Is possible to load a manifest from a different path
     *  1. Using the exact path to the manifest
     *  2. Using the root path where exists .vite folder
     *
     * @throws ViteManifestNotFoundException
     */
    public function loadManifest(string $path = null) : void
    {
        if(!file_exists($path)) {
            $this->notFoundManifest($path);
        }

        if(is_dir($path)) {
            $path = $path.'/'.$this->defaultManifestFolder.'/'.$this->defaultManifestName;

            if(!file_exists($path)) {
                $this->notFoundManifest($path);
            }
        }

        $this->manifest = Manifest::fromArray($this->resolveManifest($path));
    }

    /**
     * @throws ViteManifestNotFoundException
     */
    private function notFoundManifest(string $path) : void
    {
        throw new ViteManifestNotFoundException("Manifest not found at: $path");
    }

    public function getManifest() : Manifest
    {
        return $this->manifest;
    }

    /**
     * @return array<mixed>
     */
    private function resolveManifest(string $manifestPath): array
    {
        return json_decode(file_get_contents($manifestPath), true);
    }


    /**
     * @throws ViteException
     */
    public function get(string $filePath ) : string
    {
        if($this->isRunningDevServer()) {
            return sprintf('http://%s:%s/%s',$this->host,$this->port, $filePath);
        }

        if(!$this->manifest->hasAssetByFile($filePath)) {
            throw new ViteException(sprintf('Asset for file "%s" not found', $filePath));
        }

        return $this->distBasePath.'/'.$this->manifest->getAssetByFile($filePath)->file;
    }

    public function styles(string $filePath) : string
    {
        $asset = $this->manifest->getAssetByFile($filePath);

        $cssFile = $asset->css[0];

        return $this->distBasePath.'/'.$cssFile;
    }

    public function addReactRefresh() : ?string
    {
        if (!$this->isRunningDevServer()) {
            return null;
        }

        $refreshScript = file_get_contents(__DIR__.'/react-refresh.html');

        return str_replace('{port}', "$this->port", $refreshScript);
    }


    public function isRunningDevServer() : bool
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'http://localhost:5173');
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);

        $response = curl_exec($ch);

        curl_close($ch);

        return $response === true;
    }

}
