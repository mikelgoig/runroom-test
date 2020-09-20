<?php

namespace Runroom\GildedRose\Models\Items;

use Runroom\GildedRose\Models\Item;

class BasicItemType extends ItemType
{
    public function updateQuality(Item $item): void
    {
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
