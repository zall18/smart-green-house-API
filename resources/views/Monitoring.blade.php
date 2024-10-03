<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function() {
                $("#suhu").load("{{ url('bacasuhu') }}");
                $("#kelembapan").load("{{ url('bacakelembapan') }}");
                $("#kelembapanTnh").load("{{ url('bacakelembapanTnh') }}");
            }, 1000);
        });
    </script>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  {{-- <body>
    <div class="container mt-5" style="text-align: center">
        <img src="{{ ('images/LaravelLogo.png') }}" style="width: 150px" alt="" >
        <h2 class="text-center fw-bold">Nyobaan</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-white fw-bold text-center bg-danger">
                      Suhu
                    </div>
                    <div class="card-body text-center" style="font-size: 70px">
                      <span id="suhu">0</span> <span style="vertical-align: top; font-size: 30px;font-weight: bold">°C</span>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-white fw-bold text-center bg-primary">
                      Kelembapan
                    </div>
                    <div class="card-body text-center" style="font-size: 70px">
                      <span id="kelembapan">0</span> <span style="vertical-align: top; font-size: 30px;font-weight: bold">%</span>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-white fw-bold text-center bg-primary">
                      Kelembapan Tanah
                    </div>
                    <div class="card-body text-center" style="font-size: 70px">
                      <span id="kelembapanTnh">0</span> <span style="vertical-align: top; font-size: 30px;font-weight: bold">%</span>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body> --}}

  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">IzMan Mini Green House</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#suhu_udara">Suhu Udara</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kelembapanudara">kelembapan Udara</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kelembapantanah">kelembaban Tanah</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">IzMan Mini Green House</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Preserve your plants with IjMan Green House</h2>
                    <a class="btn text-white fw-bold" style="background: rgb(7, 255, 7)" href="#about">Get Started</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-12">
                    <h2 class="text-white mb-4">Apa itu Green House ?</h2>
                    <p class="text-white-50">
                        Greenhouse merupakan inovasi pertanian modern yang memungkinkan kita mengoptimalkan pertumbuhan
                        tanaman. Dengan menciptakan lingkungan terkendali, seperti suhu, kelembaban, dan cahaya yang
                        ideal, greenhouse mampu menghasilkan panen berkualitas tinggi sepanjang tahun. Tak hanya itu,
                        greenhouse juga sangat efisien dalam penggunaan sumber daya, seperti air dan pupuk, serta
                        meminimalkan penggunaan pestisida kimia. Hasilnya, kita dapat menikmati sayuran segar,
                        buah-buahan eksotis, dan aneka tanaman hias yang bebas dari residu berbahaya. Dan di bawah kami
                        membuat tampilan untuk monitoring mini green house kami terdiri dari kelembapan tanah,
                        kelembaban udara, perairan serta ada juga lampu led
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="assets/img/green-house.jpg" alt="..." />
        </div>
    </section>

    <section class="projects-section bg-light" id="suhu_udara">
      <div class="container px-4 px-lg-5">
        <div class="text-center mb-5">
          <h1 class="text-dark">Monitoring Suhu Udara</h1>
      </div>
          <!-- Featured Project Row-->
          <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
              <div class="col-xl-7 col-lg-6">
                  <div class="card">
                      <div class="card-header text-white fw-bold text-center" style="background: rgb(0, 255, 0);font-size: 30px;">
                        Suhu Udara
                      </div>
                      <div class="card-body text-center" style="font-size: 70px">
                        <span id="suhu">0</span> <span style="vertical-align: top; font-size: 30px;font-weight: bold">°C</span>
                      </div>
                    </div>
              </div>

              <div class="col-xl-5 col-lg-6">
                  <div class="featured-text text-center text-lg-left">
                      <h4>Suhu Udara</h4>
                      <p class="text-dark-50 mb-0">Suhu ideal di dalam greenhouse sangat bervariasi tergantung jenis
                        tanaman yang Anda budidayakan. Setiap tanaman memiliki kisaran suhu optimal yang berbeda
                        untuk pertumbuhan dan perkembangannya.

                        Secara umum, suhu yang ideal untuk sebagian besar tanaman sayuran dan bunga berkisar antara
                        20°C hingga 28°C. Namun, ada beberapa tanaman yang lebih menyukai suhu yang lebih dingin
                        atau lebih hangat</p>
                  </div>
              </div>
              
          </div>

      </div>
  </section>


    <section class="projects-section bg-light" id="kelembapanudara">
        <div class="container px-4 px-lg-5">
            <div class="text-center mb-5">
                <h1 class="text-dark">Monitoring kelembapan Udara</h1>
            </div>
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">

                <div class="col-xl-5 col-lg-6">
                    <div class="featured-text text-center text-lg-left">
                        <h4>kelembaban Udara</h4>
                        <p class="text-dark-50 mb-0">Kelembaban udara yang ideal di dalam greenhouse juga sangat
                            bervariasi tergantung jenis tanaman yang Anda budidayakan. Sama seperti suhu, setiap tanaman
                            memiliki kisaran kelembaban optimal yang berbeda untuk pertumbuhannya.

                            Secara umum, kelembaban udara yang baik untuk sebagian besar tanaman berkisar antara 50%
                            hingga 70%. Namun, ada beberapa tanaman yang lebih menyukai kelembaban yang lebih tinggi
                            atau lebih rendah.</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="card">
                        <div class="card-header text-white fw-bold text-center" style="background: rgb(0, 255, 0);font-size: 30px;">
                          Kelembapan
                        </div>
                        <div class="card-body text-center" style="font-size: 70px">
                          <span id="kelembapan">0</span> <span style="vertical-align: top; font-size: 30px;font-weight: bold">%</span>
                        </div>
                      </div>
                </div>
            </div>

        </div>
    </section>


    <section class="projects-section bg-light" id="kelembapantanah">
        <div class="container px-4 px-lg-5">
            <div class="text-center mb-5">
                <h1 class="text-dark">Monitoring kelembapan Tanah</h1>
            </div>
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="card">
                        <div class="card-header text-white fw-bold text-center" style="background: rgb(0, 255, 0);font-size: 30px;">
                          Kelembapan Tanah
                        </div>
                        <div class="card-body text-center" style="font-size: 70px">
                          <span id="kelembapanTnh">0</span> <span style="vertical-align: top; font-size: 30px;font-weight: bold">%</span>
                        </div>
                      </div>
                </div>

                <div class="col-xl-5 col-lg-6">
                    <div class="featured-text text-center text-lg-left">
                        <h4>kelembaban Tanah</h4>
                        <p class="text-dark-50 mb-0">Kelembapan tanah yang ideal di dalam greenhouse sangat penting untuk pertumbuhan tanaman yang optimal. Namun, tidak ada angka pasti yang berlaku untuk semua jenis tanaman, karena kebutuhan akan kelembapan tanah sangat bervariasi tergantung pada jenis tanaman, tahap pertumbuhan, dan kondisi lingkungan lainnya.</p>
                    </div>
                </div>
                
            </div>

        </div>
    </section>

    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+1 (555) 902-8832</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Your Website 2023</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>