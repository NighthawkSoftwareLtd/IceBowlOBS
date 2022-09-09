<?php
include("Classes/Sheet.php");
$sheets = array();

$sheets[0] = new Sheet();
$sheets[0]->Name = "Sheet 1";
$sheets[0]->IPAddress = "192.168.1.88:4444";

$sheets[1] = new Sheet();
$sheets[1]->Name = "Sheet 3";
$sheets[1]->IPAddress = "192.168.1.88:4457";

$sheets[2] = new Sheet();
$sheets[2]->Name = "Sheet 4";
$sheets[2]->IPAddress = "192";

?>
