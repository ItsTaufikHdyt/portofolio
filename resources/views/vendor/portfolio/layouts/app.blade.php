<!DOCTYPE html>
<html lang="en">
@section('htmlheader')
@include('portfolio::layouts.partials.htmlheader')
@show

<body>
@include('portfolio::layouts.partials.header')
@yield('main-content')

@include('portfolio::layouts.partials.footer')
@section('scripts')
    @include('portfolio::layouts.partials.scripts')
@show
</body>
</html>