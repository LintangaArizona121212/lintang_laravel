
<!DOCTYPE html>
<html>
<head>
   <title>Form HTML</title>
</head>
<body>
<form action="proses.php" method="get">
      <p>Perintah select Matkul
	  <select name='Perintah Select Matkul'>
		<option value='PTW'>PTW</option>
		<option value='RPL'>RPL</option>
		<option value='AORKOM'>AORKOM</option>
		<option value='MPPL'>MPPL</option>
		<option value='KB'>KB</option>
	  </select>
	  </p>
      <input type='submit' name='tombol' value='Pilih' />
</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<title>Home Halaman Utama <a href="{{url('/page3')}}">Contact us</a></title>
</head>
<body>
<p>Halaman Utama</p>
<a href="{{url('/page2')}}">Masuk Halama Artikel Framework</a>
</br>
</br>
<a href="{{url('/page3')}}">Contact us</a>
</body>
</html>

