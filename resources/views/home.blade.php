<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .nav-links {
            text-align: center;
            margin-top: 30px;
        }
        .nav-links a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .nav-links a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chào mừng đến với trang chủ</h1>
        
        <!-- @if(session('age'))
            <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                <strong>Thông báo:</strong> Bạn đã nhập tuổi: {{ session('age') }} tuổi. 
                @if(session('age') >= 18)
                    <span style="color: #28a745;">Đủ tuổi truy cập!</span>
                @else
                    <span style="color: #dc3545;">Chưa đủ tuổi truy cập!</span>
                @endif
            </div>
        @endif -->
        
        <div class="nav-links">
            <a href="{{ route('home') }}">Trang chủ</a>
            <a href="{{ route('age.index') }}">Nhập tuổi</a>
            <a href="{{ route('auth.signin') }}">Đăng nhập</a>
            <a href="{{ route('product.index') }}">Sản phẩm</a>
            <a href="{{ route('sinhvien') }}">Sinh viên</a>
            <a href="{{ route('banco', ['n' => 8]) }}">Bàn cờ vua</a>
        </div>
    </div>
</body>
</html>

