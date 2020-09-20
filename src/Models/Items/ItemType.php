<?php

namespace Runroom\GildedRose\Models\Items;

use Runroom\GildedRose\Models\Item;

abstract class ItemType
{
    abstract public function updateQuality(Item $item): void;
}
