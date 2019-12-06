<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<center>
<body>
 
	<h1>Silahkan Masuk dengan Email Anda</h1>
	
	<form action="kirim.php" method="post">
		<p><input type="text" name="nama" placeholder="Nama anda" size="30" required /></p>
		<p><input type="email" name="email" placeholder="Email valid" size="30" required /></p>
		<p><input type="password" name="password" placeholder="password andal" size="30" required /></p>
		<p><input type="submit" name="kirim" value="Kirim Pesan" /> <input type="reset" value="Hapus Text" /></p>
	</form>
	
</body>
<center>
</html>
