<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    @vite('resources/css/app.css')
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <x-header-component />
    <x-navbar-component />

    <section>
        <div class="relative overflow-hidden h-screen">
            <video src="{{ asset('assets/frontend/video.mp4') }}" autoplay loop muted
                class="w-full h-5/6 object-cover">
            </video>
        </div>
    </section>
    <div class="bg-cover bg-center bg-custom-image h-64">
        <!-- Your content here -->
    </div>


</body>

</html>
