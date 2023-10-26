<html>
    <?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbnews";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_errno());
    }

    $query = mysqli_query($conn, "SELECT * FROM `buku_tamu` ORDER BY `id_tamu`");

    ?>
    <body>
        <h1 align="center" style="color: blue;">Daftar Tamu</h1>
        <table align="center" style="border-collapse: collapse;">
            <tr bgcolor="#33ccff" style="text-align: center;">
                <td style="border: 1px solid;">No</td>
                <td style="border: 1px solid;">Nama</td>
                <td style="border: 1px solid;">Email</td>
                <td style="border: 1px solid;">Pesan</td>
                <td style="border: 1px solid;">Action</td>
            </tr>
            <?php 
            $nomor = 1;
            while ($data = mysqli_fetch_array($query)) {

            ?>
            <tr>
                <td style="border: 1px solid;"><?php echo $nomor++; ?></td>
                <td style="border: 1px solid;"><?php echo $data['nama']; ?></td>
                <td style="border: 1px solid;"><?php echo $data['email']; ?></td>
                <td style="border: 1px solid;"><?php echo $data['pesan']; ?></td>
                <td style="border: 1px solid;">
                    <a style="color: black; text-decoration: none;" href="edit.php?id=<?php echo $data['id_tamu']; ?>">
                        <button>
                            <strong>Edit</strong>
                        </button>
                    </a>
                    <a style="color: black; text-decoration: none;" href="hapus.php?id=<?php echo $data['id_tamu']; ?>"
                    onclick="return confirm ('Apakah Anda benar ingin menghapus <?php echo $data['nama']; ?> dari Daftar Tamu?')">
                        <button>
                            <strong>Hapus</strong>
                        </button>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>