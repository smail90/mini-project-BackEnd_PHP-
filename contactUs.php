<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=subscribe", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the table if it doesn't exist
    $createTableSQL = "CREATE TABLE IF NOT EXISTS contactus (
      id INT AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(255) NOT NULL,
      email VARCHAR(255) NOT NULL,
      message TEXT NOT NULL
    )";
    $pdo->exec($createTableSQL);

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Insert data into the database
        $insertSQL = "INSERT INTO contactus (name, email, message) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($insertSQL);

        if ($stmt->execute([$name, $email, $message])) {
            echo '<p style="background-color: black; font-weight: bold; color: white; padding: 10px; margin: 250px auto; border-radius: 5px; text-align: center;"> Form Submitted Successfully.</p>';
        } else {
            echo "Error: " . implode(" - ", $stmt->errorInfo());
        }
    }

    //echo "Connected successfully.";

} catch (PDOException $e) {
    die("Error: couldn't connect to the database " . $e->getMessage());
}
?>

