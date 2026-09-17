<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Andika</title>

    <!-- Font Awesome CDN (Icon Online) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>

    @yield('content')

    <script>
    document.addEventListener("DOMContentLoaded", function () {

        const navbar = document.querySelector(".navbar-custom");

        /* =========================================
           1. LOGIKA HAMBURGER MENU (MOBILE)
        ========================================= */
        const hamburgerToggle = document.getElementById('hamburgerToggle');
        const navMenu = document.getElementById('navMenu');

        if (hamburgerToggle && navMenu) {
            hamburgerToggle.addEventListener('click', function () {
                navMenu.classList.toggle('active');
            });

            // Otomatis menutup menu setelah link diklik
            document.querySelectorAll('.menu a').forEach(link => {
                link.addEventListener('click', function () {
                    navMenu.classList.remove('active');
                });
            });
        }

        /* =========================================
           2. LOGIKA HIDE/SHOW NAVBAR SAAT SCROLL
        ========================================= */
        if (!navbar) return;

        let hideTimer;

        window.addEventListener("scroll", function () {

            const scrollY = window.scrollY;

            /* MASIH DI HERO */
            if (scrollY < 10) {
                clearTimeout(hideTimer);
                navbar.classList.remove("navbar-hidden");
                navbar.classList.remove("navbar-floating");
                return;
            }

            /* SUDAH MASUK SECTION LAIN */
            navbar.classList.add("navbar-floating");
            navbar.classList.remove("navbar-hidden");

            /* Reset timer */
            clearTimeout(hideTimer);

            /* BERHENTI 3 DETIK → HILANG */
            hideTimer = setTimeout(function () {
                navbar.classList.add("navbar-hidden");
            }, 3000);

        });

    });
</script>


</body>
</html>