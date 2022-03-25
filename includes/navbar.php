<header class="primary-header">

    <div>
        <img class="logo" src="images/inovasyon-logo.png">
    </div>

    <button class="mobile-nav-toggle" aria-controls="primary-nav">
        <span class="material-icons">
            menu
        </span>
    </button>

    <nav>

        <ul id="primary-nav" data-visible="false" class="primary-nav">

            <li>
                <a href="#">Eragon</a>
            </li>

            <li>
                <a href="index.php">Ana Sayfa</a>
            </li>

            <li>
                <a href="hakkimizda.php">Hakkımızda</a>
            </li>

            <li>
                <a href="inovasyon.php">İnovasyon</a>
            </li>

            <li>
                <a href="iletisim.php">İletişim</a>
            </li>

        </ul>

    </nav>

</header>






<!-- Loading Screen -->


<section class="page-loader">
    <div class="loading-animation"></div><br>
    <h1>SAYFA YÜKLENİYOR</h1>
</section>

<script>

    window.addEventListener("load", () => {
        const pageLoader = document.querySelector(".page-loader");
        pageLoader.classList.add("fade-out");
    });

</script>