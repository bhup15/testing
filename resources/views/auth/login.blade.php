<!-- resources/views/auth/login.blade.php -->

<form action="{{ route('login') }}" method="post">
    @csrf

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">Login</button>
</form>

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
