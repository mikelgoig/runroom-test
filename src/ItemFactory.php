<?php

namespace Runroom\GildedRose;

class ItemFactory
{
    public function getItemType(string $type): ItemType
    {
        $className = "Runroom\\GildedRose\\{$type}ItemType";

        if (!class_exists($className)) {
            throw new \RuntimeException('Incorrect item type');
        }

        /** @var \Runroom\GildedRose\ItemType */
        return new $className;
    }
}
