<!doctype html>
<html>

<head>
    @include('layouts.head')
</head>

<body class="bg-gradient-to-br from-cyan-400 to-purple-500 min-h-screen">
    @include('layouts.navbar')
        @section('content')
        @show
    </div>
    <script>
        function menu(e) {
            let list = document.querySelector('#navbarList');
            e.name === "menu" ?
                (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) :
                (e.name = "menu", list.classList.remove('top-[80]'), list.classList.remove('opacity-100'));
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>