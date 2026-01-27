<h2>Đăng nhập</h2>

<form method="POST" action="/auth/login">
    @csrf
    <input name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Mật khẩu"><br>
    <button>Đăng nhập</button>
</form>
