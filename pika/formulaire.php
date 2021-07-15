<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Formulaire</title>
    </head>
   
    <body>
      <?php include 'header.html';
      ?>
  
    <h1>Formulaire de satisfaction</h1><br>
    <h2>Concernant l'expérience utilisateur de notre site, diriez vous que vous êtes ? : </h2>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
      <label class="form-check-label" for="inlineRadio1">Ébloui</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
      <label class="form-check-label" for="inlineRadio1">Émerveillé</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
      <label class="form-check-label" for="inlineRadio1">Impressionné</label>
    </div>
    <h2>Quel jeux avez vous préféré ? :</h2>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
      <label class="form-check-label" for="inlineRadio1">Mario fps</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
      <label class="form-check-label" for="inlineRadio1">Flappy Trump</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6" >
      <label class="form-check-label" for="inlineRadio1">Sonic</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio7" value="option7">
      <label class="form-check-label" for="inlineRadio1">Tétris</label>
    </div><br><br>
   <label for="description">Avez vous quelque chose à nous dire ? </label><br>
   <textarea name="description" id="description" rows="5" cols="40" placeholder="Soyez honnête"></textarea><br>
   <button type="button" class="btn btn-warning">Envoyer</button><br><br>
  </body>
  <div class="footer-basic">
  <?php include 'footer.html';
    ?>
  </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>