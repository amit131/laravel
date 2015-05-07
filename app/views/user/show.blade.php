<!-- app/views/user/show.blade.php -->

<h1>Showing {{ $user->firstname.' '.$user->lastname }}</h1>
<div class="jumbotron text-center">
<h2>{{ $user->firstname.' '.$user->lastname }}</h2>
<p>
<strong>Email:</strong> {{ $user->email }}<br>
<strong>Username:</strong> {{ $user->username }}<br>
<strong>Group:</strong> {{ $user->group->lists('title')[0] }}
</p>
</div>
