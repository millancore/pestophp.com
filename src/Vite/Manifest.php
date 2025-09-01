<?php

namespace App\Vite;

class Manifest
{
    /** @var array<string, Asset> $index */
    private array $index = [];

    /**
     * @param array<mixed> $rawManifest
     * @return Manifest
     */
    public static function fromArray(array $rawManifest): Manifest
    {
        $newManifest = new Manifest();

        foreach ($rawManifest as $key => $value) {
            $newManifest->addAsset(Asset::fromArray($key, $value));
        }

        return $newManifest;
    }

    public function addAsset(Asset $asset): Manifest
    {
        $this->index[$asset->origin] = $asset;

        return $this;
    }

    /**
     * @return Asset[]
     */
    public function getAssets(): array
    {
        return array_values($this->index);
    }

    public function getAssetByFile(string $file): ?Asset
    {
        if(!isset($this->index[$file])) {
            return null;
        }

        return $this->index[$file];
    }

    public function hasAssetByFile(string $string): bool
    {
        return isset($this->index[$string]);
    }

}

