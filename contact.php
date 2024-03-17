<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMA TARUNA KARTIKA</title>
    <link rel="shortcut icon" href="asset/logo-removebg-preview.png" type="image/x-icon">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="sxtyle.css">
    <link rel="stylesheet" href="webstyle.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <!--  -->
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- End -->

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color:white ;">
        <div class="container">
            <a class="navbar-brand " href="index.html">SMA TARUNA KARTIKA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2 bi bi-house-heart" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 bi bi-person" href="profil.html">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 bi bi-house-heart" href="fasilitas.html">Fasilitas</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle bi bi-people" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Siswa
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="direktori_siswa.html">Direktori Siswa</a></li>
                            <li><a class="dropdown-item" href="direktori_guru.html">Direktori Guru</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 bi bi-camera2" href="galeri.html"> Galery </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 bi bi-envelope-heart" href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            
        </div>
        </div>
    </nav>
    <!-- End -->

     <!-- Contact Us -->
    <section id="contact" class="mb-5">
    <div class="blog-area">
            <div class="blog-inner area-padding">
                <div class="blog-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center mt-5 mb-2">
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                    </div>

                    <form action="#" method="post" role="form" class="php-email-form p-3 p-md-4">
                        <div class="row">
                            <div class="col-xl-6 form-group">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Your Name" required>
                            </div>
                            <div class="col-xl-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <p></p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <p></p>
                        <div class="form-group">
                            <textarea class="form-control" name="pesan" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="cap">Your message has been sent. Thank you!</div>
                        </div>
                        <input type="submit" name="simpan" value="Send" class="send">
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- end -->

   <!-- Footer -->
    <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-4 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Sumatrautara <br>
              Medan, jln.Eka Bakti No 58 Gedung Johor<br>
            </p>
          </div>

        </div>

        <div class="col-lg-4 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong>0831-8790-1123<br>
              <strong>Email:</strong> smatarunakartika@sch.ac.id<br>
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2F%3Flang%3Did" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/luhut.sihotang.75" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/lulahsb_?igshid=MzNlNGNkZWQ4Mg==" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://github.com/Hasibuan05" class="github"><i class="bi bi-github"></i></a>
            <a href="https://www.google.com/intl/id/gmail/about/" class="email"><i class="bi-envelope"></i></a>
            
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SMA TARUNA KARTIKA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <b>putriutami</b>
      </div>
    </div>

  </footer>
    <!-- end -->
     <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>