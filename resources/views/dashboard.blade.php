<html>

<head>
    <title>UMKM RM828</title>
    <link rel="shortcut icon" type="image/jpg" href="img/logo.png"/>
    <link rel="icon" href="{{ asset('image/loogu.png') }}">
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight ">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("You're logged in!") }}
                    </div>
                </d iv>
            </div>
        </div>
    </x-app-layout> 
</body>

</html>
