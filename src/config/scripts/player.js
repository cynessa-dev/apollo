
const player = document.getElementById('player');

function playTrack(url) {
    const enconded = encodeURIComponent(url);
    
    fetch(`/config/backend/api/player.php?action=play&track=${enconded}`)
        .then(res => res.json())
        .then(data => {
            
            if (data.status === "playing") {
                player.src = data.track;
                player.play();
            }
        });
}