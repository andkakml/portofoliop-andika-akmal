<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Andika</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @yield('content')

    <script>
    document.addEventListener("DOMContentLoaded", function () {

    const navbar = document.querySelector(".navbar-custom");

    if (!navbar) return;

    let hideTimer;

    window.addEventListener("scroll", function () {

        const scrollY = window.scrollY;


        /* =========================================
           MASIH DI HERO
        ========================================= */

        if (scrollY < 10) {

            clearTimeout(hideTimer);

            navbar.classList.remove("navbar-hidden");
            navbar.classList.remove("navbar-floating");

            return;
        }


        /* =========================================
           SUDAH MASUK ABOUT / SECTION LAIN
        ========================================= */

        navbar.classList.add("navbar-floating");

        /* Saat scroll → navbar muncul */

        navbar.classList.remove("navbar-hidden");


        /* Reset timer */

        clearTimeout(hideTimer);


        /* =========================================
           BERHENTI 3 DETIK → HILANG
        ========================================= */

        hideTimer = setTimeout(function () {

            navbar.classList.add("navbar-hidden");

        }, 3000);

    });

});
</script>

</body>
</html>