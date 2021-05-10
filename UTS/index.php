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
    <div class="container-fluid" style='text-align:center;position:absolute;top:20%;width:50%;left:25%;border:1px solid blue;border-radius:15px;padding-bottom:20px'>
    <p><h1>Selamat Datang <br>di<br> Game Matematika</h1></p><br>
    <?php
    if(!isset($_COOKIE['nama'])){
    ?>
    <p style='color:red'>*Silahkan login terlebih dahulu</p>
    <form method='post' action='login.php'>
    <p><div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nama Lengkap" name='nama'>
        </div>
        <div class="col">
            <input type="email" class="form-control" placeholder="Email" name='email'>
        </div>
    </div></p>
    <p><div class="row">
      <div class="col">
        <button type="submit" class="btn btn-primary" name="submit">Login</button></p>
      </div>
      <div class="col">
        <a href='ranking.php' class='btn btn-outline-warning btn-sm'>Hall of Fame</a>
      </div>
    </div>
    </form>
    <?php
    } else {
    ?>
    <p><h3>Silahkan klik button<br> dan bermain!</h3></p>
    <p><a href='game.php' class='btn btn-primary'>Start Game</a></p>
    <p>Bukan anda? <a href='logout.php'>Klik disini</a></p>
    <div class="row">
  <div class="col">
  <a href='logout.php' class='btn btn-outline-danger btn-sm'>Log Out</a></div>
  <div class="col">
  <a href='ranking.php' class='btn btn-outline-warning btn-sm'>Hall of Fame</a>
  </div>
  </div>
    <?php
    }
    ?>
</div>
  </body>
</html>