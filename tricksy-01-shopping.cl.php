<?php

declare(strict_types=1);

class Basket
{
    private $items = [];  // Set empty $items array

    public function add($item)
    {
        $this->items[] = $item; // Add a new item into $items array 
    }

    public function total()
    {
        $total = 0;

        foreach ($this->items as $item) {
            $total += $item->getPrice();  // Loop, adding price from BasketItem class for each item passed in here
        }

        return "£" . number_format($total, 2);
    }

    public function items()
    {
        $names = [];  // Use a different name than "items"

        foreach ($this->items as $item) {
            $names[] = $item->getName();
        }

        return $names;
    }
}

class BasketItem
{
    private $name;
    private $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

$basket = new Basket();

$item1 = new BasketItem("coffee", 3.50);
$item2 = new BasketItem("tea", 2.50);

$basket->add($item1);
$basket->add($item2);

var_dump($basket->total()); // string(6) £6.00
var_dump($basket->items()); // array(2) { [0]=> string(6) "coffee" [1]=> string(3) "tea" }
