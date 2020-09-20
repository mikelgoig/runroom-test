<?php

namespace Runroom\GildedRose;

class Item
{
    const TYPE_BASIC = 'Basic';
    const TYPE_AGED_BRIE = 'AgedBrie';
    const TYPE_SULFURAS = 'Sulfuras';
    const TYPE_BACKSTAGE = 'Backstage';

    public string $name;
    public int $sellIn;
    public int $quality;

    private string $type;
    private ItemFactory $factory;

    public function __construct(string $name, int $sellIn, int $quality, string $type = self::TYPE_BASIC)
    {
        $this->name = $name;
        $this->sellIn = $sellIn;
        $this->quality = $quality;

        $this->type = $type;
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
            ->getItemType($this->type)
            ->updateQuality($this);
    }
}
