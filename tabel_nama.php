<!DOCTYPE html>
<html>
<head>
    <title>Nilai Ujian Kelas 11</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid black;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
        <h2>Data Mahasiswa</h2>
    <table>
        <tr>
            <th>nis</th>
            <th>nama</th>
            <th>nilai</th>
            
        </tr>
            
        <!-- Kode PHP untuk Menampilkan ke halaman web -->
        <?php
            include "koneksi_data_nilai.php";
            $no=1;
            $ambildata = mysqli_query($koneksi, "select * from tabel_nama");
            while ($tampil = mysqli_fetch_array($ambildata)){
                echo "
                <tr>
                <td>$no</td>
                <td>$tampil[nis]</td>
                <td>$tampil[nama]</td>
                <td>$tampil[nilai]</td>
                </tr>";
                
                $no++;
            }
        ?>

    </table>




</body>
</html>

    