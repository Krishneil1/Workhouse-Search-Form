<?php
/**
 * Created by PhpStorm.
 * User: kkumar
 * Date: 11/05/2016
 * Time: 12:36 PM
 */

$mysqli = new mysqli("localhost", "root", "", "property");
// Retrieve data from Query String
$name = $_GET['name'];
$price = $_GET['price'];
$minprice = $_GET['minprice'];
$bedroom = $_GET['bedroom'];
$bathroom = $_GET['bathroom'];
$garage= $_GET['garage'];
$storey= $_GET['storey'];

$price = $mysqli->real_escape_string($price);
$minprice = $mysqli->real_escape_string($minprice);
$bedroom = $mysqli->real_escape_string($bedroom);
$bathroom = $mysqli->real_escape_string($bathroom);
$garage = $mysqli->real_escape_string($garage);
$storey = $mysqli->real_escape_string($storey);
$name = $mysqli->real_escape_string($name);
//build query
$query = "SELECT * FROM listing WHERE name like '%$name%'";
if(is_numeric($price))
    $query .= " and price > $minprice and price < $price";
if(is_numeric($bathroom))
    $query .= " and bathroom = $bathroom";
if(is_numeric($garage))
    $query .= " and garage = $garage";
if(is_numeric($storey))
    $query .= " and storey = $storey";
if(is_numeric($bedroom))
    $query .= " and bedroom= $bedroom";

//Execute query
$qry_result = $mysqli->query($query) or die($mysqli->connect_error());
//Build Result String
$display_string = "<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>";
$display_string .= "<div class ='container'>";
$display_string .= "<table class = 'table table-bordered'>";
$display_string .= "<tr>";
$display_string .= "<th>Suburb</th>";
$display_string .= "<th>Price</th>";
$display_string .= "<th>Bedroom</th>";
$display_string .= "<th>Bathroom</th>";
$display_string .= "<th>Garage</th>";
$display_string .= "<th>Storey</th>";
$display_string .= "</tr>";
// Insert a new row in the table for each person returned
while($row = mysqli_fetch_array($qry_result)){
    $display_string .= "<tr>";
    $display_string .= "<td>$row[name]</td>";
    $display_string .= "<td>$$row[price]</td>";
    $display_string .= "<td>$row[bedroom]</td>";
    $display_string .= "<td>$row[bathroom]</td>";
    $display_string .= "<td>$row[garage]</td>";
    $display_string .= "<td>$row[storey]</td>";
    $display_string .= "</tr>";
    $display_string .= "</thead>";
}
//echo "Query: " . $query . "<br />";/*for debugging*/
$display_string .= "</table>";
$display_string .= "</div>";
if(mysqli_num_rows($qry_result)>0){
    //call php to hide the loading
    echo $display_string ;
}
else echo "<b>No property found with those search</b> ";
?>
