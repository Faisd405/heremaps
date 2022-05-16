@extends('layouts.app')

@section('content')
<div class="container">
    <x-spaces></x-spaces>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Spaces') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('This is Spaces List Pages') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
