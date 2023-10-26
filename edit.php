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

$query = mysqli_query($conn, "SELECT * FROM `buku_tamu` WHERE `id_tamu` ='$id' ");
$data = mysqli_fetch_array($query);

?>
<html>

<body>
  <h1 style="text-align: center; color: blue; font-weight: 600;">Buku Tamu</h1>
  <form method="POST" action="edit_fcn.php">
    <input type="hidden" name="id" value="<?php echo $data['id_tamu']; ?>">
    <table align="center">
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="email" value="<?php echo $data['email']; ?>"></td>
      </tr>
      <tr>
        <td>Pesan</td>
        <td><textarea type="pesan" name="pesan" value="<?php echo $data['pesan']; ?>"></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" value="Ubah">
          <a href="lihat_tamu.php">
            <button>Batal</button>
          </a>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>