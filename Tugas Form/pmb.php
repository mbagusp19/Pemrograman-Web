<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PENDAFTARAN CALON MAHASISWA BARU</h2>
    <form method="POST" action="konfirmasipmb.php">
        <table rules="rows">
            <tr>
                <td>Nama Calon Mahasiswa*</td>
                <td><input type="text" name="nama" placeholder="Masukkan nama lengkap"></td>
            </tr>
            <tr>
                <td>Tempat/ Tanggal Lahir*</td>
                <td><input type="date" name="tglLahir"></td>
            </tr>
            <tr>
                <td>NIK (Nomor Induk Kependudukan)*</td>
                <td><input type="text" name="nik" placeholder="Masukkan NIK KTP/KK"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin*</td>
                <td><input type="radio" name="jk1" value="Laki-laki">Laki-laki
                <input type="radio" name="jk1" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Agama*</td>
                <td><select name="agama" id="">
                    <option class="hidden"  value="" selected disabled>Pilih salah satu</option>
                    <option value="Islam">Islam</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                </select></td>
            </tr>
            <tr>
                <td>Status*</td>
                <td><select name="status" id="">
                    <option class="hidden"  value="" selected disabled>Pilih salah satu</option>
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Menikah">Menikah</option>
                    <option value="Janda">Janda</option>
                    <option value="Duda">Duda</option>
                </select></td>
            </tr>
            <tr>
                <td>Alamat*</td>
                <td><input type="text" name="alamat" placeholder="Masukkan alamat lengkap"></td>
            </tr>
            <tr>
                <td>Kode Pos*</td>
                <td><input type="text" name="kodepos" placeholder="Masukkan kode pos"></td>
            </tr>
            <tr>
                <td>No Handphone*</td>
                <td><input type="text" name="nomorhp" placeholder="Masukkan no hp"></td>
            </tr>
            <tr>
                <td>Email*</td>
                <td><input type="text" name="email" placeholder="Masukkan email"></td>
            </tr>
            <tr>
                <td>Pas Foto*</td>
                <td><input type="file" name="foto" accept="image/*"></td>
            </tr>
        </table>
        <h2>DATA SEKOLAH ASAL CALON MAHASISWA</h2>
        <table rules="rows">
            <tr>
                <td>Asal Sekolah*</td>
                <td><input type="text" name="asalsklh" placeholder="Masukkan asal sekolah"></td>
            </tr>
            <tr>
                <td>Tahun Lulus*</td>
                <td><input type="text" name="tahunlulus" placeholder="Masukkan tahun lulus"></td>
            </tr>
        </table>
        <h2>DATA ORANG TUA MAHASISWA BARU</h2>
        <table rules="rows">
            <tr>
                <td>Nama Ayah*</td>
                <td><input type="text" name="ayah" placeholder="Masukkan nama lengkap"></td>
            </tr>
            <tr>
                <td>Nama Ibu*</td>
                <td><input type="text" name="ibu" placeholder="Masukkan nama lengkap"></td>
            </tr>
            <tr>
                <td>Alamat*</td>
                <td><input type="text" name="alamat2" placeholder="Masukkan nama lengkap"></td>
            </tr>
            <tr>
                <td>Kode Pos*</td>
                <td><input type="text" name="kodepos2" placeholder="Masukkan nama lengkap"></td>
            </tr>
            <tr>
                <td>No Handphone*</td>
                <td><input type="text" name="nomorhp2" placeholder="Masukkan nama lengkap"></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Ayah*</td>
                <td><select name="pendayah" id="">
                    <option class="hidden"  value="" selected disabled>Pilih salah satu</option>
                    <option value="Tidak Tamat SD">Tidak Tamat SD</option>
                    <option value="Tamat SD">Tamat SD</option>
                    <option value="Tamat SMP">Tamat SMP</option>
                    <option value="Tamat SMA">Tamat SMA</option>
                    <option value="Diploma (D1 - D2)">Diploma (D1 - D2)</option>
                    <option value="Sarjana (D3)">Sarjana (D3)</option>
                    <option value="Sarjana (D4 - S1)">Sarjana (D4 - S1)</option>
                    <option value="Pascasarjana (S2)">Pascasarjana (S2)</option>
                    <option value="Doktor (S3)">Doktor (S3)</option>
                </select></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Ibu*</td>
                <td><select name="pendibu" id="">
                    <option class="hidden"  value="" selected disabled>Pilih salah satu</option>
                    <option value="Tidak Tamat SD">Tidak Tamat SD</option>
                    <option value="Tamat SD">Tamat SD</option>
                    <option value="Tamat SMP">Tamat SMP</option>
                    <option value="Tamat SMA">Tamat SMA</option>
                    <option value="Diploma (D1 - D2)">Diploma (D1 - D2)</option>
                    <option value="Sarjana (D3)">Sarjana (D3)</option>
                    <option value="Sarjana (D4 - S1)">Sarjana (D4 - S1)</option>
                    <option value="Pascasarjana (S2)">Pascasarjana (S2)</option>
                    <option value="Doktor (S3)">Doktor (S3)</option>
                </select></td>
            </tr>
            <tr>
                <td>Status Ayah*</td>
                <td><select name="statusayah" id="">
                    <option class="hidden"  value="" selected disabled>Pilih salah satu</option>
                    <option value="Masih Hidup">Masih Hidup</option>
                    <option value="Meninggal">Meninggal</option>
                </select></td>
            </tr>
            <tr>
                <td>Status Ibu*</td>
                <td><select name="statusibu" id="">
                    <option class="hidden"  value="" selected disabled>Pilih salah satu</option>
                    <option value="Masih Hidup">Masih Hidup</option>
                    <option value="Meninggal">Meninggal</option>
                </select></td>
            </tr>
            <tr>
                <td>Pekerjaan Ayah*</td>
                <td><input type="text" name="pekerjaayah" placeholder="Masukkan nama lengkap"></td>
            </tr>
            <tr>
                <td>Pekerjaan Ibu*</td>
                <td><input type="text" name="pekerjaibu" placeholder="Masukkan nama lengkap"></td>
            </tr>
        </table>
        <h2>PEMINATAN PROGRAM STUDI</h2>
        <table rules="rows">
            <tr>
                <td>Pilihan Program Studi 1</td>
                <td><select name="prodi1" id="">
                    <option class="hidden"  value="" selected disabled>Pilih salah satu</option>
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Psikologi">Psikologi</option>
                    <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                    <option value="Desain Produk Industri">Desain Produk Industri</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Arsitektur">Arsitektur</option>
                </select></td>
            </tr>
            <tr>
                <td>Pilihan Program Studi 2</td>
                <td><select name="prodi2" id="">
                    <option class="hidden"  value="" selected disabled>Pilih salah satu</option>
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Psikologi">Psikologi</option>
                    <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                    <option value="Desain Produk Industri">Desain Produk Industri</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Arsitektur">Arsitektur</option>
                </select></td>
            </tr>
            <tr>
                <td>Sumber Informasi</td>
                <td><input type="radio" name="jk2" value="Internet">Internet
                <input type="radio" name="jk2" value="Majalah">Majalah
                <input type="radio" name="jk2" value="Brosur">Brosur
                <input type="radio" name="jk2" value="Radio">Radio
                <input type="radio" name="jk2" value="Spanduk">Spanduk
                <input type="radio" name="jk2" value="Orang Tua">Orang Tua
                <input type="radio" name="jk2" value="Teman">Teman
                <input type="radio" name="jk2" value="Pameran">Pameran
                <input type="radio" name="jk2" value="Pihak Sekolah">Pihak Sekolah
                <input type="radio" name="jk2" value="Lainnya....">Lainnya....</td>
            </tr>
        </table>
        <h2>UJIAN MASUK</h2>
        <table rules="rows">
            <tr>
                <td>Pilihan Gelombang</td>
                <td><input type="radio" name="jk3" value="Gelombang 1">Gelombang 1
                <input type="radio" name="jk3" value="Gelombang 2">Gelombang 2
                <input type="radio" name="jk3" value="Gelombang 3">Gelombang 3
                <input type="radio" name="jk3" value="Gelombang 4">Gelombang 4</td>
            </tr>
            <tr>
                <td><button type="submit" name="submit" value="submit">Submit</td>
            </tr>
        </table>
    </form>
    
</body>
</html>