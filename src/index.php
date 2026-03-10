<?php

session_start();

$theme = $_SESSION['theme'] ?? 'light';
$is_dark = $theme === 'dark' ? 'checked' : '';

?>
<!DOCTYPE html>
<html lang="en" class="<?= $theme ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apollo — Stream. Discover. Vibe.</title>
    <link rel="stylesheet" href="/global.css">
</head>
<body>

    <!-- NAV -->
    <nav>
        <a href="#" class="nav-logo">Apollo<span>.</span></a>
        <button class="hamburger" id="hamburger" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </button>
        <ul id="nav-menu">
            <li><a href="#disclaimer">Disclaimer</a></li>
            <li><a href="#techstack">Tech Stack</a></li>
            <li><a href="https://github.com/cynessa-dev" target="_blank">GitHub</a></li>
            <li>
                <label class="toggle-wrap" title="Toggle dark mode">
                    <input type="checkbox" id="theme-toggle" <?= $is_dark ?> />
                    <div class="toggle-track">
                        <div class="toggle-knob"></div>
                    </div>
                </label>
            </li>
        </ul>
    </nav>

</body>
</html>