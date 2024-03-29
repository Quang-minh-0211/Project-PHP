<?php
// Connect to the database
require_once "database.php"; // Replace with your actual connection file

// Check if the book ID is provided in the URL
if (isset($_GET['id'])) {
    $sell_value_Id = $_GET['id'];

    // Perform deletion
    $deleteSql = "DELETE FROM sell_price WHERE id = ?";
    $deleteStmt = mysqli_prepare($conn, $deleteSql);

    if ($deleteStmt) {
        //thay doi ten bien truyen vao trong ham duoi
        mysqli_stmt_bind_param($deleteStmt, "i", $sell_value_Id);
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
