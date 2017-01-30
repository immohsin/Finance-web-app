<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
        if(empty($_POST["username"] || $_POST["password"]))
        {
            apologize("Username/password is empty");
        }
        
        if($_POST["password"] != $_POST["confirmation"])
        {
            apologize("Password do not match");
        }
        
         $result = LIB::query("INSERT IGNORE INTO users (username, password, cash) VALUES(?, ?, 10000.0000)", $_POST["username"],$_POST["password"]);
        if($result == FALSE)
        {
            apologize("username already exist");
        }
        else
        {
            $rows = LIB::query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];
            $_SESSION["id"] = $id;
	       redirect("index.php");
            
        }
        
    }

?>
