<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?><?= esc($noticia['titulo']) ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
    <article class="news-detail section-padding" style="padding-top: 160px;">
        <div class="container" style="max-width: 800px;">
            <header class="detail-header" style="margin-bottom: 3rem; text-align: center;">
                <span class="news-category" style="background: rgba(125, 140, 69, 0.1); color: var(--primary); padding: 0.5rem 1rem; border-radius: 50px; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px;">
                    <?= esc($noticia['categoria'] ?? 'General') ?>
                </span>
                <h1 style="font-size: clamp(2.5rem, 5vw, 4rem); margin-top: 1.5rem; line-height: 1.1; font-family: 'Outfit';">
                    <?= esc($noticia['titulo']) ?>
                </h1>
                <div class="detail-meta" style="margin-top: 1.5rem; color: var(--light-muted); font-weight: 500;">
                    Publicado el <?= esc($noticia['fecha'] ?? 'Recientemente') ?>
                </div>
            </header>

            <div class="detail-image" style="margin-bottom: 3rem; border-radius: 24px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                <img src="<?= $noticia['imagen'] ?? 'https://picsum.photos/seed/news/1200/800' ?>" alt="<?= esc($noticia['titulo']) ?>" style="width: 100%; display: block;">
            </div>

            <div class="detail-content" style="font-size: 1.2rem; line-height: 1.8; color: var(--light-text);">
                <p style="font-weight: 600; font-size: 1.4rem; margin-bottom: 2rem; color: #000;">
                    <?= esc($noticia['resumen']) ?>
                </p>
                <div class="main-text">
                    <?= $noticia['contenido'] ?? 'El contenido de esta noticia estará disponible próximamente.' ?>
                </div>
            </div>

            <footer class="detail-footer" style="margin-top: 5rem; padding-top: 3rem; border-top: 1px solid var(--light-border); text-align: center;">
                <a href="<?= base_url('noticias') ?>" class="btn-outline" style="color: var(--light-text); border-color: var(--light-border);">
                    ← Volver a Noticias
                </a>
            </footer>
        </div>
    </article>
<?= $this->endSection() ?>
