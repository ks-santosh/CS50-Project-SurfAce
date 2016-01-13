<?php
// configuration
    require("../includes/config.php"); 
    
    
    $q = $_REQUEST["q"];
    $r = $_REQUEST["r"];
    
    $pill_link = query("SELECT pill_link FROM navpill WHERE id = ? AND pillname = ?", $_SESSION["id"],$r);
    
    $links = $pill_link[0]["pill_link"].'{'.$q.'}';
    
    
    
    $link_update = query("UPDATE navpill SET pill_link = ? WHERE id = ? AND pillname = ?", $links,  $_SESSION["id"], $r);
    
    
       
    echo $links;
      
?>
