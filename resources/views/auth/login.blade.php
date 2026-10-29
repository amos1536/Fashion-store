<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Fashion Store</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #071A35, #173c67);
            color: #071A35;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 430px;
            background: #ffffff;
            padding: 40px 35px;
            border-radius: 14px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        .logo {
            text-align: center;
            margin-bottom: 25px;
        }

        .logo img {
            width: 75px;
            height: 75px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #071A35;
            margin-bottom: 10px;
        }

        .logo h1 {
            font-size: 25px;
            color: #071A35;
        }

        h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 8px;
            color: #071A35;
        }

        .subtitle {
            text-align: center;
            color: #64748b;
            font-size: 14px;
            margin-bottom: 28px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 8px;
            color: #071A35;
        }

        input {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 7px;
            font-size: 15px;
            outline: none;
            background: #f8fafc;
            color: #071A35;
            transition: border-color 0.2s ease,
                        box-shadow 0.2s ease;
        }

        input:focus {
            border-color: #071A35;
            box-shadow: 0 0 0 3px rgba(7, 26, 53, 0.12);
            background: #ffffff;
        }

        .login-button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 7px;
            background: #071A35;
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s ease,
                        transform 0.2s ease;
        }

        .login-button:hover {
            background: #173c67;
            transform: translateY(-2px);
        }

        .register-link {
            text-align: center;
            margin-top: 25px;
            font-size: 14px;
            color: #64748b;
        }

        .register-link a {
            color: #071A35;
            font-weight: bold;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .alert {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #b91c1c;
            border-radius: 7px;
            padding: 13px 15px;
            margin-bottom: 22px;
            font-size: 14px;
        }

        .alert ul {
            padding-left: 20px;
        }

        .alert li {
            margin: 4px 0;
        }

        @media (max-width: 480px) {
            .container {
                padding: 30px 22px;
            }

            h2 {
                font-size: 22px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="logo">
            <img
                src="{{ asset('storage/logo/fashion-store-logo.jpg') }}"
                alt="Fashion Store Logo"
            >
            <h1>Fashion Store</h1>
        </div>

        <h2>Login to Your Account</h2>
        <p class="subtitle">Welcome back! Enter your details below.</p>

        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/login') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Email Address</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    value="{{ old('email') }}"
                    placeholder="Enter your email address"
                    autocomplete="email"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Enter your password"
                    autocomplete="current-password"
                    required
                >
            </div>

            <button type="submit" class="login-button">
                Login
            </button>
        </form>

        <p class="register-link">
            Don't have an account?
            <a href="{{ url('/register') }}">Register here</a>
        </p>

    </div>

</body>
</html>
