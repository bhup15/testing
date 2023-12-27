<!-- resources/views/todos/edit.blade.php -->

<form action="{{ route('todos.update', $todo->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $todo->title }}" required>
    <button type="submit">Update Todo</button>
</form>
