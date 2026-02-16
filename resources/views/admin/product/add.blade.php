<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
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
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        .btn-submit {
            background: #28a745;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
        }
        .btn-submit:hover {
            background: #218838;
        }
        .btn-cancel {
            display: inline-block;
            margin-left: 10px;
            padding: 12px 24px;
            background: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .btn-cancel:hover {
            background: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thêm mới sản phẩm</h1>
        
        @if ($errors->any())
            <div style="padding: 15px; background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 20px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên sản phẩm:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            
            <div class="form-group">
                <label for="price">Giá (VNĐ):</label>
                <input type="number" id="price" name="price" value="{{ old('price') }}" min="0" step="0.01" required>
            </div>
            
            <div class="form-group">
                <label for="stock">Số lượng:</label>
                <input type="number" id="stock" name="stock" value="{{ old('stock') }}" min="0" required>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn-submit">Thêm sản phẩm</button>
                <a href="{{ route('product.index') }}" class="btn-cancel">Hủy</a>
            </div>
        </form>
    </div>
</body>
</html>

