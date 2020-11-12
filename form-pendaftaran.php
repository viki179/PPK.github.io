<!DOCTYPE html>
<html>
<head>
<style>
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
body{
 background-image: url(https://image.freepik.com/free-vector/blue-white-low-poly-triangle-shapes-background_1035-19007.jpg);
 background-size: 605px 580px;
 width: 600px;
 height: 700px;
 margin: 10 auto;
 opacity: 0.9;
 border: #00868b;
 margin-top: 20px;
 box-sizing: 50px;
 background-repeat: no-repeat;
}

</style>
<title>M Bagus Vicky W-18610053</title>
</head>
<body>

<h2>Form Pendaftaran Siswa Didik Baru</h2>
    <form action="simpan-pendaftaran.php" method="post">
		<fieldset><legend>BIODATA DIRI</legend>
	<table>
          <tr>
              <td><label>Username:</label></td><td><input type="text" name="username" placeholder="Masukan Username" /></td>
	  </tr>
	  <tr>
	      <td><label>Nama:</label></td><td><input type="text" name="nama" placeholder="Masukan Nama" /></td>
	  </tr>
	  <tr>
	      <td><label>Alamat:</label></td><td><textarea name="alamat" rows="5" placeholder="Masukan Alamat" ></textarea></td>
	  </tr>
	  <tr>
              <td><label>Email:</label></td><td><input type="text" name="email" placeholder="Masukan Email" /></td>
	  </tr>
	  <tr>
	      <td><label>Password:</label></td><td><input type="text" name="password" placeholder="Masukan Password" /></td>
	   </tr>
	  <tr>
	      <td><label>No HP:</label></td><td><input type="text" name="no_hp" placeholder="Masukan No HP" /></td>
	  </tr>
	  <tr>
	      <td><label>Prestasi:</label></td><td><input type="text" name="prestasi" placeholder="Masukan Prestasi" /></td>
	  </tr>
	 
	 
	</table>
		</fieldset><br>
      <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>