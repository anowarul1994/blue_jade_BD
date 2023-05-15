<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.includes.head')
</head>
<body>
    {{-- navbar secction start --}}
    @include('frontend.includes.navbar')
    {{-- navbar secction end --}}
     {{-- slider secction start --}}
    @include('frontend.includes.slider')
     {{-- slider secction end --}}

     {{-- main content code start --}}
     @yield('content')
     {{-- main content code end --}}

     {{-- footer code start --}}
     @include('frontend.includes.footer')
     {{-- footer code end --}}

    {{-- script code --}}
    @include('frontend.includes.script')
</body>
</html>
