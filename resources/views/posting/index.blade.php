@extends('posting.layout')
@section('content')

<section class="bg-dark text-light p-4 text-center text-sm-start mt-2">

    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h1><span class="text-warning">WELCOME</span> to our site</h1>
                <p class="lead my-4">"Never forget to capture precious moments". Yes! that's our slogan. Explore some of the moments that we captured. Maybe you'll be convinced to hook us up.</p>
            </div>
        </div>
    </div>
</section>

<div class="container pt-3">
    <div class="row">
        @foreach($posts as $item)
        <div class="col-lg-4">
            <div class="card mb-3">
                <img src="{{ asset($item->photo) }}" class="card-img-top" alt="{{ $item->description }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->description }}</h5>
                    <p class="card-title">Posted at: {{ $item->created_at }}
                    
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection