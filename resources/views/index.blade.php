<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>

<nav class="navbar bg-green-200 flex flex-wrap relative items-center justify-between hover:text">
   <div class="flex flex-wrap items-center justify-between px-3">
       <a href="/">
           <img src="../img/logo.png" alt="Logo">
       </a>
   </div>

    <form action="/search" method="post" role="search">
        <input type="search" name="search" placeholder="Search your gift!">
    </form>
    <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
            <img src="../img/logo.png" alt="jj">
        </div>
    </div>

</nav>
<div class="container mx-auto text-center">
    <h1 class="text-5xl font-bold">
        Crafty Creations
    </h1>
</div>
</body>
</html>
