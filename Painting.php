<?php

class Painting extends AuctionItem
{
    public $painter;
    public $year;
    private $reservedPrice;

    //Painting constructor.
    // params =  $id, $seller, $type, $description, $askingPrice, $closingDate, $bid, $painter,$year
    public function __construct($id, $seller, $type, $description, $askingPrice, $closingDate, $bid, $painter, $year)
    {
        parent::__construct($id, $seller, $type, $description, $askingPrice, $closingDate, $bid);
        $this->painter = $painter;
        $this->year = $year;
    }

    // get method for reservedPrice
    public function getReservedPrice()
    {
        return $this->reservedPrice;
    }

    // set method for reservedPrice
    public function setReservedPrice($reservedPrice)
    {
        $this->reservedPrice = $reservedPrice;
    }

}