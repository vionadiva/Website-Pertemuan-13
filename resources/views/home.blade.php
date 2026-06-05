<!DOCTYPE html>
<html lang="en" class="h-full bg-pink-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Home</title>
</head>

<body class="h-full text-rose-900">

<div class="min-h-full">

    <!-- Navbar -->
    <nav class="bg-pink-200 shadow-md">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">

                <div class="flex items-center">
                    <div class="shrink-0">
                        <div class="w-10 h-10 rounded-full bg-pink-400 flex items-center justify-center text-white font-bold">
                            V
                        </div>
                    </div>

                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">

                            <a href="/"
                               class="rounded-md bg-pink-400 px-3 py-2 text-sm font-medium text-white">
                                Home
                            </a>

                            <a href="/profile"
                               class="rounded-md px-3 py-2 text-sm font-medium text-rose-700 hover:bg-pink-300 hover:text-rose-900 transition">
                                Profile
                            </a>

                            <a href="/about"
                               class="rounded-md px-3 py-2 text-sm font-medium text-rose-700 hover:bg-pink-300 hover:text-rose-900 transition">
                                About
                            </a>

                            <a href="/books"
                               class="rounded-md px-3 py-2 text-sm font-medium text-rose-700 hover:bg-pink-300 hover:text-rose-900 transition">
                                Book Collection
                            </a>

                            <a href="/gallery"
                               class="rounded-md px-3 py-2 text-sm font-medium text-rose-700 hover:bg-pink-300 hover:text-rose-900 transition">
                                Gallery
                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-pink-300 shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-rose-900">
                🌸 Dashboard 🌸
            </h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-10">

        <div class="max-w-3xl mx-auto bg-white rounded-3xl shadow-lg p-8 border border-pink-200">
            <!-- Judul -->
            <h1 class="text-4xl font-bold text-center text-pink-500 mt-6 mb-4">
                🌷 Selamat Datang 🌷
            </h1>

            <p class="text-center text-rose-400 mb-8">
                Personal Website of Viona Diva Shifana
            </p>

            <!-- Biodata -->
            <p class="text-lg leading-relaxed text-rose-700 text-justify">
                Halo! Saya <strong>Viona Diva Shifana</strong>. Saya suka
                menghabiskan waktu dengan membaca novel, terutama cerita fiksi
                dan misteri yang membuat penasaran hingga lupa waktu.

                Selain itu, saya juga senang menonton drama Korea,
                mendengarkan musik, editing, dan mencoba hal-hal baru yang
                berhubungan dengan kreativitas.

                Saat memiliki waktu luang, saya sering melukis,
                membuat desain sederhana, atau mencoba memasak makanan yang
                mudah dan praktis.
            </p>

            <!-- Hobi -->
            <div class="mt-8">

                <h2 class="text-2xl font-semibold text-pink-500 mb-4">
                    💖 Hobi & Minat
                </h2>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">

                    <div class="bg-pink-100 p-3 rounded-xl text-center">
                        📚 Novel
                    </div>

                    <div class="bg-pink-100 p-3 rounded-xl text-center">
                        🎵 Musik
                    </div>

                    <div class="bg-pink-100 p-3 rounded-xl text-center">
                        🎨 Editing
                    </div>

                    <div class="bg-pink-100 p-3 rounded-xl text-center">
                        🎬 K-Drama
                    </div>

                </div>

            </div>

            <!-- Tombol -->
            <div class="text-center mt-10">

                <button
                    onclick="pesan()"
                    class="bg-pink-400 hover:bg-pink-500 text-white px-8 py-3 rounded-full shadow-md transition duration-300">

                    Klik Disini 💕
                </button>

            </div>

        </div>

    </main>

</div>

<script src="{{ asset('script/script.js') }}"></script>

</body>
</html>
```
