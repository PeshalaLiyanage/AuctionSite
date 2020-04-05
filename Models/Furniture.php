<?php

include 'AuctionItem.php';

class Furniture extends AuctionItem
{
    private $dimensions;

    /**
     * Furniture constructor.
     * @param $id
     * @param $seller
     * @param $type
     * @param $description
     * @param $askingPrice
     * @param $closingDate
     * @param $bid
     * @param $dimensions
     */
    public function __construct($id, $seller, $type, $description, $askingPrice, $closingDate,$bid, $dimensions)
    {
        parent::__construct($id,$seller,$type,$description, $askingPrice, $closingDate,$bid);
        $this->dimensions = $dimensions;
    }

    /**
     * @return mixed
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }



}