<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.container{
    min-height: 100vh;
    background: #08071d;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url("iStock-1309644808-scaled.jpg") no-repeat center center/cover;
    background-size: 50cm;
}

.container form{
    width: 400px;
    height: 550px;
    display: flex;
    justify-content: center;
    box-shadow: 20px 20px 50px rgba(0,0,0,0.5);
    border-radius: 15px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    flex-wrap: wrap;
}

.container form h1{
    color: #fff;
    font-weight: 500;
    margin-top: 20px;
    width: 500px;
    text-align: center;
}

.container form input{
    width: 290px;
    color:#fff;
    height: 40px;
    padding-left: 10px;
    outline: none;
    border: none;
    font-size: 15px;
    margin-bottom: 10px;
    background: none;
    border-bottom: 2px solid #fff;
}

.container form input::placeholder{
    color: #ddd;
}



.container form h4{
    color: #fff;
    font-weight: 300;
    width: 400px;
    margin-top: 20px;
    text-align: center;
}

.container form textarea{
    background: none;
    border: none;
    border-bottom: 2px solid #fff;
    color: #ffffff;
    font-weight: 200;
    font-size: 15px;
    padding: 10px;
    outline: none;
    min-width: 300px;
    max-width: 300px;
    min-height: 80px;
    max-height: 80px;
}

textarea::-webkit-scrollbar{
    width: 1em;
}

textarea::-webkit-scrollbar-thumb{
    background-color: rgba(194,194,194,0.713);
}

.container form #button{
    border: none;
    
    background: #fff;
    border-radius: 5px;
    margin-top: 20px;
    font-weight: 15px;
    font-size: 15px;
    color: #464343;
    width: 100px;
    padding: 0;
    margin-right: 30px;
    margin-bottom: 30px;
    transition: 0.3s;
    
}

.container form #button:hover{
    opacity: 0.7;
}

.login{
    color: #fff;
    text-decoration: none;
    font-size: 15px;
    margin-top: 25px;
    margin-left: 30px;
    transition: 0.3s;

}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <form action="signin.php" method="POST">
            <h1>Sign Up</h1>
            <input type="text" id="firstName" name="Nom" placeholder=" Name" required>
            <input type="text" id="lastName" name="Prenom" placeholder="Prenom" required>
            <input type="email" id="email" name="Email" placeholder="Email" required>
            <input type="text" id="mobile" name="Password" placeholder="Password" required>
            <input type="text" id="mobile" name="CIN" placeholder="CIN" required>
            <input type="Date" id="mobile" name="Date_de_naissance" placeholder="Date de naissance" required>
            <input type="text" id="mobile" name="Lieu_de_residence" placeholder="Lieu de residence" required>
            <input  type="submit" value="Sign Up" id="button">
            <a class="login" href="login.php">
           <p>Login ?</p></a>

        </form>
    </div>
</body>
</html>

<?php
if (!empty($_POST))
{
    $varnom=$_POST['Nom'];
    $varprenom=$_POST['Prenom'];
    $varemail=$_POST['Email'];
    $varpassword=$_POST['Password'];
    $varcin=$_POST['CIN'];
    $vardatenais=$_POST['Date_de_naissance'];
    $varlieures=$_POST['Lieu_de_residence'];

    //connexion à la base de données
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=association_dons;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    // execution de la requete d insertion
    $sqlQuery = "INSERT INTO donateur (Nom, Prenom, Email, Password, CIN, Date_de_naissance, Lieu_de_residence)
    VALUES ('$varnom', '$varprenom', '$varemail', '$varpassword', '$varcin', '$vardatenais' , '$varlieures')";
    $requete = $db->prepare($sqlQuery);
    $requete->execute();
    header("Location: login.php");
}
?>