<!DOCTYPE html>
<html>
  <head>
    <title>Input Data Klasemen</title>
  </head>
  <body>
    <h1>Input Data Klasemen Piala Asia U-23 Qatar Group A</h1>
    <form action="proces.php" method="POST">
      <label>Nama Negara:</label>
      <select name="negara">
        <option value="Qatar_U-23">Qatar U-23</option>
        <option value="Indonesia_U-23">Indonesia U-23</option>
        <option value="Australia_U-23">Australia U-23</option>
        <option value="Yordania_U-23">Yordania U-23</option>
      </select>
      <br />
      <label>Jumlah Pertandingan (P):</label>
      <input type="number" name="pertandingan" required />
      <br />
      <label>Jumlah Menang (M):</label>
      <input type="number" name="menang" required />
      <br />
      <label>Jumlah Seri (S):</label>
      <input type="number" name="seri" required />
      <br />
      <label>Jumlah Kalah (K):</label>
      <input type="number" name="kalah" required />
      <br />
      <label>Jumlah Poin:</label>
      <input type="number" name="poin" required />
      <br />
      <label>Nama Operator:</label>
      <input type="text" name="operator" required />
      <br />
      <label>NIM Mahasiswa:</label>
      <input type="text" name="nim" required />
      <br /><br>
      <input type="submit" value="Submit" />
      <!-- <input type="button" value="" link="output.php" />
      tombol untuk menuju ke halaman output.php -->
      <br /><br />
      <button onclick="window.location.href='output.php'">
        Lihat Klasemen Grup A Piala Asia Qatar U-23
    </form>
  </body>
</html>