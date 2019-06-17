<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user '127.0.0.0' with zend#2313) */
$link = mysqli_connect("127.0.0.0", "root", "zend#2313","poll");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt create table query execution
$sql = "CREATE TABLE persons(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `choice` tinyint(4) NOT NULL DEFAULT '0',
    `ts` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
)";


if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

?>
