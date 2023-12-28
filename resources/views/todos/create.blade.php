<!-- resources/views/todos/create.blade.php -->

<form action="{{ route('todos.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="todoname" id="todoname" required>
    <input type="text" name="description" id="description" required>
    <input type="text" name="info" id="info" required>
    <button type="submit">Create Todo</button>
</form>
