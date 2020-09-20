<?php

namespace Runroom\GildedRose;

class GildedRose
{
    private array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            switch ($item->name) {
                case 'Aged Brie':
                    if ($item->quality < 50) {
                        $item->quality += 1;
                    }

                    $item->sellIn -= 1;

                    if ($item->sellIn < 0
                        && $item->quality < 50
                    ) {
                        $item->quality += 1;
                    }

                    break;

                case 'Backstage passes to a TAFKAL80ETC concert':
                    if ($item->quality < 50) {
                        $item->quality += 1;

                        if ($item->sellIn < 11
                            && $item->quality < 50
                        ) {
                            $item->quality += 1;
                        }

                        if ($item->sellIn < 6
                            && $item->quality < 50
                        ) {
                            $item->quality += 1;
                        }
                    }

                    $item->sellIn -= 1;

                    if ($item->sellIn < 0) {
                        $item->quality = 0;
                    }

                    break;

                case 'Sulfuras, Hand of Ragnaros':
                    break;

                default:
                    if ($item->quality > 0) {
                        $item->quality -= 1;
                    }

                    $item->sellIn -= 1;

                    if ($item->sellIn < 0
                        && $item->quality > 0
                    ) {
                        $item->quality -= 1;
                    }
            }
        }
    }
}
