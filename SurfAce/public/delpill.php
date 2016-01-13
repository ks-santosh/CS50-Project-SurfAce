<?php

    // configuration
    require("../includes/config.php");
    
    $deletepill = query("DELETE FROM navpill WHERE id = ? AND pillname = ? ", $_SESSION["id"], $_POST["pillname"]);
    
    
    redirect("surf.php");

?>
