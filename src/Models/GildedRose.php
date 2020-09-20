<?php

namespace Runroom\GildedRose\Models;

class GildedRose
{
    /** @var array<\Runroom\GildedRose\Models\Item> $items */
    private array $items;

    /** @param array<\Runroom\GildedRose\Models\Item> $items */
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
