<?php
// configuration
    require("../includes/config.php"); 
    
    
    $q = $_REQUEST["q"];
    
    $nav_name = query("INSERT INTO navpill VALUE(?,?,?)", $_SESSION["id"], $q, "");
    
    
       
    echo $q;
      
?>
