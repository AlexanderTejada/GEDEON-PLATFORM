<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias | GEDEÓN R.G.</title>
    <meta name="description" content="Portal de noticias y novedades de GEDEÓN R.G. - Seguridad Privada en San Juan">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            /* Brand Colors */
            --primary: #f0b323;
            --primary-dim: #b8860b;
            --gold-gradient: linear-gradient(135deg, #f0b323 0%, #db9d14 100%);

            /* Dark Theme */
            --dark-bg: #0f1729;
            --dark-card: #1a2438;
            --dark-text: #ffffff;
            --dark-muted: #94a3b8;
            --dark-border: rgba(255, 255, 255, 0.1);

            /* Light Theme */
            --light-bg: #f8f9fc;
            --light-card: #ffffff;
            --light-text: #0a1128;
            --light-muted: #475569;
            --light-border: rgba(15, 23, 42, 0.12);

            /* Animation */
            --ease-out: cubic-bezier(0.23, 1, 0.32, 1);
            --container: 1200px;
        }

        /* Base */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body {
            background-color: var(--light-bg);
            color: var(--light-text);
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            line-height: 1.1;
        }

        a { text-decoration: none; color: inherit; transition: 0.3s; }
        ul { list-style: none; }
        img { max-width: 100%; display: block; }

        .container {
            width: min(var(--container), 92%);
            margin: 0 auto;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100;
            padding: 1.2rem 0;
            backdrop-filter: blur(16px);
            background: rgba(10, 22, 40, 0.95);
            border-bottom: 1px solid rgba(240, 179, 35, 0.15);
        }

        .nav-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Outfit', sans-serif;
            font-weight: 800;
            font-size: 1.8rem;
            letter-spacing: -0.5px;
            display: flex;
            align-items: center;
            gap: 10px;
            text-transform: uppercase;
            color: #ffffff;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            font-size: 0.95rem;
            font-weight: 600;
            position: relative;
            letter-spacing: 0.5px;
            color: rgba(255, 255, 255, 0.8);
            transition: color 0.3s;
        }

        .nav-links a:hover, .nav-links a.active {
            color: var(--primary);
        }

        /* Page Header */
        .page-header {
            background: var(--light-bg);
            padding: 120px 0 40px;
            border-bottom: 1px solid var(--light-border);
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            color: var(--light-muted);
            margin-bottom: 1.5rem;
        }

        .breadcrumb a {
            color: var(--primary);
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .page-header h1 {
            font-size: 2.5rem;
            color: var(--light-text);
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .page-header p {
            font-size: 1.1rem;
            color: var(--light-muted);
        }

        /* News Section */
        .news-section {
            padding: 3rem 0 5rem;
        }

        .news-layout {
            display: grid;
            grid-template-columns: 1fr 320px;
            gap: 4rem;
        }

        .news-main {
            min-width: 0;
        }

        .section-title {
            font-size: 1.5rem;
            color: var(--light-text);
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--light-border);
        }

        .news-list {
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
        }

        .news-card {
            background: var(--light-card);
            border: 1px solid var(--light-border);
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s;
            display: block;
        }

        .news-card:hover {
            box-shadow: 0 8px 20px rgba(15, 23, 42, 0.12);
            border-color: var(--primary);
        }

        .news-image {
            width: 100%;
            height: 240px;
            position: relative;
            overflow: hidden;
            border-radius: 12px 12px 0 0;
        }

        .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s var(--ease-out);
        }

        .news-card:hover .news-image img {
            transform: scale(1.05);
        }

        .news-image::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.1) 100%);
            pointer-events: none;
        }

        .news-content {
            padding: 1.8rem;
        }

        .news-meta {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            font-size: 0.85rem;
            color: var(--light-muted);
        }

        .news-date {
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        .news-category {
            background: rgba(240, 179, 35, 0.1);
            color: var(--primary);
            padding: 0.3rem 0.8rem;
            border-radius: 4px;
            font-weight: 600;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .news-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--light-text);
            line-height: 1.3;
        }

        .news-excerpt {
            font-size: 0.95rem;
            color: var(--light-muted);
            line-height: 1.7;
            margin-bottom: 0;
        }

        /* Sidebar */
        .sidebar {
            position: sticky;
            top: 100px;
            height: fit-content;
        }

        .widget {
            background: var(--light-card);
            border: 1px solid var(--light-border);
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .widget-title {
            font-size: 1.2rem;
            color: var(--light-text);
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            width: 100%;
            padding: 0.9rem 2.8rem 0.9rem 1rem;
            border: 1px solid var(--light-border);
            border-radius: 8px;
            font-size: 0.95rem;
            color: var(--light-text);
            background: var(--light-bg);
            transition: all 0.3s;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .search-box input:focus {
            outline: none;
            border-color: var(--primary);
        }

        .search-box button {
            position: absolute;
            right: 0.5rem;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            color: var(--light-muted);
            cursor: pointer;
            padding: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search-box button:hover {
            color: var(--primary);
        }

        .category-list {
            list-style: none;
        }

        .category-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.8rem 0;
            border-bottom: 1px solid var(--light-border);
            cursor: pointer;
            transition: color 0.3s;
        }

        .category-item:last-child {
            border-bottom: none;
        }

        .category-item:hover {
            color: var(--primary);
        }

        .category-name {
            font-weight: 500;
        }

        .category-count {
            background: rgba(240, 179, 35, 0.1);
            color: var(--primary);
            padding: 0.2rem 0.6rem;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 0.5rem;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid var(--light-border);
        }

        .pagination-info {
            font-size: 0.9rem;
            color: var(--light-muted);
            margin-right: auto;
        }

        .page-btn {
            padding: 0.6rem 1rem;
            border-radius: 6px;
            font-size: 0.9rem;
            font-weight: 600;
            border: 1px solid var(--light-border);
            background: var(--light-card);
            color: var(--light-text);
            cursor: pointer;
            transition: all 0.3s;
            min-width: 40px;
            text-align: center;
        }

        .page-btn:hover:not(.disabled), .page-btn.active {
            background: var(--primary);
            color: #000;
            border-color: var(--primary);
        }

        .page-btn.disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* Footer */
        footer {
            border-top: 1px solid var(--dark-border);
            padding: 3rem 0;
            font-size: 0.95rem;
            color: var(--dark-muted);
            background: var(--dark-card);
            text-align: center;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .footer-logo {
            font-family: 'Outfit', sans-serif;
            font-weight: 800;
            font-size: 1.5rem;
            color: var(--dark-text);
        }

        .footer-links {
            display: flex;
            gap: 2rem;
        }

        .footer-links a {
            color: var(--dark-muted);
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        /* Responsive */
        @media (max-width: 900px) {
            .nav-links { display: none; }
            .news-layout {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            .sidebar {
                position: static;
            }
            .footer-content {
                flex-direction: column;
                text-align: center;
            }
            .footer-links {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container nav-inner">
            <a href="/" class="logo">
                <span style="color: var(--primary);">//</span> GEDEÓN R.G.
            </a>
            <div class="nav-links">
                <a href="/">Inicio</a>
                <a href="/noticias" class="active">Noticias</a>
                <a href="/#servicios">Servicios</a>
                <a href="/#contacto">Contacto</a>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="page-header">
        <div class="container">
            <div class="breadcrumb">
                <a href="/">Inicio</a>
                <span>/</span>
                <span>Noticias</span>
            </div>
            <h1>Noticias</h1>
            <p>GEDEÓN te mantiene informado</p>
        </div>
    </header>

    <!-- News Section -->
    <section class="news-section">
        <div class="container">
            <div class="news-layout">
                <!-- Main Content -->
                <div class="news-main">
                    <h2 class="section-title">Últimas noticias de nuestro blog</h2>

                    <div class="news-list">
                        <!-- Noticia 1 -->
                        <article class="news-card">
                            <div class="news-image">
                                <img src="https://picsum.photos/seed/security-tech/600/400" alt="Nueva tecnología de vigilancia">
                            </div>
                            <div class="news-content">
                                <div class="news-meta">
                                    <span class="news-date">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                        diciembre 15, 2024
                                    </span>
                                </div>
                                <h3>Nueva tecnología de vigilancia en San Juan Capital</h3>
                                <p class="news-excerpt">
                                    En: Institucional<br><br>
                                    Implementamos sistemas de videovigilancia con IA para detección temprana de incidentes en nuestras instalaciones principales, mejorando tiempos de respuesta en un 40%.
                                </p>
                            </div>
                        </article>

                        <!-- Noticia 2 -->
                        <article class="news-card">
                            <div class="news-image">
                                <img src="https://picsum.photos/seed/training-people/600/400" alt="Curso de habilidades gerenciales">
                            </div>
                            <div class="news-content">
                                <div class="news-meta">
                                    <span class="news-date">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                        diciembre 01, 2024
                                    </span>
                                </div>
                                <h3>Finalizó el curso de habilidades gerenciales con 50 emprendedores certificados</h3>
                                <p class="news-excerpt">
                                    En: Capacitación<br><br>
                                    Más de 50 agentes completaron exitosamente la certificación internacional en protección ejecutiva y manejo de crisis, elevando nuestros estándares de servicio.
                                </p>
                            </div>
                        </article>

                        <!-- Noticia 3 -->
                        <article class="news-card">
                            <div class="news-image">
                                <img src="https://picsum.photos/seed/office-building/600/400" alt="Apertura de nueva base operativa">
                            </div>
                            <div class="news-content">
                                <div class="news-meta">
                                    <span class="news-date">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                        noviembre 29, 2024
                                    </span>
                                </div>
                                <h3>Apertura de nueva base operativa en Valle Fértil</h3>
                                <p class="news-excerpt">
                                    En: Expansión<br><br>
                                    Expandimos nuestra cobertura con una base operativa en Valle Fértil, brindando respuesta inmediata a proyectos turísticos y ambientales de la zona este provincial.
                                </p>
                            </div>
                        </article>

                        <!-- Noticia 4 -->
                        <article class="news-card">
                            <div class="news-image">
                                <img src="https://picsum.photos/seed/tech-innovation/600/400" alt="Capacitación en tecnología LPR">
                            </div>
                            <div class="news-content">
                                <div class="news-meta">
                                    <span class="news-date">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                        noviembre 17, 2024
                                    </span>
                                </div>
                                <h3>Capacitación en nueva tecnología LPR: innovación y autonomía al servicio de la seguridad</h3>
                                <p class="news-excerpt">
                                    En: Institucional<br><br>
                                    En el marco de nuestro compromiso con la actualización tecnológica y la formación continua, desarrollamos jornadas de capacitación en sistemas LPR.
                                </p>
                            </div>
                        </article>

                        <!-- Noticia 5 -->
                        <article class="news-card">
                            <div class="news-image">
                                <img src="https://picsum.photos/seed/community-dev/600/400" alt="Desarrollo comunitario">
                            </div>
                            <div class="news-content">
                                <div class="news-meta">
                                    <span class="news-date">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                        noviembre 09, 2024
                                    </span>
                                </div>
                                <h3>GEDEÓN promueve el desarrollo comunitario con capacitación en seguridad</h3>
                                <p class="news-excerpt">
                                    En: Institucional<br><br>
                                    En el marco de nuestro Programa de Desarrollo de Comunidades, desde GEDEÓN Seguridad Integral llevamos adelante capacitaciones gratuitas en seguridad ciudadana.
                                </p>
                            </div>
                        </article>

                        <!-- Noticia 6 -->
                        <article class="news-card">
                            <div class="news-image">
                                <img src="https://picsum.photos/seed/fleet-vehicles/600/400" alt="Nueva flota de vehículos">
                            </div>
                            <div class="news-content">
                                <div class="news-meta">
                                    <span class="news-date">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                        octubre 29, 2024
                                    </span>
                                </div>
                                <h3>Nueva flota de vehículos de respuesta rápida</h3>
                                <p class="news-excerpt">
                                    En: Institucional<br><br>
                                    Incorporamos 10 nuevas unidades móviles equipadas con tecnología de punta para reducir tiempos de respuesta en emergencias en toda la provincia de San Juan.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <span class="pagination-info">Total: 37 / Página actual: 1 de 4</span>
                        <button class="page-btn active">1</button>
                        <button class="page-btn">2</button>
                        <button class="page-btn">3</button>
                        <button class="page-btn">4</button>
                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="sidebar">
                    <!-- Search Widget -->
                    <div class="widget">
                        <div class="widget-title">Buscar...</div>
                        <div class="search-box">
                            <input type="text" placeholder="Buscar noticias...">
                            <button type="submit">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <path d="m21 21-4.35-4.35"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="widget">
                        <div class="widget-title">Categorías</div>
                        <ul class="category-list">
                            <li class="category-item">
                                <span class="category-name">Institucional</span>
                                <span class="category-count">30</span>
                            </li>
                            <li class="category-item">
                                <span class="category-name">Capacitación</span>
                                <span class="category-count">7</span>
                            </li>
                            <li class="category-item">
                                <span class="category-name">Expansión</span>
                                <span class="category-count">5</span>
                            </li>
                            <li class="category-item">
                                <span class="category-name">Tecnología</span>
                                <span class="category-count">4</span>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <span style="color: var(--primary);">//</span> GEDEÓN R.G.
                </div>
                <div class="footer-links">
                    <a href="/">Inicio</a>
                    <a href="/#servicios">Servicios</a>
                    <a href="/#contacto">Contacto</a>
                    <a href="/admin">Admin</a>
                </div>
                <p>© <?= date('Y') ?> Gedeón R.G. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Category filter
        document.querySelectorAll('.category-item').forEach(item => {
            item.addEventListener('click', () => {
                // TODO: Filter logic when connected to backend
                console.log('Filter by:', item.querySelector('.category-name').textContent);
            });
        });

        // Pagination
        document.querySelectorAll('.page-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                if (!btn.classList.contains('disabled')) {
                    document.querySelectorAll('.page-btn').forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    // TODO: Load page when connected to backend
                }
            });
        });

        // Search
        document.querySelector('.search-box button')?.addEventListener('click', (e) => {
            e.preventDefault();
            const query = document.querySelector('.search-box input').value;
            // TODO: Search logic when connected to backend
            console.log('Search:', query);
        });
    </script>

</body>
</html>
