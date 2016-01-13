<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
         // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
        
        else if (empty($_POST["confirmation"]))
        {
            apologize("You must conform your password.");
        }
        
        else if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("Passwords do not match.");
        }
        
        $result = query("INSERT INTO users (username, hash) VALUES(?, ?)", $_POST["username"], crypt($_POST["password"]));
        
        if($result === false)
        {
            apologize("Username already exists.");
        }   
        
        else {        
            
            $rows = query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];
            $_SESSION["id"] = $id;
            header("Location: login.php");
        
        }
    
    
    }
    else
    {
        // else render form
        render("login_form.php", array("title" => "Register"));
    }

?>
