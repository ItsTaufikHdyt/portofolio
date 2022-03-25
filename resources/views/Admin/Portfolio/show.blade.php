@extends('admin::layouts.app')
@section('title')
Admin
@endsection
@section('title-content')
Portfolio
@endsection
@section('item')
Portfolio
@endsection
@section('item-active')
Show Images Portfolio
@endsection
@section('content')
@if($errors->any())
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    @foreach ($errors->all() as $error)
    <ul>
        <li> <strong>{{ $error }}</strong></li>
    </ul>
    @endforeach
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div>
    @forelse ($portfolio->images as $data)
    <form method="POST" action="{{Route('admin.destroyImagePortfolio',$data->id)}}">
        @csrf
        {{ method_field('DELETE')}}
        <div class="text-center font-18">
            <div class="row">
                <div class="col-lg-8">
                    <img width="500" height="500" src="{{(asset('storage/portfolios/images/'.$data->filename))}}" alt="">
                </div>
                <div class="col-lg-4">
                    <input type="hidden" id="id" name="id" value="">
                    <h4 class="padding-top-30 mb-30 weight-500">Are you sure you want to continue Delete?</h4>
                    <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
                        <div class="col-6">
                            @if (count($portfolio->images) <= 1) 
                            @else 
                            <button type="submit" class="btn btn-primary border-radius-100 btn-block confirmation-btn"><i class="fa fa-check"></i></button>
                            YES
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @empty
    <center>
        <h2>Data Not Foud</h2>
    </center>
    @endforelse
</div>
@endsection
@section('custom_dcripts')

@endsection