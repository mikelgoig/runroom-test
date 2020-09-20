<?php

namespace Runroom\GildedRose\Factories;

use Runroom\GildedRose\Models\Items\ItemType;

class ItemFactory
{
    public function getItemType(string $type): ItemType
    {
        $className = "Runroom\\GildedRose\\Models\\Items\\{$type}ItemType";

        if (!class_exists($className)) {
            throw new \RuntimeException('Incorrect item type');
        }

        /** @var \Runroom\GildedRose\Models\Items\ItemType */
        return new $className;
    }
}
