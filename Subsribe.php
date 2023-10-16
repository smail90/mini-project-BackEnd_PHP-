<?php
try {
    // Establishing a connection to MySQL
    $pdo = new PDO("mysql:host=localhost;dbname=subscribe", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully. ";
    // echo "Connection status: " . $pdo->getAttribute(PDO::ATTR_CONNECTION_STATUS);

    // SQL query to create the table 'subscribe' if it doesn't exist
    $sql = "CREATE TABLE IF NOT EXISTS subscribe (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        email VARCHAR(255) NOT NULL
    )";

    // Executing the query
    $pdo->exec($sql);

    // Process the form submission
    $message = ""; // Initialize an empty message

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $emailToInsert = $_POST["email"]; // Get the email from the form

        // Insert the email into the 'subscribe' table
        $insertQuery = "INSERT INTO subscribe (email) VALUES (:email)";
        $stmt = $pdo->prepare($insertQuery);
        $stmt->bindParam(':email', $emailToInsert);

        if ($stmt->execute()) {
            $message = "Your subscription has been completed, we have been successful.";
           
        } else {
            $message = "Failed to subscribe. Please try again.";
        }
    }

    // Only display the message if it's not empty
    if (!empty($message)) {
        echo '<div style="background-color: black; font-weight: bold; color: white; padding: 10px; margin: 250px auto; border-radius: 5px; text-align: center;">';
        echo $message;
        echo '</div>';
    }


} catch (PDOException $a) {
    die("Error: couldn't connect to the database " . $a->getMessage());
}
?>









