<?php 

$host = "b5m9rkf7gmrn6f5udnjm-mysql.services.clever-cloud.com";       // Example: "bqfd56a3eqzv8p6wclevercloud.com"
$user = "uehdcjhdrusou2ew";   // Example: "u8zqvxxng8hxcj9l"
$pass = "4Ui0yfNKNavPM4is0fuI";   // Example: "Xyz123SecurePass"
$dbname = "b5m9rkf7gmrn6f5udnjm";  // Example: "bqfd56a3eqzv8p6"

$con = mysqli_connect($host, $user, $pass, $dbname);

if (!$con) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

?>
