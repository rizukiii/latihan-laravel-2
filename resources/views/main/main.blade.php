{{-- ini adalah pemanggilan dari --}}
<!doctype html>
<html lang="en">
{{-- fungsi tiddak jauh berbeda dengan native hanya bentuk codenya yang di persingkat --}}
@include('components.head')
{{-- fungsi untuk memanggil @push tapi penamaan nya harus sama di @push --}}
@stack('head')

<body>
    @include('components.header')

    {{-- pergantian section sesuai halaman yang dituju --}}
    @yield('content')

    @include('components.footer')

    @include('components.script')
    @stack('script')
</body>

</html>
