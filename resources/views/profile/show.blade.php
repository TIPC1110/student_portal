<h1>Profile</h1>

@if ($user->avatar)
    <img src="{{ Voyager::image($user->avatar) }}" alt="Avatar" width="100">
@else
    <img src="https://via.placeholder.com/100" alt="Avatar">
@endif

<p>Name: {{ $user->name }}</p>
<p>Email: {{ $user->email }}</p>

<h2>Information</h2>

<ul>
    @if ($user->address)
        <li>Address: {{ $user->address }}</li>
    @endif
    @if ($user->phone)
        <li>Phone: {{ $user->phone }}</li>
    @endif
    @if ($user->birthdate)
        <li>Birthdate: {{ $user->birthdate }}</li>
    @endif
    <!-- Thêm các trường thông tin khác tại đây -->
</ul>