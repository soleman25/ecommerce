@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                @include('admin.layouts.sidebar')
            </div>

            <div class="col-md-10">
                @yield('admin')
            </div>
        </div>
    </div>
@endsection