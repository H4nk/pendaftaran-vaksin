<!doctype html>
<html lang="zxx">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="<?= base_url('assets/home/');?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url('assets/home/');?>css/animate.min.css">
<link rel="stylesheet" href="<?= base_url('assets/home/');?>css/owl.carousel.min.css">
<link rel="stylesheet" href="<?= base_url('assets/home/');?>css/flaticon.css">
<link rel="stylesheet" href="<?= base_url('assets/home/');?>css/magnific-popup.min.css">
<link rel="stylesheet" href="<?= base_url('assets/home/');?>css/meanmenu.min.css">
<link rel="stylesheet" href="<?= base_url('assets/home/');?>css/boxicons.min.css">
<link rel="stylesheet" href="<?= base_url('assets/home/');?>css/nice-select.min.css">
<link rel="stylesheet" href="<?= base_url('assets/home/');?>css/slick.min.css">
<link rel="stylesheet" href="<?= base_url('assets/home/');?>css/odometer.min.css">
<link rel="stylesheet" href="<?= base_url('assets/home/');?>css/datatables.min.css">
<link rel="stylesheet" href="<?= base_url('assets/home/');?>css/style.css">
<link rel="stylesheet" href="<?= base_url('assets/home/');?>css/dark.css">
<link rel="stylesheet" href="<?= base_url('assets/home/');?>css/responsive.css">
<title>PENDAFTARAN VAKSINASI BERBASIS WEBSITE DI PUSKESMAS BASO</title>
<link rel="icon" type="image/png" href="<?= base_url('assets/home/');?>img/favicon.png">
</head>
<body>

<div class="preloader">
<div class="loader">
<div class="shadow"></div>
<div class="box"></div>
</div>
</div>


<header class="header-area">

<div class="top-header">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-4 col-md-12">
<ul class="top-header-social">

</ul>
</div>
<div class="col-lg-8 col-md-12">
<ul class="top-header-contact-info">
<li><i class='bx bx-map'></i> Jl. Raya Bukittinggi - Payakumbuh KM.11, Tabek Panjang, Kec. Baso, Kabupaten Agam, Sumatera Barat 26192</li>
<li><i class='bx bx-phone-call'></i> Call Center: <a href="tel:(0752) 426169">(0752) 426169</a></li>
</ul>
</div>
</div>
</div>
</div>


<div class="navbar-area">
<div class="cognizance-responsive-nav">
<div class="container">
<div class="cognizance-responsive-menu">
<div class="logo">
<a href="">
<img src="<?= base_url('assets/home/');?>img/logo.png" class="main-logo" alt="logo">
<img src="<?= base_url('assets/home/');?>img/logo2.png" class="white-logo" alt="logo">
</a>
</div>
</div>
</div>
</div>
<div class="cognizance-nav">
<div class="container">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="index.html">
 <img src="<?= base_url('assets/home/');?>img/logo.png" class="main-logo" alt="logo">
<img src="<?= base_url('assets/home/');?>img/logo2.png" class="white-logo" alt="logo">
</a>
<div class="collapse navbar-collapse mean-menu">
<ul class="navbar-nav">
<li class="nav-item"><a href="<?= base_url();?>" class="nav-link">Home <i class='bx bx-chevron-down'></i></a>
</li>

<li class="nav-item"><a href="https://covid19.who.int/" class="nav-link">Corova Virus WHO</a></li>




</div>
</nav>
</div>
</div>

</div>

 </header>


<div class="search-overlay">
<div class="d-table">
<div class="d-table-cell">
<div class="search-overlay-layer"></div>
<div class="search-overlay-layer"></div>
<div class="search-overlay-layer"></div>
<div class="search-overlay-close">
<span class="search-overlay-close-line"></span>
<span class="search-overlay-close-line"></span>
</div>
<div class="search-overlay-form">

</div>
</div>
</div>
</div>


<section class="page-title-area">
<div class="container">
<div class="page-title-content">
<h2>PENDAFTARAN VAKSINANSI</h2>
<ul>
<li>Puskesmas Baso</li>
</ul>
</div>
</div>
</section>


<section class="contact-area ptb-100">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-12">
<div class="contact-form">
<h3>Registrasi Vaksin</h3>
<p>Silahkan isi data secara lengkap dan benar</p>
<form  action="<?= base_url('Home/proses');?>" method="post">
<div class="row">
<div class="col-lg-12 col-md-6">
<div class="form-group">
<label>Jadwal VAKSIN <span>*</span></label>
<select name="jadwal" id="jadwal" class="form-control" required data-error="Masukan 16 Digit NIK">
<?php foreach($jadwal as $h){?>
<option value="<?= $h->id;?>"><?= $this->Db_model->get_data($h->vaksin,'nama','jenis');?></option>

<?php } ?>
</select>
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-12 col-md-6">
<div class="form-group">
<label>Vaksin Ke - <span>*</span></label>
<select name="ke" id="ke" class="form-control" required >
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
</select><div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-12 col-md-6">
<div class="form-group">
<label>WAKTU VAKSIN <span>*</span></label>
<input type="date" name="tgl_vaksin" id="tgl_vaksin" class="form-control" required data-error="Mohon masukan tanggal vaksin" placeholder="Tanggal Vaksin">
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-12 col-md-6">
<div class="form-group">
<label>NIK <span>*</span></label>
<input type="text" name="nik" id="nik" class="form-control" required data-error="Masukan 16 Digit NIK" placeholder="Nomor Induk Kependudukan">
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-12 col-md-6">
<div class="form-group">
<label>Nama Lengkap <span>*</span></label>
<input type="text" name="nama" id="nama" class="form-control" required data-error="Mohon masukan nama lengkap" placeholder="Nama Lengkap">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-6">
<div class="form-group">
<label>Tanggal Lahir <span>*</span></label>
<input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required data-error="Mohon Masukan tanggal lahir" placeholder="tanggal Lahir">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-6">
<div class="form-group">
<label>Email <span>*</span></label>
<input type="email" name="email" id="email" class="form-control" required data-error="Mohon masukan email yang benar" placeholder="Masukan Email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<label>Nomor Handphone <span>*</span></label>
<input type="text" name="hp" id="hp" class="form-control" required data-error="Mohon masukan nomor yang dapat dihubungi" placeholder="Masukan nomor HP">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
 <label>Alamat <span>*</span></label>
<textarea name="alamat" id="alamat" cols="30" rows="5" required data-error="Mohon masukan alamat yang benar" class="form-control" placeholder=""></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<button type="submit" class="default-btn"><i class='flaticon-plane'></i> Daftar Vaksin</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
<div class="col-lg-5 col-md-12">
<div class="contact-info">
<h3>Bantuan</h3>
<p>Jika ada pertanyaan silahkan hubungi kami :</p>
<ul class="contact-list">
<li><i class='bx bx-map'></i> Location: <a href="#">Jl. Raya Bukittinggi - Payakumbuh KM.11, Tabek Panjang, Kec. Baso, Kabupaten Agam, Sumatera Barat 26192</a></li>
<li><i class='bx bx-phone-call'></i> Call Us: <a href="tel:(0752) 426169">(0752) 426169</a></li>
</ul>
<h3>Jadwal Vaksin:</h3>
<ul class="opening-hours">
<li><span>Senin:</span> 08:00 - 17:00 wib</li>
<li><span>Selasa:</span> 08:00 - 17:00 wib</li>
<li><span>Rabu:</span> 08:00 - 17:00 wib</li>
<li><span>Kamis:</span> 08:00 - 17:00 wib</li>
<li><span>Jumat:</span> 08:00 - 17:00 wib</li>
<li><span>Sabtu:</span> Tutup</li>
<li><span>Minggu:</span> Tutup</li>

</ul>

</div>
</div>
</div>
</div>
</section>


<div id="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15959.07500540185!2d100.4671286!3d-0.2856055!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd548235219d877%3A0x7b896e1c757fc5eb!2sPuskesmas%20Baso!5e0!3m2!1sid!2sid!4v1675144047363!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<footer class="footer-area">
<div class="container">
<div class="subscribe-area">

</div>
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-footer-widget">
<a href="#" class="logo">
<img src="<?= base_url('assets/home/');?>img/logo2.png" alt="logo">
</a>
<p>Jl. Raya Bukittinggi - Payakumbuh KM.11, Tabek Panjang, Kec. Baso, Kabupaten Agam, Sumatera Barat 26192</p>

</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-footer-widget">
<h3>Quick Links</h3>
<ul class="footer-quick-links">
<li><a href="https://covid19.go.id/">Covid 19</a></li>
<li><a href="http://dinkes.agamkab.go.id/">Dinas Kesehatan Agam</a></li>
<li><a href="https://www.kemkes.go.id/">Kementerian Kesehatan</a></li>
<li><a href="https://www.pedulilindungi.id/">Peduli Lindungi</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-footer-widget">
<h3>Contacts</h3>
<ul class="footer-contact-info">
<li><span>Address:</span> Jl. Raya Bukittinggi - Payakumbuh KM.11, Tabek Panjang, Kec. Baso, Kabupaten Agam, Sumatera Barat 26192</li>
<li><span>Phone:</span> <a href="tel:+44587154756">(0752) 426169</a></li>
</ul>
</div>
</div>

</div>
</div>
<div class="footer-bottom-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-6">
<p>Copyright <i class='bx bx-copyright'></i> 2022 Puskesmas Baso</a></p>
</div>
<div class="col-lg-6 col-md-6">
<ul>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms & Conditions</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="footer-shape1"><img src="<?= base_url('assets/home/');?>img/footer-shape1.png" alt="image"></div>
<div class="footer-shape2"><img src="<?= base_url('assets/home/');?>img/footer-shape2.png" alt="image"></div>
<div class="footer-shape3"><img src="<?= base_url('assets/home/');?>img/footer-shape3.png" alt="image"></div>
</footer>

<div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?= base_url('assets/home/');?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/home/');?>js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/home/');?>js/parallax.min.js"></script>
<script src="<?= base_url('assets/home/');?>js/mixitup.min.js"></script>
<script src="<?= base_url('assets/home/');?>js/datatables.min.js"></script>
<script src="<?= base_url('assets/home/');?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/home/');?>js/magnific-popup.min.js"></script>
<script src="<?= base_url('assets/home/');?>js/appear.min.js"></script>
<script src="<?= base_url('assets/home/');?>js/odometer.min.js"></script>
<script src="<?= base_url('assets/home/');?>js/slick.min.js"></script>
<script src="<?= base_url('assets/home/');?>js/meanmenu.min.js"></script>
<script src="<?= base_url('assets/home/');?>js/wow.min.js"></script>
<script src="<?= base_url('assets/home/');?>js/nice-select.min.js"></script>
<script src="<?= base_url('assets/home/');?>js/form-validator.min.js"></script>
<script src="<?= base_url('assets/home/');?>js/contact-form-script.js"></script>
<script src="<?= base_url('assets/home/');?>js/ajaxchimp.min.js"></script>
<script src="<?= base_url('assets/home/');?>js/main.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/cognizance/default/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2023 05:08:09 GMT -->
</html>