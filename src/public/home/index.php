<?php
session_start();

require_once '/var/www/html/config/services/jamendoAPI.php';
require_once '/var/www/html/config/backend/musicPlayer.php';
require_once '/var/www/html/config/models/free.php';

$api = new JamendoAPI();
$top_picks = $api->getPopularTracks();

$genres = [
    'rock' => 'Get Hyped Up!',
    'love' => 'Love is in The Air',
    'metal' => 'Metal All The Way!'
];

$user = new Free('Chano');

$theme = $_SESSION['theme'] ?? 'light';
$account_type = $_SESSION['account_type'] ?? 'free';

$is_dark = $theme === 'dark' ? 'checked' : '';
$is_premium = $account_type === 'premium' ? 'checked' : '';

?>

<!DOCTYPE html>
<html lang="en" class="<?= $theme; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listen with Apollo</title>
    <link rel="stylesheet" href="/global.css">
    <script src="/config/scripts/home.js" defer></script>
    <script src="/config/scripts/player.js" defer></script>
    <script src="/config/scripts/musicCarousel.js" defer></script>
    <script src="/config/scripts/handleTheme.js" defer></script>
    <script src="/config/scripts/handleAccountType.js" defer></script>
</head>
<body>

<!-- TOP NAV -->
<nav class="app-nav">
    <a href="/" class="app-nav-logo">Apollo<span class="dot">.</span></a>

    <ul class="app-nav-links">
        <li><a href="https://github.com/cynessa-dev/apollo/blob/main/DEVLOG.md" target="_blank">Documentation</a></li>
        <li><a href="https://github.com/cynessa-dev" target="_blank">GitHub</a></li>
        <li><a href="https://christian-mamplata.vercel.app/" target="_blank">Creator</a></li>
    </ul>

    <div class="nav-controls">
        <!-- Dark mode toggle -->
        <div class="nav-control-item">
            <label class="text-label" for="theme-toggle">Dark</label>
            <label class="mini-toggle" for="theme-toggle" title="Toggle dark mode">
                <input type="checkbox" id="theme-toggle" <?= $is_dark ?> />
                <span class="mini-toggle-track"></span>
                <span class="mini-toggle-knob"></span>
            </label>
        </div>

        <!-- Premium toggle -->
        <div class="nav-control-item">
            <label class="text-label" for="account-type-toggle">Premium</label>
            <label class="mini-toggle" for="account-type-toggle" title="Toggle premium account">
                <input type="checkbox" id="account-type-toggle" <?= $is_premium ?> />
                <span class="mini-toggle-track"></span>
                <span class="mini-toggle-knob"></span>
            </label>
        </div>
    </div>

    <button class="app-hamburger" id="app-hamburger" aria-label="Toggle menu">
        <span></span><span></span><span></span>
    </button>
</nav>

<!-- MOBILE DRAWER -->
<ul class="mobile-drawer" id="mobile-drawer">
    <li><a href="https://github.com/cynessa-dev/apollo/blob/main/DEVLOG.md" target="_blank">Documentation</a></li>
    <li><a href="https://github.com/cynessa-dev" target="_blank">GitHub</a></li>
    <li><a href="https://christian-mamplata.vercel.app/" target="_blank">Creator</a></li>
    <li>
        <div class="drawer-controls">
            <div class="nav-control-item">
                <label class="text-label" for="theme-toggle-m">Dark Mode</label>
                <label class="mini-toggle" for="theme-toggle-m">
                    <input type="checkbox" id="theme-toggle-m" <?= $is_dark ?> />
                    <span class="mini-toggle-track"></span>
                    <span class="mini-toggle-knob"></span>
                </label>
            </div>
            <div class="nav-control-item">
                <label class="text-label" for="account-type-toggle-m">Premium Account</label>
                <label class="mini-toggle" for="account-type-toggle-m">
                    <input type="checkbox" id="account-type-toggle-m" <?= $is_premium ?> />
                    <span class="mini-toggle-track"></span>
                    <span class="mini-toggle-knob"></span>
                </label>
            </div>
        </div>
    </li>
</ul>

<!-- APP BODY -->
<div class="app-body">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <button class="sidebar-btn" title="Search">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
        </button>

        <div class="sidebar-divider"></div>

        <button class="sidebar-btn" title="Library">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
            </svg>
        </button>

        <button class="sidebar-btn" title="Explore">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                <path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016m6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0"/>
                <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z"/>
            </svg>
        </button>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">

        <!-- GREETING -->
        <div class="greeting">
            <p class="greeting-eyebrow">🎵 Now streaming</p>
            <h2>What are we vibing to<br>today, <?= htmlspecialchars($user->name ?? 'there') ?>?</h2>
        </div>

        <!-- TOP PICKS -->
        <div class="music-section">
            <div class="section-header">
                <h3>Top Picks</h3>
                <span class="track-count"><?= count($top_picks['results']) ?> tracks</span>
            </div>
            <div class="track-row">
                <?php foreach ($top_picks['results'] as $track) : ?>
                    <div class="music-card" onclick="playTrack('<?= htmlspecialchars($track['audio']) ?>')">
                        <div class="music-card-img-wrap">
                            <img
                                src="<?= htmlspecialchars($track['album_image']) ?>"
                                alt="<?= htmlspecialchars($track['name']) ?>"
                                draggable="false"
                            />
                            <div class="play-overlay">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                    <path d="M10.804 8 5 4.633v6.734zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696z"/>
                                </svg>
                            </div>
                        </div>
                        <h2><?= htmlspecialchars($track['name']) ?></h2>
                        <p><?= htmlspecialchars($track['artist_name']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- GENRE SECTIONS -->
        <?php foreach ($genres as $genre => $catchphrase) : ?>
            <?php $tracks = $api->searchTracks($genre) ?>
            <div class="music-section">
                <div class="section-header">
                    <h3><?= htmlspecialchars($catchphrase) ?></h3>
                    <span class="track-count"><?= count($tracks['results']) ?> tracks</span>
                </div>
                <div class="track-row">
                    <?php foreach ($tracks['results'] as $track) : ?>
                        <div class="music-card" onclick="playTrack('<?= htmlspecialchars($track['audio']) ?>')">
                            <div class="music-card-img-wrap">
                                <img
                                    src="<?= htmlspecialchars($track['album_image']) ?>"
                                    alt="<?= htmlspecialchars($track['name']) ?>"
                                    draggable="false"
                                />
                                <div class="play-overlay">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                        <path d="M10.804 8 5 4.633v6.734zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696z"/>
                                    </svg>
                                </div>
                            </div>
                            <h2><?= htmlspecialchars($track['name']) ?></h2>
                            <p><?= htmlspecialchars($track['artist_name']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

    </main>
</div>

<!-- PLAYER BAR -->
<div class="player-bar">
    <audio id="player" controls></audio>
</div>

</body>
</html>