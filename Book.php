<?php

class Book extends AuctionItem
{
    public $author;
    public $title;

    // Book constructor.
    //$id, $seller, $type, $description, $askingPrice, $closingDate, $bid, $author, $title

    public function __construct($id, $seller, $type, $description, $askingPrice, $closingDate, $bid, $author, $title)
    {
        parent::__construct($id, $seller, $type, $description, $askingPrice, $closingDate, $bid);
        $this->author = $author;
        $this->title = $title;
    }
}