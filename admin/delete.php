<?php

require "conn.php";
require "conn.php";
if(empty($_SESSION['email'])){
    header("Location: index.php");
}

if (isset($_GET['idtag'])) {
    $idToDelete = $_GET['idtag'];


    // Construct the delete query
    $deleteSql = "DELETE FROM ads WHERE idtag = '$idToDelete'";

    // Execute the delete query
    if ($conn->query($deleteSql) === TRUE) {
        // Redirect back to the page after deletion
        header("Location: onboard.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    // Handle the case where the 'idtag' parameter is not provided
    echo "ID not provided for deletion.";
}
?>
