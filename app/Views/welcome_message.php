<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEDEÓN R.G. | Seguridad Privada de Alto Nivel</title>
    <meta name="description" content="Seguridad Privada Corporativa en San Juan. Protección de activos críticos con tecnología y personal de élite.">
    
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

            /* Dark Sections */
            --dark-bg: #0f1729;
            --dark-card: #1a2438;
            --dark-text: #ffffff;
            --dark-muted: #94a3b8;
            --dark-glass: rgba(255, 255, 255, 0.03);
            --dark-border: rgba(255, 255, 255, 0.1);

            /* Light Sections */
            --light-bg: #f8f9fc;
            --light-card: #ffffff;
            --light-text: #0a1128;
            --light-muted: #475569;
            --light-glass: rgba(15, 23, 42, 0.04);
            --light-border: rgba(15, 23, 42, 0.12);

            /* Animation */
            --ease-out: cubic-bezier(0.23, 1, 0.32, 1);
            --container: 1400px;
        }

        /* Base & Reset */
        * { box-sizing: border-box; margin: 0; padding: 0; }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--light-bg);
            color: var(--light-text);
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Scrollbar personalizado global */
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: var(--dark-card);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #f0b323 0%, #db9d14 100%);
            border-radius: 6px;
            border: 3px solid var(--dark-card);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #db9d14 0%, #f0b323 100%);
        }

        /* Para Firefox */
        * {
            scrollbar-width: thin;
            scrollbar-color: #f0b323 var(--dark-card);
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            line-height: 1.1;
        }

        a { text-decoration: none; color: inherit; transition: 0.3s; }
        ul { list-style: none; }
        img { max-width: 100%; display: block; }

        /* Utilities */
        .container {
            width: min(var(--container), 92%);
            margin: 0 auto;
        }

        .text-gold { color: var(--primary); }
        .text-gradient {
            background: var(--gold-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Navigation - Deep Navy Blue matching Hero */
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

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 2rem;
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

        .btn-nav {
            padding: 0.7rem 1.8rem;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 600;
            border: 1px solid rgba(240, 179, 35, 0.5);
            background: rgba(240, 179, 35, 0.1);
            color: var(--primary);
            transition: all 0.3s;
        }

        .btn-nav:hover {
            background: var(--primary);
            color: #000;
            border-color: var(--primary);
        }

        /* Hero Section - Deep Navy Blue for impact */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 80px;
            overflow: hidden;
            background-color: #0a1628;
            color: var(--dark-text);
        }

        .hero-bg {
            position: absolute;
            inset: 0;
            z-index: -1;
            background:
                radial-gradient(circle at 10% 20%, rgba(240, 179, 35, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 90% 80%, rgba(21, 40, 70, 0.6) 0%, transparent 50%),
                linear-gradient(180deg, rgba(10, 22, 40, 0) 0%, rgba(10, 22, 40, 0.3) 100%);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 5rem;
            align-items: center;
        }

        .hero-content h1 {
            font-size: clamp(3rem, 5.5vw, 5.5rem);
            margin-bottom: 1.5rem;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s var(--ease-out) forwards 0.2s;
            letter-spacing: -1.5px;
            color: var(--dark-text);
        }

        .hero-content p {
            font-size: 1.15rem;
            max-width: 540px;
            margin-bottom: 2.5rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp 1s var(--ease-out) forwards 0.4s;
            font-weight: 400;
            color: var(--dark-muted);
        }

        .cta-group {
            display: flex;
            gap: 1.5rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp 1s var(--ease-out) forwards 0.6s;
        }

        .btn-primary {
            background: var(--gold-gradient);
            color: #000; 
            padding: 1.1rem 2.8rem;
            border-radius: 8px;
            font-weight: 700;
            letter-spacing: 0.5px;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            border: none;
            transition: transform 0.3s;
            cursor: pointer;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(240, 179, 35, 0.3);
        }

        .btn-outline {
            padding: 1.1rem 2.8rem;
            border-radius: 8px;
            font-weight: 600;
            background: transparent;
            opacity: 0.9;
            cursor: pointer;
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: var(--dark-text);
            transition: all 0.3s;
        }

        .btn-outline:hover {
            border-color: var(--dark-text);
            background: rgba(255, 255, 255, 0.1);
            opacity: 1;
        }

        /* 3D Video Wrapper */
        .video-container {
            position: relative;
            transform-style: preserve-3d;
            perspective: 1200px;
            opacity: 0;
            animation: fadeIn 1.5s ease forwards 0.8s;
        }

        .video-wrapper {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            transform: rotateY(-12deg) rotateX(4deg);
            transition: transform 0.4s var(--ease-out), box-shadow 0.4s ease;
            box-shadow: -20px 20px 60px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(240, 179, 35, 0.2);
        }

        .video-wrapper:hover {
            transform: rotateY(0deg) rotateX(0deg) scale(1.01);
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.7);
            border-color: rgba(240, 179, 35, 0.4);
            z-index: 10;
        }

        .video-wrapper iframe {
            width: 100%;
            height: 100%;
            aspect-ratio: 16/9;
            pointer-events: none;
        }


        /* Stats Section - Dark for contrast */
        .stats {
            padding: 5rem 0;
            background: var(--dark-card);
            border-top: 1px solid var(--dark-border);
            border-bottom: 1px solid var(--dark-border);
            color: var(--dark-text);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 3.5rem;
            background: var(--gold-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
            font-weight: 800;
        }
        
        .stat-item p {
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 600;
            color: var(--dark-muted);
        }

        /* Section Padding */
        .section-padding {
            padding: 9rem 0;
        }

        /* Quiénes Somos section (#experiencia) - Light */
        #experiencia {
            padding-bottom: 2rem;
            background-color: var(--light-bg);
            color: var(--light-text);
        }

        /* Servicios section (#servicios) - Dark for contrast */
        #servicios {
            background-color: var(--dark-bg);
            color: var(--dark-text);
        }
        
        .section-header {
            margin-bottom: 5rem;
            max-width: 700px;
        }

        .section-label {
            color: var(--primary);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 0.85rem;
            display: block;
            margin-bottom: 1rem;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(360px, 1fr));
            gap: 2.5rem;
        }

        .service-card {
            padding: 3rem;
            border-radius: 16px;
            transition: all 0.4s;
            position: relative;
            overflow: hidden;
        }

        /* Cards in light sections (#experiencia, #clientes) */
        #experiencia .service-card,
        #clientes .service-card {
            background: var(--light-card);
            border: 1px solid var(--light-border);
            box-shadow: 0 8px 20px rgba(15, 23, 42, 0.1);
            color: var(--light-text);
        }

        /* Cards in dark sections (#servicios) */
        #servicios .service-card {
            background: var(--dark-card);
            border: 1px solid var(--dark-border);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
            color: var(--dark-text);
        }

        .service-icon {
            width: 60px;
            height: 60px;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(240, 179, 35, 0.1);
            border-radius: 12px;
            border: 1px solid rgba(240, 179, 35, 0.2);
        }

        .service-icon svg {
            width: 30px;
            height: 30px;
            stroke: var(--primary);
        }

        .service-card:hover .service-icon {
            background: rgba(240, 179, 35, 0.2);
            border-color: var(--primary);
            transform: scale(1.05);
            transition: all 0.3s var(--ease-out);
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 4px;
            background: var(--gold-gradient);
            transform: scaleX(0);
            transform-origin: left;
            transition: 0.4s var(--ease-out);
        }

        /* Hover effects for light cards */
        #experiencia .service-card:hover,
        #clientes .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(15, 23, 42, 0.2);
        }

        /* Hover effects for dark cards */
        #servicios .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-card h3 {
            font-size: 1.6rem;
            margin-bottom: 1.2rem;
        }

        .service-card p {
            font-size: 1rem;
            line-height: 1.7;
        }

        /* Text colors in light cards */
        #experiencia .service-card h3,
        #clientes .service-card h3 {
            color: var(--light-text);
        }

        #experiencia .service-card p,
        #clientes .service-card p {
            color: var(--light-muted);
        }

        /* Text colors in dark cards */
        #servicios .service-card h3 {
            color: var(--dark-text);
        }

        #servicios .service-card p {
            color: var(--dark-muted);
        }

        /* Beneficios section (#clientes) - Light */
        #clientes {
            background-color: var(--light-card);
            border-top: 1px solid var(--light-border);
            color: var(--light-text);
        }

        /* Section header text colors */
        #experiencia .section-header p,
        #clientes .section-header p {
            color: var(--light-muted);
        }

        #servicios .section-header p {
            color: var(--dark-muted);
        }
        
        .marquee-container {
            display: flex;
            gap: 5rem;
            width: max-content;
            animation: marquee 30s linear infinite;
        }
        
        .client-logo {
            font-family: 'Outfit';
            font-size: 1.6rem;
            font-weight: 700;
            opacity: 0.5;
            white-space: nowrap;
            color: var(--light-muted);
        }

        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        /* Contact Section - Dark for contrast */
        .contact {
            padding: 10rem 0;
            text-align: center;
            background: var(--dark-bg);
            background-image: radial-gradient(circle at 50% 50%, rgba(240, 179, 35, 0.1) 0%, transparent 70%);
        }

        .contact-box {
            backdrop-filter: blur(20px);
            padding: 5rem 3rem;
            border-radius: 30px;
            max-width: 900px;
            margin: 0 auto;
            background: rgba(26, 36, 56, 0.85);
            border: 1px solid var(--dark-border);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
            color: var(--dark-text);
        }

        .contact-box h2 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: var(--dark-text);
        }

        .contact-box a {
            color: var(--dark-text);
        }

        .contact-box span {
            color: var(--dark-muted) !important;
        }

        /* Footer - Dark */
        footer {
            padding: 5rem 0 3rem;
            font-size: 0.95rem;
            border-top: 1px solid var(--dark-border);
            background: var(--dark-card);
            color: var(--dark-muted);
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 4rem;
            margin-bottom: 4rem;
        }
        
        .footer-col h4 {
            margin-bottom: 1.8rem;
            font-size: 1.2rem;
            font-family: 'Outfit', sans-serif;
            color: var(--dark-text);
        }

        .footer-col ul li { margin-bottom: 1rem; }
        .footer-col a { transition: 0.3s; }
        .footer-col a:hover { color: var(--primary); padding-left: 5px; }

        /* Animations */
        @keyframes fadeUp {
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes fadeIn {
            to { opacity: 1; }
        }


        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(40px);
            transition: 0.8s var(--ease-out);
        }

        .reveal-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Map Styles - Dark */
        .map-section-bg {
            position: relative;
            overflow: hidden;
            background: var(--dark-bg);
        }

        .map-interface {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            border-radius: 20px;
            padding: 2rem;
            border: 1px solid var(--dark-border);
            background: var(--dark-card);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
        }

        .map-visual {
            position: relative;
            width: 100%;
            height: 700px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: radial-gradient(circle at center, rgba(240, 179, 35, 0.05) 0%, transparent 70%);
            overflow: hidden;
        }

        .san-juan-map {
            width: 100%;
            height: 100%;
            max-width: 100%;
            filter: drop-shadow(0 0 20px rgba(0,0,0,0.1));
            border-radius: 12px;
            overflow: hidden !important;
        }

        #mapa-interactivo {
            border: 1px solid var(--dark-border);
            background: rgba(10, 22, 40, 0.5);
            width: 100%;
            height: 100%;
            overflow: hidden !important;
        }


        .map-interface::-webkit-scrollbar {
            width: 10px;
        }

        .map-interface::-webkit-scrollbar-track {
            background: rgba(26, 36, 56, 0.3);
            border-radius: 10px;
        }

        .map-interface::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #f0b323 0%, #db9d14 100%);
            border-radius: 10px;
            border: 2px solid rgba(26, 36, 56, 0.3);
        }

        .map-interface::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #db9d14 0%, #f0b323 100%);
        }

        .map-node {
            cursor: pointer;
            transition: 0.3s;
        }

        .map-node:hover circle:first-child {
            fill: #fff;
            filter: url(#glow);
        }

        .map-tooltip {
            position: absolute;
            bottom: 20px;
            left: 20px;
            backdrop-filter: blur(8px);
            padding: 1rem 1.5rem;
            border: 1px solid var(--primary);
            border-radius: 8px;
            pointer-events: none;
            background: rgba(10, 15, 30, 0.95);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
            color: var(--dark-text);
        }

        .map-list {
            max-height: 700px;
            overflow-y: auto;
            padding-right: 10px;
        }

        /* Custom Scrollbar for Map List */
        .map-list::-webkit-scrollbar {
            width: 6px;
        }

        .map-list::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 3px;
        }

        .map-list::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 3px;
        }

        .map-list::-webkit-scrollbar-thumb:hover {
            background: #d49a1f;
        }

        .map-list .loc-item {
            padding: 1.5rem;
            border-radius: 12px;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            cursor: pointer;
            transition: 0.3s;
        }

        .map-list .loc-item:hover {
            background: var(--dark-glass);
        }

        .map-list .loc-item.active {
            border-color: var(--primary);
            background: linear-gradient(90deg, rgba(240, 179, 35, 0.1) 0%, transparent 100%);
        }

        .loc-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 0.5rem;
        }

        .loc-bulelt {
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--primary);
            opacity: 0.6;
            font-family: 'Outfit';
        }

        .loc-item h3 {
            font-size: 1.1rem;
            margin: 0;
            color: var(--dark-text);
        }

        .loc-item p {
            font-size: 0.9rem;
            margin-left: 2rem;
            color: var(--dark-muted);
        }

        #cobertura .section-header {
            color: var(--dark-text);
        }

        #cobertura .section-header p {
            color: var(--dark-muted);
        }

        /* Noticias Section - Light for contrast */
        #noticias {
            background-color: var(--light-bg);
            color: var(--light-text);
        }

        #noticias .section-header p {
            color: var(--light-muted);
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
        }

        .news-card {
            background: var(--light-card);
            border: 1px solid var(--light-border);
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.4s;
            box-shadow: 0 8px 20px rgba(15, 23, 42, 0.08);
            cursor: pointer;
        }

        .news-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(15, 23, 42, 0.15);
        }

        .news-image {
            width: 100%;
            height: 220px;
            position: relative;
            overflow: hidden;
        }

        .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s var(--ease-out);
        }

        .news-card:hover .news-image img {
            transform: scale(1.08);
        }

        .news-image::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.15) 100%);
            pointer-events: none;
        }

        .news-content {
            padding: 2rem;
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
            font-size: 1.4rem;
            margin-bottom: 1rem;
            color: var(--light-text);
            line-height: 1.3;
        }

        .news-excerpt {
            font-size: 0.95rem;
            color: var(--light-muted);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .news-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--primary);
            font-weight: 600;
            font-size: 0.9rem;
            transition: gap 0.3s;
        }

        .news-link:hover {
            gap: 0.8rem;
        }

        .news-link svg {
            width: 16px;
            height: 16px;
        }

        @media (max-width: 900px) {
            .hero-grid { grid-template-columns: 1fr; text-align: center; gap: 3rem; }
            .hero-content h1 { font-size: 3.2rem; }
            .hero-content p { margin: 0 auto 2.5rem; }
            .cta-group { justify-content: center; flex-wrap: wrap; }

            .nav-actions { display: none; } /* Mobile Menu would go here */
            .nav-links { display: none; }

            .video-wrapper { transform: none; box-shadow: 0 8px 20px rgba(15, 23, 42, 0.1); }
            .contact-box { padding: 3rem 1.5rem; }
            .contact-box h2 { font-size: 2.5rem; }

            .map-interface { grid-template-columns: 1fr; gap: 2rem; }
            .map-visual { height: 350px; }

            .news-grid { grid-template-columns: 1fr; gap: 2rem; }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="container nav-inner">
            <a href="#" class="logo">
                <span style="color: var(--primary);">//</span> GEDEÓN R.G.
            </a>
            <div class="nav-links">
                <a href="#servicios">Servicios</a>
                <a href="#experiencia">Experiencia</a>
                <a href="#clientes">Clientes</a>
                <a href="/noticias">Noticias</a>
            </div>
            <div class="nav-actions">
                <a href="#contacto" class="btn-nav">Contactar</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <header class="hero">
        <div class="hero-bg"></div>
        <div class="container hero-grid">
            <div class="hero-content">
                <h1>Seguridad que <br> <span class="text-gradient">Transforma</span></h1>
                <p>Nuestra misión es que usted se concentre en producir, mientras nosotros cuidamos su seguridad.</p>
                <div class="cta-group">
                    <a href="#contacto" class="btn-primary">Solicitar Diagnóstico</a>
                    <a href="#servicios" class="btn-outline">Ver Servicios</a>
                </div>
            </div>
            <div class="video-container">
                <div class="video-wrapper">
                    <!-- YouTube Embed clean -->
                    <iframe width="1895" height="734" src="https://www.youtube.com/embed/sahwo4JdVzs" title="Cómo se fabrica el motor de caza más potente del mundo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </header>

    <!-- Stats / Intro -->
    <section class="stats reveal-on-scroll">
        <div class="container stats-grid">
            <div class="stat-item">
                <h3>Cobertura</h3>
                <p>San Juan, Rodeo, Jáchal, Calingasta, Valle Fértil</p>
            </div>
            <div class="stat-item">
                <h3>24/7</h3>
                <p>Respuesta Inmediata</p>
            </div>
        </div>
    </section>

    <!-- Quiénes Somos -->
    <section id="experiencia" class="section-padding" style="padding-bottom: 2rem;">
        <div class="container">
            <div class="section-header reveal-on-scroll">
                <span class="section-label">Quiénes Somos</span>
                <h2>Compromiso y Responsabilidad</h2>
                <br>
                <p style="color: var(--text-muted); font-size: 1.1rem; line-height: 1.8; max-width: 900px; margin: 0 auto;">
                    En Gedeón R.G. somos una empresa de seguridad privada con presencia en San Juan Capital, Rodeo (Iglesia), Jáchal, Calingasta, 25 de Mayo y Valle Fértil, ampliando permanentemente nuestro radio de acción en toda la provincia.<br><br>
                    Somos una empresa responsable, comprometida con la protección integral y con un equipo preparado y capacitado con título habilitante para responder a las más altas exigencias de seguridad.
                </p>
            </div>

            <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
                <div class="service-card reveal-on-scroll">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h3>Confianza y Respaldo</h3>
                    <p>Empresa seria y responsable con personal altamente capacitado y título habilitante.</p>
                </div>
                <div class="service-card reveal-on-scroll" style="transition-delay: 0.1s">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <h3>Disponibilidad 24/7</h3>
                    <p>Presencia permanente y respuesta inmediata ante cualquier incidente o emergencia.</p>
                </div>
                <div class="service-card reveal-on-scroll" style="transition-delay: 0.2s">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <h3>Cobertura Provincial</h3>
                    <p>Presencia estratégica en 6 localidades de San Juan con expansión continua.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios -->
    <section id="servicios" class="section-padding">
        <div class="container">
            <div class="section-header reveal-on-scroll">
                <span class="section-label">Nuestros Servicios</span>
                <h2>Personal Altamente Capacitado</h2>
                <p style="color: var(--text-muted); margin-top: 1rem; max-width: 900px; margin-left: auto; margin-right: auto;">
                    Los empleados de GEDEÓN cuentan con empleados y personal con título habilitante para responder a las más altas exigencias de la seguridad adaptadas a empresas, industrias, comercios y proyectos mineros.
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

    <!-- Beneficios (New Section) -->
    <section id="clientes" class="section-padding" style="background: var(--bg-card); border-top: 1px solid var(--glass-border);">
        <div class="container">
            <div class="section-header reveal-on-scroll">
                <span class="section-label">Beneficios</span>
                <h2>Con GEDEÓN R.G. usted obtiene:</h2>
                <p style="color: var(--text-muted); margin-top: 1rem;">
                    Nuestro compromiso es proteger personas, bienes, industrias, empresas privadas y públicas (escuelas, hospitales, comercios, campamentos mineros e instituciones estratégicas).
                </p>
            </div>
            <div class="services-grid" style="grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));">
                <div class="service-card reveal-on-scroll">
                   <h3>Confianza y Confianza</h3>
                   <p>Confianza y respaldo de una empresa seria y responsable.</p>
                </div>
                <div class="service-card reveal-on-scroll">
                   <h3>Continuidad</h3>
                   <p>Continuidad operativa gracias a protocolos de seguridad eficientes.</p>
                </div>
                <div class="service-card reveal-on-scroll">
                   <h3>Inmediatez</h3>
                   <p>Respuesta inmediata ante incidentes.</p>
                </div>
                <div class="service-card reveal-on-scroll">
                   <h3>Presencia</h3>
                   <p>Presencia local en San Juan Capital, Rodeo, Jáchal, Calingasta y Valle Fértil.</p>
                </div>
                <!-- <div class="service-card reveal-on-scroll">
                   <h3>A Medida</h3>
                   <p>Servicio a medida, adaptado a la magnitud de cada empresa o industria.</p>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Cobertura / Mapa Interactivo -->
    <section id="cobertura" class="section-padding map-section-bg" style="position: relative; overflow: hidden;">
        <div class="hero-bg" style="opacity: 0.3;"></div>
        <div class="container">
            <div class="section-header reveal-on-scroll">
                <span class="section-label">Cobertura Provincial</span>
                <h2>Despliegue Operativo</h2>
                <p style="color: var(--text-muted); margin-top: 1rem;">
                    Nuestra red de seguridad cubre puntos estratégicos en toda la provincia, asegurando respuesta rápida y coordinación centralizada.
                </p>
            </div>

            <div class="map-interface reveal-on-scroll">
                <div class="map-visual">
                    <!-- Mapa Interactivo Real de San Juan -->
                    <object data="/map/mapa.html" type="image/svg+xml" id="mapa-interactivo" class="san-juan-map" style="width: 100%; height: 100%;"></object>

                    <!-- Tooltip Container (updated via JS) -->
                    <div class="map-tooltip" style="opacity: 0; transform: translateY(10px); transition: all 0.3s;">
                        <h4>San Juan Capital</h4>
                        <p>Base Central & Monitoreo 24/7</p>
                    </div>
                </div>

                <div class="map-list">
                    <div class="loc-item active" data-target="San Juan Capital">
                        <div class="loc-header">
                            <span class="loc-bulelt">01</span>
                            <h3>San Juan Capital</h3>
                        </div>
                        <p>Centro de Operaciones y Monitoreo. Coordinación general de flota y personal.</p>
                    </div>
                    <div class="loc-item" data-target="Rodeo (Iglesia)">
                        <div class="loc-header">
                            <span class="loc-bulelt">02</span>
                            <h3>Rodeo (Iglesia)</h3>
                        </div>
                        <p>Base estratégica para proyectos mineros y de alta montaña.</p>
                    </div>
                    <div class="loc-item" data-target="Jáchal">
                        <div class="loc-header">
                            <span class="loc-bulelt">03</span>
                            <h3>Jáchal</h3>
                        </div>
                        <p>Cobertura logística y custodial para el norte de la provincia.</p>
                    </div>
                    <div class="loc-item" data-target="Valle Fértil">
                        <div class="loc-header">
                            <span class="loc-bulelt">04</span>
                            <h3>Valle Fértil</h3>
                        </div>
                        <p>Control de accesos y seguridad turística/ambiental.</p>
                    </div>
                    <div class="loc-item" data-target="Calingasta">
                        <div class="loc-header">
                            <span class="loc-bulelt">05</span>
                            <h3>Calingasta</h3>
                        </div>
                        <p>Seguridad patrimonial e industrial en zona cordillerana.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Noticias -->
    <section id="noticias" class="section-padding">
        <div class="container">
            <div class="section-header reveal-on-scroll">
                <span class="section-label">Novedades</span>
                <h2>Últimas Noticias</h2>
                <p style="margin-top: 1rem;">
                    Mantente informado sobre nuestras últimas innovaciones, expansiones y logros en seguridad privada.
                </p>
            </div>

            <div class="news-grid">
                <!-- Noticia 1 -->
                <article class="news-card reveal-on-scroll">
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
                                15 Dic 2024
                            </span>
                            <span class="news-category">Tecnología</span>
                        </div>
                        <h3>Nueva Tecnología de Vigilancia en San Juan Capital</h3>
                        <p class="news-excerpt">
                            Implementamos sistemas de videovigilancia con IA para detección temprana de incidentes en nuestras instalaciones principales, mejorando tiempos de respuesta en un 40%.
                        </p>
                        <a href="/noticias" class="news-link">
                            Leer más
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Noticia 2 -->
                <article class="news-card reveal-on-scroll" style="transition-delay: 0.1s">
                    <div class="news-image">
                        <img src="https://picsum.photos/seed/training-people/600/400" alt="Certificación internacional">
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
                                10 Dic 2024
                            </span>
                            <span class="news-category">Capacitación</span>
                        </div>
                        <h3>Certificación Internacional para Nuestro Equipo</h3>
                        <p class="news-excerpt">
                            Más de 50 agentes completaron exitosamente la certificación internacional en protección ejecutiva y manejo de crisis, elevando nuestros estándares de servicio.
                        </p>
                        <a href="/noticias" class="news-link">
                            Leer más
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Noticia 3 -->
                <article class="news-card reveal-on-scroll" style="transition-delay: 0.2s">
                    <div class="news-image">
                        <img src="https://picsum.photos/seed/office-building/600/400" alt="Apertura de nueva base">
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
                                5 Dic 2024
                            </span>
                            <span class="news-category">Expansión</span>
                        </div>
                        <h3>Apertura de Nueva Base en Valle Fértil</h3>
                        <p class="news-excerpt">
                            Expandimos nuestra cobertura con una base operativa en Valle Fértil, brindando respuesta inmediata a proyectos turísticos y ambientales de la zona este provincial.
                        </p>
                        <a href="/noticias" class="news-link">
                            Leer más
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contacto" class="contact reveal-on-scroll">
        <div class="container">
            <div class="contact-box">
                <span class="section-label">Contacto</span>
                <h2>Hablemos de Seguridad</h2>
                <div style="display: flex; flex-direction: column; gap: 1rem; margin-bottom: 2.5rem; color: var(--text-main); font-size: 1.2rem;">
                    <a href="mailto:info@gedeonrg.com.ar" style="font-weight: 600;">info@gedeonrg.com.ar</a>
                    <a href="tel:2645284690" style="font-weight: 600;">264 528 4690</a>
                    <a href="tel:2645152154" style="font-weight: 600;">264 515 2154</a>
                    <span style="font-size: 1rem; color: var(--text-muted); margin-top: 1rem;">www.gedeonrg.com.ar</span>
                </div>
                <div class="cta-group" style="justify-content: center; opacity: 1; transform: none; animation: none;">
                    <a href="mailto:info@gedeonrg.com.ar" class="btn-primary">Enviar Email</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>GEDEÓN R.G.</h4>
                    <p>Seguridad Privada de Alto Nivel en la provincia de San Juan.</p>
                </div>
                <div class="footer-col">
                    <h4>Enlaces</h4>
                    <ul>
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#servicios">Servicios</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Cobertura</h4>
                    <ul>
                        <li>Capital</li>
                        <li>Rodeo (Iglesia)</li>
                        <li>Jáchal</li>
                        <li>Valle Fértil</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Legales</h4>
                    <p>© <?= date('Y') ?> Gedeón R.G.<br>Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // --- Interactions ---
        document.addEventListener('DOMContentLoaded', () => {
             // Scroll Reveal
            const observerOptions = { threshold: 0.1, rootMargin: "0px" };
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.reveal-on-scroll').forEach(el => observer.observe(el));
            
            // Map Logic - Integración con Mapa Real
            const mapaObject = document.getElementById('mapa-interactivo');
            const listItems = document.querySelectorAll('.loc-item');
            const tooltip = document.querySelector('.map-tooltip');

            // Tooltip Elements
            let tooltipTitle = null;
            let tooltipText = null;
            if(tooltip) {
                tooltipTitle = tooltip.querySelector('h4');
                tooltipText = tooltip.querySelector('p');
            }

            // Mapeo de nombres de ubicaciones a paths del SVG
            const locationToPath = {
                'San Juan Capital': 31, // Santa Lucia (capital)
                'Rodeo (Iglesia)': 25,  // Iglesia
                'Jáchal': 26,           // jachal
                'Valle Fértil': 34,     // Valle Fértil
                'Calingasta': 21        // Calingasta
            };

            // Esperar a que el SVG cargue
            mapaObject.addEventListener('load', function() {
                const svgDoc = this.contentDocument;
                const paths = svgDoc.querySelectorAll('path');
                const svg = svgDoc.querySelector('svg');

                // Deshabilitar todos los paths por defecto
                paths.forEach((path, index) => {
                    const pathNumber = index + 1;
                    const isActive = Object.values(locationToPath).includes(pathNumber);

                    if (!isActive) {
                        // Deshabilitar paths no activos
                        path.style.cursor = 'default';
                        path.style.pointerEvents = 'none';
                        path.style.opacity = '0.3';
                    } else {
                        // Configurar paths activos
                        path.style.cursor = 'pointer';

                        // Obtener nombre de la ubicación
                        const locationName = Object.keys(locationToPath).find(key => locationToPath[key] === pathNumber);

                        // Obtener el centro del path (bounding box)
                        const bbox = path.getBBox();
                        const centerX = bbox.x + bbox.width / 2;
                        const centerY = bbox.y + bbox.height / 2;

                        // Crear círculo parpadeante
                        const pulseCircle = svgDoc.createElementNS('http://www.w3.org/2000/svg', 'circle');
                        pulseCircle.setAttribute('cx', centerX);
                        pulseCircle.setAttribute('cy', centerY);
                        pulseCircle.setAttribute('r', '8');
                        pulseCircle.setAttribute('fill', '#f0b323');
                        pulseCircle.setAttribute('opacity', '0.8');
                        pulseCircle.style.pointerEvents = 'none';

                        // Animación de pulso
                        const animate = svgDoc.createElementNS('http://www.w3.org/2000/svg', 'animate');
                        animate.setAttribute('attributeName', 'r');
                        animate.setAttribute('values', '4;12;4');
                        animate.setAttribute('dur', '2s');
                        animate.setAttribute('repeatCount', 'indefinite');
                        pulseCircle.appendChild(animate);

                        const animateOpacity = svgDoc.createElementNS('http://www.w3.org/2000/svg', 'animate');
                        animateOpacity.setAttribute('attributeName', 'opacity');
                        animateOpacity.setAttribute('values', '0.8;0.2;0.8');
                        animateOpacity.setAttribute('dur', '2s');
                        animateOpacity.setAttribute('repeatCount', 'indefinite');
                        pulseCircle.appendChild(animateOpacity);

                        svg.appendChild(pulseCircle);

                        // Círculo central fijo
                        const centerCircle = svgDoc.createElementNS('http://www.w3.org/2000/svg', 'circle');
                        centerCircle.setAttribute('cx', centerX);
                        centerCircle.setAttribute('cy', centerY);
                        centerCircle.setAttribute('r', '4');
                        centerCircle.setAttribute('fill', '#f0b323');
                        centerCircle.style.pointerEvents = 'none';
                        svg.appendChild(centerCircle);

                        // Evento hover en el mapa
                        path.addEventListener('mouseenter', function() {
                            if (tooltip && tooltipTitle) {
                                tooltipTitle.innerText = locationName;
                                tooltip.style.opacity = '1';
                                tooltip.style.transform = 'translateY(0)';
                            }
                            activateLocation(locationName);
                        });

                        path.addEventListener('mouseleave', function() {
                            if (tooltip) {
                                tooltip.style.opacity = '0';
                                tooltip.style.transform = 'translateY(10px)';
                            }
                        });

                        // Evento click
                        path.addEventListener('click', function() {
                            activateLocation(locationName);
                        });
                    }
                });
            });

            // Sync visual list with hover
            function activateLocation(locName) {
                listItems.forEach(item => {
                    if(item.dataset.target === locName) item.classList.add('active');
                    else item.classList.remove('active');
                });
            }

            listItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    activateLocation(item.dataset.target);

                    // Actualizar tooltip
                    if (tooltip && tooltipTitle) {
                        tooltipTitle.innerText = item.dataset.target;
                        tooltip.style.opacity = '1';
                        tooltip.style.transform = 'translateY(0)';
                    }
                });

                item.addEventListener('mouseleave', () => {
                    if (tooltip) {
                        tooltip.style.opacity = '0';
                        tooltip.style.transform = 'translateY(10px)';
                    }
                });
            });
            
             // Simple Parallax for Hero Video
            document.addEventListener('mousemove', (e) => {
                const video = document.querySelector('.video-wrapper');
                if(video && window.innerWidth > 900) {
                    const x = (window.innerWidth - e.pageX * 2) / 100;
                    const y = (window.innerHeight - e.pageY * 2) / 100;
                    video.style.transform = `rotateY(${-15 + x}deg) rotateX(${5 + y}deg)`;
                }
            });
        });
    </script>
</body>
</html>
