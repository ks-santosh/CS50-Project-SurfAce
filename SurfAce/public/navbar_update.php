<?php
// configuration
    require("../includes/config.php"); 
    
    
    $q = $_REQUEST["q"];
    
    $nav_name = query("INSERT INTO navbar VALUE(?,?,?)", $_SESSION["id"], $q, "");
       
    echo $q;
      
?>
