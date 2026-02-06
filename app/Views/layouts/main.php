<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?> | Guardián Patagónico</title>
    <meta name="description" content="Seguridad Privada Corporativa en la Patagonia y San Juan. Protección de activos críticos con tecnología y personal de élite en la Patagonia y San Juan.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <!-- 3D Model Viewer -->
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>
    
    <?= $this->renderSection('styles') ?>
</head>
<body>

    <?= $this->include('navbar') ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('footer') ?>

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
            
            // Subtle Parallax for Hero Video
            document.addEventListener('mousemove', (e) => {
                const video = document.querySelector('.video-wrapper');
                if(video && window.innerWidth > 900) {
                    const x = (window.innerWidth - e.pageX * 2) / 200;
                    const y = (window.innerHeight - e.pageY * 2) / 200;
                    video.style.transform = `rotateY(${-5 + x}deg) rotateX(${2 + y}deg)`;
                }
            });
        });
    </script>

    <?= $this->renderSection('scripts') ?>
</body>
</html>