<?php

namespace Runroom\GildedRose;

class ItemFactory
{
    public function getItemType(string $name): ItemType
    {
        switch ($name) {
            case 'Aged Brie':
                $subclassName = 'AgedBrie';
                break;
            case 'Backstage passes to a TAFKAL80ETC concert':
                $subclassName = 'Backstage';
                break;
            case 'Sulfuras, Hand of Ragnaros':
                $subclassName = 'Sulfuras';
                break;
            default:
                $subclassName = 'Basic';
        }

        $className = "Runroom\\GildedRose\\{$subclassName}ItemType";

        if (!class_exists($className)) {
            throw new \RuntimeException('Incorrect item type');
        }

        /** @var \Runroom\GildedRose\ItemType */
        return new $className;
    }
}
