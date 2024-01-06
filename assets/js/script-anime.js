///animation titre h1 /////////////////////////////////////
document.addEventListener('DOMContentLoaded', function () {
    let animation = anime({
        targets: '.letter',
        opacity: 1,
        translateY: 50,
        rotate: {
            value: 360,
            duration: 2000,
            easing: 'easeInExpo'
        },
        delay: anime.stagger(100, { start: 7000 }),
        translateX: [-10, 30]
    });
});

////animation menu ////////////////////////////////////////
document.addEventListener('DOMContentLoaded', function () {
    let isMenuVertical = false;

    window.addEventListener('scroll', function() {
        let currentScroll = window.scrollY;
        let nav = document.querySelector('.site_nav');

        if (currentScroll > 0 && !isMenuVertical) {
            // Passage en mode vertical
            isMenuVertical = true;

            // Animer les liens du menu pour les déplacer de gauche à droite
            anime({
                targets: '.site_header_menu li a',
                translateX: [0, 270], // De la position originale à droite
                opacity: [1, 0], // De visible à invisible
                delay: anime.stagger(100),
                easing: 'easeInExpo',
                complete: function() {
                    nav.classList.add('vertical');
                    // Assurez-vous que cette animation cible correctement les liens du menu vertical
                    anime({
                        targets: '.site_nav.vertical .site_header_menu li a',
                        translateX: [270, 0],
                        opacity: [0, 1],
                        delay: anime.stagger(100),
                        easing: 'easeOutExpo'
                    });
                }
            });
        } else if (currentScroll === 0 && isMenuVertical) {
            // Retour en mode horizontal
            isMenuVertical = false;
            nav.classList.remove('vertical');
            
            // Masquer temporairement le menu horizontal
            document.querySelectorAll('.site_header_menu li a').forEach(link => {
                link.style.opacity = '0';
            });

            // Attendre que la classe 'vertical' soit retirée avant de lancer l'animation de retour
            setTimeout(() => {
                anime({
                    targets: '.site_header_menu li a',
                    translateX: [270, 0], // Ramène de droite à la position originale
                    opacity: [0, 1], // Rend les liens visibles
                    delay: anime.stagger(100),
                    easing: 'easeOutExpo'
                });
            }, 300);
        }
    });
});
