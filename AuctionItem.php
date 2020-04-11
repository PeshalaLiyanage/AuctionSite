<?php

class AuctionItem
{
    public $id;
    public $seller;
    public $type;
    public $description;
    public $askingPrice;
    public $closingDate;
    public $bid;
    public $sellingPrice;
    public $totalPrice;
    public $sold;
    public $buyersPremium;
    public $bidHistory = [];


    // AuctionItem constructor
    // params = $id ,$seller, $type, $description, $askingPrice, $closingDate, $bid
    public function __construct($id, $seller, $type, $description, $askingPrice, $closingDate, $bid)
    {
        $this->id = $id;
        $this->seller = $seller;
        $this->type = $type;
        $this->description = $description;
        $this->askingPrice = $askingPrice;
        $this->closingDate = $closingDate;
        $this->bid = $bid;
        $this->sold = false;
    }

    // Set the bid history
    public function setBidHistory($bidHistory)
    {
        array_push($this->bidHistory, $bidHistory);
    }


    // Calculate total price that buyer should pay
    function calculateTotalPrice()
    {
        $this->sellingPrice = $this->bid;
        $this->buyersPremium = $this->sellingPrice * 0.1;
        $this->totalPrice = $this->sellingPrice + $this->buyersPremium;

        return $this->totalPrice;
    }

    //Calculate net amount sellers receive
    function calculateNetAmount()
    {
        return $this->sellingPrice - 10;
    }

    //calculate profit
    function calculateProfit()
    {
        return $this->sellingPrice * 0.1 + 10;
    }

}