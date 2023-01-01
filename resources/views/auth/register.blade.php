<form action="/users" method="post">
    @csrf
    <input type="text" name="name">
    @error('name')
    <span>{{$message}}</span>
    @enderror
    <input type="text" name="email">
    @error('email')
    <span>{{$message}}</span>
    @enderror
    <input type="password" name="password">
    @error('password')
    <span>{{$message}}</span>
    @enderror
    <input type="password" name="password_confirmation">
    <input type="submit">
</form>
