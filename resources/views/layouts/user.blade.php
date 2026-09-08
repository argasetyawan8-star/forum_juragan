<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        {{ $title ?? 'Dashboard - Forum Juragan' }}
    </title>

    <meta
        name="description"
        content="Dashboard anggota Forum Juragan."
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    >

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body class="min-h-screen bg-slate-50 text-slate-900 antialiased">

    @include('partials.navbar')

    <main class="pt-20">
        @yield('content')
    </main>

</body>
</html>