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
Portfolio
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
<button data-toggle="modal" data-target="#createPortfolioModal" type="button" class="btn btn-success">Create</button>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Portofolio Title</th>
                <th scope="col">Portofolio Desc</th>
                <th scope="col">Project Date</th>
                <th scope="col">Project URL</th>
                <th scope="col">Type</th>
                <th scope="col">Client</th>
                <th scope="col">Tags</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @forelse ($portfolio as $data)
            <tr>
                <th scope="row">{{$no++}}</th>
                <th scope="row">{{$data->portfolio_title}}</th>
                <th scope="row">{{substr($data->portfolio_desc,0,100)}}</th>
                <th scope="row">{{$data->project_date}}</th>
                <th scope="row">{{$data->project_url}}</th>
                <th scope="row">
                    @if ($data->type == 1)
                    <span class="badge badge-primary">Web</span>
                    @elseif ($data->type == 2)
                    <span class="badge badge-secondary">Mobile</span>
                    @elseif ($data->type == 3)
                    <span class="badge badge-success">Dekstop</span>
                    @endif
                </th>
                <th scope="row">{{$data->client}}</th>
                <th scope="row">
                    @foreach ($data->tags as $data2 )
                    {{$data2->tags_name}}
                    @endforeach
                </th>
                <th scope="row">
                    <a href="{{url('admin/show-portfolio-images/'.$data->id)}}" class="btn btn-dark">Show</a>
                    <button data-toggle="modal" data-target="#updatePortfolioModal{{$data->id}}" type="button" class="btn btn-warning">Edit</button>
                    @include('Admin.Portfolio.update')
                    <button data-toggle="modal" data-target="#confirmationModal{{$data->id}}" type="button" class="btn btn-danger">Delete</button>
                    @include('Admin.Portfolio.delete-confirmation')
                </th>
            </tr>
            @empty
            <tr>
                <th colspan="9">
                    <center>
                        Data Not Found
                    </center>
                </th>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $portfolio->links() }}
</div>
@include('Admin.Portfolio.create')
@endsection
@section('custom_dcripts')

@endsection