<?php
//namespace Servicer;

class ProductManager
{

    private $product;
    public function __construct()
    {
        $this->product = [];
    }

    public function getProduct(): array
    {
        return $this->product;
    }

    public function add($product): void
    {
        $this->product[] = $product;
    }

}