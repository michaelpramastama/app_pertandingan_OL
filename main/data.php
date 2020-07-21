<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Parason Software - Contact</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="data.php">Data</a></li> 
              <li class="nav-item"><a class="nav-link" href="pricing.html">Jadwal</a>
              <li class="nav-item"><a class="nav-link" href="contact.html">Berkas</a></li>
            </ul>

            <ul class="navbar-right">
              <li class="nav-item">
                <button class="button button-header bg">LOG OUT</button>
              </li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================ Hero sm Banner start =================-->      
  <section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
      <div class="hero-banner--sm__content">
        <h1>Data</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->
 <!--================ about section start =================-->      
    <section class="section-padding--small bg-magnolia">
      <div class="container">
        <div class="row no-gutters align-items-center">
          <div class="col-md-6 mb-6 mb-md-0">
            <div class="about__content">
              <form action="insert.php" method="post">
                  <div class="form-group">
                      <label for="nrp">NRP</label>
                      <input type="text" class="form-control" id="nrp" name="nrp" value="" readonly required>
                  </div>
                  <div class="form-group">
                      <label for="nama">Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                  </div>
                  <div class="form-group">
                      <label for="gender">Jenis Kelamin</label>
                      <select class="form-control" id="gender" name="gender" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="tempat">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat Lahir" required>
                  </div>
                  <div class="form-group">
                      <label for="tanggal">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                  </div>
                  <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat" rows="2" required></textarea>
                  </div>
                  <div class="form-group">
                      <label for="nohp">Nomor HP</label>
                      <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Ex: 081xxxxxxxxx" required>
                  </div>
                  <div class="form-group">
                      <label for="ipk">IPK Terakhir</label>
                      <input type="text" class="form-control" id="ipk" name="ipk" placeholder="Ex: 3.99" required>
                  </div>
                  <div class="form-group">
                      <label for="idline">Line ID</label>
                      <input type="text" class="form-control" id="idline" name="idline" placeholder="Line ID" required>
                  </div>
                  <div class="form-group">
                      <label for="instagram">Instagram</label>
                      <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram" required>
                  </div>
                  <div class="form-group">
                      <label for="motivasi">Motivasi</label>
                      <textarea class="form-control" id="motivasi" name="motivasi" placeholder="Motivasi mengikuti Maba Cup" rows="2" required></textarea>
                  </div>
                  <div class="form-group">
                      <label for="komitmen">Komitmen</label>
                      <textarea class="form-control" id="komitmen" name="komitmen" placeholder="Komitmen setelah diterima di Maba Cup" rows="2" required></textarea>
                  </div>
                  <div class="form-group">
                      <label for="kelebihan">Kelebihan</label>
                      <textarea class="form-control" id="kelebihan" name="kelebihan" placeholder="Kelebihan anda" rows="2" required></textarea>
                  </div>
                  <div class="form-group">
                      <label for="kekurangan">Kekurangan</label>
                      <textarea class="form-control" id="kekurangan" name="kekurangan" placeholder="Kekurangan anda" rows="2" required></textarea>
                  </div>
                  <div class="form-group">
                      <label for="pengalaman">Pengalaman Organisasi / Panitia</label>
                      <textarea class="form-control" id="pengalaman" name="pengalaman" placeholder="Pengalaman panitia selama di UK. Petra" rows="2" required></textarea>
                  </div>
                  <div class="form-group">
                      <label for="divisi1">Divisi 1</label>
                      <select class="form-control" id="divisi1" name="divisi1" required>
                        <option value="">Pilih Divisi</option>
                        <option value="Pria">It</option>
                        <option value="Wanita">Sponsor</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="divisi2">Divisi 2</label>
                      <select class="form-control" id="divisi2" name="divisi2" required>
                        <option value="">Pilih Divisi</option>
                        <option value="Pria">It</option>
                        <option value="Wanita">Sponsor</option>
                      </select>
                  </div>
                  <center><p style="font-size: 110%;"><span style="color: red;">Perhatian!</span><br/>Pilihan <span style="color: red;">Divisi</span> hanya bisa dipilih <span style="color: red;">satu kali</span> dan <span style="color: red;">tidak bisa diubah</span>!</p></center>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ about section end =================-->       
  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
          <section id="social-media">

              <div class="container text-center">
                    <p> CONTAC US</p>
                    <div class="social-icon">
                      <a href="#"><img src="img/banner/4.png"> @bom2019</a>
                      <a href="#"><img src="img/banner/5.png"> @michaelpramas</a>
                    </div>
              </div>  
          </section>
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>