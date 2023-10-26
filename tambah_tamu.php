<html>
    <form method="POST" action="save_guestbook.php">
        <table align="center">
            <tr>
                <h1 style="text-align: center; color: blue; font-weight: 600;">Buku Tamu</h1>
                <br>
                <h3 align="center">Tambah Daftar Tamu</h3>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><textarea type="pesan" name="pesan"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Kirim"><a href="lihat_tamu.php" style="text-decoration: none;">[ Lihat Daftar Tamu ]</a></td>
            </tr>
        </table>
    </form>
</html>