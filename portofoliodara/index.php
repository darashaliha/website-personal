<?php
session_start();
$success_message = '';
if (isset($_SESSION['success_message'])) {
  $success_message = $_SESSION['success_message'];
  // Hapus pesan sukses setelah ditampilkan
  unset($_SESSION['success_message']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dara Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link rel="stylesheet" href="style.css" />
  <style>

  </style>
</head>

<body>
  <!-- navigasi -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">ProfileDara.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-right" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#Skill">Skill</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portofolio">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tentang">Tentang Saya</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Pengalaman">Pengalaman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak Saya</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- banner -->
  <div class="container-fluid banner">
    <div class="container text-center">
      <h4 class="display-6"><strong>Hello Perkenalkan Nama Saya</strong></h4>
      <h3 class="display-5"><strong>Dara Shaliha Happyananda Imani</strong></h3>
      <h3 class="display-5"><strong>5220411308</strong></h3>
      <a href="#banner" style="font-weight: bold; font-size: 1.2em;"></a>
    </div>
  </div>


  </a>
  </div>
  </div>
  <!-- skill -->
  <div class="container-fluid Skill pt-5 pb-5">
    <div class="container text-center">
      <h2 class="display-3" id="Skill">Skill</h2>
      <p>
        Saya memiliki beberapa skill di bidang informatika
      </p>
      <div class="row pt-4">
        <div class="col-md-4">
          <span class="lingkaran"><i class="fas fa-code fa-5x"></i></span>
          <h3 class="mt-3">UI/UX</h3>
          <p>
            Saya memiliki pengalaman dalam merancang antarmuka pengguna yang estetis dan fungsional, dengan fokus pada
            kenyamanan dan kemudahan pengguna dalam berinteraksi
          </p>
        </div>

        <div class="col-md-4">
          <span class="lingkaran"><i class="fas fa-palette fa-5x"></i></span>
          <h3 class="mt-3">Design</h3>
          <p>
            Dengan latar belakang desain grafis, saya menciptakan visual yang menarik dan efektif, memastikan setiap
            elemen menyampaikan pesan yang jelas dan kuat.
          </p>
        </div>

        <div class="col-md-4">
          <span class="lingkaran"><i class="fas fa-network-wired fa-5x"></i></span>
          <h3 class="mt-3">Web Developer</h3>
          <p>
            Sebagai seorang web developer, saya memiliki keahlian dalam membangun aplikasi web yang responsif dan
            dinamis. Saya berpengalaman dalam berbagai teknologi seperti HTML, CSS, JavaScript, dan framework seperti
            React atau Angular, serta mampu mengoptimalkan kinerja situs untuk pengalaman pengguna yang lebih baik.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- portofolio -->

  <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
      <h2 class="display-3" id="portofolio">Portofolio</h2>
      <p>
        dibawah ini akan menampilkan beberapa portofolio Saya
      </p>
      <div class="row pt-4 gx-4 gy-4">
        <div class="col-md-4">
          <div class="card crop-img">
            <img
              src="https://buildwithangga.com/storage/assets/thumbnail_tips/3-Aplikasi-Paling-Sering-Digunakan-Oleh-UI-UX-Designer-2023-(1).png"
              class="card-img-top" width="100%" height="200" />
            <div class="card-body">
              <h5 class="card-title">UI/UX</h5>
              <p class="card-text">
                Ini merupakan gambar UI/UX aplikasi
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card crop-img">
            <img
              src="https://idwebhost.com/blog/wp-content/webp-express/webp-images/doc-root/blog/wp-content/uploads/2020/09/Pentingnya-Website-Company-Profile-Bagi-Perusahaan.jpg.webp"
              class="card-img-top" width="100%" height="200" />
            <div class="card-body">
              <h5 class="card-title">Web Development</h5>
              <p class="card-text">
                Ini merupakan contoh website yang saya miliki
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card crop-img">
            <img
              src="https://hosteko.com/htk-blog/gambar/2021/11/Mengenal-Tentang-Displin-Ilmu-Desain-Komunikasi-Visual-1024x576.jpg"
              class="card-img-top" width="100%" height="200" />
            <div class="card-body">
              <h5 class="card-title">Desain</h5>
              <p class="card-text">
                Ini merupakan contoh desain
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- tentang -->
  <div class="container-fluid pt-5 pb-5">
    <div class="container">
      <h2 class="display-3 text-center" id="tentang">Tentang Saya</h2>
      <p class="text-center">

      </p>
      <div class="clearfix pt-5">
        <img src="https://i.pinimg.com/564x/34/3a/e4/343ae43561b84cec04bbf98114e0e742.jpg"
          class="col-md-6 float-md-end mb-3 crop-img" width="300" height="300" />
        <p>
          Halo, saya Dara Shaliha Happyananda Imani, seorang mahasiswa di bidang Informatika. Saat ini, saya sedang
          menempuh pendidikan di semester lima, fokus pada pengembangan web dan teknologi informasi. Saya memiliki
          ketertarikan besar dalam menciptakan solusi digital yang inovatif dan memanfaatkan teknologi untuk
          menyelesaikan masalah sehari-hari. Dengan pengalaman dalam pemrograman dan desain, saya berharap dapat
          memberikan kontribusi yang berarti di dunia teknologi
        </p>

      </div>
    </div>
  </div>
  <!-- Pengalaman -->
  <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
      <h2 class="display-3" id="staff">Pengalaman</h2>
      <p>
        Selama berkuliah, saya mengikuti beberapa pengalaman.
      </p>
      <div class="row pt-4 gx-4 gy-4">
        <div class="col-md-4 text-center tim">
          <img src="https://swandra.com/assets/upload/feature_image/karaoke_ilustrasi.jpg" class="rounded-circle mb-3"
            width="200" <!-- Atur lebar gambar -->
          <!-- Atur tinggi gambar -->
          />
          <h4>Organisasi</h4>
          <p>PSM NADA</p>
        </div>

        <div class="col-md-4 text-center tim">
          <img src="https://i.pinimg.com/564x/66/0e/65/660e65bebf2471e75a89ce18ebc21a06.jpg" class="rounded-circle mb-3"
            width="200" <!-- Atur lebar gambar -->
          <!-- Atur tinggi gambar -->
          />
          <h4>Pekerjaan</h4>
          <p>Barista bakso juara</p>
        </div>

        <div class="col-md-4 text-center tim">
          <img
            src="https://scontent.fcgk30-1.fna.fbcdn.net/v/t39.30808-6/458746633_1855670114917400_3094777247346529227_n.png?_nc_cat=108&ccb=1-7&_nc_sid=a5f93a&_nc_ohc=e2zgrxz-MJoQ7kNvgEw9QNc&_nc_ht=scontent.fcgk30-1.fna&_nc_gid=AAbf6Mt0DVJgxmjLhMAsDfX&oh=00_AYD9RtnzFuJtK_hPe3wGtfcjcDlDe3yH7cbXHhoiuhv-1Q&oe=6709A26C"
            class="rounded-circle mb-3" width="200" <!-- Atur lebar gambar -->
          <!-- Atur tinggi gambar -->
          />
          <h4>Magang</h4>
          <p>Perusahaan Animasi Yogyakarta</p>
        </div>
      </div>
    </div>
  </div>




  <!-- Kontak Saya -->
  <div class="container-fluid pt-5 pb-5 kontak">
    <div class="container">
      <h4 class="display-3 text-center mt-5">Info Kontak</h4>
      <p class="text-center">Anda dapat menghubungi saya melalui:</p>
      <!-- Menampilkan pesan sukses -->
      <?php if (!empty($success_message)) : ?>
        <div class="alert alert-success">
          <?php echo $success_message; ?>
        </div>
      <?php endif; ?>
      <form method="post" action="connect.php">
        <div class="form-group mb-3">
          <label for="nama">Nama:</label>
          <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="form-group mb-3">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group mb-3">
          <label for="pesan">Pesan:</label>
          <textarea name="pesan" id="pesan" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </form>


      <div class="text-center mt-4">
        <p>
          <a href="https://wa.me/6288213651848" target="_blank" class="d-block">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="logo" />
            0882 1365 1848
          </a>
        </p>
        <p>
          <a href="https://instagram.com/dara_shaliha4555" target="_blank" class="d-block">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram"
              class="logo" />
            @dara_shaliha4555
          </a>
        </p>
        <p>
          <a href="mailto:darashalilah@gmail.com" target="_blank" class="d-block">
            email: darashalilah@gmail.com
          </a>
        </p>
      </div>
    </div>
  </div>





  <div class="container text-center pt-5 pb-5">
    All Rights Reserved &copy; 2021
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>




  ></script>
</body>

</html>