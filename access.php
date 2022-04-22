<?php
$NAME=$_COOKIE['$cookie_name'];
if(isset($NAME))
{
  if($NAME=='fredchecker')
  {
    header("Location: page.html"); 
  } else{
    header("Location: http://thecalculatorguy.ga/F.R.E.D./403.html");
  }
