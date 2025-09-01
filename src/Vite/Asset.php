<?php

namespace App\Vite;

readonly class Asset
{
    /**
     * @param array<string> $imports
     * @param array<string> $css
     */
    public function __construct(
        public string  $origin,
        public string  $file,
        public ?string $name = null,
        public ?string $src = null,
        public ?bool   $isEntry = false,
        public array   $imports = [],
        public array $css = []
    )
    {
        //
    }

    /**
     * @param string $origin
     * @param array<mixed> $rawAsset
     * @return self
     */
    public static function fromArray(string $origin, array $rawAsset): self
    {
        return new self(
            $origin,
            $rawAsset['file'],
            $rawAsset['name'] ?? null,
            $rawAsset['src'] ?? null,
            $rawAsset['isEntry'] ?? false,
            $rawAsset['imports'] ?? [],
            $rawAsset['css'] ?? [],
        );
    }

}