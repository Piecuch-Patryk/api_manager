@extends('layouts.auth')

@section('content')

@include('shared.flash-message')

<div class="container-fluid">
    <div class="row justify-content-around align-items-center">
        @foreach ($listings as $listing)
        <div class="col-12 col-lg-4 text-center p-3 m-3">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-3">{{$listing['api-name']}}</h5>
                    <p class="card-text">{{$listing['api-desc']}}</p>
                    <div class="d-flex justify-content-around">
                        <a href="{{route('api.edit', ['id' => $listing['id']])}}" class="btn btn-sm btn-info">Edit</a>
                        <form method="POST" action="{{ route('api.delete', ['id' => $listing]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection