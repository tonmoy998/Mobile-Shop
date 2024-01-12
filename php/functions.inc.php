<?php
require "db.inc.php";
require "product.inc.php";

$db = new DBConnection();
$mobile = new Product($db);
