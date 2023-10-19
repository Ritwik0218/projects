// Show/hide the scroll-to-top button based on scroll position
document.addEventListener('DOMContentLoaded', function() {
    var scrollButton = document.querySelector('.scroll-to-top');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            scrollButton.style.display = 'block';
        } else {
            scrollButton.style.display = 'none';
        }
    });

    scrollButton.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
