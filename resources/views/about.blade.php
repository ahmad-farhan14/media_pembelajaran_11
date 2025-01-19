<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tentang</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body class="d-flex flex-column">
    <main class="flex-shrink-0">
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
          <a class="navbar-brand" href="index.php">Seni Budaya</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Materi</a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                  <li><a class="dropdown-item" href="pengertianmusik.php">Pengertian Musik</a></li>
                  <li><a class="dropdown-item" href="simbolmusik.html">Simbol Musik dan Nilai Estetis</a></li>
                  <li><a class="dropdown-item" href="jenismusik.html">Jenis Musik Tradisional</a></li>
                  <li><a class="dropdown-item" href="fungsialatmusik.html">Alat Musik dan Fungsi Musik Tradisional</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
              <li class="nav-item dropdown">
              <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang</a></li>

            </ul>
            <form class="d-flex mb-2 mb-lg-0 ms-lg-4">
              <button class="btn btn-outline-light" type="button" onclick="window.location.href='login.html'">
                <i class="bi-person-fill me-1"></i>
                Login
              </button>
            </form>
          </div>
        </div>
      </nav>

      <section class="py-5 bg-light">
        <div class="container px-5 my-5">
          <div class="text-center">
            <h2 class="fw-bolder">Tentang</h2>
            <p class="lead fw-normal text-muted mb-5"></p>
          </div>
          <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
            <div class="col mb-5 mb-5 mb-sm-0">
              <div class="text-center">
                <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                <h5 class="fw-bolder">Afra Afrizal</h5>
                <div class="fst text-muted">152022006</div>
                <h6 class="fw-bolder mt-2">Kampus ITENAS Bandung</h6>
              </div>
            </div>
            <div class="col mb-5 mb-5 mb-sm-0">
              <div class="text-center">
                <img class="img-fluid rounded-circle mb-4 px-4" src="assets\image1.png" alt="..." />
                <h5 class="fw-bolder">Ahmad Farhan Zilwansyah</h5>
                <div class="fst text-muted">152023060</div>
                <h6 class="fw-bolder mt-2">Kampus ITENAS Bandung</h6>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
      <div class="container px-5">
        <div class="row align-items-center justify-content-center">
          <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Seni Budaya 2024</div></div>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
