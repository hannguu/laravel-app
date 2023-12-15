<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Login Page</title>
    <style>
        /* .customer-nav{
            background: orange;
        } */
        .activate{
            color: red;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #f2883c;
            padding: 10px;
            text-align: center;
        }
        /* Center the form on the screen */
        .center-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Full viewport height */
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="center-container">
        <form action="{{ url('/login') }}" method="POST">
            @csrf {{-- Thêm CSRF token để bảo vệ form --}}
            {{-- @method('GET') --}} {{-- Bạn không cần phải thêm method vì form này sử dụng method POST theo mặc định --}}

            <label for="name">Username</label>
            <input type="text" name="name" class="form-control"><br>
            
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
            
            <p style="color: red">{{ $login_err }}</p>
            
            <button class="btn btn-danger" type="submit">Login</button>
        </form>
    </div>

    <div class="footer">
        <p>This is footer</p>
    </div>
</body>
</html>
