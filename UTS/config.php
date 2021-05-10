<?php
$host = 'sql106.epizy.com';
$user = 'epiz_28585159';
$pass = 'U1tsgHhiH694v6i';
$db = 'epiz_28585159_mathgame';



function score ($host, $user, $pass, $db, $nama, $skor){
    $mysqli = mysqli_connect($host, $user, $pass, $db);
    $query = "INSERT INTO leaderboard (nama, skor) VALUES ('$nama', '$skor')";
    $result = (mysqli_query($mysqli, $query));
    mysqli_close($mysqli);
}

function ranking ($host, $user, $pass, $db){
    $mysqli = mysqli_connect($host, $user, $pass, $db);
    $query = "SELECT * FROM leaderboard ORDER BY skor DESC LIMIT 10";
    $index = 1;
    $result = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($result) > 0) {

        echo "
        
        <table border='1' class='table table-info table-bordered border-dark caption-top'>
        <tr class='table-dark'>
        <th>No.</th>
        <th>Nama Player</th>
        <th>Score</th>
        </tr>";

        while($row = mysqli_fetch_assoc($result)){
            echo"<tr>";
            echo"<td>$index</td>";
            echo"<td>{$row['nama']}</td>";
            echo"<td>{$row['skor']}</td>";
            $index++;
        }
       
        echo"</table>";
        
    }
    mysqli_close($mysqli);
}

?>