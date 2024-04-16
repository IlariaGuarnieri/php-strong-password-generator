<?php
include_once __DIR__ . '/data/function.php'
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
        <h1>PHP Password Generator</h1>
        <h4>Genera una pasword sicura</h4>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-6">
                <form class="mb-5" action="index.php" method="GET">
                    <label class="mb-3" for="psw">scegli la lunghezza della password in caratteri</label>
                    <input class="form-control mt-3" type="number" id="psw" name="psw"  placeholder="scegli il numero">
                    <button class="btn btn-primary mt-3" type="submit">Invia</button>
                </form>
                <h2>Output PSW</h2>
                <h2>Password Generata: <?php echo generatorePsw() ?> </h2>
            </div>
        </div>
    </div>
    
  </body>
  </html>
