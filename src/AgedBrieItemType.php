<?php

namespace Runroom\GildedRose;

class AgedBrieItemType extends ItemType
{
    public function updateQuality(Item $item): void
    {
        if ($item->quality < 50) {
            $item->quality += 1;
        }

        $item->sellIn -= 1;

        if ($item->sellIn < 0
            && $item->quality < 50
        ) {
            $item->quality += 1;
        }
    }
}
