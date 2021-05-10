<?php
include ('cek.php');
include ('config.php');
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
  <?php
  session_start();
  $hasil = $_SESSION['nomor1'] + $_SESSION['nomor2'];
  if($_SESSION['lives'] > 0 ){
    if(!isset($_POST['submit'])){
        echo "<p><h1>Hello ".$_COOKIE['nama']." tetap semangat yaa ... <br>you can do the best</h1></p>";
        echo "<p><h6>Lives : <".$_SESSION['lives']."> | Score : <".$_SESSION['score']."></h6></p>";
        echo "<br><p><b>Hasil dari ".$_SESSION['nomor1']." + ".$_SESSION['nomor2']." = </b></p>";
        echo "<form method='post'>";
        echo "<input type='text' class='form form-label' name='jawab'>";
        echo "<br><button type='submit' name='submit' class='btn btn-primary btn-sm'>Jawab</button>";
        echo "</form>";
    } else {
        
        $jawab = intval($_POST['jawab']);
        if ($jawab == $hasil){
            echo "<p><h1>Hello ".$_COOKIE['nama']." selamat jawaban anda benar</h1></p>";
            $_SESSION['score'] += 10;
            echo "<p><h6>Lives : <".$_SESSION['lives']."> | Score : <".$_SESSION['score']."></h6></p>";
            echo "<br><a class='btn btn-primary btn-sm' href='game.php'>Soal selanjutnya</a>";
        } else {
            echo "<p><h1>Hello ".$_COOKIE['nama']." sayang jawaban anda salah.. tetap semangat yaa!!</h1></p>";
            $_SESSION['score'] -= 2;
            $_SESSION['lives'] -= 1;
            echo "<p><h6>Lives : <".$_SESSION['lives']."> | Score : <".$_SESSION['score']."></h6></p>";
            echo "<br><a class='btn btn-primary btn-sm' href='game.php'>Soal selanjutnya</a>";
        }
        $_SESSION['nomor1'] = rand(1,20);
        $_SESSION['nomor2'] = rand(1,20);
    }
    
    
  } else {
    echo "<p><h1>Hello ".$_COOKIE['nama']." Sayang permainan sudah selesai. 
    Semoga lain kali bisa lebih baik </h1></p>";
    echo "<p><h6>Score Anda : <".$_SESSION['score']."></h6></p>";
    score ($host, $user, $pass, $db, $_COOKIE['nama'], $_SESSION['score']);
    $_SESSION['lives'] = 5;
    $_SESSION['score'] = 0;
    $_SESSION['nomor1'] = rand(1,20);
    $_SESSION['nomor2'] = rand(1,20);
    echo "<br><a class='btn btn-primary btn-sm' href='game.php'>Main lagi</a>";
    echo "<br>";    
  }
  ?>
  <div class="row">
  <div class="col">
  <a href='logout.php' class='btn btn-outline-danger btn-sm'>Log Out</a></div>
  <div class="col">
  <a href='ranking.php' class='btn btn-outline-warning btn-sm'>Hall of Fame</a>
  </div>
  </div>
  </div>
  </body>
</html>