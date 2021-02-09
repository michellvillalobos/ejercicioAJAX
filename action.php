    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <div class="container" style="padding:50px 50px;">
         <div class="alert alert-info" role="alert"> <strong>Resultados:</strong> Mostramos los datos enviados del formulario. </div>
         <div class="row well alert alert-success">
    
          <?php
              sort($_POST);
              echo "<pre>";print_r($_POST);
          ?></div>
    </div>
    </body>
    </html>
    
    
    
    
