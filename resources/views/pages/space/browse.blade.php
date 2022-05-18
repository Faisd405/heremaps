@extends('layouts.app')

@section('content')
<div class="container">
    <x-spaces></x-spaces>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Browse Codespace</div>

                <div id="here-maps">
                    <label for="">Pin Location</label>
                    <div style="height: 500px" id="mapContainer"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        window.action = 'browse';
    </script>
@endpush

