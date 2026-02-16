<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập tuổi</title>
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
        .age-form {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .age-form h2 {
            margin-top: 0;
            color: #333;
        }
        .form-group {
            display: flex;
            gap: 10px;
            align-items: center;
            flex-wrap: wrap;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group input {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100px;
        }
        .form-group button {
            padding: 8px 20px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background: #218838;
        }
        .alert {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .alert-success {
            background: #d4edda;
            color: #155724;
        }
        .alert-danger {
            background: #f8d7da;
            color: #721c24;
        }
        .nav-link {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 16px;
            background: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .nav-link:hover {
            background: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nhập tuổi của bạn</h1>
        
        @if(session('age'))
            <div class="alert alert-success">
                <strong>Thông báo:</strong> Bạn đã nhập tuổi: {{ session('age') }} tuổi. 
                @if(session('age') >= 18)
                    <span style="color: #28a745;">Đủ tuổi truy cập trang sản phẩm!</span>
                @else
                    <span style="color: #dc3545;">Chưa đủ tuổi truy cập trang sản phẩm!</span>
                @endif
            </div>
        @endif
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <div class="age-form">
            <h2>Nhập tuổi của bạn</h2>
            <form action="{{ route('age.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="age">Tuổi:</label>
                    <input 
                        type="number" 
                        id="age" 
                        name="age" 
                        required 
                        min="1" 
                        max="120"
                        value="{{ session('age') ?? '' }}"
                        placeholder="Nhập tuổi">
                    <button type="submit">Lưu tuổi</button>
                </div>
            </form>
        </div>
        
        <a href="{{ route('home') }}" class="nav-link">← Về trang chủ</a>
    </div>
</body>
</html>

