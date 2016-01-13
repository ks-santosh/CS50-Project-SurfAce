<?php

    // configuration
    require("../includes/config.php");
    
    $navbar_name = query("SELECT navname, navlink FROM navbar WHERE id = ? ", $_SESSION["id"]);
    
    
    $navpill_name = query("SELECT pillname, pill_link FROM navpill WHERE id = ? ", $_SESSION["id"]);
     
    // render form
    render("surf_page.php", array("title" => "Log In", "navnames" => $navbar_name,"pillnames" => $navpill_name));

?>
