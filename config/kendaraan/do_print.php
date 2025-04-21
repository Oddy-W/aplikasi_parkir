<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Parkir Drini-Park</title>
</head>
<body>

    <div class="container">
        <div id="logo-drini">
            <img src="../../assets/img/logodrini.png" alt="logo drini" style="height: 100px;position: absolute;" position:="" "absolute"="">
        </div>
        <div class="row drini-park">
            <?php
            include "../config.php";
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $data = mysqli_query($koneksi,"SELECT * FROM kendaraan JOIN jenisKendaraan ON kendaraan.id_jenisKendaraan = jenisKendaraan.id_jenisKendaraan WHERE nomor_polisi LIKE '%".$cari."%' OR nama_kendaraan LIKE '%".$cari."%' OR qr_code LIKE '%".$cari."%' OR keterangan LIKE '%".$cari."%'");
            } else {
                $data = mysqli_query($koneksi,"SELECT * FROM kendaraan JOIN jenisKendaraan ON kendaraan.id_jenisKendaraan = jenisKendaraan.id_jenisKendaraan");
            }
            ?>
            <table id="drini" border="1">
                <div id="container-drini-footer">
                    <h3>Daftar Kendaraan Parkir  | Repost by @Drini Park</h3><hr>
                </div>
                <tr>
                    <th>QR CODE</th>
                    <th>JENIS KENDARAAN</th>
                    <th>HARGA PARKIR</th>
                    <th>KETERANGAAN</th>
                </tr>
                <?php while ($kendaraan = mysqli_fetch_array($data)): ?>
                    <!--<div class="card-footer">
                        <div class="card-text"><b>Nomor Polisi : </b><//?= $kendaraan['nomor_polisi']; ?></div>
                    </div>-->
                    <?php
                        echo "<tr>";
                        echo "<td>".$kendaraan['qr_code']."</td>";
                        echo "<td>".$kendaraan['nama_kendaraan']."</td>";
                        echo "<td>".$kendaraan['harga']."</td>";
                        echo "<td>".$kendaraan['keterangan']."</td>";
                        echo "</tr>";
                    ?>
                   
                <?php endwhile; ?>
            
            </table>   
        </div>
    </div>
    <script>
		window.print();
	</script>
    <?php require_once('../../template/js.php'); ?>
    <script src="DataTables/datatables.min.js"></script>
</body>
</html>