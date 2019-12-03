<!DOCTYPE html>
<html lang="en">
 @include('components.head')
<body>
@include('components.navbar')
<main>
@yield('content')
</main>
@include('components.footer')
@include('components.scripts')
</body>
</html>
