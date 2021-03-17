<?php

function get_price($name) {
  $products =[
    "book"=>20,
    "pen"=>10,
    "pencil"=>5
  ];

  foreach($products as $product=>$price) {
    if ($product == $name) {
      return $price;
      break; // No sure if this is needed
    }
  }
}