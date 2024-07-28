<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quilara</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="h-full bg-slate-900">

    <!-- Static sidebar -->
    <div class="flex h-screen">
        <div class="relative z-40 flex flex-col flex-shrink-0 w-16 p-2 my-8 border-r border-slate-800">
            <nav class="flex flex-col justify-between flex-1">

                <ul role="list" class="-mt-8 space-y-1">
                    <li class="relative flex items-center whitespace-nowrap group">
                        <x-ri-quill-pen-fill class="w-12 p-2 rounded-xl text-slate-500 group-hover:bg-slate-700" />
                        <span class="relative">
                            <span
                                class="absolute z-50 px-2 py-1 ml-2 text-sm transition-opacity duration-300 transform -translate-y-1/2 bg-white rounded-md opacity-0 text-slate-800 left-full top-1/2 group-hover:opacity-100 whitespace-nowrap">
                                Quilara
                                <span
                                    class="absolute left-0 w-0 h-0 transform -translate-x-full -translate-y-1/2 border-t-4 border-b-4 border-r-4 top-1/2 border-t-transparent border-b-transparent border-r-white"></span>
                            </span>
                        </span>
                    </li>
                </ul>

            </nav>
        </div>

        <!-- Main content -->
        <div class="flex-1 min-h-screen">
            <div class="p-4">
                <!-- Add your main content here -->
                <h1 class="text-2xl font-semibold text-gray-400">Main Content</h1>
                <p class="text-gray-400">This is the main content area.</p>
            </div>
        </div>
    </div>

</body>

</html>
