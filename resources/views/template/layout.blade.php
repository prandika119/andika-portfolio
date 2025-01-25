<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">'
    @vite('resources/css/app.css')
</head>
<body class="">
{{--    Navbar--}}
    <header class="fixed w-full z-10">
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/" class="flex items-center">
                <span class="text-primary self-center text-xl font-semibold whitespace-nowrap">Andika Portfolio</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="#" class="text-white bg-primary hover:opacity-80 transition duration-300 ease-in-out hover:text-white focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">Contact Me</a>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-primary rounded lg:bg-transparent lg:text-primary-700 lg:p-0" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#projects" class="block py-2 pr-4 pl-3 text-gray-500 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-indigo-300 lg:p-0">Project</a>
                    </li><li>
                        <a href="#experience" class="block py-2 pr-4 pl-3 text-gray-500 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-indigo-300 lg:p-0">Experience</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>

{{--    Content--}}
    @yield('content')

    {{-- Footer Section --}}
    <footer class="bg-gray-800 py-6">
        <div class="container mx-auto text-center text-white">
            <p>&copy; 2023 Andika Dwi Prasetya. All rights reserved.</p>
            <div class="mt-4">
                <a href="https://twitter.com" class="text-dark mx-2"><i class="fab fa-twitter"></i></a>
                <a href="https://linkedin.com" class="text-dark mx-2"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com" class="text-dark mx-2"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </footer>
    @vite('resources/js/app.js')
</body>
</html>
