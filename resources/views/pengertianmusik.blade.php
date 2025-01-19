<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pengertian Musik</title>
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
                    <a class="navbar-brand" href="{{ route('index') }}">Seni Budaya</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Beranda</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Materi</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="{{ route('pengertianmusik') }}">Pengertian Musik</a></li>
                                    <li><a class="dropdown-item" href="{{ route('simbolmusik') }}">Simbol Musik dan Nilai Estetis</a></li>
                                    <li><a class="dropdown-item" href="{{ route('jenismusik') }}">Jenis Musik Tradisional</a></li>
                                    <li><a class="dropdown-item" href="{{ route('fungsialatmusik') }}">Alat Musik dan Fungsi Musik Tradisional</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                            <li class="nav-item dropdown">
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang</a></li>
                        </ul>
                        <form class="d-flex mb-2 mb-lg-0 ms-lg-4">
                            <button class="btn btn-outline-light" type="button" onclick="window.location.href='login'">
                                <i class="bi-person-fill me-1"></i>
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- Page Content-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-3">
                            <div class="d-flex align-items-center mt-lg-5 mb-4">
                                <img class="img-fluid rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                                <div class="ms-3">
                                    <div class="fw-bold">Afra Afrizal</div>
                                    <div class="text-muted">152022006</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-lg-5 mb-4">
                                <img class="img-fluid rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                                <div class="ms-3">
                                    <div class="fw-bold">Ahmad Farhan Zilwansyah</div>
                                    <div class="text-muted">152023060</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <!-- Post content-->
                            <article>
                                <!-- Post header-->
                                <header class="mb-4">
                                    <!-- Post title-->
                                    <h1 class="fw-bolder mb-1">Pengertian Musik</h1>
                                    <!-- Post meta content-->
                                    <div class="text-muted fst-italic mb-2">3 Juni 2024</div>
                                    <!-- Post categories-->
                                    <a class="badge bg-custom text-decoration-none link-light" href="#!">Seni Budaya</a>
                                    <a class="badge bg-custom text-decoration-none link-light" href="#!">Musik Tradisional</a>
                                </header>
                                <!-- Preview image figure-->
                                <figure class="mb-4"><img class="img-fluid rounded" src="assets/musik.jpg" alt="..." /></figure>
                                <!-- Post content-->
                                <section style="text-align: justify;">
                                    <p class="fs-5 mb-4">Musik adalah seni yang berfokus pada organisasi dan ekspresi suara. Suara-suara ini, yang dapat berasal dari suara manusia atau alat musik, disusun secara kreatif dalam suatu rangkaian waktu untuk menciptakan pengalaman yang mendalam. Musik mencakup berbagai elemen, termasuk melodi, harmoni, ritme, dan dinamika, yang saling berpadu untuk menghasilkan komposisi yang menggugah perasaan dan memberikan makna.</p>
                                    <p class="fs-5 mb-4">Musik tradisional adalah bentuk seni musik yang turun-temurun dari satu generasi ke generasi berikutnya dalam suatu budaya atau komunitas tertentu. Keunikan musik ini terletak pada akar sejarah dan nilai-nilai budaya yang diwariskan. Melalui warisan lisan dan praktik pemusikan yang dijaga dengan cermat, musik tradisional mencerminkan identitas kultural suatu masyarakat. Setiap daerah atau kelompok etnis memiliki gaya musik tradisionalnya sendiri, menambahkan keberagaman dan kekayaan kultural di dunia musik.</p>
                                    <hr>
                                    
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn btn-custom" onclick="window.location.href='simbolmusik'">
                                            Selanjutnya <i class="bi bi-arrow-right"></i>
                                        </button>
                                    </div>
                                </section>
                            </article>
                            
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
