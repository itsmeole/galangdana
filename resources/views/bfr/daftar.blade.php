<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('storage') }}/assets/css/stylecp.css">
</head>

<body>
	<div class="wrapper">
		<form action="">
			<h1>Daftar</h1>
			<div class="input-box">
				<input type="text" placeholder="nama lengkap" required>
			</div>
			<div class="input-box">
				<input type="text" placeholder="username" required>
			</div>
			<div class="input-box">
				<input type="password" placeholder="password" required>
			</div>

			<button type="submit" class="btn"><a href="list" : active="request()->routeIs('aftr.list_job')">Buat Akun</button>
		</form>
	</div>
</body>
</html>
