<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Journal</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <!-- ICON -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
  </head>
  <body>
    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#"><i>My Journal</i></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" target="_blank">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- HERO START -->
    <section
      id="hero"
      class="text-center p-5 pt-5 bg-primary-subtle text-sm-start"
    >
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img
            class="img-fluid"
            src="assets/1 agustus 23.jpg"
            alt=""
            width="400"
          />
          <div>
            <h1 class="fw-bold display-4">Welcome to My Journal</h1>
            <h4 class="lead display-7">
              Website yang berisi foto dan cerita-cerita yang berisi kenangan
              yang ada disetiap foto. Mulai dari foto masa kecil dan foto
              bersama teman-teman.
            </h4>
          </div>
        </div>
      </div>
    </section>
    <!-- HERO END -->

    <!-- ARTICLE START -->
    <section id="article" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Article</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
          <?php
          $sql = "SELECT * FROM article ORDER BY tanggal DESC";
          $hasil = $conn->query($sql); 

          while($row = $hasil->fetch_assoc()){
          ?>
            <div class="col">
              <div class="card h-100">
                <img src="assets/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title"><?= $row["judul"]?></h5>
                  <p class="card-text">
                    <?= $row["isi"]?>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-body-secondary">
                    <?= $row["tanggal"]?>
                  </small>
                </div>
              </div>
            </div>
            <?php
          }
          ?> 
        </div>
      </div>
    </section>
    <!-- ARTICLE END -->

    <!-- GALLERY START -->
    <section id="gallery" class="bg-primary-subtle pt-1 pb-5">
      <div class="container">
        <div class="title text-center mb-4 mt-3">
          <h1 class="fw-bold display-4 pb-3">Gallery</h1>
        </div>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/sd.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="assets/5 juli.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="assets/6 oktober.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="assets/sma.jpg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- GALLERY END -->

    <!-- SCHADULE START  -->
    <section id="schedule" class="text-center p-5">
      <div class="container">
          <h1 class="fw-bold display-5 pb-5">Jadwal Kuliah & Kegiatan Mahasiswa</h1>
          <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
              <div class="col">
                  <div class="card h-100 border-primary">
                      <div class="card-header bg-primary text-light">
                          Senin
                      </div>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item border-primary-subtle">
                              <h5 class="card-title p-2">12:30-15:00</h5>
                              <p class="card-text">Probabilitas dan Statistik</p>
                              <p class="card-text">Ruang H.4.8</p>
                          </li>
                          <li class="list-group-item">
                              <h5 class="card-title p-2">15:30-18:00</h5>
                              <p class="card-text">Sistem Operasi</p>
                              <p class="card-text">Ruang H.4.9</p>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col">
                  <div class="card h-100 border-success">
                      <div class="card-header bg-success text-light">
                          Selasa
                      </div>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item border-success-subtle">
                              <h5 class="card-title p-2">09:30-12:00</h5>
                              <p class="card-text">Rekayasa Perangkat Lunak</p>
                              <p class="card-text">Ruang H.4.10</p>
                          </li>
                          <li class="list-group-item">
                              <h5 class="card-title p-2">15:30-18:00</h5>
                              <p class="card-text">Data Mining</p>
                              <p class="card-text">Ruang H.3.11</p>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col">
                  <div class="card h-100 border-danger">
                    <div class="card-header bg-danger text-light">
                      Rabu
                      </div>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item border-danger-subtle">
                              <h5 class="card-title p-2">09:30-12:00</h5>
                              <p class="card-text">Kriptografi</p>
                              <p class="card-text">Ruang H.4.11</p>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col">
                  <div class="card h-100 border-warning">
                    <div class="card-header bg-warning text-light">
                      Kamis
                      </div>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item border-warning-subtle">
                              <h5 class="card-title p-2">09:30-12:00</h5>
                              <p class="card-text">Logika Informatika</p>
                              <p class="card-text">Ruang H.4.10</p>
                          </li>
                          <li class="list-group-item">
                              <h5 class="card-title p-2">14:10-15:50</h5>
                              <p class="card-text">Basis Data</p>
                              <p class="card-text">Ruang H.5.2</p>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col">
                  <div class="card h-100 border-info">
                    <div class="card-header bg-info text-light">
                      Jum'at
                      </div>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item border-info-subtle">
                              <h5 class="card-title p-2">10:20-12:00</h5>
                              <p class="card-text">Pemrograman Berbasis Web</p>
                              <p class="card-text">Ruang D.2.J</p>
                          </li>
                          <li class="list-group-item">
                              <h5 class="card-title p-2">14:10-15:50</h5>
                              <p class="card-text">Basis Data</p>
                              <p class="card-text">Ruang D.3.M</p>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col">
                  <div class="card h-100 border-secondary">
                    <div class="card-header bg-secondary text-light">
                      Sabtu
                      </div>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                              <h5 class="card-title p-2">Tidak ada jadwal</h5>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col">
                  <div class="card h-100 border-dark">
                    <div class="card-header bg-dark text-light">
                      Minggu
                      </div>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                              <h5 class="card-title p-2">Tidak ada jadwal</h5>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </section>
    <!-- SCHADULE END -->

    <!-- PROFILE START -->
    <section id="profile"class="text-center p-5 bg-primary-subtle mt-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Profil Mahasiswa</h1>
        <div class="d-lg-flex flex-md-row align-items-center justify-content-evenly">
          <img src="assets/myphoto.jpg" alt="" class= "img-fluid rounded-circle mb-4" width="200">
        <div class="p-3">
          <h2 class="text-center text-lg-start">Kamilah Falah Syifa</h2>
          <table class="text-start p-5">
            <tr>
              <td><b>NIM</b></td>
              <td class="p-2">:</td>
              <td>A11.2023.15166</td>
            </tr>
            <tr>
              <td><b>Program studi</b></td>
              <td class="p-2">:</td>
              <td>Teknik Informatika</td>
            </tr>
            <tr>
              <td><b>Email</b></td>
              <td class="p-2">:</td>
              <td>111202315166@mhs.dinus.ac.id</td>
            </tr>
            <tr>
              <td><b>Telepon</b></td>
              <td class="p-2">:</td>
              <td>+6281226403786</td>
            </tr>
            <tr>
              <td><b>Alamat</b></td>
              <td class="p-2">:</td>
              <td>Jl Bima 1, Pendrikan Kidul, Semarang Tengah, Semarang</td>
            </tr>
          </table>
        </div>
        </div>
     </section>
    <!-- PROFILE END -->

    <!-- FOOTER START -->
    <footer class="text-center p-3">
      <div class="text-center mt-4">
        <a href="https://www.instagram.com/udinusofficial"
          ><i class="bi bi-instagram h2 p-2 text-dark" href=""></i
        ></a>
        <a href="https://twitter.com/udinusofficial"
          ><i class="bi bi-twitter-x h2 p-2 text-dark"></i
        ></a>
        <a href="https://wa.me/+6281226403786"
          ><i class="bi bi-whatsapp h2 p-2 text-dark"></i
        ></a>
      </div>
      <div class="text-center mt-1 mb-2">
        <h6>Kamilah Falah Syifa © 2024</h6>
      </div>
    </footer>
    <!-- FOOTER END -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
