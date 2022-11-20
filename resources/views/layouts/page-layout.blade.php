<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('my.calculator', 'Laravel') }}</title>
    
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <!--SCRIPTS-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="js/script.js" async></script>
</head>

<body class="bg-gray-100 font-poppins">
    <!--NAVIGATION BAR START-->
    <header class="w-full fixed table-fixed z-[100] border-b bg-white">
        <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-3">
            <div class="flex items-center justify-between">
                <!--LOGO-->
                    <div class="relative z-20">
                        <h1 class="ml-10 text-primary font-bold text-3xl">my.calculator</h1>
                    </div>
                    <!--NAVIGATION BAR-->
                    <div class="flex items-center justify-end border-l lg:border-l-0">
                    <!--HAMBURGER MENU-->
                        <input type="checkbox" name="hamburger" id="hamburger" class="peer hidden">
                        <label for="hamburger" class="peer-checked:hamburger block relative z-20 p-6 -mr-6 cursor-pointer lg:hidden">
                            <div aria-hidden="true" class="m-auto h-0.5 w-6 rounded bg-sky-900 transition duration-300"></div>
                            <div aria-hidden="true" class="m-auto mt-2 h-0.5 w-6 rounded bg-sky-900 transition duration-300"></div>
                        </label>
                        <!--SIDEBAR-->
                        <div class="peer-checked:translate-x-0 fixed inset-0 w-[calc(100%-4.5rem)] translate-x-[-100%] bg-white border-r shadow-xl transition duration-300 lg:border-r-0 lg:w-auto lg:static lg:shadow-none lg:translate-x-0">
                            <!--LIST MENU-->
                            <div class="flex flex-col h-full justify-between lg:items-center lg:flex-row">
                                <ul class="px-6 pt-32 text-gray-700 space-y-8 md:px-12 lg:space-y-0 lg:flex lg:space-x-12 lg:pt-0">
                                    <li>
                                        <a href="{{ url('home') }}"
                                            class="relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                                            <span class="relative text-sky-800">Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('home#calculator') }}"
                                            class="group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                                            <span class="relative group-hover:text-sky-800">Calculator</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('home#result') }}"
                                            class="group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                                            <span class="relative group-hover:text-sky-800">Result</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </header>
    <!--NAVIGATION BAR END-->
    
    <main>
        {{$slot}}
    </main>
</body>
</html>
