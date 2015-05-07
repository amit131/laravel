<!--<nav class="navbar navbar-inverse">
<div class="navbar-header">
<a class="navbar-brand" href="{{ URL::to('group') }}">group Alert</a>
</div>
<ul class="nav navbar-nav">
<li><a href="{{ URL::to('group') }}">View All group</a></li>
<li><a href="{{ URL::to('group/create') }}">Create a group</a>
</ul>
</nav>
<h1>All the group</h1>-->
<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif