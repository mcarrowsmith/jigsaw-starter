<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    @include('_snippets/_head')
    <body class="flex flex-col justify-between min-h-screen min-w-screen">
        @unless($page->production)
            <div class="breakpoint fixed z-50 top-1 left-1 flex text-xs"></div>
        @endif
        @include('_snippets/_header')
        <main>
            @yield('body')
        </main>
        @include('_snippets/_footer')
    </body>
</html>
