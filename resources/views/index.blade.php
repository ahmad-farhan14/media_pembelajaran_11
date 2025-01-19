<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Seni Budaya Kelas X</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="{{ route('index') }}">Seni Budaya</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Beranda</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Materi</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <a class="dropdown-item" href="{{ route('pengertianmusik') }}">Pengertian Musik</a>
                                    <li><a class="dropdown-item" href="{{ route('simbolmusik') }}">Simbol Musik dan Nilai Estetis</a></li>
                                    <li><a class="dropdown-item" href="{{ route('jenismusik') }}">Jenis Musik Tradisional</a></li>
                                    <li><a class="dropdown-item" href="{{ route('fungsialatmusik') }}">Alat Musik dan Fungsi Musik Tradisional</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                                <li class="nav-item dropdown">
                            <li class="nav-item"><a class="nav-link" href="about">Tentang</a></li>
                            
                        </ul>
                        <form class="d-flex mb-2 mb-lg-0 ms-lg-4">
                            <button class="btn btn-outline-light" type="button" onclick="window.location.href='{{ route('login') }}'">
                                <i class="bi-person-fill me-1"></i>
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Seni Budaya Kelas X</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Menjelajahi Karya Indah, Meresapi Makna, Bersama Seni Budaya Kelas X</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-custom btn-lg px-4 me-sm-3" href="#materi">Lihat Materi</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="assets/background.jpeg" alt="..." /></div>
                    </div>
                </div>
            </header>
            
            <section class="py-5" id="materi">
                <div class="container px-5">
                    <h1 class="fw-bolder fs-5 mb-4">Materi</h1>
                    <div class="card border-0 shadow rounded-3 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="row gx-0">
                                <div class="col-lg-6 col-xl-5 py-lg-5">
                                    <div class="p-4 p-md-5">
                                        <div class="badge bg-custom bg-gradient rounded-pill mb-2">Musik Tradisional</div>
                                        <div class="h2 fw-bolder">Pengertian Musik</div>
                                        <p>Musik adalah seni yang berfokus pada organisasi dan ekspresi suara. Suara-suara ini, yang dapat berasal dari suara manusia atau alat musik, disusun secara kreatif ...</p>
                                        <a class="stretched-link text-decoration-none" href="{{ url('/pengertianmusik')}}">
                                            Baca Selengkapnya
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-7"><div class="bg-featured-blog" style="background-image: url('assets/musik.jpg')"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>

            <section class="py-5">
                <div class="container px-5">
                    <div class="card border-0 shadow rounded-3 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="row gx-0">
                                <div class="col-lg-6 col-xl-5 py-lg-5">
                                    <div class="p-4 p-md-5">
                                        <div class="badge bg-custom bg-gradient rounded-pill mb-2">Musik Tradisional</div>
                                        <div class="h2 fw-bolder">Simbol Musik dan Nilai Estetis</div>
                                        <p>Simbol musik adalah elemen penting dalam notasi musik yang membantu dalam membaca dan memahami musik. Beberapa jenis ...</p>
                                        <a class="stretched-link text-decoration-none" href="{{ route('jenismusik') }}">
                                            Baca Selengkapnya
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-7"><div class="bg-featured-blog" style="background-image: url('assets/simbolmusik.jpg')"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-5">
                <div class="container px-5">
                    <div class="card border-0 shadow rounded-3 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="row gx-0">
                                <div class="col-lg-6 col-xl-5 py-lg-5">
                                    <div class="p-4 p-md-5">
                                        <div class="badge bg-custom bg-gradient rounded-pill mb-2">Musik Tradisional</div>
                                        <div class="h2 fw-bolder">Jenis Musik Tradisional</div>
                                        <p>Beberapa jenis musik tradisional Nusantara yang dapat ditemui di Indonesia antara lain:...</p>
                                        <a class="stretched-link text-decoration-none" href="{{ route('jenismusik') }}">
                                            Baca Selengkapnya
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-7"><div class="bg-featured-blog" style="background-image: url('assets/jenismusik.jpg')"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-5 mb-5">
                <div class="container px-5">
                    <div class="card border-0 shadow rounded-3 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="row gx-0">
                                <div class="col-lg-6 col-xl-5 py-lg-5">
                                    <div class="p-4 p-md-5">
                                        <div class="badge bg-custom bg-gradient rounded-pill mb-2">Musik Tradisional</div>
                                        <div class="h2 fw-bolder">Alat Musik dan Fungsi Musik Tradisional</div>
                                        <p>Alat-alat musik tradisional merupakan bagian penting dari warisan budaya Indonesia yang kaya dan beragam. Mereka tidak hanya memainkan peran dalam kehidupan...</p>
                                        <a class="stretched-link text-decoration-none" href="{{ route('fungsialatmusik') }}">
                                            Baca Selengkapnya
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-7"><div class="bg-featured-blog" style="background-image: url('assets/fungsimusik.jpg')"></div></div>
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
