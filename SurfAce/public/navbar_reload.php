<?php

    // configuration
    require("../includes/config.php");
    
   
    
    $nav_name = query("INSERT INTO navbar VALUE(?,?,?)", $_SESSION["id"], $_POST["navname"], "No Links");
    
    // render form
    redirect("surf.php");

?>
