
<form action="{{route('login.form')}}" method="POST">
    @csrf
    email: <input type="email" name="email">
    <br>
    Senha: <input type="password" name="password">
    <br>
    <button type="submit">Entrar</button>
</form>
