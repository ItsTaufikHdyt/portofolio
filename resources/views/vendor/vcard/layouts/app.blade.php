<!DOCTYPE html>
<html lang="en">

@include('vcard::layouts.partials.htmlheader')

@show

<body>
    @include('vcard::layouts.partials.header')
    @yield('main-content')

    @include('vcard::layouts.partials.footer')
    
    @include('vcard::layouts.partials.scripts')
    
    @show
</body>

</html>