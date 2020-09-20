<?php

namespace Runroom\GildedRose;

class Item
{
    public string $name;
    public int $sellIn;
    public int $quality;

    private ItemFactory $factory;

    public function __construct(string $name, int $sellIn, int $quality)
    {
        $this->name = $name;
        $this->sellIn = $sellIn;
        $this->quality = $quality;

        $this->factory = new ItemFactory;
    }

    public function __toString()
    {
        return "{$this->name}, {$this->sellIn}, {$this->quality}";
    }

    public function updateQuality(): void
    {
        $this
            ->factory
            ->getItemType($this->name)
            ->updateQuality($this);
    }
}
