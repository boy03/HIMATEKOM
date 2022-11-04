<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="c">
                    <table border=0>
                    <form action="hasil.php" method="POST">
                     <tr>
                      <td>NIM</td>
                      <td>:</td>
                      <td><input type=text name=NIM></td>
                     </tr>
                    
                     <tr>
                      <td>Nama Lengkap</td>
                      <td>:</td>
                      <td><input type=text name=Nama></td>
                     </tr>
    
                     
                     <tr>
                     <td>Jurusan</td>
                     <td>:</td>
                      <td>
                    <input type=radio name="jurusan" value="TI">Teknik Informatika
                    <input type=radio name="jurusan" value="Elektro">Teknik Komputer S1
                    <input type=radio name="jurusan" value="Sipil">Sistem Informasi
                    <input type=radio name="jurusan" value="Sipil">SIA
                    <input type=radio name="jurusan" value="Sipil">DLL
                      </td>
                     </tr>
                     
                     <tr>
                      <td>Tempat dan Tanggal Lahir</td>
                      <td>:</td>
                      <td><input type=text name=Tempat size=15>
                      <select name=Tgl>
                      <option name=Tgl>Tanggal
                      <option name=Tgl>1
                      <option name=Tgl>2
                      <option name=Tgl>3
                      <option name=Tgl>4
                      <option name=Tgl>5
                      <option name=Tgl>6
                      <option name=Tgl>7
                      <option name=Tgl>8
                      <option name=Tgl>9
                      <option name=Tgl>10
                      <option name=Tgl>11
                      <option name=Tgl>12
                      <option name=Tgl>13
                      <option name=Tgl>14
                      <option name=Tgl>15
                      <option name=Tgl>16
                      <option name=Tgl>17
                      <option name=Tgl>18
                      <option name=Tgl>19
                      <option name=Tgl>20
                      <option name=Tgl>21
                      <option name=Tgl>22
                      <option name=Tgl>23
                      <option name=Tgl>24
                      <option name=Tgl>26
                      <option name=Tgl>27
                      <option name=Tgl>28
                      <option name=Tgl>29
                      <option name=Tgl>30
                      <option name=Tgl>31
                      </select>
                      <select name=Bln>
                      <option name=Bln>Bulan
                      <option name=Bln>Januari
                      <option name=Bln>Februari
                      <option name=Bln>Maret
                      <option name=Bln>April
                      <option name=Bln>Mei
                      <option name=Bln>Juni
                      <option name=Bln>Juli
                      <option name=Bln>Agustus
                      <option name=Bln>September
                      <option name=Bln>Oktober
                      <option name=Bln>November
                      <option name=Bln>Desember
                      </select>
                      <select name=Thn>
                      <option name=Thn>Tahun
                      <option name=Thn>2020
                      <option name=Thn>2019
                      <option name=Thn>2018
                      <option name=Thn>2017
                      <option name=Thn>2016
                      <option name=Thn>2015
                      <option name=Thn>2014
                      <option name=Thn>2013
                      <option name=Thn>2012
                      <option name=Thn>2011
                      <option name=Thn>2010
                      <option name=Thn>2009
                      <option name=Thn>2008
                      <option name=Thn>2007
                      <option name=Thn>2006
                      <option name=Thn>2005
                      <option name=Thn>2004
                      <option name=Thn>2003
                      <option name=Thn>2002
                      <option name=Thn>2001
                      <option name=Thn>2000
                      <option name=Thn>1999
                      <option name=Thn>1998
                      <option name=Thn>1997
                      <option name=Thn>1996
                      <option name=Thn>1995
                      <option name=Thn>1994
                      </select>
                      </td>
                     </tr>
                     
                     <tr>
                      <td>Jenis Kelamin</td>
                      <td>:</td>
                      <td><input type=radio name=JK value=Laki-laki>Laki-laki<input type=radio name=JK value=Perempuan>Perempuan</td>
                     </tr>
                     
                     <tr>
                      <td>Alamat</td>
                      <td>:</td>
                      <td><input type=textfield name=alamat></td>
                     </tr>
                     
                     <tr>
                      <td>Tentang Anda</td>
                      <td>:</td>
                      <td><textarea rows="5" cols="22" name="tentang"></textarea></td>
                     </tr>
                     
                     <tr>
                      <td> </td>
                      <td> </td>
                      <td><input type="submit" name="submit" value="INPUT DATA">
                      <input type="reset" name="reset" value="BERSIH"></td>
                     </tr>
                    </form>
                    </table>
                </div>
</body>
<table border="1" cellpadding="2" cellspacing="4">
        <?php
        $nim = $_POST['nim'];
        $nama = $_POST['nama lengkap'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['Tempat'];
        $tanggallahir = $_POST['tanggallahir'];
        $hobi = $_POST['Tempat'];
        $jk = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $tentang = $_POST['tentang anda']
        ?>

            <tr>
                <td align="center" colspan="2">
                  <?php 
                  echo '<b>Hasil Biodata yang di Inputkan</b><br>';?>   
                </td>
            </tr>

            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type=text name=NIM></td>
               </tr>
             <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type=text name=Nama></td>
             </tr>
</html>