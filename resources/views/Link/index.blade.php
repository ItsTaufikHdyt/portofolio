@extends('link::layouts.app')
@section('main-content')
<div class="block">
    <div class="profile">
        <img src="{{asset('vcard/images/avatarprofil.png')}}" alt="profile photo" />
        <h1>Taufik Hidayat | Software Engineer</h1>
        <div class="location">
            <i class="fas fa-map-marker-alt"></i> Bontang, Indonesia
        </div>
        <div class="bio">
            <div>💻 Sharing my developer journey & love of tech</div>
            <div>Tech Enthusiast & Content Creator</div>
        </div>
    </div>
    <div class="links">
        <a href="mailto:taufikhdyt2332@gmail.com" class="contactbutton">
            <i class="fas fa-envelope-open"></i> Email
        </a>
    </div>
</div>
@forelse ($link as $data)
<a href="{{$data->url}}" class="block link">
    <div class="image-float {{$data->type}}">
        <div class="beacon {{$data->type}}"></div>
        <div class="image">
            <img src="{{asset('storage/icon/' .$data->icon)}}" />
        </div>
    </div>
    <div>
        <h2>{{$data->title}}</h2>
        <div>{{$data->subtitle}}</div>
    </div>
    <div class="arrow">
        <i class="fas fa-arrow-right"></i>
    </div>
</a>
@empty

@endforelse

@endsection