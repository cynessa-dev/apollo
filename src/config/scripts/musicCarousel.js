const sliders = document.querySelectorAll('.scrollable');

let isDown = false;
let startX;
let scrollLeft;

sliders.forEach(slider => {
   slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('cursor-grabbing');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('cursor-grabbing');
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('cursor-grabbing');
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;

        e.preventDefault();

        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 2; // scroll-fast multiplier
        slider.scrollLeft = scrollLeft - walk;
    }) 
});