<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nous contacter</title>
        <link type="text/css" rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
           
    <body>
      <?php include 'header.html';
      ?>
  
        <h1>Formulaire de contact</h1>
        <form method="POST" action="register.php">
            <p>Veuillez renseigner ces informations:</p>
            <div class="wrapper2">
                <div class="one2"><label for="Nom">Nom</label>
                    <p><input type="text" name="Nom" id="Nom" placeholder="Votre nom" autofocus></p></div>
                <div class="two2"><label for="Prénom">Prénom</label>
                    <p><input type="Prénom" name="Prénom" id="Prénom" placeholder="Votre prénom"></p></div>
                <div class="three2"> <label for="Email">Email</label>
                    <p><input type="email" name="Email" id="Email" placeholder="Votre Email"></p></div>
                <div class="four2"> <label for="description">Votre Message :</label><br>
                    <textarea name="message" id="message" class="message" rows="5" cols="40" placeholder="Votre message ici"></textarea></div><br>
                <div class="five2"><p>Nous vous répondront au plus vite</p></div>
            </div>
        </form>
        <?php include 'footer.html';
    ?>
    </body><br><br><br><br>
    <div class="footer-basic">
    
      </div>
    </html>
    