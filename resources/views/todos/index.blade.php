<!-- resources/views/todos/index.blade.php -->

<h1>Todos</h1>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<!-- Using a link -->
<a href="{{ route('logout') }}"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
   Logout
</a>

<!-- Using a form -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
   @csrf
</form>

<ul>
    <li>{{ $result }}</li>
    @foreach($todos as $todo)
        <li>{{ $todo->todoname }}</li>
    @endforeach
</ul>
