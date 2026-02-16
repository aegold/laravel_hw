<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bàn cờ vua {{ $n }}x{{ $n }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            display: flex;
            flex-direction: column;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .chess-board {
            display: inline-block;
            border: 3px solid #333;
            margin: 20px auto;
        }
        .chess-row {
            display: flex;
        }
        .chess-cell {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
        }
        .chess-cell.white {
            background-color: #f0d9b5;
        }
        .chess-cell.black {
            background-color: #b58863;
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
        <h1>Bàn cờ vua {{ $n }}x{{ $n }}</h1>
        
        <div class="chess-board">
            @for($i = 0; $i < $n; $i++)
                <div class="chess-row">
                    @for($j = 0; $j < $n; $j++)
                        @php
                            $isWhite = ($i + $j) % 2 == 0;
                            $cellClass = $isWhite ? 'white' : 'black';
                        @endphp
                        <div class="chess-cell {{ $cellClass }}">
                            @if($i == 0 || $i == $n - 1)
                                @if($j == 0 || $j == $n - 1)
                                    ♜
                                @elseif($j == 1 || $j == $n - 2)
                                    ♞
                                @elseif($j == 2 || $j == $n - 3)
                                    ♝
                                @elseif($j == 3)
                                    {{ $i == 0 ? '♛' : '♚' }}
                                @else
                                    {{ $i == 0 ? '♚' : '♛' }}
                                @endif
                            @elseif($i == 1 || $i == $n - 2)
                                ♟
                            @endif
                        </div>
                    @endfor
                </div>
            @endfor
        </div>
        
        <a href="{{ route('home') }}" class="nav-link">← Về trang chủ</a>
    </div>
</body>
</html>

