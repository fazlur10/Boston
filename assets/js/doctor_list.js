$(document).ready(function () {
    // Change navbar background color on scroll
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    $('.book-appointment-desktop-btn, .book-appointment-mobile-btn').on('click', function (e) {
        e.preventDefault();
        const baseUrl = window.location.origin + window.location.pathname.split('/').slice(0, 2).join('/');
        window.location.href = baseUrl + '/#appointment-section';
    });
    
});