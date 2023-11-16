<?php
require "conn.php";

if(isset($_GET['idtag'])){
    $idtag = $_GET['idtag'];

    // Update the clicks
    $updateSql = "UPDATE ads SET click = click + 1 WHERE idtag = ?";
    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param("s", $idtag);

    if ($stmt->execute()) {
        // Redirect back to the main page after updating
        $editSql = "SELECT * FROM ads WHERE idtag = ?";
        $stmt = $conn->prepare($editSql);
        $stmt->bind_param("s", $idtag);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $link = $row["link"];

            if (strpos($link, 'http') !== false) {
                 header("location: " . $link);
                exit();
            } else {
                header("location: https://" . $link);
                exit();
            }
        }
    } else {
        echo "Error directing: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
