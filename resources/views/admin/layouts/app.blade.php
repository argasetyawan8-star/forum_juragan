<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Admin Panel - Forum Juragan' }}</title>

    <meta
        name="description"
        content="Admin Panel Forum Juragan"
    >
 >
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-50 text-slate-900 antialiased">

    <div class="min-h-screen">

        {{-- Sidebar --}}
        @include('admin.partials.sidebar')

        {{-- Main Content --}}
        <div class="lg:pl-72">

            {{-- Navbar --}}
            @include('admin.partials.navbar')

            {{-- Page Content --}}
            <main class="p-4 sm:p-6 lg:p-8">
                @yield('content')
            </main>

        </div>

    </div>

</body>
</html>