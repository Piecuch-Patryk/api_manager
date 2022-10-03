@extends('layouts.auth')

@section('header')
    <h1 class="mt-5 text-center">Edit: {{$listing['api-name']}}</h1>
@endsection

@section('content')
<div class="container p-5">
    <form method="POST" action="{{ route('api.update', ['id' => $listing['id']]) }}" class="row needs-validation justify-content-center align-items-center" novalidate>
        @csrf
        @method('PUT')
        <div class="col-12 col-md-8 col-lg-6 mb-3">
            <label for="api-name" class="form-label">Name</label>
            <input type="text" class="form-control" id="api-name" name="api-name" value="{{$listing['api-name']}}" required>
            <div class="invalid-feedback">
                Please provide a name.
            </div>
            @error('api-name')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-12 col-md-8 col-lg-6 mb-3">
            <label for="api-desc" class="form-label">Description</label>
            <textarea type="" class="form-control" id="api-desc"  name="api-desc" required>{{$listing['api-desc']}}</textarea>
            <div class="invalid-feedback">
                Please provide a description.
            </div>
            @error('api-desc')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-12 col-md-8 col-lg-6 mb-3">
            <label for="api-url" class="form-label">URL</label>
            <input type="text" class="form-control" id="api-url"  name="api-url" value="{{$listing['api-url']}}" required>
            <div class="invalid-feedback">
                Please provide a URL.
            </div>
            @error('api-url')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-12 col-md-8 col-lg-6 mb-3">
            <label for="api-endpoint-name" class="form-label">Endpoint Name</label>
            <input type="text" class="form-control" id="api-endpoint-name"  name="api-endpoint-name" value="{{$listing['api-endpoint-name']}}" required>
            <div class="invalid-feedback">
                Please provide an endpoint name.
            </div>
            @error('api-endpoint-name')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-12 col-md-8 col-lg-6 mb-3">
            <label for="api-endpoint-desc" class="form-label">Endpoint Description</label>
            <textarea class="form-control" id="api-endpoint-desc"  name="api-endpoint-desc" required>{{$listing['api-endpoint-desc']}}</textarea>
            <div class="invalid-feedback">
                Please provide an endpoint description.
            </div>
            @error('api-endpoint-desc')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-12 col-md-8 col-lg-6 mb-3">
            <label for="api-endpoint" class="form-label">Endpoint</label>
            <input type="text" class="form-control" id="api-endpoint"  name="api-endpoint" value="{{$listing['api-endpoint']}}" required>
            <div class="invalid-feedback">
                Please provide an endpoint.
            </div>
            @error('api-endpoint')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-12 col-md-8 col-lg-6 mb-3 text-center">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
</div>

@endsection

@section('scripts')
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        }

        form.classList.add('was-validated')
        }, false)
    })
    })()
</script>
@endsection