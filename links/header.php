<!-- <header>
    <nav id="nav" class="bg-white  sticky w-full top-0 z-50" role="navigation">
        <div class="container mx-auto flex flex-wrap items-center md:flex-no-wrap">
            <div class="mr-4 md:mr-8">
                <a href="index.php" rel="home">
                    <img src="assets/logo/logo.png" alt="">
                </a>
            </div>
            <div class="ml-auto md:hidden">
                <button onclick="menuToggle()" class="flex items-center px-3 py-2 border rounded" type="button">
                    <svg class="h-3 w-3 text-white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <title>Menu</title>
                      <path fill="currentColor" d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                  </button>
            </div>
            <div id="menu" class="w-full h-0 transition-all ease-out duration-500 md:transition-none md:w-auto md:flex-grow md:flex md:items-center">
                <ul id="ulMenu" class="flex flex-col duration-300 ease-out sm:transition-none mt-5 mx-4 md:flex-row md:items-center md:mx-0 md:ml-auto md:mt-0 md:pt-0 md:border-0">
                    <li>
                        <a class="nav-menu-type md:p-2 lg:px-4 font-semibold  uppercase block text-gray-800 px-4 py-1 text-white transition" href="index.php">Home</a>
                    </li>
                    <li>
                        <a class="nav-menu-type md:p-2 lg:px-4 font-semibold uppercase block text-gray-800 px-4 py-1 text-white transition" href="about-us.php">About us</a>
                    </li>
                    <li>
                        <a class="nav-menu-type md:p-2 lg:px-4 font-semibold uppercase block text-gray-800 px-4 py-1 text-white transition" href="product.php">Our Products</a>
                    </li>
                    <li>
                        <a class="nav-menu-type md:p-2 lg:px-4 font-semibold uppercase block text-gray-800 px-4 py-1 text-white transition" href="contact-us.php">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header> -->

<header>
    <div class="container mx-auto">
        <nav class="flex items-center justify-between flex-wrap ">
            <div class="flex items-center flex-shrink-0 text-white mr-6">

                <div class="mr-4 md:mr-8">
                    <a href="index.php" class="logo" rel="home">
                        <img src="assets/logo/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="block lg:hidden">
                <button class="respo-menu flex items-center px-3 py-2 border rounded text-teal-100 border-teal-400 hover:text-white hover:border-white" id="navbar-btn">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <title>Menu</title>
                      <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                  </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto " id="navbar">
                <div class="nav-ded text-sm lg:flex-grow  text-center lg:text-right">
                    <a href="index.php" class="nav-menu-type block mt-4 lg:inline-block lg:mt-0 uppercase font-semibold text-sm text-gray-600  mr-4 ">
                  Home
                  </a>
                    <a href="about-us.php" class="nav-menu-type block mt-4 lg:inline-block lg:mt-0 uppercase font-semibold text-sm text-gray-600  mr-4 ">
                  About us
                  </a>
                    <a href="product.php" class="nav-menu-type block mt-4 lg:inline-block lg:mt-0 uppercase font-semibold text-sm text-gray-600  mr-4 ">
                  Our Products
                  </a>
                    <a href="contact-us.php" class="nav-menu-type block mt-4 lg:inline-block lg:mt-0 uppercase font-semibold text-sm text-gray-600 mr-4 ">
                  Contact us
                  </a>

                </div>
            </div>
        </nav>
    </div>
</header>