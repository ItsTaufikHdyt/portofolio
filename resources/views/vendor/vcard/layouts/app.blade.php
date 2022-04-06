<!DOCTYPE html>
<html lang="en">
@section('htmlheader')
@include('vcard::layouts.partials.htmlheader')
@show

<body>
    @include('vcard::layouts.partials.header')
    @yield('main-content')

    @include('vcard::layouts.partials.footer')
    @section('scripts')
    @include('vcard::layouts.partials.scripts')
    @show
</body>

</html>