<?php

$title = 'Aduan Masyarakat';

require '../../public/app.php';

require '../layouts/header.php';


// logic backend


// mengambil angka pengaduan dari database
$pengaduan = mysqli_query($conn, "SELECT * FROM pengaduan ORDER BY id_pengaduan  DESC LIMIT 1");

// mengambil angka tanggapan dari database
$tanggapan = mysqli_query($conn, "SELECT * FROM tanggapan ORDER BY id_tanggapan DESC LIMIT 1");

// mengambil angka akun masyarakat dari database
$masyarakat = mysqli_query($conn, "SELECT * FROM masyarakat ORDER BY nik  DESC LIMIT 1");

?>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3 shadow">
  <div class="container" data-aos="fade-down">
    <a class="navbar-brand" href="#">
      <i class="fas fa-atlas"></i> Hydro Guardian
    </a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <a href="login.php" class="btn btn-light mr-3">Login</a>
        <a href="register.php" class="btn btn-outline-light">Registrasi</a>
      </ul>
    </div>
  </div>
</nav>

<div class="bg-gradient-primary" style="border-bottom-right-radius: 100px; border-bottom-left-radius: 100px; padding:150px;">
  <div class="container d-flex justify-content-center" data-aos="zoom-in">
    <div class="text-center col-8 text-light" style="margin-top: -25px;">
      <h1>Hydro Guardian</h1>
      <p>Hydro Guardian adalah wadah daring yang memberdayakan masyarakat untuk berpartisipasi aktif dalam melaporkan kondisi got, kali, dan sungai yang tercemar. Sebagai platform pelaporan lingkungan, Hydro Guardian memungkinkan setiap individu untuk berkontribusi dalam menjaga kebersihan dan kesehatan sumber air di sekitar mereka.</p>
      <a href="login.php" class="btn btn-outline-light">Buat laporan sekarang!</a>
    </div>
  </div>
</div>

<div class="container" style="margin-top: -35px ;">
  <!-- Card -->
  <?php while ($row = mysqli_fetch_assoc($pengaduan)) : ?>
    <div class="row mb-3">
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="500">
        <div class="card border-left-info border-bottom-info shadow-lg h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col ml-3">
                <div class="h5 mb-0 font-weight-bold text-info"><?= $row['id_pengaduan']; ?> Pengaduan</div>
              </div>
              <i class="fas fa-comment fa-2x text-gray-500"></i>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>

    <?php while ($row = mysqli_fetch_assoc($tanggapan)) : ?>
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="700">
        <div class="card border-left-success border-bottom-success shadow-lg h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col ml-3">
                <div class="h5 mb-0 font-weight-bold text-success"><?= $row['id_tanggapan']; ?> Tanggapan</div>
              </div>
              <i class="fas fa-comments fa-2x text-gray-500"></i>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>

    <?php while ($row = mysqli_fetch_assoc($masyarakat)) : ?>
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="900">
        <div class="card border-left-warning border-bottom-warning shadow-lg h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col ml-3">
                <div class="h5 mb-0 font-weight-bold text-warning">5 Akun masyarakat</div>
              </div>
              <i class="fas fa-users fa-2x text-gray-500"></i>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile ?>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-6" data-aos="fade-right">
          <div class="desc" style="margin-top: 130px;">
            <h4 class="text-justify text-gray-900">Suarakan Kebersihan: Laporkan Got, Kali, dan Sungai Kotor untuk Lingkungan yang Bersih dan Sehat!</h4>
          </div>
        </div>
        <div class="col-6">
          <div class="img mt-5 ml-3" data-aos="fade-left">
            <img src="../../assets/img/landing3.svg" width="450" alt="">
          </div>
        </div>

        <div class="col-6" style="margin-top: -45px;">
          <div class="img" data-aos="fade-right">
            <img src="../../assets/img/landing2.svg" width="450" alt="">
          </div>
        </div>
        <div class="col-6" style="margin-top: -45px;">
          <div class="desc ml-3" style="margin-top: 130px;" data-aos="fade-left">
            <h4 class="text-justify text-gray-900">Jangan lupa mengirimkan foto anda saat menyampaikan laporan, aduan ataupun keluh kesah anda di web ini.</h4>
          </div>
        </div>

        <div class="col-6" style="margin-top: -45px;">
          <div class="desc" style="margin-top: 130px;" data-aos="fade-right">
            <h4 class="text-justify text-gray-900">Setelah menyapaikan laporan, aduan atau keluh kesah anda dapat menunggu tanggapan dengan santay.</h4>
          </div>
        </div>
        <div class="col-6" style="margin-top: -45px;" data-aos="fade-left">
          <div class="img ml-3">
            <img src="../../assets/img/landing1.svg" width="450" alt="">
          </div>
        </div>
      </div>
    </div>
</div>


<!-- info -->
<div class="bg-gradient-primary py-5">
  <div class="container text-center text-light">
    <h1 class="mb-3">Info Laporan Masyarakat</h1>
    <a href="mailto:ghifariaprilia@gmail.com" class="btn btn-light mr-1">Chat admin</a>
    <a href="mailto:ghifariaprilia@gmail.com" class="btn btn-outline-light ml-1">Contact Developer</a>
  </div>
</div>


<!-- Testimonial -->
<div class="container py-5">
  <h2 class="text-center text-uppercase text-gray-900" data-aos="zoom-in-up">testimonial</h2>
  <hr>
  <div class="row">
    <div class="col-4">
      <div class="card shadow-sm" data-aos="fade-up" data-aos-duration="500">
        <div class="card-body">
          <img src="../../assets/img/tulis.svg" width="35" class="rounded-circle" alt="">
          <span>Hanamullah</span> |
          <span>Web Developer</span>
          <hr>
          <div class="card-text text-justify">"Saya sangat senang menggunakan Hydro Guardian untuk melaporkan kondisi lingkungan di sekitar saya. Antarmuka yang ramah pengguna membuat proses pelaporan menjadi sangat mudah dan cepat. Saya merasa bahwa kontribusi saya benar-benar dihargai, dan notifikasi yang diberikan oleh Hydro Guardian memberikan kepuasan karena tahu bahwa laporan saya diterima dan diindahkan. "</div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card shadow-sm" data-aos="fade-up" data-aos-duration="700">
        <div class="card-body">
          <img src="../../assets/img/img-dashboard-user.svg" width="35" class="rounded-circle" alt="">
          <span>Irasalamu</span> |
          <span>Masyarakat</span>
          <hr>
          <div class="card-text text-justify">"Hydro Guardian telah berhasil membangun kesadaran masyarakat tentang pentingnya menjaga kebersihan air. Dengan melihat laporan dari berbagai daerah, saya menjadi semakin paham tentang tantangan lingkungan yang dihadapi oleh komunitas lokal dan global. Ini benar-benar membantu memperkuat kesatuan dalam upaya menjaga sumber air bersih bagi kita semua  . "</div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card shadow-sm" data-aos="fade-up" data-aos-duration="900">
        <div class="card-body">
          <img src="../../assets/img/login.svg" width="35" class="rounded-circle" alt="">
          <span>Mada Iluy</span> |
          <span>Influencer </span>
          <hr>
          <div class="card-text text-justify">"Hydro Guardian tidak hanya sekadar platform pelaporan, tetapi juga merupakan kekuatan positif dalam aksi lingkungan. Saya melihat bagaimana laporan-laporan yang masuk diterjemahkan menjadi tindakan nyata dan solusi oleh tim Hydro Guardian. Ini membuktikan bahwa partisipasi kita memiliki dampak yang nyata, dan saya bangga menjadi bagian dari komunitas yang berkomitmen untuk menjaga kelestarian lingkungan. "</div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- footer -->
<div class="bg-gray-400 py-3">
  <footer>
    <div class="text-center mt-2 text-gray-700">
      <h6>Copyright &copy;2023 -Hydro Guardian.</h6>
    </div>
  </footer>
</div>


<?php require '../layouts/footer.php'; ?>