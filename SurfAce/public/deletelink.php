<?php

     require("../includes/config.php"); 
    
    
    
    $link = $_REQUEST["link"];
    $name = $_REQUEST["name"];
    $choice = $_REQUEST["choice"];
    
    if($choice == 0)
    {
         $nav_link = query("SELECT navlink FROM navbar WHERE id = ? AND navname = ?", $_SESSION["id"],$name);
    
        $links = $nav_link[0]["navlink"]; 
        
        $dellink = "{".$link."}";
        
        $newtext = str_replace($dellink , "" , $links);
        
        $link_update = query("UPDATE navbar SET navlink = ? WHERE id = ? AND navname = ?", $newtext,  $_SESSION["id"], $name);
    
        
  }
  
  else {
  
        $text = query("SELECT pill_link FROM navpill WHERE id = ?  AND pillname = ?" , $_SESSION["id"], $name);
        
        $text = $text[0]["pill_link"];
        
        $link = "{".$link."}";
        
        $newtext = str_replace($link , "" , $text);
        
        $update = query("UPDATE navpill SET pill_link = ? WHERE id = ? AND pillname = ?", $newtext , $_SESSION["id"], $name);
        
  }
       
 

?>
