<?php

include 'AuctionItem.php';

class Furniture extends AuctionItem
{
    public $dimensions;

    //Furniture constructor.
    // params = $id, $seller, $type,$description, $askingPrice,$closingDate,$bid,$dimensions
    public function __construct($id, $seller, $type, $description, $askingPrice, $closingDate, $bid, $dimensions)
    {
        parent::__construct($id, $seller, $type, $description, $askingPrice, $closingDate, $bid);
        $this->dimensions = $dimensions;
    }

}