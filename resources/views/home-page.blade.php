<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<nav  class="bg-gray-400 flex sm:justify-between text-white px-5 h-16 items-center">
    <h1 >MON SUPER SITE</h1>
    <ul class="flex">
        <li class="ml-16 px-1 hover:bg-gray-300 rounded"><a href={{route('login')}}>Connexion</a></li>
        <li class="ml-5 px-1 hover:bg-gray-300 rounded"><a href={{route('inscription')}}>Inscription</a></li>
    </ul>
</nav>

<div class="flex flex-wrap flex-row justify-center text-sm py-4 px-32 ">
    <span class="block text-gray-300 text-center bg-gray-700 py-16 px-8 " style="width:500px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus doloribus architecto quod ex aliquam placeat inventore amet pariatur voluptatibus quisquam dolorum et beatae cupiditate, fugiat ipsa enim. Voluptatum, consequuntur accusamus.</span>
    <span class="block text-gray-100 text-center bg-gray-500 py-16 px-8 " style="width:500px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus doloribus architecto quod ex aliquam placeat inventore amet pariatur voluptatibus quisquam dolorum et beatae cupiditate, fugiat ipsa enim. Voluptatum, consequuntur accusamus.</span>
    <span class="block text-gray-700 text-center bg-gray-300 py-16 px-8 " style="width:500px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus doloribus architecto quod ex aliquam placeat inventore amet pariatur voluptatibus quisquam dolorum et beatae cupiditate, fugiat ipsa enim. Voluptatum, consequuntur accusamus.</span>
    <span class="block text-gray-500 text-center bg-gray-100 py-16 px-8 " style="width:500px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus doloribus architecto quod ex aliquam placeat inventore amet pariatur voluptatibus quisquam dolorum et beatae cupiditate, fugiat ipsa enim. Voluptatum, consequuntur accusamus.</span>
</div>

<footer class="p-4 bg-gray-100 text-center w-full  rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
    <span class=" items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">Copyright © 2021 Mon-super-site.fr</span>
</footer>
</body>
</html>
