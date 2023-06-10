
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<section class="p-5">
<div class="text-center" id="view">
<a href="/dashboard" class="text-decoration-none"><h2>VIEW DASHBOARD</h2></a>

<a class="btn btn-success" href="posting"> Posting </a>



@if (Route::has('login'))
@auth
<a href="{{ url('/posting/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Post
                        </a>
                        

                        @else
                        <!--   -->
                        @endauth

                        @endif


</div>
</section>

@endsection



