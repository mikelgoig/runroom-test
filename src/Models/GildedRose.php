<?php

namespace Runroom\GildedRose\Models;

class GildedRose
{
    /** @var array<Item> $items */
    private array $items;

    /** @param array<Item> $items */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            $item->updateQuality();
        }
    }
}
