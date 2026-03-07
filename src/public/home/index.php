<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listen with Apollo</title>
    <link rel="stylesheet" href="/global.css">
</head>
<body>
    <div class="flex flex-col space-y-3">
        <!-- HERO -->
        <nav class="flex justify-between items-center px-6 py-4 bg-panel">
            <h1 class="text-[1.5rem] font-semibold">Apollo</h1>
            <ul class="flex space-x-6 text-[1.125rem]">
                <li>Documentation</li>
                <li>GitHub</li>
                <li>Creator</li>
            </ul>
        </nav>

        <!-- LOWER -->
        <div class="flex pr-3 space-x-3">
            <!-- SIDE BAR -->
            <div class="flex flex-col pl-3 pr-6 py-4 space-y-2 bg-panel text-secondary text-[1.125rem] rounded-tr-lg">
                <div>
                    <h1>Search</h1>
                </div>
                <div>
                    <h1>Library</h1>
                </div>
                <div>
                    <h1>Explore</h1>
                </div>
            </div>

            <!-- MAIN PANEL -->
            <div class="w-full p-3 bg-panel rounded-lg">
                <!-- TOP PICK SONG CARDS -->
                <div class="mb-8">
                    <h1 class="text-[2rem] font-bold">Top Picks</h1>
                    <div class="flex space-x-2">
                        <div class="flex flex-col p-3 min-w-48 bg-card border border-border rounded-lg">
                            <div class="w-full mb-2 max-h-48 bg-panel rounded-md">
                                <img 
                                    src="/assets/icons/music-note.svg" 
                                    alt="music"
                                    class="w-full h-full"
                                />
                            </div>
                            <h2 class="text-[1.125rem] font-semibold">Hello, World</h2>
                            <p class="text-sm font-light">Chano the Artist</p>
                        </div>

                        <div class="flex flex-col p-3 min-w-48 bg-card border border-border rounded-lg">
                            <div class="w-full mb-2 max-h-48 bg-panel rounded-md">
                                <img 
                                    src="/assets/icons/music-note.svg" 
                                    alt="music"
                                    class="w-full h-full"
                                />
                            </div>
                            <h2 class="text-[1.125rem] font-semibold">Hello, World</h2>
                            <p class="text-sm font-light">Chano the Artist</p>
                        </div>
                    </div>
                </div>

                <!-- RECOMMENDED ARTIST CARDS -->
                <div class="mb-8">
                    <h1 class="text-[2rem] font-bold">Recommended Artist</h1>
                    <div class="flex space-x-2">
                        <div class="flex flex-col p-3 min-w-48 bg-card border border-border rounded-lg">
                            <div class="w-full mb-2 max-h-48 bg-panel rounded-md">
                                <img 
                                    src="/assets/icons/music-note.svg" 
                                    alt="music"
                                    class="w-full h-full"
                                />
                            </div>
                            <h2 class="text-[1.125rem] font-semibold">Hello, World</h2>
                            <p class="text-sm font-light">Chano the Artist</p>
                        </div>

                        <div class="flex flex-col p-3 min-w-48 bg-card border border-border rounded-lg">
                            <div class="w-full mb-2 max-h-48 bg-panel rounded-md">
                                <img 
                                    src="/assets/icons/music-note.svg" 
                                    alt="music"
                                    class="w-full h-full"
                                />
                            </div>
                            <h2 class="text-[1.125rem] font-semibold">Hello, World</h2>
                            <p class="text-sm font-light">Chano the Artist</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>
</html>