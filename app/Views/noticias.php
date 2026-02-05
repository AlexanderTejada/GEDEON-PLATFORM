<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Noticias<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <header class="page-header" style="background: var(--light-card); padding: 160px 0 60px; border-bottom: 1px solid var(--light-border);">
        <div class="container">
            <span class="section-label">Actualidad</span>
            <h1 style="font-size: 3.5rem; margin-bottom: 0.5rem;">Noticias</h1>
            <p style="color: var(--light-muted); font-size: 1.1rem;">Actualidad operativa y comunicados oficiales de la región.</p>
        </div>
    </header>

    <section class="news-section section-padding">
        <div class="container">
            <?php if (!empty($noticias) && is_array($noticias)): ?>
                <div class="news-grid">
                    <?php foreach ($noticias as $noticia): ?>
                        <article class="news-card reveal-on-scroll">
                            <div class="news-image">
                                <img src="<?= $noticia['imagen'] ?? 'https://picsum.photos/seed/news/600/400' ?>" alt="<?= esc($noticia['titulo']) ?>">
                            </div>
                            <div class="news-content">
                                <div class="news-meta">
                                    <span class="news-date"><?= esc($noticia['fecha'] ?? 'Reciente') ?></span>
                                    <span class="news-category"><?= esc($noticia['categoria'] ?? 'General') ?></span>
                                </div>
                                <h3><?= esc($noticia['titulo']) ?></h3>
                                <p class="news-excerpt" style="color: var(--light-muted);">
                                    <?= esc($noticia['resumen']) ?>
                                </p>
                                <a href="<?= base_url('noticias/' . $noticia['slug']) ?>" class="news-link">
                                    Leer más 
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="status-box" style="background: var(--light-card); border: 1px solid var(--light-border); border-radius: 32px; padding: 100px 40px; text-align: center;">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" style="color: var(--primary); margin-bottom: 24px; opacity: 0.3;">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                    </svg>
                    
                    <h3>Portal de Noticias en Construcción</h3>
                    <p style="color: var(--light-muted); max-width: 480px; margin: 0 auto 32px; line-height: 1.8; font-size: 1.1rem;">
                        Aún no hay noticias publicadas. Pronto estaremos compartiendo las últimas novedades sobre seguridad y operaciones en la región.
                    </p>
                    
                    <a href="<?= base_url('/') ?>" class="btn-primary">Volver al Inicio</a>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?= $this->endSection() ?>
