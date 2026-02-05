<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias | Guardian Patagonia</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700;800&family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #7D8C45;
            --dark-bg: #141414;
            --light-bg: #F5F6F7;
            --light-border: rgba(0, 0, 0, 0.08);
            --text-muted: #666;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { background-color: var(--light-bg); font-family: 'Plus Jakarta Sans', sans-serif; color: #1A1A1A; }
        a { text-decoration: none; transition: 0.3s; }
        .container { width: min(1100px, 92%); margin: 0 auto; }

        /* Navbar */
        .navbar {
            position: fixed; top: 0; width: 100%; z-index: 100; padding: 1.2rem 0;
            background: #141414; border-bottom: 1px solid rgba(125, 140, 69, 0.2);
        }
        .nav-inner { display: flex; justify-content: space-between; align-items: center; }
        .logo { font-family: 'Outfit'; font-weight: 800; color: #fff; font-size: 1.4rem; letter-spacing: -0.5px; }
        .nav-links a { font-size: 0.9rem; font-weight: 600; color: rgba(255,255,255,0.7); margin-left: 2rem; }
        .nav-links a:hover { color: var(--primary); }

        /* Page Header */
        .page-header { background: #fff; padding: 160px 0 60px; border-bottom: 1px solid var(--light-border); }
        .page-header h1 { font-family: 'Outfit'; font-size: 3rem; margin-bottom: 0.5rem; letter-spacing: -1px; }

        /* Main Content Area */
        .news-section { padding: 80px 0; min-height: 60vh; }
        
        /* Empty State (Sin hardcodeo de noticias) */
        .status-box {
            background: #fff; border: 1px solid var(--light-border);
            border-radius: 32px; padding: 100px 40px; text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
        }
        .status-box svg { color: var(--primary); margin-bottom: 24px; opacity: 0.3; }
        .status-box h3 { font-family: 'Outfit'; font-size: 2rem; margin-bottom: 16px; color: #1a1a1a; }
        .status-box p { color: var(--text-muted); max-width: 480px; margin: 0 auto 32px; line-height: 1.8; font-size: 1.1rem; }
        
        .btn-back {
            display: inline-block; padding: 12px 32px; border-radius: 12px;
            background: var(--primary); color: #fff; font-weight: 700; font-size: 0.95rem;
        }
        .btn-back:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(125, 140, 69, 0.3); }

        /* Footer */
        footer { background: #141414; color: #666; padding: 40px 0; text-align: center; font-size: 0.9rem; }

        @media (max-width: 768px) {
            .page-header { padding: 120px 0 40px; text-align: center; }
            .page-header h1 { font-size: 2.2rem; }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="container nav-inner">
            <a href="http://localhost:8080/" class="logo">GUARDIAN PATAGONIA</a>
            <div class="nav-links">
                <a href="http://localhost:8080/">Inicio</a>
                <a href="http://localhost:8080/#servicios">Servicios</a>
                <a href="http://localhost:8080/#contacto">Contacto</a>
            </div>
        </div>
    </nav>

    <header class="page-header">
        <div class="container">
            <h1>Noticias</h1>
            <p style="color: var(--text-muted);">Actualidad operativa y comunicados oficiales de la región.</p>
        </div>
    </header>

    <section class="news-section">
        <div class="container">
            <div class="status-box">
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                </svg>
                
                <h3>Portal en Noticias</h3>
                <p>Pronto podrás informarte con las últimas noticias sobre seguridad acá.</p>
                
                <a href="http://localhost:8080/" class="btn-back">Volver al Inicio</a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>© 2026 Guardian Patagonia. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>|