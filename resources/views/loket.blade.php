<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang Di Loket</title>
</head>
<link rel="stylesheet" type="text/css" href={{asset("css/style.css")}}>
<script type="text/javascript" src={{asset("js/script.js")}}></script>
<body background="gambar/background.jpg">
<div class="header">
    <table width="100%" border="0">
        <td width="10%" height="130px" align="center">
            <img src="gambar/logo.png" width="65px" height="90px">
        </td>
        <td width="71%" height="130px" align="left"><font face="Calibri" size="6px" color="#fff"><b>SIMAS<br>SISTEM INFORMASI PUSKESMAS</b></font></td>
        <td width="7%" height="130px" align="center">
            <table width="100%">
                <a href=""><img src="gambar/user.png" width="70px" height="80px"></a><br>
                <tr align="center"><font face="Calibri" color="#fff">Profil</font></tr>
            </table>
        </td>
        <td width="7%" height="130px" align="center">
            <table width="100%">
                <a href="login"><img src="gambar/exit.png" width="70px" height="80px"></a><br>
                <tr align="center"><font face="Calibri" color="#fff">Keluar</font></tr>
            </table>
        </td>
        <td width="5%" height="130px" align="center"></td>
    </table>
</div>
<div class="main-menu-loket">
    <button class="current-menu" id="pasien" onclick="ganti_menu('pasien')" onmouseover="gantiWarna('pasien','#707c6f')" onmouseout="gantiWarna('pasien','#5a5e5a')">PELAYANAN PASIEN</button>
    <button class="menu-loket" id="dokter" onclick="ganti_menu('dokter')" onmouseover="gantiWarna('dokter','#707c6f')" onmouseout="gantiWarna('dokter','#5a5e5a')">DAFTAR DOKTER</button>
    <button class="menu-loket" id="perawat" onclick="ganti_menu('perawat')" onmouseover="gantiWarna('perawat','#707c6f')" onmouseout="gantiWarna('perawat','#5a5e5a')">DAFTAR PERAWAT</button>
</div>
<div class="pasien-panel" id="panel_pasien">
    <div class="sub-menu-pasien" id="add-pasien">
        <table border="0" width="100%">
            <td width="30%" align="center">
                <div class="add-pasien" id="kotak-pasien" align="center">
                    <img src="gambar/addPasien.png" width="120px" height="110px" onmouseover="gantiWarna('kotak-pasien','#707c6f')" onmouseout="gantiWarna('kotak-pasien','#5a5e5a')">
                </div>
            </td>
            <td width="70%" align="left" style="padding-left:10px">
                <div class="keterangan-pasien">
                    <p> Sub Menu ini digunakan untuk mendaftarkan pasien baru (belum mempunyai Kartu Berobat) di Puskesmas, baik pasien dari kategori umum maupun dari kategori BPJS. Sub menu ini akan otomatis memunculkan menu untuk cetak kartu berobat setelah data pasien selesai di masukkan.
                    </p>
                </div>
            </td>
        </table>
    </div>
    <div class="sub-menu-pasien" id="view-member">
        <table border="0" width="100%">
            <td width="30%" align="center">
                <div class="add-pasien" id="kotak-member">
                    <img src="gambar/member.png" width="150px" height="130px" onmouseover="gantiWarna('kotak-member','#707c6f')" onmouseout="gantiWarna('kotak-member','#5a5e5a')">
                </div>
            </td>
            <td width="70%" align="left" style="padding-left:10px">
                <div class="keterangan-pasien">
                    <p> Sub Menu ini digunakan untuk melihat daftar pasien yang pernah berkunjung, baik pasien dari kategori umum maupun dari kategori BPJS. Sub menu ini juga berisi menu untuk melihat detail identitas pasien, dan cetak kartu berobat baru jika kartu berobat lama hilang.
                    </p>
                </div>
            </td>
        </table>
    </div>
</div>
<div class="pasien-dokter" id="panel_dokter">
    <div class="sub-menu-dokter-tabel">
        <table width="100%" border="0">
            <td width="10%" align="center" bgcolor="#03c18b">NO</td>
            <td width="20%" align="center" bgcolor="#03c18b">ID DOKTER</td>
            <td width="35%" align="center" bgcolor="#03c18b">NAMA</td>
            <td width="20%" align="center" bgcolor="#03c18b">POLI</td>
            <td width="15%" align="center" bgcolor="#03c18b">STATUS</td>
            <tr>
                <td width="10%" align="center" bgcolor="#707c6f">1.</td>
                <td width="20%" align="center" bgcolor="#707c6f">-</td>
                <td width="35%" align="center" bgcolor="#707c6f">-</td>
                <td width="20%" align="center" bgcolor="#707c6f">-</td>
                <td width="15%" align="center" bgcolor="#707c6f">-</td>
            </tr>
            <tr>
                <td width="10%" align="center" bgcolor="#2795ba">2.</td>
                <td width="20%" align="center" bgcolor="#2795ba">-</td>
                <td width="35%" align="center" bgcolor="#2795ba">-</td>
                <td width="20%" align="center" bgcolor="#2795ba">-</td>
                <td width="15%" align="center" bgcolor="#2795ba">-</td>
            </tr>
            <tr>
                <td width="10%" align="center" bgcolor="#707c6f">3.</td>
                <td width="20%" align="center" bgcolor="#707c6f">-</td>
                <td width="35%" align="center" bgcolor="#707c6f">-</td>
                <td width="20%" align="center" bgcolor="#707c6f">-</td>
                <td width="15%" align="center" bgcolor="#707c6f">-</td>
            </tr>
            <tr>
                <td width="10%" align="center" bgcolor="#2795ba">4.</td>
                <td width="20%" align="center" bgcolor="#2795ba">-</td>
                <td width="35%" align="center" bgcolor="#2795ba">-</td>
                <td width="20%" align="center" bgcolor="#2795ba">-</td>
                <td width="15%" align="center" bgcolor="#2795ba">-</td>
            </tr>
            <tr>
                <td width="10%" align="center" bgcolor="#707c6f">5.</td>
                <td width="20%" align="center" bgcolor="#707c6f">-</td>
                <td width="35%" align="center" bgcolor="#707c6f">-</td>
                <td width="20%" align="center" bgcolor="#707c6f">-</td>
                <td width="15%" align="center" bgcolor="#707c6f">-</td>
            </tr>
        </table>
    </div>
    <div class="sub-menu-dokter-tombol">
        <input type="text" class="search-text" placeholder="Cari Nama Dokter">
        <img src="gambar/search.png" width="20px" height="20px" style="padding-left:6px;cursor:pointer;" align="center">
        <button id="show-all" onmouseover="gantiWarna('show-all','#707c6f')" onmouseout="gantiWarna('show-all','#5a5e5a')">SHOW ALL</button>
        <div style="padding-top:40px;padding-left:5px">
            <label>PILIH POLI</label>
            <select>
                <option id="poli-all">Semua Poli</option>
                <option id="poli-Umum">Poli Umum</option>
                <option id="poli-gigi">Poli Gigi</option>
            </select>
        </div>
        <button id="detail-dokter" value="in-active">DETAIL DOKTER</button>
    </div>
</div>
<div class="pasien-perawat" id="panel_perawat">
    <div class="sub-menu-dokter-tabel">
        <table width="100%" border="0">
            <td width="10%" align="center" bgcolor="#03c18b">NO</td>
            <td width="20%" align="center" bgcolor="#03c18b">ID PERAWAT</td>
            <td width="35%" align="center" bgcolor="#03c18b">NAMA</td>
            <td width="20%" align="center" bgcolor="#03c18b">POLI</td>
            <td width="15%" align="center" bgcolor="#03c18b">STATUS</td>
            <tr>
                <td width="10%" align="center" bgcolor="#707c6f">1.</td>
                <td width="20%" align="center" bgcolor="#707c6f">-</td>
                <td width="35%" align="center" bgcolor="#707c6f">-</td>
                <td width="20%" align="center" bgcolor="#707c6f">-</td>
                <td width="15%" align="center" bgcolor="#707c6f">-</td>
            </tr>
            <tr>
                <td width="10%" align="center" bgcolor="#2795ba">2.</td>
                <td width="20%" align="center" bgcolor="#2795ba">-</td>
                <td width="35%" align="center" bgcolor="#2795ba">-</td>
                <td width="20%" align="center" bgcolor="#2795ba">-</td>
                <td width="15%" align="center" bgcolor="#2795ba">-</td>
            </tr>
            <tr>
                <td width="10%" align="center" bgcolor="#707c6f">3.</td>
                <td width="20%" align="center" bgcolor="#707c6f">-</td>
                <td width="35%" align="center" bgcolor="#707c6f">-</td>
                <td width="20%" align="center" bgcolor="#707c6f">-</td>
                <td width="15%" align="center" bgcolor="#707c6f">-</td>
            </tr>
            <tr>
                <td width="10%" align="center" bgcolor="#2795ba">4.</td>
                <td width="20%" align="center" bgcolor="#2795ba">-</td>
                <td width="35%" align="center" bgcolor="#2795ba">-</td>
                <td width="20%" align="center" bgcolor="#2795ba">-</td>
                <td width="15%" align="center" bgcolor="#2795ba">-</td>
            </tr>
            <tr>
                <td width="10%" align="center" bgcolor="#707c6f">5.</td>
                <td width="20%" align="center" bgcolor="#707c6f">-</td>
                <td width="35%" align="center" bgcolor="#707c6f">-</td>
                <td width="20%" align="center" bgcolor="#707c6f">-</td>
                <td width="15%" align="center" bgcolor="#707c6f">-</td>
            </tr>
        </table>
    </div>
    <div class="sub-menu-dokter-tombol">
        <input type="text" class="search-text" placeholder="Cari Nama Perawat">
        <img src="gambar/search.png" width="20px" height="20px" style="padding-left:6px;cursor:pointer;" align="center">
        <button id="show-all-perawat" onmouseover="gantiWarna('show-all','#707c6f')" onmouseout="gantiWarna('show-all-perawat','#5a5e5a')">SHOW ALL</button>
        <div style="padding-top:40px;padding-left:5px">
            <label>PILIH POLI</label>
            <select>
                <option id="poli-all-perawat">Semua Poli</option>
                <option id="poli-Umum-perawat">Poli Umum</option>
                <option id="poli-gigi-perawat">Poli Gigi</option>
            </select>
        </div>
        <button id="detail-perawat" value="in-active">DETAIL PERAWAT</button>
    </div>
</div>
</body>
</html>