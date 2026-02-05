<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Seguridad Privada de Alto Nivel
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Hero -->
    <header class="hero">
        <div class="hero-bg"></div>
        <div class="hero-pattern"></div>
        <div class="hero-shape"></div>
        <div class="hero-accent hero-accent-1"></div>
        <div class="hero-accent hero-accent-2"></div>
        <div class="hero-accent hero-accent-3"></div>
        <!-- Video de fondo con opacidad casi imperceptible -->
        <div class="hero-bg-video">
            <iframe src="https://www.youtube.com/embed/ApLnqFUtHWc?autoplay=1&mute=1&loop=1&playlist=ApLnqFUtHWc&controls=0&showinfo=0&rel=0&modestbranding=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="container hero-grid">
            <div class="hero-content">
                <span class="hero-badge">Seguridad Privada en la Patagonia</span>
                <h1>Protección<br><span class="text-gradient">Sin Compromiso</span></h1>
                <p>Usted se concentra en producir. Nosotros nos encargamos de proteger lo que más importa.</p>
                <div class="cta-group">
                    <a href="#contacto" class="btn-primary">Solicitar Diagnóstico</a>
                    <a href="#servicios" class="btn-outline">Ver Servicios</a>
                </div>
            </div>
            <div class="video-container">
                <div class="video-wrapper">
                    <!-- YouTube Embed clean -->
                    <iframe width="1013" height="570" src="https://www.youtube.com/embed/ApLnqFUtHWc?autoplay=1&mute=1&loop=1&playlist=ApLnqFUtHWc" title="Company Profile Video - Ultimate Security Services | Creative Company Profile Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- Curva inferior -->
        <div class="hero-curve">
            <svg viewBox="0 0 1440 150" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="fadeLineGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#141414" stop-opacity="0"/>
                        <stop offset="50%" stop-color="#141414" stop-opacity="1"/>
                        <stop offset="100%" stop-color="#141414" stop-opacity="1"/>
                    </linearGradient>
                </defs>
                <!-- Relleno blanco principal -->
                <path d="M0 20C600 100 1200 80 1440 80V150H0V20Z" fill="#F0F0F0"/>
                <!-- Línea oscura (pelo) con desvanecimiento hacia la izquierda -->
                <path d="M0 45C600 125 1200 105 1440 105" stroke="url(#fadeLineGradient)" stroke-width="6" fill="none"/>
            </svg>
        </div>
    </header>

    <!-- Stats / Intro -->
    <section class="stats reveal-on-scroll">
        <div class="container stats-grid">
            <div class="stat-item">
                <h3>Cobertura</h3>
                <p>En toda la patagonia</p>
            </div>
            <div class="stat-item">
                <h3>24/7</h3>
                <p>Respuesta Inmediata</p>
            </div>
        </div>
    </section>

    <!-- Quiénes Somos -->
    <section id="experiencia" class="section-padding">
        <div class="container">
            <div class="section-header reveal-on-scroll" style="text-align: center; max-width: 800px; margin: 0 auto;">
                <span class="section-label">Quiénes Somos</span>
                <h2>Compromiso y Responsabilidad</h2>
                <br>
                <p style="color: var(--text-muted); font-size: 1.1rem; line-height: 1.8;">
                    En Guardian Patagonico somos una empresa de seguridad privada con presencia en la Patagonia, Comodoro Rivadavia.<br><br>
                    Somos una empresa seria y responsable, comprometida con la protección integral de personas, bienes e instalaciones. Contamos con un equipo preparado y capacitado con título habilitante, brindando disponibilidad 24/7 para responder a las más altas exigencias de seguridad.
                </p>
            </div>
        </div>
    </section>

    <!-- Servicios -->
    <section id="servicios" class="section-padding">
        <div class="container">
            <div class="section-header reveal-on-scroll">
                <span class="section-label">Nuestros Servicios</span>
                <h2>Soluciones Integrales de Seguridad</h2>
                <p style="color: var(--text-muted); margin-top: 1rem; max-width: 900px; margin-left: auto; margin-right: auto;">
                    Personal con título habilitante y alta capacitación para responder a las exigencias de seguridad en empresas, industrias, comercios y proyectos mineros.
                </p>
            </div>
            <div class="services-grid">
                <div class="service-card reveal-on-scroll">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                        </svg>
                    </div>
                    <h3>Seguridad Intramuros</h3>
                    <p>Seguridad intramuros en instalaciones, garantizando protección permanente en sus espacios críticos.</p>
                </div>
                <div class="service-card reveal-on-scroll" style="transition-delay: 0.05s">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="1" y="3" width="15" height="13"></rect>
                            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                            <circle cx="5.5" cy="18.5" r="2.5"></circle>
                            <circle cx="18.5" cy="18.5" r="2.5"></circle>
                        </svg>
                    </div>
                    <h3>Custodia de Transporte</h3>
                    <p>Custodia de transporte y logística de valores, mercaderías e insumos críticos.</p>
                </div>
                <div class="service-card reveal-on-scroll" style="transition-delay: 0.1s">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                    </div>
                    <h3>Control de Accesos</h3>
                    <p>Control de accesos y registro de personal, vehículos y proveedores en tiempo real.</p>
                </div>
                <div class="service-card reveal-on-scroll" style="transition-delay: 0.15s">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <h3>Protección Patrimonial</h3>
                    <p>Protección patrimonial e instalaciones contra riesgos internos y externos las 24 horas.</p>
                </div>
                <div class="service-card reveal-on-scroll" style="transition-delay: 0.2s">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                    </div>
                    <h3>Planes de Contingencia</h3>
                    <p>Planes de contingencia y respuesta a emergencia personalizados para su organización.</p>
                </div>
                <div class="service-card reveal-on-scroll" style="transition-delay: 0.25s">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                    </div>
                    <h3>Capacitación</h3>
                    <p>Capacitación en seguridad y prevención de riesgo para personal interno de su empresa.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cobertura / Mapa Interactivo -->

<section id="cobertura" class="section-padding" style="background-color: var(--dark-bg); position: relative;">
    <div class="hero-pattern" style="opacity: 0.05;"></div>
    
    <div class="container">
        <div class="reveal-on-scroll" style="max-width: 900px; margin: 0 auto; text-align: center;">
            
            <span class="section-label">Despliegue Territorial</span>
            <h2 class="text-gradient" style="font-size: clamp(2.5rem, 4vw, 3.8rem); margin-bottom: 2rem;">Operatividad Total en la Patagonia</h2>
            
            <p style="color: var(--dark-muted); font-size: 1.2rem; line-height: 1.8; margin-bottom: 4rem;">
                Nuestra estructura está diseñada para la movilidad táctica. Operamos directamente en los objetivos de nuestros clientes, con unidades desplegadas estratégicamente en Comodoro Rivadavia y alrededores para garantizar tiempos de respuesta inmediatos.
            </p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; text-align: left;">
                
                <div style="background: var(--dark-card); border: 1px solid var(--dark-border); padding: 2.5rem; border-radius: 20px; transition: 0.3s;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='var(--dark-border)'">
                    <div style="color: var(--primary); margin-bottom: 1.5rem;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                    </div>
                    <h4 style="color: #fff; font-family: 'Outfit'; font-size: 1.3rem; margin-bottom: 1rem;">Unidades Móviles</h4>
                    <p style="color: var(--dark-muted); font-size: 0.95rem;">Desplazamiento constante hacia yacimientos, barrios privados y plantas industriales sin depender de bases fijas.</p>
                </div>

                <div style="background: var(--dark-card); border: 1px solid var(--dark-border); padding: 2.5rem; border-radius: 20px; transition: 0.3s;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='var(--dark-border)'">
                    <div style="color: var(--primary); margin-bottom: 1.5rem;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <h4 style="color: #fff; font-family: 'Outfit'; font-size: 1.3rem; margin-bottom: 1rem;">Enfoque Comodoro</h4>
                    <p style="color: var(--dark-muted); font-size: 0.95rem;">Priorizamos el cordón industrial del Golfo San Jorge con personal local que conoce el terreno y sus riesgos.</p>
                </div>

            </div>

            <div style="margin-top: 4rem;">
                <p style="color: #fff; font-weight: 600; margin-bottom: 1.5rem;">¿Necesita seguridad en una ubicación específica?</p>
                <a href="#contacto" class="btn-primary">Coordinar Inspección de Sitio</a>
            </div>

        </div>
    </div>
</section>
    <!-- Noticias -->
<section id="noticias" class="section-padding" style="background-color: var(--light-bg);">
    <div class="container">
        <div class="section-header reveal-on-scroll">
            <span class="section-label">Actualidad</span>
            <h2 style="color: var(--light-text);">Portal de Noticias</h2>
            <p style="margin-top: 1rem; color: var(--light-muted);">
                Explore nuestras últimas actualizaciones, despliegues y avances tecnológicos en la región.
            </p>
        </div>

        <div class="news-grid">
            <?php if (!empty($noticias)): ?>
                <?php foreach ($noticias as $noticia): ?>
                    <article class="news-card reveal-on-scroll">
                        <div class="news-image">
                            <img src="<?= $noticia['imagen'] ?>" alt="<?= esc($noticia['titulo']) ?>">
                        </div>
                        <div class="news-content">
                            <div class="news-meta">
                                <span class="news-date"><?= esc($noticia['fecha']) ?></span>
                                <span class="news-category"><?= esc($noticia['categoria']) ?></span>
                            </div>
                            <h3><?= esc($noticia['titulo']) ?></h3>
                            <p class="news-excerpt" style="color: var(--light-muted);">
                                <?= esc($noticia['resumen']) ?>
                            </p>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="reveal-on-scroll" style="grid-column: 1 / -1; background: rgba(125, 140, 69, 0.05); border: 2px dashed var(--light-border); border-radius: 16px; padding: 4rem 2rem; text-align: center;">
                    <h3 style="font-size: 1.5rem; color: var(--light-text); margin-bottom: 1rem;">Novedades Próximamente</h3>
                    <p style="font-size: 1rem; color: var(--light-muted); max-width: 500px; margin: 0 auto 2rem;">Estamos preparando nuestro portal de noticias para mantenerlo informado sobre nuestras operaciones y avances tecnológicos.</p>
                    <a href="<?= base_url('noticias') ?>" class="btn-primary">Ver Portal de Noticias</a>
                </div>
            <?php endif; ?>

            <?php if (!empty($noticias)): ?>
            <div class="reveal-on-scroll" style="display: flex; flex-direction: column; justify-content: center; align-items: center; background: rgba(125, 140, 69, 0.05); border: 2px dashed var(--light-border); border-radius: 16px; padding: 2rem; text-align: center; transition-delay: 0.2s">
                <h3 style="font-size: 1.2rem; color: var(--light-text); margin-bottom: 1rem;">Más novedades en nuestro portal</h3>
                <p style="font-size: 0.9rem; color: var(--light-muted); margin-bottom: 1.5rem;">Acceda a nuestro archivo completo de noticias, capacitaciones y comunicados oficiales.</p>
                <a href="<?= base_url('noticias') ?>" class="btn-primary" style="width: 100%;">Ver todas las noticias</a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?= $this->endSection() ?>