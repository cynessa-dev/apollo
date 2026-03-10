// Hamburger
const hamburger = document.getElementById('app-hamburger');
const drawer = document.getElementById('mobile-drawer');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('open');
    drawer.classList.toggle('open');
});

drawer.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
        hamburger.classList.remove('open');
        drawer.classList.remove('open');
    });
});

// Sync mobile toggles with desktop toggles
const themeDesktop = document.getElementById('theme-toggle');
const themeMobile  = document.getElementById('theme-toggle-m');
const premDesktop  = document.getElementById('account-type-toggle');
const premMobile   = document.getElementById('account-type-toggle-m');

if (themeMobile) {
    themeMobile.addEventListener('change', () => {
        themeDesktop.checked = themeMobile.checked;
        themeDesktop.dispatchEvent(new Event('change'));
    });
}

if (premMobile) {
    premMobile.addEventListener('change', () => {
        premDesktop.checked = premMobile.checked;
        premDesktop.dispatchEvent(new Event('change'));
    });
}