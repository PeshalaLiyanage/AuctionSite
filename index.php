<?php

//include 'Models/Furniture.php';
//include 'Models/Painting.php';
//include 'Models/Book.php';
include 'AuctionController.php';
echo "<style>";
include 'Styles/style.css';
echo "</style>";
//
//$item1 = new Furniture(
//    1,"Peter", "Furniture","Coffee Table",85, "31/03/2020",60,
//    "85 cm X 35 cm X 52.");
//$item2 = new Book(
//    2,"Ann",  "Book", "Play Drama", 15, "25/03/2020", 7,
//    "William Shakespeare", "Macbeth ");
//$item3 = new Painting(
//    3, "Helen", "Painting" , "Oil on Canvas", 3000, "30/04/2020",
//    850,"Hannah Fairfield,","1839");
//$item4 = new Painting(
//    4, "John", "Painting" , "Pop Art", 400, "30/04/2020",
//    420,"Callypso","2015");
//$item3 = new Painting(
//    5, "Wendy", "Painting" , "Spanish School", 15000, "31/05/2020",
//    10000,"Goya","1800");

//echo $item1->calculateTotalPrice();
//echo "<br>";
//echo $item2->calculateTotalPrice();

$auctionController = new AuctionController();

$itemArray = $auctionController->createInstances();

$itemArray[1]->setSold(true);

echo "<table>";
echo "<tr>
        <th>Description</th>
        <th>Buyers Price</th>
        <th>Sellers Amount</th>
        <th>Profit</th>
      </tr>";
foreach ($itemArray as $item) {
    echo "<tr>";
    echo "<td> ".$item->getId()." ".$item->getDescription()."</td>";
    echo "<td>£".$item->calculateTotalPrice()."</td>";
    echo "<td>£".$item->calculateNetAmount()."</td>";
    echo "<td>£".$item->calculateProfit()."</td>";
    echo "</tr>";

    if ($item->getSold() == true){
        echo "<tr> <td colspan=\"4\" style='background-color: lightgray'>Item \"".$item->getDescription()." \" soled. 
        Item id = ".$item->getId()." , Asking price = £".$item->getAskingPrice()." , Buyers premium =  £"
            .$item->getBuyersPremium()." , Sellers premium = £10"."</td></tr>";
    }
}
echo "</table>";

echo "


<table>
    
</table>
    
";

