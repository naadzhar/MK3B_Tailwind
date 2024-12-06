<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Poppins:wght@100..900&display=swap" rel="stylesheet">
    <title>Furniro</title>
</head>
<body class="font-sans bg-white">

<header class="bg-white text-black p-5 flex justify-between items-center">
    <img src="asset/img/logo.png" alt="Logo" class="ml-2">
    <h1 class="font-montserrat text-black">Furniro</h1>
    <nav>
        <ul class="flex list-none m-0 p-0 space-x-5">
            <li><a href="#" class="text-black font-poppins font-semibold">Home</a></li>
            <li><a href="#" class="text-black font-poppins font-semibold">Shop</a></li>
            <li><a href="#" class="text-black font-poppins font-semibold">About</a></li>
            <li><a href="#" class="text-black font-poppins font-semibold">Contact</a></li>
        </ul>
    </nav>
    <div class="flex space-x-5 text-black">
        <i class="fa-regular fa-user"></i>
        <i class="fa-solid fa-magnifying-glass"></i>
        <i class="fa-regular fa-heart"></i>
        <i class="fa-solid fa-cart-shopping"></i>
    </div>
</header>

<img src="asset/img/bgh.png" alt="background" class="w-full h-auto">

<div class="home text-center p-5">
    <h1 class="font-poppins text-xl font-bold">Browse The Range</h1>
    <p class="font-poppins font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <div class="gallery flex items-center justify-center flex-wrap space-x-4">
        <img src="asset/img/01.png" alt="01" class="w-1/3">
        <img src="asset/img/02.png" alt="02" class="w-1/3">
        <img src="asset/img/03.png" alt="03" class="w-1/3">
    </div>
</div>

<div class="cart p-5">
    <h1 class="text-center font-bold font-poppins">Our Product</h1>
    <div class="product flex flex-wrap justify-center items-center">

        <div class="item border border-gray-300 m-2 w-72">
            <img src="asset/img/p1.png" alt="Syltherine" class="w-full h-auto">
            <h2 class="font-poppins font-semibold text-lg mt-2">Syltherine</h2>
            <h3 class="font-poppins font-semibold text-sm text-gray-500">Stylish cafe chair</h3>
            <div class="price flex justify-between p-2">
                <p class="font-poppins font-semibold text-lg">Rp 2.500.000</p>
                <p class="font-poppins line-through text-gray-400">Rp 3.500.000</p>
            </div>
        </div>

        <div class="item border border-gray-300 m-2 w-72">
            <img src="asset/img/p2.png" alt="Leviosa" class="w-full h-auto">
            <h2 class="font-poppins font-semibold text-lg mt-2">Leviosa</h2>
            <h3 class="font-poppins font-semibold text-sm text-gray-500">Stylish cafe chair</h3>
            <div class="price flex justify-between p-2">
                <p class="font-poppins font-semibold text-lg">Rp 2.500.000</p>
            </div>
        </div>

        <div class="item border border-gray-300 m-2 w-72">
            <img src="asset/img/p3.png" alt="Lolito" class="w-full h-auto">
            <h2 class="font-poppins font-semibold text-lg mt-2">Lolito</h2>
            <h3 class="font-poppins font-semibold text-sm text-gray-500">Luxury big sofa</h3>
            <div class="price flex justify-between p-2">
                <p class="font-poppins font-semibold text-lg">Rp 7.000.000</p>
                <p class="font-poppins line-through text-gray-400">Rp 14.000.000</p>
            </div>
        </div>

        <div class="item border border-gray-300 m-2 w-72">
            <img src="asset/img/p4.png" alt="Respira" class="w-full h-auto">
            <h2 class="font-poppins font-semibold text-lg mt-2">Respira</h2>
            <h3 class="font-poppins font-semibold text-sm text-gray-500">Outdoor bar table and stool</h3>
            <div class="price flex justify-between p-2">
                <p class="font-poppins font-semibold text-lg">Rp 500.000</p>
            </div>
        </div>

        <div class="item border border-gray-300 m-2 w-72">
            <img src="asset/img/p5.png" alt="Grifo" class="w-full h-auto">
            <h2 class="font-poppins font-semibold text-lg mt-2">Grifo</h2>
            <h3 class="font-poppins font-semibold text-sm text-gray-500">Night lamp</h3>
            <div class="price flex justify-between p-2">
                <p class="font-poppins font-semibold text-lg">Rp 1.500.000</p>
            </div>
        </div>

        <div class="item border border-gray-300 m-2 w-72">
            <img src="asset/img/p6.png" alt="Muggo" class="w-full h-auto">
            <h2 class="font-poppins font-semibold text-lg mt-2">Muggo</h2>
            <h3 class="font-poppins font-semibold text-sm text-gray-500">Small mug</h3>
            <div class="price flex justify-between p-2">
                <p class="font-poppins font-semibold text-lg">Rp 150.000</p>
            </div>
        </div>

        <div class="item border border-gray-300 m-2 w-72">
            <img src="asset/img/p7.png" alt="Pingky" class="w-full h-auto">
            <h2 class="font-poppins font-semibold text-lg mt-2">Pingky</h2>
            <h3 class="font-poppins font-semibold text-sm text-gray-500">Cute bed set</h3>
            <div class="price flex justify-between p-2">
                <p class="font-poppins font-semibold text-lg">Rp 7.000.000</p>
                <p class="font-poppins line-through text-gray-400">Rp 14.000.000</p>
            </div>
        </div>

        <div class="item border border-gray-300 m-2 w-72">
            <img src="asset/img/p8.png" alt="Potty" class="w-full h-auto">
            <h2 class="font-poppins font-semibold text-lg mt-2">Potty</h2>
            <h3 class="font-poppins font-semibold text-sm text-gray-500">Minimalist flower pot</h3>
            <div class="price flex justify-between p-2">
                <p class="font-poppins font-semibold text-lg">Rp 500.000</p>
            </div>
        </div>

    </div>
</div>

<div class="btn flex justify-center p-5">
    <button class="bg-black text-white py-2 px-4 rounded">Show More</button>
</div>

<div class="insp flex justify-between items-center p-5 bg-gray-100">
    <div class="instext max-w-md">
        <h1 class="font-semibold text-xl">50+ Beautiful rooms<br>inspiration</h1>
        <p class="font-light">Our designer already made a lot of beautiful prototypes of rooms that inspire you.</p>
        <button class="bg-black text-white py-2 px-4 rounded">Explore More</button>
    </div>
    <div class="inspict flex gap-2">
        <img src="asset/img/p9.png" alt="pict 9" class="w-1/2">
        <img src="asset/img/p10.png" alt="pict 10" class="w-1/2">
    </div>
</div>

<div class="setup text-center p-5">
    <h3 class="text-lg">Share your setup with</h3>
    <h1 class="text-2xl font-bold">#FuniroFurniture</h1>
    <div class="rpict grid grid-cols-2 md:grid-cols-4 gap-4">
        <img src="asset/img/r1.png" alt="pict 1" class="w-full h-auto">
        <img src="asset/img/r2.png" alt="pict 2" class="w-full h-auto">
        <img src="asset/img/r3.png" alt="pict 3" class="w-full h-auto">
        <img src="asset/img/r4.png" alt="pict 4" class="w-full h-auto">
        <img src="asset/img/r5.png" alt="pict 5" class="w-full h-auto">
        <img src="asset/img/r6.png" alt="pict 6" class="w-full h-auto">
        <img src="asset/img/r7.png" alt="pict 7" class="w-full h-auto">
        <img src="asset/img/r8.png" alt="pict 8" class="w-full h-auto">
    </div>
</div>

<footer class="bg-white p-10 border-t border-gray-300">
    <div class="footer-container flex justify-between flex-wrap gap-5">
        <div class="footer-section flex-1 min-w-[200px]">
            <h2 class="font-bold text-2xl">Funiro.</h2>
            <address class="not-italic leading-6 text-gray-700">
                400 University Drive Suite 200 Coral Gables,<br>
                FL 33134 USA
            </address>
        </div>

        <div class="footer-section">
            <h3 class="font-bold">Links</h3>
            <ul class="list-none p-0">
                <li><a href="#" class="text-black">Home</a></li>
                <li><a href="#" class="text-black">Shop</a></li>
                <li><a href="#" class="text-black">About</a></li>
                <li><a href="#" class="text-black">Contact</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3 class="font-bold">Help</h3>
            <ul class="list-none p-0">
                <li><a href="#" class="text-black">Payment Options</a></li>
                <li><a href="#" class="text-black">Returns</a></li>
                <li><a href="#" class="text-black">Privacy Policies</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3 class="font-bold">Newsletter</h3>
            <form class="flex">
                <input type="email" placeholder="Enter Your Email Address" class="border border-gray-300 rounded-l px-4 py-2 flex-grow">
                <button type="submit" class="bg-black text-white py-2 px-4 rounded-r">SUBSCRIBE</button>
            </form>
        </div>
    </div>
    <div class="footer-bottom text-center mt-5">
        <p class="text-gray-500 text-sm">2023 Funiro. All rights reserved</p>
    </div>
</footer>

</body>
</html>