<h3>Tambah Data Nilai Ujian Siswa Kelas 11</h3>
    <title>Form Data Nilai Ujian Siswa Kelas 11</title>
            <form method="post" action="">
                <table>
                    <tr>
                        <td>nis</td>
                        <td><input type="number" id="nis" name="nis" required><br></td>
                        
                        <td>nama</td>
                        <td><input type="text" id="nama" name="nama" required><br></td>
                        
                        <td>nilai</td>
                        <td><input type="number" id="nilai" name="nilai" required><br></td>

                        <td></td>
                        <td><input type="submit" value="Simpan" name="proses"></td>
                    </tr>
                </table>
            </form>
<?php
    include "koneksi_data_nilai.php";

    if (isset($_POST['proses'])){
        mysqli_query($koneksi, "insert into nilai_ujian_kelas_11 set
        nis = '$_POST[nis]',
        nama = '$_POST[nama]',
        nilai = '$_POST[nilai]',
        
         ");
    }
        echo "Data nilai siswa baru telah tersimpan";
    

?>