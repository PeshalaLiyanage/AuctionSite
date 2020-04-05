<?php


//include 'AuctionItem.php';

class Painting extends AuctionItem
{
    private $painter;
    private $year;

    /**
     * Painting constructor.
     * @param $id
     * @param $seller
     * @param $type
     * @param $description
     * @param $askingPrice
     * @param $closingDate
     * @param $bid
     * @param $painter
     * @param $year
     */
    public function __construct($id, $seller, $type, $description, $askingPrice, $closingDate,$bid,$painter, $year)
    {
        parent::__construct($id, $seller, $type, $description, $askingPrice, $closingDate,$bid);
        $this->painter = $painter;
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getPainter()
    {
        return $this->painter;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }
}