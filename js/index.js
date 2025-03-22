
document.addEventListener("DOMContentLoaded", function () {
    const ctaButton = document.querySelector('.cta-button');
    const text = document.querySelector('.text');

    ctaButton.addEventListener('click', () => {
        text.classList.toggle('show-more');
    });
});
