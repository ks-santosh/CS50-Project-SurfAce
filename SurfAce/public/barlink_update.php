<?php
// configuration
    require("../includes/config.php"); 
    
    
    $q = $_REQUEST["q"];
    $r = $_REQUEST["r"];
    
    $nav_link = query("SELECT navlink FROM navbar WHERE id = ? AND navname = ?", $_SESSION["id"],$r);
    
    $links = $nav_link[0]["navlink"].'{'.$q.'}';
    
    
    
    $link_update = query("UPDATE navbar SET navlink = ? WHERE id = ? AND navname = ?", $links,  $_SESSION["id"], $r);
    
    
       
    echo $q;
      
?>
