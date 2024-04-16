<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>
  <title>PHP Strong Password Generator</title>
</head>
<body>

  <div class="container my-5">
    <h1>PHP Strong Password Generator</h1>
    <h4>Genera una pasword sicura</h4>
  </div>

  <div class="container my-5">
    <div class="row">
      <div class="col-6">
        <form action="index.php" method="POST">
          <label class="text-danger mb-3">inserisci un numero per la lunghezza della password</label>
          <input class="form-control" type="number" name="numero" id="psw">
          <input class="form-control" type="number" name="numero" id="psw">
          <button class="btn btn-primary " type="submit"  >invia</button>

        </form>
      </div>
    </div>
  </div>
  
</body>
</html>