<h2>Đăng ký</h2>

@if($errors->any())
    <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 10px;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/auth/register">
    @csrf
    <input name="name" placeholder="Tên" value="{{ old('name') }}"><br>
    <input name="email" placeholder="Email" value="{{ old('email') }}"><br>
    <input type="password" name="password" placeholder="Mật khẩu"><br>
    <button>Đăng ký</button>
</form>
