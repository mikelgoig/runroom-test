<?php

namespace Runroom\GildedRose;

abstract class ItemType
{
    abstract public function updateQuality(Item $item): void;
}
