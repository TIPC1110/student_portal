@extends('voyager::master')

@section('content')
    <div class="container-fluid">
        <h1>Notifications</h1>
        <a href="{{ route('voyager.notifications.create') }}" class="btn btn-primary">Add Notification</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Message</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notifications as $notification)
                    <tr>
                        <td>{{ $notification->message }}</td>
                        <td>{{ $notification->created_at }}</td>
                        <td>
                            <!-- Thêm các action như Edit, Delete tại đây -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection