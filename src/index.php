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

    <!-- HERO -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-content">
            <div class="hero-badge">🎵 Free to Stream</div>
            <h1>Music that moves<br><span>with you.</span></h1>
            <p>Apollo brings you thousands of free, open-licensed tracks — from rock to romance — all in one clean, distraction-free player. No subscriptions. Just music.</p>
            <a href="./public/home" class="btn-primary">Get Jamming →</a>
            <p class="hero-note">Powered by the Jamendo API · Free & open-source music only</p>
        </div>
    </section>

    <!-- WAVE -->
    <div class="wave">
        <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,30 C360,60 1080,0 1440,30 L1440,60 L0,60 Z" fill="var(--color-panel)" />
        </svg>
    </div>

    <!-- DISCLAIMER -->
    <section class="disclaimer" id="disclaimer">
        <p class="section-label">Heads up</p>
        <h2>A few things to know</h2>
        <div class="disclaimer-cards">
            <div class="disclaimer-card">
                <div class="icon">🎼</div>
                <h3>Free & Open-Source Music</h3>
                <p>All tracks are sourced from Jamendo and are licensed under Creative Commons. Apollo does not host or own any music.</p>
            </div>
            <div class="disclaimer-card">
                <div class="icon">🤝</div>
                <h3>Not Affiliated with Artists</h3>
                <p>Apollo is an independent project and has no direct affiliation, partnership, or endorsement from any artist or record label.</p>
            </div>
            <div class="disclaimer-card">
                <div class="icon">🎓</div>
                <h3>School Project</h3>
                <p>Apollo was built as a school project. It is not a commercial product and is not intended for profit or large-scale distribution.</p>
            </div>
        </div>
    </section>

    <!-- WAVE -->
    <div class="wave">
        <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,30 C360,0 1080,60 1440,30 L1440,0 L0,0 Z" fill="var(--color-panel)" />
        </svg>
    </div>

    <!-- TECH STACK -->
    <section class="techstack" id="techstack">
        <p class="section-label">Under the hood</p>
        <h2>Built with</h2>
        <p>A lean, modern stack — no frameworks, no bloat. Just the essentials done well.</p>
        <div class="tech-grid">
            <div class="tech-pill"><span class="dot"></span>PHP</div>
            <div class="tech-pill"><span class="dot"></span>Tailwind CSS</div>
            <div class="tech-pill"><span class="dot"></span>JavaScript</div>
            <div class="tech-pill"><span class="dot"></span>Jamendo API</div>
        </div>
    </section>

</body>
</html>