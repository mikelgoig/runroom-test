<?php

namespace Runroom\GildedRose\Models\Items;

use Runroom\GildedRose\Models\Item;

/** @psalm-consistent-constructor */
abstract class ItemType
{
    abstract public function updateQuality(Item $item): void;
}
