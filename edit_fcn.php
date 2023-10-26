<?php 

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbnews";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_errno());
}

$sql = "UPDATE `buku_tamu` SET `nama` = '$nama', `email` = '$email', `pesan` = '$pesan'
WHERE `buku_tamu`.`id_tamu` = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: lihat_tamu.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>