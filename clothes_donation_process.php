<?php

session_start(); // Start a new session

require_once "config.php"; // Include the configuration file


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {

        // Retrieve donor ID from the session
        if (!isset($_SESSION['user_id'])) {
            throw new Exception("user not auth");
        }

        $donor_id = $_SESSION['user_id'];

        // Get the current system date
        $donation_date = date("Y-m-d"); // Assuming your database field is of DATE type

        $crud = new config();
        $cnx = $crud->getConnexion();

        // Check if the connection is successful
        if (!$cnx) {
            throw new Exception("Database connection failed.");
        }

        // Assuming this is a blood donation
        $donation_type = 'Clothes';

        // Use prepared statement to avoid SQL injection
        $sqlDonationQuery = "INSERT INTO donation (Donor_id, Donation_date, Donation_type) VALUES (:Donor_id, :Donation_date, :Donation_type)";
        $requeteDonation = $cnx->prepare($sqlDonationQuery);
        $requeteDonation->bindParam(':Donor_id', $donor_id, PDO::PARAM_INT);
        $requeteDonation->bindParam(':Donation_date', $donation_date, PDO::PARAM_STR);
        $requeteDonation->bindParam(':Donation_type', $donation_type, PDO::PARAM_STR);

        // Execute the query for the donation table
        $requeteDonation->execute();

        // Get the generated Don_id from the last insert
        $don_id = $cnx->lastInsertId();

        // Get additional form data for sang_donation table
        $taille = $_POST['taille'];
        $zip_code = $_POST['zip_code'];
        $descr = $_POST['descr'];


        
       

        // Get the current system date for Date_de_don

        // Use prepared statement to avoid SQL injection
        $sqlSangDonationQuery = "INSERT INTO don_cloth (Don_id,taille,zip_code,descr)
                                VALUES (:Don_id, :taille, :zip_code, :descr)";
        $requeteSangDonation = $cnx->prepare($sqlSangDonationQuery);
        $requeteSangDonation->bindParam(':Don_id', $don_id, PDO::PARAM_INT);
        $requeteSangDonation->bindParam(':taille', $taille, PDO::PARAM_STR);
        $requeteSangDonation->bindParam(':zip_code', $zip_code, PDO::PARAM_STR);
        $requeteSangDonation->bindParam(':descr', $descr, PDO::PARAM_STR);
       

        // Execute the query for the sang_donation table
        $requeteSangDonation->execute();

        header("Location: thank_you.php");
    } catch (Exception $e) {
        // Handle exceptions (e.g., log the error, display an error message)
        echo "Error: " . $e->getMessage();
    } finally {
        // Close the database connection
    }
}
?>
