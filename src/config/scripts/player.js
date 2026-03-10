
const audio_ads = [
    '/assets/ads/ad_1.mp3',
    '/assets/ads/ad_2.mp3',
    '/assets/ads/ad_3.mp3',
];

const player = document.getElementById('player');

let action = 'play'
let currentTrack = null;

function getRandomAd() {
    const index = Math.floor(Math.random() * audio_ads.length);
    return audio_ads[index];
}

function playTrack(url) {

    // Compare current and incoming tracks, it shows what the user is trying to do and avoids reloading the same track repeatedly
    if (currentTrack === url) {
        player.paused ? player.play() : player.pause();

        return;
    }

    // Encode the url to avoid errors when attaching to the api
    const enconded = encodeURIComponent(url);

    fetch(`/config/backend/api/player.php?action=${action}&track=${enconded}`)
        .then(res => res.json())
        .then(data => {

            currentTrack = url; // Save the incoming track for future comparing

            if (data.account_type === 'free') {
                player.src = getRandomAd();
                player.play();

                player.onended = () => {
                    player.src = data.track;
                    player.play();
                    player.onended = null;
                }
            } else {
                player.src = data.track;
                player.play();
            }
        });
}