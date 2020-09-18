<?php

session_start();

require_once 'lib/portfolio.php';

$res = deletePro($_GET['proid']);

if($res == true)
{
  header("LOCATION:allportfolio.php");
}else{
  header("LOCATION:allportfolio.php");

}
