<?php

// hapus semua cookie
setcookie("nama", "", time()-3*30*24*3600,"/");
// redirect ke halaman login
header("Location: form.html");

?>