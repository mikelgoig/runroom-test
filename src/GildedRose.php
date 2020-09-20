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
            if ($item->name !== 'Aged Brie'
                && $item->name !== 'Backstage passes to a TAFKAL80ETC concert'
            ) {
                if ($item->quality > 0
                    && $item->name !== 'Sulfuras, Hand of Ragnaros'
                ) {
                    $item->quality -= 1;
                }
            } elseif ($item->quality < 50) {
                $item->quality += 1;

                if ($item->name === 'Backstage passes to a TAFKAL80ETC concert') {
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
            }

            if ($item->name !== 'Sulfuras, Hand of Ragnaros') {
                $item->sellIn -= 1;
            }

            if ($item->sellIn < 0) {
                if ($item->name !== 'Aged Brie') {
                    if ($item->name !== 'Backstage passes to a TAFKAL80ETC concert') {
                        if ($item->quality > 0
                            && $item->name !== 'Sulfuras, Hand of Ragnaros'
                        ) {
                            $item->quality -= 1;
                        }
                    } else {
                        $item->quality = 0;
                    }
                } elseif ($item->quality < 50) {
                    $item->quality += 1;
                }
            }
        }
    }
}
