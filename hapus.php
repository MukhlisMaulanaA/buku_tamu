<?php 

$id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbnews";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_errno());
}

$sql = "DELETE FROM `buku_tamu` WHERE `buku_tamu`.`id_tamu` = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: lihat_tamu.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>