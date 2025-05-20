document.addEventListener('DOMContentLoaded', () => {
    const galeriBtn = document.querySelector('.btn-outline-primary');
    if (galeriBtn) {
        galeriBtn.addEventListener('click', (e) => {
            const carousel = document.getElementById('galeriCarousel');
            if (carousel) {
                carousel.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }
});