<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
</div>
{{-- berfungsi untuk menyimpan head di dalam suatu session sehingga tidak perlu lagi melakukan download cdn --}}
{{-- penamaannya bebas tapi di stack harus sama --}}
@push('head')
    <head>
        <title>Pariwisata : @yield('title')</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    </head>
@endpush
