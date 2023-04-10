<?php
$mod = $_REQUEST['mod'];
switch ($mod) {
  case "motor":
    require("motor.php");
    break;
  case "index":
    require("index.php");
    break;
  case "about":
    require("about.php");
    break;
  case "form_input":
    require("form_input.php");
    break;
  case "contact":
    require("contact.php");
    break;
  case "data":
    require("data.php");
    break;
  default;
    require("motor.php");
}
