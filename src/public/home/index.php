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
$is_dark = $theme === 'dark' ? 'checked' : '';

?>

<!DOCTYPE html>
<html lang="en" class="<?= $theme; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listen with Apollo</title>
    <link rel="stylesheet" href="/global.css">
    <script src="/config/scripts/player.js" defer></script>
    <script src="/config/scripts/musicCarousel.js" defer></script>
    <script src="/config/scripts/handleTheme.js" defer></script>
</head>
<body>
    <div class="flex flex-col space-y-3">
        <!-- HERO -->
        <nav class="flex justify-between items-center px-6 py-4 bg-panel">
            <h1 class="text-[1.5rem] font-semibold select-none">Apollo</h1>
            <ul class="flex space-x-6 text-[1.125rem]">
                <li class="flex justify-center items-center">
                    <input name="theme-toggle" type="checkbox" id="theme-toggle" <?= $is_dark ?> />
                </li>
                <li class="hidden md:block">
                    <a href="https://github.com/cynessa-dev/apollo/blob/main/DEVLOG.md" target="_blank">Documentation</a>
                </li>
                <li class="hidden md:block">
                    <a href="https://github.com/cynessa-dev" target="_blank">GitHub</a>
                </li>
                <li class="hidden md:block">
                    <a href="https://christian-mamplata.vercel.app/" target="_blank">Creator</a>
                </li>
            </ul>
        </nav>

        <!-- LOWER -->
        <div class="flex h-screen pr-3 space-x-3 overflow-hidden">
            <!-- SIDE BAR -->
            <div class="flex flex-col pl-3 py-4 space-y-6 bg-panel text-secondary text-[1.125rem] rounded-tr-lg">            
                <div class="flex items-center space-x-3 cursor-not-allowed" title="Not a feature yet">
                    <svg class="text-body w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                    <h1 class="hidden">Search</h1>
                </div>
                <div class="flex items-center space-x-3 cursor-not-allowed" title="Not a feature yet">
                    <svg class="text-body w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
                        <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
                    </svg>
                    <h1 class="hidden">Library</h1>
                </div>
                <div class="flex items-center space-x-3 cursor-not-allowed" title="Not a feature yet">
                    <svg class="text-body w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-compass" viewBox="0 0 16 16">
                        <path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016m6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0"/>
                        <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z"/>
                    </svg>
                    <h1 class="hidden">Explore</h1>
                </div>
            </div>

            <!-- MAIN PANEL -->
            <div class="w-full px-6 py-3 pb-24 bg-panel rounded-lg overflow-y-auto no-scrollbar">
                <!-- TOP PICK SONG CARDS -->
                <div class="mb-8">
                    <h1 class="text-[2rem] font-bold">Top Picks</h1>
                    <div class="flex space-x-3 whitespace-nowrap overflow-x-scroll no-scrollbar scrollable">
                        <?php foreach ($top_picks['results'] as $track) : ?>
                            <music 
                                onclick="playTrack('<?= $track['audio'] ?>')" 
                                class="flex flex-col p-3 max-w-32 bg-card border border-border rounded-lg cursor-pointer lg:max-w-0 lg:min-w-48">
                                <!-- IMAGE  -->
                                <div class="w-full mb-2 max-h-48 bg-panel rounded-md">
                                    <img 
                                        src=<?= $track['album_image']; ?> 
                                        alt=<?= $track['album_id']; ?>
                                        class="w-full h-full rounded-md select-none"
                                    />
                                </div>
                                <!-- TITLE -->
                                <h2 class="max-w-full text-[1.125rem] font-semibold text-ellipsis whitespace-nowrap overflow-hidden">
                                    <?= $track['name']; ?>
                                </h2>
                                <!-- ARTIST -->
                                <p class="max-w-full text-sm font-light text-ellipsis whitespace-nowrap overflow-hidden">
                                    <?= $track['artist_name']; ?>
                                </p>
                            </music>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- GENRE CARDS -->
                <?php foreach ($genres as $genre => $catchphrase ) : ?>
                    <div class="mb-8">
                        <h1 class="text-[2rem] font-bold">
                            <?= $catchphrase ?>
                        </h1>
                        <div class="flex space-x-3 whitespace-nowrap overflow-x-scroll no-scrollbar scrollable">
                            <?php $tracks = $api->searchTracks($genre) ?>
                            <?php foreach ($tracks['results'] as $track) : ?>
                                <music 
                                    onclick="playTrack('<?= $track['audio'] ?>')" 
                                    class="flex flex-col p-3 max-w-32 bg-card border border-border rounded-lg cursor-pointer  lg:max-w-0 lg:min-w-48">
                                    <!-- IMAGE  -->
                                    <div class="w-full mb-2 max-h-48 bg-panel rounded-md">
                                        <img 
                                            src=<?= $track['album_image']; ?> 
                                            alt=<?= $track['album_id']; ?>
                                            class="w-full h-full rounded-md select-none"
                                        />
                                    </div>
                                    <!-- TITLE -->
                                    <h2 class="max-w-full text-[1.125rem] font-semibold text-ellipsis whitespace-nowrap overflow-hidden">
                                        <?= $track['name']; ?>
                                    </h2>
                                    <!-- ARTIST -->
                                    <p class="max-w-full text-sm font-light text-ellipsis whitespace-nowrap overflow-hidden">
                                        <?= $track['artist_name']; ?>
                                    </p>
                                </music>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

        <!-- PLAYER -->
        <div class="fixed bottom-0 left-0 w-full bg-card p-4 border-t border-border">
            <audio id="player" controls class="w-full"></audio>
        </div>

    </div>
</body>
</html>