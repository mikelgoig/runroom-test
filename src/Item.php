<?php

namespace Runroom\GildedRose;

class Item
{
    public string $name;
    public int $sellIn;
    public int $quality;

    public function __construct(string $name, int $sellIn, int $quality)
    {
        $this->name = $name;
        $this->sellIn = $sellIn;
        $this->quality = $quality;
    }

    public function __toString()
    {
        return "{$this->name}, {$this->sellIn}, {$this->quality}";
    }

    public function updateQuality(): void
    {
        switch ($this->name) {
            case 'Aged Brie':
                if ($this->quality < 50) {
                    $this->quality += 1;
                }

                $this->sellIn -= 1;

                if ($this->sellIn < 0
                    && $this->quality < 50
                ) {
                    $this->quality += 1;
                }

                break;

            case 'Backstage passes to a TAFKAL80ETC concert':
                if ($this->quality < 50) {
                    $this->quality += 1;

                    if ($this->sellIn < 11
                        && $this->quality < 50
                    ) {
                        $this->quality += 1;
                    }

                    if ($this->sellIn < 6
                        && $this->quality < 50
                    ) {
                        $this->quality += 1;
                    }
                }

                $this->sellIn -= 1;

                if ($this->sellIn < 0) {
                    $this->quality = 0;
                }

                break;

            case 'Sulfuras, Hand of Ragnaros':
                break;

            default:
                if ($this->quality > 0) {
                    $this->quality -= 1;
                }

                $this->sellIn -= 1;

                if ($this->sellIn < 0
                    && $this->quality > 0
                ) {
                    $this->quality -= 1;
                }
        }
    }
}
