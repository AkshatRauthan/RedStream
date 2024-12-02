<?php
$con=mysqli_connect(hostname: "localhost", username:"root", password:"akshat", database:"redstream_db");
if(mysqli_connect_error()){
    echo"<script>Cannot connect to database</script>";
    exit();
}
?>