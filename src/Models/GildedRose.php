<?php

namespace Runroom\GildedRose\Models;

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
            $item->updateQuality();
        }
    }
}
