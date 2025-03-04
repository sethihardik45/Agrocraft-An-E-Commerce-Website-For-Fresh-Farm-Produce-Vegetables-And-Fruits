<?php 

        // $con = mysqli_connect("localhost","root","","agrocraft");
      
        // if (mysqli_connect_errno()) {
        //         echo "Failed to connect to MySql " . mysqli_connect_error();
        // }
        // Get the DATABASE_URL from Heroku's environment variables
        $clevercloud_db_url = getenv("DATABASE_URL");
        
        if (!$clevercloud_db_url) {
            die("Error: DATABASE_URL environment variable not set.");
        }
        
        // Parse the database URL
        $parsed_url = parse_url($clevercloud_db_url);
        
        $host = $parsed_url["host"];
        $user = $parsed_url["user"];
        $pass = $parsed_url["pass"];
        $dbname = substr($parsed_url["path"], 1); // Remove the leading "/"
        
        $con = mysqli_connect($host, $user, $pass, $dbname);
        
        // Check connection
        if (!$con) {
            die("Failed to connect to MySQL: " . mysqli_connect_error());
        }
        
        ?>
        