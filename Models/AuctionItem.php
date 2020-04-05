<?php


/**
 * Class AuctionItem
 */
class AuctionItem
{
    /**
     * @var
     */
    private $id;
    /**
     * @var
     */
    private $seller;
    /**
     * @var
     */
    private $type;
    /**
     * @var
     */
    private $description;
    /**
     * @var
     */
    private $askingPrice;
    /**
     * @var
     */
    private $closingDate;
    /**
     * @var
     */
    private $bid;

    private $sellingPrice;
    private $totalPrice;
    private $sold;
    private $buyersPremium;



    /**
     * AuctionItem constructor.
     * @param $id
     * @param $seller
     * @param $type
     * @param $description
     * @param $askingPrice
     * @param $closingDate
     * @param $bid
     */
    public function __construct($id, $seller, $type, $description, $askingPrice, $closingDate,$bid)
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

    /**
     * @return mixed
     */
    public function getBuyersPremium()
    {
        return $this->buyersPremium;
    }

    /**
     * @return mixed
     */
    public function getSold()
    {
        return $this->sold;
    }

    /**
     * @param mixed $sold
     */
    public function setSold($sold)
    {
        $this->sold = $sold;
    }

    /**
     * @param mixed $bid
     */
    public function setBid($bid)
    {
        $this->bid = $bid;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getAskingPrice()
    {
        return $this->askingPrice;
    }

    /**
     * @return mixed
     */
    public function getClosingDate()
    {
        return $this->closingDate;
    }

    /**
     * @return mixed
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * @return mixed
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }


    /**
     * Calculate total price that buyer should pay
     */
    function calculateTotalPrice()
    {
        $this->sellingPrice = $this->askingPrice + $this->bid;
        $this->buyersPremium = $this->sellingPrice * 0.1;
        $this->totalPrice = $this->sellingPrice +$this->buyersPremium;

        return $this->totalPrice;
    }

    /**
     * Calculate net amount sellers receive
     */
    function calculateNetAmount()
    {
        return $this->sellingPrice - 10;
    }

    /**
     * calculate profit
     */
    function calculateProfit()
    {
        return $this->sellingPrice * 0.1 + 10;
    }



}