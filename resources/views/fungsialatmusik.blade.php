<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Alat Musik dan Fungsi Musik Tradisional</title>
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
                                    <h1 class="fw-bolder mb-1">Alat Musik dan Fungsi Musik Tradisional</h1>
                                    <!-- Post meta content-->
                                    <div class="text-muted fst-italic mb-2">3 Juni 2024</div>
                                    <!-- Post categories-->
                                    <a class="badge bg-custom text-decoration-none link-light" href="#!">Seni Budaya</a>
                                    <a class="badge bg-custom text-decoration-none link-light" href="#!">Musik Tradisional</a>
                                </header>
                                <!-- Preview image figure-->
                                <figure class="mb-4"><img class="img-fluid rounded" src="assets/musik.jpg" alt="..." /></figure>
                                <!-- Post content-->
                                <section class="fs-5 mb-4" style="text-align: justify;">
                                    <ol>
                                        <li><strong>Alat Musik Tradisional</strong></li>
                                    </ol>
                                    <ul>
                                        <li><strong>Gong</strong>: Alat musik tradisional Jawa Tengah yang termasuk ke dalam alat musik idiofon, menghasilkan suara dari getaran keseluruhan alat musik itu sendiri.</li>
                                        <figure class="mb-4 mt-2 text-center"> 
                                            <img class="img-fluid rounded mx-auto" src="assets/gong.jpg" alt="..." /> 
                                        </figure>
                                        
                                        <li>Angklung: Alat musik tradisional yang terdiri dari dua, tiga atau empat bambu dengan susunan dua, tiga dan empat nada, yang digoyangkan atau digetarkan.</li>
                                        <figure class="mb-4 mt-2 text-center"> 
                                            <img class="img-fluid rounded mx-auto" src="assets/angklung.jpg" alt="..." /> 
                                        </figure>
                                        <li><strong>Kecapi</strong>: Alat musik petik yang sering digunakan di Jawa Barat dan Jawa Tengah, memiliki bentuk setengah lingkaran.</li>
                                        <figure class="mb-4 mt-2 text-center"> 
                                            <img class="img-fluid rounded mx-auto" src="assets/kecapi.jpg" alt="..." /> 
                                        </figure>
                                        <li><strong>Sasando</strong>: Alat musik tradisional dari Nusa Tenggara Timur yang dimainkan untuk mengiringi lagu pada tarian tradisional masyarakat NTT. Sasando telah dimodifikasi menjadi sasando elektrik sejak tahun 1960-an.</li>
                                        <figure class="mb-4 mt-2 text-center"> 
                                            <img class="img-fluid rounded mx-auto" src="assets/sasando.jpg" alt="..." /> 
                                        </figure>
                                    </ul>
                                    
                                    <ol start="2">
                                        <li><strong>Fungsi Musik Tradisional</strong></li>
                                    </ol>
                                    <ul>
                                        <li><strong>Sarana Upacara Adat</strong>: Musik tradisional sering digunakan dalam upacara adat sebagai bagian integral dari ritual dan kegiatan keagamaan. Kehadiran musik tradisional dalam upacara adat merupakan bagian yang mutlak dan tidak bisa dihilangkan.</li>
                                        <figure class="mb-4 mt-2 text-center"> 
                                            <img class="img-fluid rounded mx-auto" src="assets/upacaraadat.jpg" alt="..." /> 
                                        </figure>
                                        <li><strong>Pengiring Tarian</strong>: Musik tradisional sering menjadi pengiring tarian tradisional, menciptakan suasana yang khas dan memperkaya pengalaman seni pertunjukan.</li>
                                        <figure class="mb-4 mt-2 text-center"> 
                                            <img class="img-fluid rounded mx-auto" src="assets/pengiringtarian.jpg" alt="..." /> 
                                        </figure>
                                        <li><strong>Sarana Komunikasi</strong>: Musik tradisional juga digunakan sebagai sarana komunikasi di masyarakat, baik untuk menyampaikan pesan-pesan tertentu maupun sebagai ekspresi budaya dan identitas suatu daerah.</li>
                                        <figure class="mb-4 mt-2 text-center"> 
                                            <img class="img-fluid rounded mx-auto" src="assets/saranakomunikasi.jpg" alt="..." /> 
                                        </figure>
                                        <li><strong>Sarana Hiburan</strong>: Fungsi hiburan dari musik tradisional memberikan kesegaran dan hiburan bagi individu maupun kelompok dalam masyarakat.</li>
                                        <figure class="mb-4 mt-2 text-center"> 
                                            <img class="img-fluid rounded mx-auto" src="assets/saranahiburan.jpg" alt="..." /> 
                                        </figure>
                                        <li><strong>Sarana Ekonomi</strong>: Musik tradisional juga dapat menjadi sumber pendapatan bagi masyarakat, baik melalui pertunjukan musik, penjualan rekaman, atau kegiatan terkait lainnya.</li>
                                        <figure class="mb-4 mt-2 text-center"> 
                                            <img class="img-fluid rounded mx-auto" src="assets/saranaekonomi.jpg" alt="..." /> 
                                        </figure>
                                        <li><strong>Sarana Pendidikan</strong>: Musik tradisional juga memiliki peran dalam pendidikan, baik sebagai media pembelajaran seni budaya maupun dalam pengembangan kreativitas dan apresiasi seni.</li>
                                        <figure class="mb-4 mt-2 text-center"> 
                                            <img class="img-fluid rounded mx-auto" src="assets/saranapendidikan.jpg" alt="..." /> 
                                        </figure>
                                    </ul>
                                    
                                    <p class="fs-5 mb-4">Melalui berbagai fungsi ini, musik tradisional tidak hanya menjadi bagian dari warisan budaya yang berharga, tetapi juga memainkan peran penting dalam kehidupan sehari-hari masyarakat Indonesia, baik secara sosial, budaya, maupun ekonomi.</p>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-custom" onclick="window.location.href='jenismusik'">
                                            <i class="bi bi-arrow-left"></i> Sebelumnya 
                                        </button>
                                        <button type="button" class="btn btn-custom" onclick="window.location.href='latihansoal'">
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
