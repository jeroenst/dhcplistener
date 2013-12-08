#!/usr/bin/php
<?php
$name="";
while($f = fgets(STDIN)){
    if (strpos($f, "Request from") !== false) $name = "Gast";
    if (strpos($f, "Request from 5c:0a:5b:da:95:b9") !== false) $name="Jeroen St";
    if (strpos($f, "Request from 00:37:6d:f9:c2:4d") !== false) $name="Roland";
    if (strpos($f, "Request from 18:87:96:e4:9e:39") !== false) $name="Jeroen K";
    if (strpos($f, "Request from 88:25:2c:b6:b6:42") !== false) $name="Mieke";
#    if (strpos($f, "Request from 00:12:79:df:09:d4") !== false) $name="Printer";

    if ($name != "")
    {
#        echo "$name: $f";
        if (strpos($f, "Discover") !== false)
        {
            file_put_contents ("/tmp/dhcpname", $name);
            echo "Printing to LCD: $name";
            exec ("/usr/domotica/lcd/writelcd.sh");
            $name = "";
        }
    }
}

