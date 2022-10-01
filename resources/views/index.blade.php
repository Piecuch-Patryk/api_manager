@extends('layouts.app')

@section('header')
<header class="container-fluid py-5">
    <div class="row justify-content-around align-items-center">
        <div class="col-12 col-lg-5 text-center text-muted">
            <h1 class="py-4">Awesome APIs here!</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, molestiae blanditiis obcaecati unde pariatur recusandae tempore. Asperiores rem eos, dolor voluptatibus facere commodi eveniet autem? Dolores ullam nisi repudiandae rem?</p>
        </div>
        <div class="col-12 col-lg-5">
            <img src="/images/header.jpg" class="img-fluid rounded-2 shadow-lg">
        </div>
    </div>
</header>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-around align-items-center">
        @for ($i = 0; $i < 6; $i++)
        <div class="col-12 col-lg-4 text-center p-3 m-3">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    @if($i != 0)
                    <h5 class="card-title fs-3">API {{$i}}</h5>
                    @else 
                    <h5 class="card-title fs-3">NASA</h5>
                    @endif
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-info">Go somewhere</a>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection
