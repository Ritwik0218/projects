// Add a class to an element on click
document.addEventListener('DOMContentLoaded', function() {
    var element = document.querySelector('.toggle-class');

    element.addEventListener('click', function() {
        element.classList.toggle('active');
    });
});
