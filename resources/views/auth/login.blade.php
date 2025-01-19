<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                            </div>
                            <div id="flashdata" class="alert" style="display: none;"></div>
                            <form class="user" id="loginForm">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Email...">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password...">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Masuk</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="register">Buat Akun!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery Easing -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Custom validation script -->
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            const email = document.getElementById('exampleInputEmail').value.trim();
            const password = document.getElementById('exampleInputPassword').value.trim();
            const flashdata = document.getElementById('flashdata');

            // Validasi email dan password
            if (email.toLowerCase() === 'siswa@email.com' && password === 'siswa') {
                // Jika valid, redirect ke halaman index.html
                window.location.href = "{{ route('index') }}";
            } else {
                // Jika tidak valid, tampilkan pesan error
                flashdata.className = 'alert alert-danger';
                flashdata.style.display = 'block';
                flashdata.innerHTML = 'Email atau Password salah. Silakan coba lagi.';
            }
        });
    </script>
</body>

</html>
