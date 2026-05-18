const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

if (!prefersReducedMotion) {
    const tiltCards = document.querySelectorAll('[data-tilt]');
    const scene = document.querySelector('[data-parallax-scene]');

    tiltCards.forEach((card) => {
        card.addEventListener('pointermove', (event) => {
            const rect = card.getBoundingClientRect();
            const x = (event.clientX - rect.left) / rect.width - 0.5;
            const y = (event.clientY - rect.top) / rect.height - 0.5;

            card.style.setProperty('--tilt-x', `${(-y * 9).toFixed(2)}deg`);
            card.style.setProperty('--tilt-y', `${(x * 11).toFixed(2)}deg`);
        });

        card.addEventListener('pointerleave', () => {
            card.style.setProperty('--tilt-x', '0deg');
            card.style.setProperty('--tilt-y', '0deg');
        });

        card.addEventListener('click', () => {
            if (card.classList.contains('flip-card')) {
                card.classList.toggle('is-flipped');
            }
        });

        card.addEventListener('keydown', (event) => {
            if (card.classList.contains('flip-card') && (event.key === 'Enter' || event.key === ' ')) {
                event.preventDefault();
                card.classList.toggle('is-flipped');
            }
        });
    });

    if (scene) {
        let targetX = 0;
        let targetY = 0;
        let currentX = 0;
        let currentY = 0;
        let frameId = null;

        const render = () => {
            currentX += (targetX - currentX) * 0.08;
            currentY += (targetY - currentY) * 0.08;
            scene.style.setProperty('--scene-x', `${currentX.toFixed(2)}px`);
            scene.style.setProperty('--scene-y', `${currentY.toFixed(2)}px`);
            scene.querySelectorAll('[data-depth]').forEach((layer) => {
                const depth = Number(layer.dataset.depth || 0);
                layer.style.transform = `translate3d(${(currentX * depth).toFixed(2)}px, ${(currentY * depth).toFixed(2)}px, 0)`;
            });
            if (Math.abs(targetX - currentX) > 0.05 || Math.abs(targetY - currentY) > 0.05) {
                frameId = requestAnimationFrame(render);
            } else {
                frameId = null;
            }
        };

        window.addEventListener('pointermove', (event) => {
            targetX = (event.clientX / window.innerWidth - 0.5) * 34;
            targetY = (event.clientY / window.innerHeight - 0.5) * 34;
            if (!frameId) {
                frameId = requestAnimationFrame(render);
            }
        }, { passive: true });
    }
}
