
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="money.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        /* Define a CSS rule for styling the button */
        .custom-button , .p {
            color:aliceblue; /* Set the text color to red */
             /* Set the background color (optional) */
            padding: 20px 20px; /* Set padding for better appearance (optional) */
            /* Add a border (optional) */
            cursor: pointer; /* Change the cursor on hover (optional) */
            
        }
    </style>
   
</head>
<body >
    <div class="container">
    <header>
        <h1>Money donation</h1>
        <p style="font-size: 20px; font-family:bold;">IBAN: TN59 1000 6035 1835 9847 8831</p>
    </header>
        <div class="content">
            <div class="content-form">
                <section>
                    <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                    <h2 class="h2">address</h2>
                    <p class="p">
                        Rades ,Ben Arous
                    </p>
                </section>

                <section>
                    <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                    <h2 class="h2">Phone</h2>
                    <p class="p">+216 92 824 137</p>
                </section>

                <section>
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                    <h2 class="h2">E-mail</h2>
                    <p class="p" >tunisianDonation@gmail.com</p>
                </section>
            </div>
        </div>

      <form action="process_money_donation.php" method="post">
        <div class="form">
            <div class="right">
             
  
              <div class="contact-form">
              <label for="donation_amount">Donation Amount :</label>
            <input style="color: white"  name="montant" id="donation_amount" placeholder="TND" required>
              </div>
             
           
    <div class="contact-form">
   
            <div>
            <label for="payment_method">Payment Method :</label>
            <select  name="methode_payment" id="payment_method" required>
            <option value="" disabled selected>select</option>
                <option value="paypal">PayPal</option>
                <option value="Versement Bancaire">Versement Bancaire</option>
                <option value="D17">D17</option>
            </select>
            <div class="contact-form">
            <label for="tran_id">Transmission ID </label>
            <input style="color: white" type="number" name="tran_id" id="tran_id" required>
            </div>
            
           
              </div>
   <br>
              <div class="submit">
                  <input type="submit" name="submit" class="custom-button">
              </div>
              </div> <a href="pagedonation.html" class="button"> Back ⭯ </a> </br></form> 
            </div>  
          </div> 
   
        <div class="media">
            <li><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></li>
        </div>  
        <div class="empty">

        

   </div>    </div>   
    <footer class="footer">
        <p>&copy; 2023 Page of Donations. All rights reserved.</p>
    </footer> 