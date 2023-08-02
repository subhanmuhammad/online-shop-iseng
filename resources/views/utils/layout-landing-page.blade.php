<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed">
        <div class="container  ">
            <div class="container-fluid mb-3">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse gap-2" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <a href="{{ route('login') }}" class="btn btn-outline-light text-black">Masuk</a>
                    </form>
                    <a href="{{ route('register') }}" class="btn btn-danger">Daftar</a>
                    <a href="#" class="btn btn-outline-light"><svg xmlns="http://www.w3.org/2000/svg"
                            width="18" height="20" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg></a>

                </div>
            </div>
        </div>
    </nav>


    <div class="container mt-16">
        @yield('content_landing_page')
    </div>



    <footer id="footer">
        <div class="footer-top">
            <div class="container shadow-4xl">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-contact">
                        <div style="display: flex;align-items: center;">
                            <h2>HAN</h2>&nbsp;&nbsp;&nbsp;
                            <h3 style="margin-top: 0.2em;">Store Palu</h3>
                        </div>
                        <p>
                            Jl. Puenjidi No. 3 <br>
                            Kel. Kabonena, Kec. Ulujadi<br>
                            Kota Palu <br><br>
                            <strong>Phone:</strong> 0822-9151-3908<br>
                            <strong>Email:</strong> subhan.cadel03@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Metode Pembayaran</h4>
                        <div>
                            <img src="http://asfrozenpalu.com/public/bank_footer.png">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <div style="display: flex;">
                            <img src="http://asfrozenpalu.com/public/mui_halal.png" style="width: 30%;">
                        </div>
                        <h4 style="margin-top: 0.5em; text-align: left;">Ikuti Kami Di</h4>
                        <div class="social-links text-center text-md-left pt-3 pt-md-0">
                            <a href="bit.ly/maudongasfrozen " class="whatsapp" style="background: #ec1f25;"><i
                                    class="bx bxl-whatsapp"></i></a>
                            <a href="https://www.facebook.com/" class="facebook" style="background: #ec1f25;"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/subanzl__/" class="instagram"
                                style="background: #ec1f25;"><i class="bx bxl-instagram"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left justify-center">
                <div class="copyright">
                    2023&nbsp;&copy; Copyright <strong><span style="font-size: 1.2em;">HAN</span><span> Store
                            Palu</span></strong>.
                </div>
                <div class="credits">
                    All Rights Reserved
                </div>
            </div>

        </div>
    </footer><!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
</body>

</html>
