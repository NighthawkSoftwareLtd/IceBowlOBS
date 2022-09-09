<?php

include("config.php");

$action = $_GET["action"];


switch($action)
{
    case "loadSheets":
        loadSheets($sheets);
        break;
    case "updateSheets":

        updateSheets($_POST["Name"], $_POST["IPAddress"]);
        break;
}








function loadSheets($sheets)
{
    echo json_encode($sheets);
}

function updateSheets($name, $ipaddress)
{
    $file = fopen("config.php", "w");

    $txt = "<?php\n";
    $txt .= "include(\"Classes/Sheet.php\");\n";
    $txt .= "\$sheets = array();\n\n";

    for($i = 0; $i < count($name); $i++)
    {
        $txt .= "\$sheets[$i] = new Sheet();\n";
        $txt .= "\$sheets[$i]->Name = \"$name[$i]\";\n";
        $txt .= "\$sheets[$i]->IPAddress = \"$ipaddress[$i]\";\n\n";
    }

    $txt .= "?>\n";

    fwrite($file, $txt);
}

?>