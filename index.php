<html>
<head>
	<title>MyWeb</title>
	<link href="style/style.css" rel="stylesheet">
</head>

<body>
<div id="container">
	<div id="header">
		<h1>PERTEMUAN 1 -- SITEM PAKAR</h1>
	</div>
	
	<div id="sidebar">
		<h3>Navigasi</h3>
		<ul id="navmenu">
			<li><a href="index.php" class="selected">Profil</a></li>
			<li><a href="?module=galeri#pos">Galeri</a></li>
			<li><a href="?module=jadwal#pos">Jadwal</a></li>
		</ul>
	</div>
	
	<div id="page">
		<?php if (isset ($_GET['module']))
			include "konten/$_GET[module].php";
		else include "konten/home.php"; ?>
	</div>

	<div id="clear"></div>
	<div id="footer"><p>&copy; 2026</p></div>
</div>
</body>
</html>