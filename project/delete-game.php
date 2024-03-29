<?php
// Connect to the database
require_once "database.php"; // Replace with your actual connection file

// Check if the book ID is provided in the URL
if (isset($_GET['id'])) {
    $gameId = $_GET['id'];

    // Perform deletion
    $deleteSql = "DELETE FROM game WHERE id = ?";
    $deleteStmt = mysqli_prepare($conn, $deleteSql);

    if ($deleteStmt) {
        mysqli_stmt_bind_param($deleteStmt, "i", $gameId);
        mysqli_stmt_execute($deleteStmt);

        // Check if deletion was successful
        if (mysqli_stmt_affected_rows($deleteStmt) > 0) {
            echo "Book deleted successfully";
        } else {
            echo "Book not found or could not be deleted";
        }

        mysqli_stmt_close($deleteStmt);
    } else {
        echo "Error in preparing delete statement: " . mysqli_error($conn);
    }
} else {
    echo "Book ID not provided";
}

// Close the database connection
mysqli_close($conn);
