
const toggle = document.getElementById('theme-toggle');

// Toggle on change
toggle.addEventListener('change', () => {
    const isDark = toggle.checked;
    let theme = isDark ? 'dark' : 'light';

    // Toggle between light and dark immediately
    document.documentElement.classList.toggle('dark', isDark);

    // Send the request to themeToggler.php to save the theme in SESSION
    fetch(`/config/backend/api/themeToggler.php?theme=${theme}`);
});