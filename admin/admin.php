<?php session_start();
if (isset($_SESSION['mail']))
{
  include 'page.php';
}else {
  print_r($_SESSION);
  echo "cout";
}?>
