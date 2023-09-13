<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<title>404 Not Found</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:700,900" rel="stylesheet">
	<link rel="icon" href="https://i.postimg.cc/4d6nBjvT/images.png">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style>
	  * {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  padding: 0;
  margin: 0;
}

#notfound {
  position: relative;
  height: 100vh;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 767px;
  width: 100%;
  line-height: 1.4;
  padding: 0px 15px;
}

.notfound .notfound-404 {
  position: relative;
  height: 150px;
  line-height: 150px;
  margin-bottom: 25px;
}

.notfound .notfound-404 h1 {
  font-family: 'Titillium Web', sans-serif;
  font-size: 189px;
  text-align: center;
  font-weight: 900;
  margin: 0px;
  text-transform: uppercase;
  background: url(https://i.postimg.cc/Nfd52VvP/081662100-1610083525-3d-hyperspace-background-with-warp-tunnel-effect.webp);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-size: cover;
  background-position: center;
}

.notfound h2 {
  font-family: 'Titillium Web', sans-serif;
  font-size: 30px;
  font-weight: 700;
  margin: 0;
  text-transform: capitalize;
}

.notfound p {
  font-family: 'Montserrat', sans-serif;
  font-size: 15px;
  font-weight: 500;
  margin-bottom: 0px;
  color: red;
  text-transform: capitalize;
}
.notfound a {
  font-family: 'Titillium Web', sans-serif;
  display: inline-block;
  text-transform: uppercase;
  color: #fff;
  text-decoration: none;
  border: none;
  background: #0b9bd4;
  padding: 10px 30px;
  font-size: 17px;
  font-weight: 700;
  border-radius: 1px;
  margin-top: 15px;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}
.notfound i{
  font-size: 17px;
}
.notfound a:hover {
  opacity: 0.8;
}

@media only screen and (max-width: 767px) {
  .notfound .notfound-404 {
    height: 110px;
    line-height: 110px;
  }
  .notfound .notfound-404 h1 {
    font-size: 120px;
  }
}
	</style>
</head>
<body>
	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>404</h1>
			</div>
			<h2>halaman tidak ditemukan</h2>
			<p>Maaf, halaman yang Anda cari tidak bisa ditemukan. Mungkin halaman tersebut sudah berubah atau telah dihapus</p>
			<p>Ip Anda: <?php echo file_get_contents('http://ident.me'); ?></p>
			<a href="/"><i class="fal fa-arrow-square-left"></i> Halaman utama</a>
		</div>
	</div>
</body>
</html>