<?php

    // configuration
    require("../includes/config.php");
    
    $deletenav = query("DELETE FROM navbar WHERE id = ? AND navname = ? ", $_SESSION["id"], $_POST["navname"]);
    
    
    redirect("surf.php");

?>
