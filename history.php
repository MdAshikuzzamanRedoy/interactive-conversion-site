<?php
$var;
  require_once 'db connect.php';


function allhistory()
  {

    $query="SELECT * FROM history";
    $product=get($query);
    return $product;

  }


  ?>