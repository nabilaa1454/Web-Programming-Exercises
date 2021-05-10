<?php
include('config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <title>UTS Pemrograman Web</title>
  </head>
  <body style='color:blue'>
        <div class="container-fluid" style='text-align:center;position:absolute;top:20%;width:50%;left:25%;border:1px solid blue;border-radius:15px; padding-bottom:20px'>
            <p><h1>Hall Of Fame</h1></p>
            <p><?php
            ranking ($host, $user, $pass, $db);
            ?></p>
            <p><div class="row">
            <div class="col">
            <a href='index.php' class='btn btn-outline-primary btn-sm'>Home</a></div></div>

        </div>
  </body>
</html>