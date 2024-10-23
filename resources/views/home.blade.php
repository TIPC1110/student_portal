@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar (Notifications) -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Notifications</div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse (auth()->user()->notifications as $notification)
                            <li class="list-group-item">
                                {{ $notification->data['message'] }} <span class="text-muted float-right">{{ $notification->created_at->diffForHumans() }}</span>
                            </li>
                        @empty
                            <li class="list-group-item">No notifications yet.</li>
                        @endforelse
                    </ul>
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