
// Theme toggle
const toggle = document.getElementById('theme-toggle');

toggle.addEventListener('change', () => {
    const isDark = toggle.checked;
    const theme = isDark ? 'dark' : 'light';

    document.documentElement.classList.toggle('dark', isDark);

    fetch(`/config/backend/api/themeToggler.php?theme=${theme}`)
        .then(res => res.json())
        .then(data => console.log(data));
});

// Hamburger menu
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('open');
    navMenu.classList.toggle('open');
});

// Close menu when a nav link is clicked
navMenu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
        hamburger.classList.remove('open');
        navMenu.classList.remove('open');
    });
});