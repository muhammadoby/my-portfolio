<?php 
//Mendapatkan alamat ip
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'IP tidak dikenali';
    return $ipaddress;
}
//Mendapatkan jenis browser
function get_client_browser() {
    $browser = '';
    if(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
        $browser = 'Firefox';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
        $browser = 'Firefox';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
        $browser = 'Chrome';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))
        $browser = 'Opera';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
        $browser = 'Internet Explorer';
    else
        $browser = 'Other';
    return $browser;
}
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include librari phpmailer
include('phpmailer/Exception.php');
include('phpmailer/PHPMailer.php');
include('phpmailer/SMTP.php');

$email_pengirim = 'emailpengirim@gamil.com'; // Isikan dengan email pengirim
$nama_pengirim = $_POST['name']; // Isikan dengan nama pengirim
$email_form = $_POST['email']; // Email pengirim form
$email_penerima = 'emailpenerima@gmail.com'; // Ambil email penerima dari inputan form
$subjek = $_POST['subject']; // Ambil subjek dari inputan form
$pesan = $_POST['message']; // Ambil pesan dari inputan form

$mail = new PHPMailer;
$mail->isSMTP();

$mail->Host = 'smtp.zoho.com';
$mail->Username = $email_pengirim; // Email Pengirim
$mail->Password = 'password'; // Isikan dengan Password email pengirim
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
// $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging

$mail->setFrom($email_pengirim, $nama_pengirim);
$mail->addAddress($email_penerima, '');
$mail->isHTML(true); // Aktifkan jika isi emailnya berupa html

$content = '<h2>Form Kontak halaman portfolio</h2>
                <h4>Nama</h4><p>'.$nama_pengirim.'</p>
                <h4>Email</h4><p>'.$email_form.'</p>
                <h4>Subject</h4><p>'.$subjek.'</p>
                <h4>Message</h4><p>'.$pesan.'</p>
                <h4>Alamat Ip</h4><p>'.get_client_ip().'</p>
                <h4>Jenis Browser</h4><p>'.get_client_browser().'</p>
                <h4>Informasi Perangkat</h4><p>'.$_SERVER['HTTP_USER_AGENT'].'</p>';

$mail->Subject = $subjek;
$mail->Body = $content;
$sukses = "";
$error  = "";
if(isset($_POST['submit'])){
if($send = $mail->send()){
  $sukses = "Pesan Berhasil Terkirim.";
}else{
  $error = "Halo $nama_pengirim, Pesan Gagal Terkirim.";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
<!-- Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
<link rel="stylesheet" href="/assets/css/style.css"/>
<link rel="stylesheet" href="/assets/css/language.css"/>
<!-- Favicons -->
<link rel="icon" type="image/jpg" href="https://i.postimg.cc/bJFRvsqG/IMG-20211027-173336-527-2.jpg"/>
<!-- HTML Meta Tags -->
<title>Muhammad Oby</title>
<meta name="description" content="Halo, Selamat datang di website saya"/>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1583640420760384"
     crossorigin="anonymous"></script>
</head>
<body id="bird">
<!-- Header -->
<header class="header" id="header">
<nav class="nav container">
<a href="#" class="nav_logo">Muhammad Oby</a>
<div class="nav_menu">
	<ul class="nav_list">
		<li class="nav_item">
			<a href="#" class="nav_section">
			<i class='bx bxs-home nav_icon'></i>
			<span class="nav_name">Beranda</span></span>
			</a>
		</li>
		<li class="nav_item">
			<a href="#gallery" class="nav_section">
			<i class='bx bx-globe nav_icon'></i>
			<span class="nav_name">Galeri</span>
			</a>
		</li>
		<li class="nav_item">
			<a href="#about" class="nav_section">
			<i class='bx bxs-user-detail nav_icon'></i>
			<span class="nav_name">Tentang</span>
			</a>
		</li>
		<li class="nav_item">
			<a href="#contact" class="nav_section">
			<i class='bx bxs-chat nav_icon'></i>
			<span class="nav_name">Kontak</span>
			</a>
		</li>
	</ul>
</div>
<!--- Menu Bahasa --->
<select onchange="doGTranslate(this);" class="lg">
	<option value="id|id">Indonesia</option>
	<option value="id|en">English</option>
	<option value="id|ja">Japan</option>
	<option value="id|ru">Russian</option>
</select>
<div id="google_translate_element2"></div>
<!---Akhir menu bahasa--->
</nav>
</header>
<main>
<div class="container">
	<!-- Landing page -->
	<div class="title">
		<h1 class="margin_min">Selamat Datang!</h>
		<h4 class="subtitle_lpg">&copy; Muhammad Oby <script>document.write(new Date().getFullYear())</script></h4>
	</div>
	<!-- Project -->
	<section class="section_container" id="gallery">
	<h1>Galeri</h1>
	<div class="project">
		<div class="project_one">
			<div class="project_ilust1 pointer"></div>
			<h2 class="pointer">Pulau Dewata</h2>
			<p class="project_desc">
				 Pulau Bali terkenal dengan julukan sebagai "Pulau Dewata" karena kentalnya budaya Hindu, seperti banyaknya sesaji yang dipersembahkan untuk dewata penjaga di berbagai tempat di Bali.
			</p>
		</div>
		<div class="project_two">
			<div class="project_ilust2 pointer"></div>
			<h2 class="pointer">Garuda Wisnu Kencana</h2>
			<p class="project_desc">
				 Taman Budaya Garuda Wisnu Kencana atau kerap disebut dengan GWK, adalah sebuah taman wisata budaya di bagian selatan pulau Bali.
			</p>
		</div>
		<div class="project_three">
			<div class="project_ilust3 pointer"></div>
			<h2 class="pointer">Danau Batur</h2>
			<p class="project_desc">
				 Danau Batur adalah danau kawah di Kintamani, Kabupaten Bangli di Bali, terletak sekitar 30 km di timur laut Ubud di Bali. Danau itu berada di dalam kaldera gunung berapi aktif, Gunung Batur, terletak di sepanjang, aktivitas vulkanis Cincin Api Pasifik.
			</p>
		</div>
		<div class="project_four">
			<div class="project_ilust4 pointer"></div>
			<h2 class="pointer">Gunung Batur</h2>
			<p class="project_desc">
				 Gunung Batur merupakan sebuah gunung berapi aktif di Kecamatan Kintamani, Kabupaten Bangli, Bali, Indonesia. Sisi tenggara dari kaldera yang berukuran 10×13 km ini sebagian besar berisi danau kaldera.
			</p>
		</div>
	</div>
	</section>
	<!-- About -->
	<section class="section_container" id="about">
	<h1>Tentang Saya</h1>
	<p class="about_desc">
		 Perkenalkan saya Muhammad Oby dari kelas IX RPL 2, Website ini saya buat menggunakan HTML CSS dan sedikit tambahan JAVASCRIPT, bila ada saran yang ingin disampaikan kepada saya harap tulis pada formulir dibawah.
	</p>
	</section>
	<!-- Contact -->
	<section class="section_container contact" id="contact">
	<h1>Kontak</h1>
	<div class="ct_container ct_grid">
		<div class="ct_ingpo">
			<div class="email">
				<h4 class="headerct">Email</h4>
				<span>labyqulumam@gmail.com</span>
			</div>
			<div class="phone">
				<h4 class="headerct">Phone</h4>
				<span>+62 878-123-509-91</span>
			</div>
			<div class="location">
				<h4 class="headerct">Lokasi</h4>
				<span>Bali, Indonesia</span>
			</div>
		</div>
		<form class="contact_form" method="POST">
		  <?php if($sukses){ echo "<p style='font-size: 16px; text-align: center;'>".$sukses."</p>"; } ?>
		  <?php if($error){ echo "<p style='font-size: 16px; text-align: center; color: red;'>".$error."</p>"; } ?>
			<div class="contact_in">
				<input type="text" class="inputtxt" placeholder="Nama" id="textholder" name="name" required>
				<input type="text" class="inputtxt" id="textholder" name="subject" placeholder="Subjek" required>
				<input type="email" class="inputtxt" placeholder="Email" id="textholder" name="email" required></div>
			<textarea id="textholder" cols="0" rows="10" placeholder="Pesan" class="inputtxt" name="message" required></textarea>
			<button name="submit" style="display:inline-block; overflow: hidden; position: relative; padding: 5% 25%; margin-top: 16px; border-radius: 10px; background: transparent; box-shadow: 0 5px 15px -5px #00000070; border: 2px solid #a1a1a1; font-size: 18px; color: #bfbfbf" type="submit">Kirim</button>
		</form>
	</div>
	</section>
	<footer>
	<p></p>
	</footer>
</div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
<script src="/assets/js/vanta.js"></script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
<script src="/assets/js/language.js"></script>
<script src="/assets/js/script.js"></script>
</body>
</html>
