<nav class="navbar">
    <div class="container nav-inner">
        <a href="<?= base_url('/') ?>" class="logo">
            <span style="color: var(--primary);">//</span> Guardian Patagonico
        </a>
        <div class="nav-links">
            <a href="<?= base_url('/#servicios') ?>">Servicios</a>
            <a href="<?= base_url('/#experiencia') ?>">Experiencia</a>
            <a href="<?= base_url('/#cobertura') ?>">Cobertura</a>
            <!-- <a href="<?= base_url('/#clientes') ?>">Clientes</a> -->
            <a href="<?= base_url('noticias') ?>" class="<?= (url_is('noticias*')) ? 'active' : '' ?>">Noticias</a>
        </div>
        <div class="nav-actions">
            <a href="<?= base_url('/#contacto') ?>" class="btn-nav">Contactar</a>
        </div>
    </div>
</nav>