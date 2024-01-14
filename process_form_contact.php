<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $crud = new config();
        $cnx = $crud->getConnexion();

        // Retrieve form data
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $message = $_POST['message'];
        $date_de_contact = date("Y-m-d");

        // Insert data into "contact" table with NOW() for date_contact
        $sqlQuery = "INSERT INTO contact (First_name, Last_name, email, mobile, message, date_contact) VALUES (:firstName, :lastName, :email, :mobile, :message, :date_de_contact)";
        $requete = $cnx->prepare($sqlQuery);
        $requete->bindParam(':firstName', $firstName, PDO::PARAM_STR);
        $requete->bindParam(':lastName', $lastName, PDO::PARAM_STR);
        $requete->bindParam(':email', $email, PDO::PARAM_STR);
        $requete->bindParam(':mobile', $mobile, PDO::PARAM_INT);
        $requete->bindParam(':message', $message, PDO::PARAM_STR);
        $requete->bindParam(':date_de_contact', $date_de_contact, PDO::PARAM_STR);

        $requete->execute();

        header("Location: thank_you.php");
        exit();
    } catch (Exception $e) {
        // Handle exceptions (e.g., log the error, display an error message)
        echo "Error: " . $e->getMessage();
    } finally {
        // Close the database connection
        if ($cnx) {
            $cnx = null;
        }
    }
}
?>

<?php
/*
if (!empty($_POST)) {
    $firstName = $_POST['firstName']; //yjib le contenu de l'input du formulaire ma3neha ch7atyt fel formulaire
    $lastName = $_POST['lastName']; //yjib le contenu de l'input du formulaire ma3neha ch7atyt fel formulaire
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    // Connexion à la base de données
    try {
        $db = new PDO('mysql:host=localhost;dbname=donnation;charset=utf8', 'root', '');//relation bel base donnation
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());//tjiblik msg d'erreur
    }

    // Requête préparée pour éviter les injections SQL
    $sqlQuery = "INSERT INTO msgcontact (firstName, lastName, email, mobile, message) VALUES (?, ?, ?, ?, ?)";
    $requete = $db->prepare($sqlQuery);
    $requete->execute([$firstName, $lastName, $email, $mobile, $message]);
}*/
?>
