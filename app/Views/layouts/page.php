
<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keek</title>
    <link rel="preload" href="<?= base_url('css/libraries/bulma.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= base_url('css/libraries/bulma.css') ?>"></noscript>
    <link rel="stylesheet" href="<?= base_url(). "css/page/index.css" ?>">
    <link rel="stylesheet" href="<?= base_url(). "css/page/cookie.css" ?>">
    <link rel="icon" href="<?= base_url('favicon.png') ?>" type="image/png">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Keek">

    <?= $this->renderSection("css") ?>
</head>
<body>
    <div class="loader-page-change" id="loader-page-change">
        <img src="<?= base_url('img/keek_icon.webp') ?>" alt="Keek">
    </div>
    <header class="header-app">
        <div class="logo">
            <a href="<?= base_url() ?>" aria-label="Keek">
                <img src="<?= base_url('img/keek_logo_horizontal.webp') ?>" alt="Keek">
            </a>
        </div>
        <div class="control-container-nav">
            <button id="open-nav-opt" aria-label="Abrir navegación"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 20 20"><path fill="#666666" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75m0 5A.75.75 0 0 1 2.75 9h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 9.75M2.75 14a.75.75 0 0 0 0 1.5h14.5a.75.75 0 0 0 0-1.5z"/></svg></button>
            <button id="close-nav-opt" aria-label="Cerrar navegación" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="none" stroke="#666666" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 6L6 18M6 6l12 12"/></svg></button>
        </div>
        <div class="nav-actions">
            <?= $this->renderSection("nav_option") ?>
            <a href="<?= site_url("login") ?>" aria-label="Publica tus propiedades">
                <span>Publica tus propiedades</span>
            </a>
            <a href="<?= site_url("login") ?>" class="a-loggin-redirect" aria-label="Iniciar sesión">
                <span>Iniciar sesión</span>
            </a>
            <div class="container-profile-userfree-app">

            </div>
        </div>
    </header>
    <div class="container-div-logout">
        <button class="button" id="container-div-logout__button-action">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 1024 1024"><path fill="#666666" d="M116.832 543.664H671.28c17.696 0 32-14.336 32-32s-14.304-32-32-32H118.832l115.76-115.76c12.496-12.496 12.496-32.752 0-45.248s-32.752-12.496-45.248 0l-189.008 194l189.008 194c6.256 6.256 14.432 9.376 22.624 9.376s16.368-3.12 22.624-9.376c12.496-12.496 12.496-32.752 0-45.248zM959.664 0H415.663c-35.36 0-64 28.656-64 64v288h64.416V103.024c0-21.376 17.344-38.72 38.72-38.72h464.72c21.391 0 38.72 17.344 38.72 38.72l1.007 818.288c0 21.376-17.328 38.72-38.72 38.72h-465.71c-21.376 0-38.72-17.344-38.72-38.72V670.944l-64.416.08V960c0 35.344 28.64 64 64 64h543.984c35.36 0 64.016-28.656 64.016-64V64c-.015-35.344-28.671-64-64.015-64z"/></svg>
            Cerrar sessión
        </button>
    </div>
    <?= $this->renderSection("body") ?>
    <footer class="footer site-footer">
        <div class="site-footer__main">
            <section class="site-footer__brand" aria-label="Keek">
                <a href="<?= base_url() ?>" aria-label="Inicio de Keek">
                    <img src="<?= base_url('img/keek_logo_horizontal.webp') ?>" alt="Keek">
                </a>
                <p>La forma más sencilla de encontrar tu próximo hogar.</p>
            </section>

            <section class="site-footer__links">
                <h2>Recursos</h2>
                <a href="<?= site_url('blogs') ?>">Blog</a>
                <a href="<?= site_url('result') ?>">Explorar propiedades</a>
                <a href="mailto:info@keek.com">Contacto</a>
            </section>

            <section class="site-footer__links">
                <h2>Para clientes</h2>
                <a href="<?= site_url('login') ?>">Publicar una propiedad</a>
                <a href="<?= site_url('result/services') ?>">Servicios para el hogar</a>
                <a href="<?= site_url('policy_and_privacy') ?>">Política de privacidad</a>
                <a href="mailto:info@keek.com">Ayuda</a>
            </section>

            <section class="site-footer__links">
                <h2>Sobre Keek</h2>
                <a href="<?= base_url() ?>#sobre-keek">Quiénes somos</a>
                <a href="mailto:info@keek.com?subject=Trabaja%20con%20Keek">Trabaja con nosotros</a>
                <a href="<?= base_url() ?>#mision">Nuestra misión</a>
            </section>

            <section class="site-footer__apps">
                <h2>Descarga la app</h2>
                <img src="<?= base_url('img/app_store.webp') ?>" alt="Próximamente en App Store">
                <img src="<?= base_url('img/google_play.webp') ?>" alt="Próximamente en Google Play">
            </section>
        </div>

        <a class="site-footer__partner __no-loader" href="https://www.kconecta.com" target="_blank" rel="noopener noreferrer" aria-label="Visitar Kconecta">
            <img src="<?= base_url('img/keek-kconecta-banner.webp') ?>" alt="Kconecta: encuentra profesionales de confianza">
        </a>

        <div class="site-footer__bottom">
            <span>© <?= date('Y') ?> Keek</span>
            <a href="<?= site_url('policy_and_privacy') ?>">Privacidad</a>
            <a href="mailto:info@keek.com">info@keek.com</a>
        </div>
        <div id="cookieBanner" class="cookie-banner hide">
            <img src="<?= base_url("img/cookie-monster-clipart-24.webp") ?>" class="img-cookie" alt="Preferencias de cookies de Keek">
            <h1>COOKIES</h1>
            <p>Usamos cookies para mejorar tu experiencia en el sitio, analizar el tráfico y personalizar contenido. Al hacer clic en 'Aceptar', consientes su uso. Consulta nuestra <a href="<?= base_url("policy_and_privacy")?>">Política de Privacidad</a> para más información</p>
            <div class="cookie-buttons">
                <button class="accept" onclick="cookieConfig()">Aceptar</button>
                <button class="deny" onclick="cookieConfig()">Denegar</button>
            </div>
        </div>
    </footer>
    <script src="<?= base_url("js/control_page_show.js") ?>"></script>
    <script src="<?= base_url("js/cookie_config.js") ?>"></script>
    <script>
        const open_nav_opt = document.getElementById("open-nav-opt");
        const close_nav_opt = document.getElementById("close-nav-opt");
        const nav_actions = document.querySelector(".nav-actions");
        open_nav_opt.addEventListener("click", ()=>{
            open_nav_opt.style.display = "none";
            close_nav_opt.style.display = "flex";
            nav_actions.removeAttribute("style");
            nav_actions.style.display = "flex";
        });
        close_nav_opt.addEventListener("click", ()=>{
            open_nav_opt.style.display = "flex";
            close_nav_opt.style.display = "none";
            nav_actions.style.width = "0px";
            nav_actions.style.padding = "0";
            nav_actions.style.overflow = "hidden";
        })
        const btn_profile_user = document.querySelector(".container-profile-userfree-app");
        const container_div_logout = document.querySelector(".container-div-logout");
        const container_div_logout__button_action = document.getElementById("container-div-logout__button-action");
        let state_view_logout = true;
        btn_profile_user.addEventListener("click", ()=>{
            const ancho = window.innerWidth;
            const alto = window.innerHeight;
            if (alto > ancho){
                open_nav_opt.style.display = "flex";
                close_nav_opt.style.display = "none";
                nav_actions.style.width = "0px";
                nav_actions.style.padding = "0";
                nav_actions.style.overflow = "hidden";
            }
            if (state_view_logout){
                container_div_logout.style.display = "block";
                state_view_logout = false;
            }else{
                container_div_logout.style.display = "none";
                state_view_logout = true;
            }
        })
        container_div_logout__button_action.addEventListener("click", ()=>{
            localStorage.removeItem("userfree");
            location.reload();
        })
    </script>
    <?= $this->renderSection("js") ?>
</body>
</html>
