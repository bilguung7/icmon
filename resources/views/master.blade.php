<html>
    <head>
        <title>iCMON</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.0/sweetalert2.js" integrity="sha512-NOSPf2HNX/D8F16iEa9NPVu76cs/12CGcUXdK9o5TUIpPm2QZJFkao/DpVFDvUf6mZG6OwYrO9ZuWJ5cwPqEGA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

    </head>

<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>

<!--Navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark pt-3">
        <div class="container">
        <a href="/" class="navbar-brand"><img src="images/logo.png" class="logo" alt="logo" width="70px"></a>

            <button class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/#apple" class="nav-link">КОД ГАРГУУЛАХ</a>
                </li>

                <li class="nav-item">
                    <a href="/#find" class="nav-link">УТАС АЛДСАН/ОЛСОН</a>
                </li>
                <li class="nav-item">
                    <a href="/#about" class="nav-link">БИДНИЙ ТУХАЙ</a>
                </li>
                <li class="nav-item">
                    <a href="/#faq" class="nav-link">ТҮГЭЭМЭЛ АСУУЛТ</a>
                </li>

            </ul>
        </div>
        </div>
    </nav>

@yield('content');


     <!-- Footer-->
     <footer class="p-5 bg-dark text-white text-center
    position-relative">
        <div class="container">
            <p class="lead">Copyright &copy 2022 iCMON</p>
            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>

    </footer>


	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
</body>
</html>