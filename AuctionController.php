<?php

include 'Models/Furniture.php';
include 'Models/Painting.php';
include 'Models/Book.php';

/**
 * Class AuctionController
 */
class AuctionController
{

    private $auctionItems;

    /**
     *Create default objects
     */
    function createInstances(){
        $item1 = new Furniture(
            1,"Peter", "Furniture","Coffee Table",85, "31/03/2020",60,
            "85 cm X 35 cm X 52.");
        $item2 = new Book(
            2,"Ann",  "Book", "Play Drama", 15, "25/03/2020", 7,
            "William Shakespeare", "Macbeth ");
        $item3 = new Painting(
            3, "Helen", "Painting" , "Oil on Canvas", 3000, "30/04/2020",
            850,"Hannah Fairfield,","1839");
        $item4 = new Painting(
            4, "John", "Painting" , "Pop Art", 400, "30/04/2020",
            420,"Callypso","2015");
        $item5 = new Painting(
            5, "Wendy", "Painting" , "Spanish School", 15000, "31/05/2020",
            10000,"Goya","1800");

        $this->auctionItems = [$item1,$item2,$item3,$item4,$item5];
        return  $this->auctionItems;
    }


}