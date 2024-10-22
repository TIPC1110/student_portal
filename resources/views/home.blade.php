@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="card"> 
                <div class="card-header">Sidebar</div>
                <div class="card-body">
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link active" href="#">Link 1</a>
                        <a class="nav-link" href="#">Link 2</a>
                        <a class="nav-link" href="#">Link 3</a>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="col-md-9">
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
@endsection