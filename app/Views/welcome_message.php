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
        <!-- 3D Model Hero -->
        <div class="container hero-grid">
            <div class="hero-content">
                <span class="hero-badge">Seguridad Privada en Patagonia y San Juan</span>
                <h1>Protección<br><span class="text-gradient">Sin Compromiso</span></h1>
                <p>Presencia estratégica en los polos productivos más importantes del país. Protegemos lo que más importa en la Patagonia y Cuyo.</p>
                <div class="cta-group">
                    <a href="#contacto" class="btn-primary">Solicitar Diagnóstico</a>
                    <a href="#servicios" class="btn-outline">Nuestros Centros</a>
                </div>
            </div>
            <div class="video-container">
                <div class="video-wrapper" style="background: transparent; box-shadow: none; border: none; overflow: visible;">
                    <model-viewer
                        id="logo-3d"
                        src="<?= base_url('assets/models/logo.glb') ?>"
                        alt="Logo 3D Guardián Patagónico"
                        autoplay
                        camera-orbit="0deg 75deg 105%"
                        environment-image="neutral"
                        shadow-intensity="5"
                        exposure="0.3"
                        style="width: 100%; height: 500px; --poster-color: transparent;">
                    </model-viewer>
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
                    En Guardián Patagónico somos una empresa de seguridad privada con presencia en la Patagonia y San Juan.<br><br>
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
            <h2 class="text-gradient" style="font-size: clamp(2.5rem, 4vw, 3.8rem); margin-bottom: 2rem;">Presencia en Puntos Estratégicos</h2>
            
            <p style="color: var(--dark-muted); font-size: 1.2rem; line-height: 1.8; margin-bottom: 4rem;">
                Nuestra estructura está diseñada para la movilidad táctica y el control de activos críticos en regiones clave para la industria minera y energética.
            </p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2.5rem; text-align: left;">
                
                <!-- Nodo Patagonia -->
                <div style="background: var(--dark-card); border: 1px solid var(--dark-border); padding: 3rem; border-radius: 24px; transition: 0.3s;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='var(--dark-border)'">
                    <div style="color: var(--primary); margin-bottom: 1.5rem;">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <h4 style="color: #fff; font-family: 'Outfit'; font-size: 1.5rem; margin-bottom: 1rem;">Centro Operativo Patagonia</h4>
                    <p style="color: var(--dark-muted); font-size: 1rem; line-height: 1.6;">Base logística en Comodoro Rivadavia con alcance a yacimientos y plantas industriales en toda la cuenca del Golfo San Jorge.</p>
                </div>

                <!-- Nodo San Juan -->
                <div style="background: var(--dark-card); border: 1px solid var(--dark-border); padding: 3rem; border-radius: 24px; transition: 0.3s;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='var(--dark-border)'">
                    <div style="color: var(--primary); margin-bottom: 1.5rem;">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <h4 style="color: #fff; font-family: 'Outfit'; font-size: 1.5rem; margin-bottom: 1rem;">Centro Operativo San Juan</h4>
                    <p style="color: var(--dark-muted); font-size: 1rem; line-height: 1.6;">Ubicación estratégica en Iglesia para la protección de proyectos mineros y activos críticos en la región cordillerana.</p>
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
        </div>
    </div>
</section>

    <!-- Contacto -->
    <section id="contacto" class="section-padding" style="background-color: var(--dark-bg); position: relative; overflow: hidden;">
        <!-- Elementos decorativos tácticos -->
        <div class="hero-pattern" style="opacity: 0.05;"></div>
        <div style="position: absolute; top: -10%; right: -5%; width: 400px; height: 400px; background: radial-gradient(circle, rgba(125, 140, 69, 0.1) 0%, transparent 70%); pointer-events: none;"></div>
        
        <div class="container" style="position: relative; z-index: 2;">
            <div class="section-header reveal-on-scroll" style="text-align: center; max-width: 800px; margin: 0 auto 5rem;">
                <span class="section-label">Contacto</span>
                <h2 class="text-gradient" style="font-size: clamp(2.5rem, 4vw, 3.8rem); margin-bottom: 1.5rem;">Despliegue de Seguridad</h2>
                <p style="color: var(--dark-muted); font-size: 1.1rem;">
                    Nuestras bases operativas están estratégicamente ubicadas para garantizar una respuesta inmediata en los polos industriales y mineros más exigentes.
                </p>
            </div>

            <div class="contact-grid" style="display: grid; grid-template-columns: 1fr 1.2fr; gap: 4rem; align-items: stretch;">
                
                <div class="reveal-on-scroll">
                    <div style="background: var(--dark-card); border: 1px solid var(--dark-border); padding: 3rem; border-radius: 24px; height: 100%; display: flex; flex-direction: column; gap: 2.5rem;">
                        
                        <!-- Info Item -->
                        <div style="display: flex; gap: 1.5rem;">
                            <div style="color: var(--primary); background: rgba(125, 140, 69, 0.1); width: 56px; height: 56px; border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 1px solid rgba(125, 140, 69, 0.2);">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <div>
                                <h4 style="color: #fff; margin-bottom: 0.5rem; font-size: 1.2rem;">Base San Juan (Iglesia)</h4>
                                <p style="color: var(--dark-muted); line-height: 1.6; font-size: 0.95rem;">
                                    Proyectada S/N, Barrio Renacer,<br>
                                    Rodeo, Iglesia, San Juan.
                                </p>
                            </div>
                        </div>

                        <!-- Info Item -->
                        <div style="display: flex; gap: 1.5rem;">
                            <div style="color: var(--primary); background: rgba(125, 140, 69, 0.1); width: 56px; height: 56px; border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 1px solid rgba(125, 140, 69, 0.2);">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </div>
                            <div>
                                <h4 style="color: #fff; margin-bottom: 0.5rem; font-size: 1.2rem;">Línea Directa 24/7</h4>
                                <p style="color: var(--dark-muted); line-height: 1.6; font-size: 0.95rem;">
                                    Central Operativa: +54 9 264 412-5678<br>
                                    Administración: +54 9 297 452-1234
                                </p>
                            </div>
                        </div>

                        <!-- Map Embed -->
                        <div style="flex-grow: 1; border-radius: 16px; overflow: hidden; border: 1px solid var(--dark-border); min-height: 250px;">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13854.498414457318!2d-69.1388!3d-30.2096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96827364658e390d%3A0xc63806a6c4b2675d!2sRodeo%2C%20San%20Juan!5e0!3m2!1ses-419!2sar!4v1707241234567!5m2!1ses-419!2sar" 
                                width="100%" height="100%" style="border:0; filter: grayscale(1) invert(0.9) contrast(1.2);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>

                <div class="reveal-on-scroll">
                    <div style="background: var(--dark-card); border: 1px solid var(--dark-border); padding: 3rem; border-radius: 24px;">
                        <h4 style="color: #fff; margin-bottom: 2rem; font-size: 1.5rem; font-family: 'Outfit';">Solicitar Diagnóstico de Riesgo</h4>
                        <form action="#" method="POST" style="display: grid; gap: 1.5rem;">
                            <div style="display: grid; gap: 0.8rem;">
                                <label style="font-weight: 600; font-size: 0.85rem; color: var(--dark-muted); text-transform: uppercase; letter-spacing: 1px;">Razón Social / Empresa</label>
                                <input type="text" placeholder="Ej: Minera del Sol S.A." style="background: rgba(255,255,255,0.03); color: #fff; padding: 1.2rem; border-radius: 12px; border: 1px solid var(--dark-border); outline: none; transition: 0.3s;" onfocus="this.style.borderColor='var(--primary)'; this.style.background='rgba(255,255,255,0.05)'" onblur="this.style.borderColor='var(--dark-border)'; this.style.background='rgba(255,255,255,0.03)'">
                            </div>
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                                <div style="display: grid; gap: 0.8rem;">
                                    <label style="font-weight: 600; font-size: 0.85rem; color: var(--dark-muted); text-transform: uppercase; letter-spacing: 1px;">Nombre de Contacto</label>
                                    <input type="text" placeholder="Su nombre" style="background: rgba(255,255,255,0.03); color: #fff; padding: 1.2rem; border-radius: 12px; border: 1px solid var(--dark-border); outline: none; transition: 0.3s;" onfocus="this.style.borderColor='var(--primary)';" onblur="this.style.borderColor='var(--dark-border)';">
                                </div>
                                <div style="display: grid; gap: 0.8rem;">
                                    <label style="font-weight: 600; font-size: 0.85rem; color: var(--dark-muted); text-transform: uppercase; letter-spacing: 1px;">Teléfono</label>
                                    <input type="tel" placeholder="+54..." style="background: rgba(255,255,255,0.03); color: #fff; padding: 1.2rem; border-radius: 12px; border: 1px solid var(--dark-border); outline: none; transition: 0.3s;" onfocus="this.style.borderColor='var(--primary)';" onblur="this.style.borderColor='var(--dark-border)';">
                                </div>
                            </div>

                            <div style="display: grid; gap: 0.8rem;">
                                <label style="font-weight: 600; font-size: 0.85rem; color: var(--dark-muted); text-transform: uppercase; letter-spacing: 1px;">Correo Corporativo</label>
                                <input type="email" placeholder="ejemplo@empresa.com.ar" style="background: rgba(255,255,255,0.03); color: #fff; padding: 1.2rem; border-radius: 12px; border: 1px solid var(--dark-border); outline: none; transition: 0.3s;" onfocus="this.style.borderColor='var(--primary)';" onblur="this.style.borderColor='var(--dark-border)';">
                            </div>

                            <div style="display: grid; gap: 0.8rem;">
                                <label style="font-weight: 600; font-size: 0.85rem; color: var(--dark-muted); text-transform: uppercase; letter-spacing: 1px;">Naturaleza del Requerimiento</label>
                                <textarea rows="4" placeholder="Describa brevemente el servicio o activo a proteger..." style="background: rgba(255,255,255,0.03); color: #fff; padding: 1.2rem; border-radius: 12px; border: 1px solid var(--dark-border); outline: none; transition: 0.3s; resize: none;" onfocus="this.style.borderColor='var(--primary)';" onblur="this.style.borderColor='var(--dark-border)';"></textarea>
                            </div>

                            <button type="submit" class="btn-primary" style="width: 100%; justify-content: center; margin-top: 1rem; font-size: 1rem;">
                                Enviar Consulta Táctica
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 10px;"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script type="module">
        import { DirectionalLight, Color } from 'https://cdn.jsdelivr.net/npm/three@0.163.0/build/three.module.min.js';

        const modelViewer = document.querySelector('#logo-3d');

        modelViewer.addEventListener('load', () => {

            // ============ CONFIG LUZ ============
            const lightX     = 0;       // izquierda(-) / derecha(+)
            const lightY     = 0;       // abajo(-) / arriba(+)
            const lightZ     = 5;       // atras(-) / frente(+)
            const lightPower = 5;       // intensidad de la luz
            const lightColor = 0xffffff; // color (hex) - celeste para test
            // ====================================

            // ============ CONFIG CURSOR ============
            const maxAngle   = 10;    // limite de rotacion en grados
            const lerpSpeed  = 0.05;  // suavidad (menor = mas lento)
            const cursorMult = 1.6;   // sensibilidad al cursor (menor = mas sutil)
            // =======================================

            // ============ CONFIG ANIMACION IDLE ====
            const idleSpeed   = 0.016; // velocidad de oscilacion
            const idleAmountX = 10.5;   // amplitud horizontal (grados)
            const idleAmountY = 0;     // amplitud vertical (grados)
            // =======================================

            // Buscar escena Three.js
            const findScene = (obj, depth, visited) => {
                if (depth > 4 || visited.has(obj)) return null;
                visited.add(obj);
                const keys = [...Object.getOwnPropertyNames(obj), ...Object.getOwnPropertySymbols(obj)];
                for (const key of keys) {
                    try {
                        const val = obj[key];
                        if (!val || typeof val !== 'object') continue;
                        if (typeof val.traverse === 'function') return val;
                        if (depth < 3) {
                            const found = findScene(val, depth + 1, visited);
                            if (found) return found;
                        }
                    } catch(e) {}
                }
                return null;
            };

            const scene = findScene(modelViewer, 0, new Set());
            const light = new DirectionalLight(lightColor, lightPower);
            light.position.set(lightX, lightY, lightZ);

            if (scene) {
                scene.add(light);
                console.log('[3D] Luz creada y agregada a la escena');
            }

            const baseX = 0, baseY = 75;
            let targetX = baseX, targetY = baseY;
            let currentX = baseX, currentY = baseY;
            let time = 0;

            document.addEventListener('mousemove', (e) => {
                const nx = (e.clientX / window.innerWidth - 0.5) * 8;
                const ny = (e.clientY / window.innerHeight - 0.5) * 8;
                targetX = Math.max(-maxAngle, Math.min(maxAngle, -nx * maxAngle * cursorMult));
                targetY = baseY + Math.max(-maxAngle * 0.3, Math.min(maxAngle * 0.5, ny * maxAngle * 0.3));
            });

            const animate = () => {
                time += idleSpeed;
                const idleX = Math.sin(time) * idleAmountX;
                const idleY = Math.cos(time * 0.6) * idleAmountY;

                currentX += (targetX + idleX - currentX) * lerpSpeed;
                currentY += (targetY + idleY - currentY) * lerpSpeed;
                modelViewer.cameraOrbit = `${currentX}deg ${currentY}deg 80%`;
                requestAnimationFrame(animate);
            };
            animate();
        });
    </script>
<?= $this->endSection() ?>