<?php

//Link classes
include 'Furniture.php';
include 'Painting.php';
include 'Book.php';

// Create instances
$item1 = new Furniture(
    1, "Peter", "Furniture", "Coffee Table", 85, "31/03/2020", 60,
    "85 cm X 35 cm X 52.");
$item2 = new Book(
    2, "Ann", "Book", "Play Drama", 15, "25/03/2020", 7,
    "William Shakespeare", "Macbeth ");
$item3 = new Painting(
    3, "Helen", "Painting", "Oil on Canvas", 3000, "30/04/2020",
    850, "Hannah Fairfield,", "1839");
$item4 = new Painting(
    4, "John", "Painting", "Pop Art", 400, "30/04/2020",
    420, "Callypso", "2015");
$item5 = new Painting(
    5, "Wendy", "Painting", "Spanish School", 15000, "31/05/2020",
    10000, "Goya", "1800");


//Reserved price functionality for paintings
//set sold status
function sellItem($item, $bid, $date)
{
    // Set the bid
    $item->bid =$bid;

    //Add the bid to bidHistory associative array
    $item->setBidHistory($date . " --> " . $bid);

    // check the item type
    if ($item->type == "Painting") {

        // compare bid and the reserved price
        if ($bid >= $item->getReservedPrice()) {
            $item->sold = true;
        } else {
            $item->sold = false;
        }
    } else {
        $item->sold = true;
    }
}

// Display items
function displayItems($item)
{

    echo "<ul>";
    echo "<h2>" . $item->description . "</h2>";
    echo "<li> Item Id : " . $item->id . "</li>";
    echo "<li> Item Description  : " . $item->description . "</li>";
    echo "<li> Asking price : £" . $item->askingPrice . "</li>";
    echo "<li> Current Bid : £" . $item->bid . "</li>";

    // Check whether the item is sold or not.
    if ($item->sold == true) {

        // If the item is soled , display the details
        echo "<li> Status: Sold.</li>";
        echo "<ul>";
        echo "<li> Total Price : £" . $item->calculateTotalPrice() . "</li>";
        echo "<li> Sellers Net Amount : £" . $item->calculateNetAmount() . "</li>";
        echo "<li> Buyers premium :  £" . $item->buyersPremium . "</li>";
        echo "<li> Sellers premium : £10</li>";
        echo "<li> Your Profit : £" . $item->calculateProfit() . "</li>";
        echo "</ul>";

    } else {
        echo "<li> Status : Available </li>";
    }
    echo "</ul> <br>";

}

// Display bid history
function displayBidHistory($item)
{
    // Check whether the bidHistory array includes items or not.
    // Only display items which has a history
    if (count($item->bidHistory) > 0) {
        echo "<ul>";
        echo "<li> Item Id : " . $item->id . "</li>";
        echo "<li> Item Description : "  . $item->description . "</li>";
        echo "<ul>";

        // Loop through the bidHistory associative array
        foreach ($item->bidHistory as $history) {
            echo "<li>" .$history . "</li>";
        }
        echo "</ul>";
        echo "</ul> <br>";
    }
}



// set the reserved prices using setter function
$item3->setReservedPrice(1800);
$item4->setReservedPrice(85);
$item5->setReservedPrice(9500);


//sell items - set sold status
//Test the reserved price logic for Paintings
sellItem($item5, 1500, "01/03/2020");
sellItem($item5, 8000, "20/03/2020");
sellItem($item5, 1000, "01/04/2020");
sellItem($item2, 10000, "01/04/2020");
sellItem($item1, 10000, "01/04/2020");

echo "<h1> Auction Service</h1>";

// Display items
displayItems($item1);
displayItems($item2);
displayItems($item3);
displayItems($item4);
displayItems($item5);


echo "<h3> Bid History </h3>";


// Display history
displayBidHistory($item1);
displayBidHistory($item2);
displayBidHistory($item3);
displayBidHistory($item4);
displayBidHistory($item5);






