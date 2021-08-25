@extends('cart::layouts.master')

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Cart Module') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Cart Module
                        {{ __('You are logged in Cart Module !') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('cart.name') !!}
    </p>
@endsection
