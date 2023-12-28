<!-- resources/views/todos/index.blade.php -->

<h1>Todos</h1>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<ul>
    <li>{{ $result }}</li>
    @foreach($todos as $todo)
        <li>{{ $todo->todoname }}</li>
    @endforeach
</ul>
