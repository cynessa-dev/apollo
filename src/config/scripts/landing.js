
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