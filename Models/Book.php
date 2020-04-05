<?php

//include 'AuctionItem.php';

class Book extends AuctionItem
{
    private $author;
    private $title;

    /**
     * Book constructor.
     * @param $id
     * @param $seller
     * @param $type
     * @param $description
     * @param $askingPrice
     * @param $closingDate
     * @param $bid
     * @param $author
     * @param $title
     */
    public function __construct($id, $seller, $type, $description, $askingPrice, $closingDate,$bid,$author, $title)
    {
        parent::__construct($id, $seller, $type, $description, $askingPrice, $closingDate,$bid);
        $this->author = $author;
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }
}