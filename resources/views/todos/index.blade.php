<!-- resources/views/todos/index.blade.php -->

<h1>Todos</h1>

<ul>
    @foreach($todos as $todo)
        <li>{{ $todo->title }}</li>
    @endforeach
</ul>
