<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    @vite('resources/css/app.css')
    {{-- <style>
        .hidden {
            display: none;
        }
    </style> --}}
</head>

<body>
    <x-header-component />
    <x-navbar-component />

   @yield('content')

    <script>
        var toggleOpen = document.getElementById('toggleOpen');
    var toggleClose = document.getElementById('toggleClose');
    var collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
      if (collapseMenu.style.display === 'block') {
        collapseMenu.style.display = 'none';
      } else {
        collapseMenu.style.display = 'block';
      }
    }

    toggleOpen.addEventListener('click', handleClick);
    toggleClose.addEventListener('click', handleClick);

    document.addEventListener( 'DOMContentLoaded', function () {
  new Splide( '#thumbnail-carousel', {
		fixedWidth : 100,
    fixedHeight: 60,
		gap        : 10,
		rewind     : true,
		pagination : false,
  } ).mount();
} );
    </script>
</body>

</html>
