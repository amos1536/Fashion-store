<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register | Fashion Store</title>

    <style>
        /* Reset default browser styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Page background */
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #071A35, #173c67);
            color: #071A35;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px 15px;
        }

        /* Registration card */
        .container {
            width: 100%;
            max-width: 450px;
            background: #ffffff;
            padding: 35px;
            border-radius: 14px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        /* Logo section */
        .logo {
            text-align: center;
            margin-bottom: 22px;
        }

        .logo img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #071A35;
            margin-bottom: 10px;
        }

        .logo h1 {
            font-size: 25px;
            color: #071A35;
        }

        /* Page heading */
        h2 {
            text-align: center;
            font-size: 23px;
            margin-bottom: 8px;
            color: #071A35;
        }

        .subtitle {
            text-align: center;
            color: #64748b;
            font-size: 14px;
            margin-bottom: 25px;
            line-height: 1.5;
        }

        /* Form fields */
        .form-group {
            margin-bottom: 18px;
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
            padding: 12px 14px;
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

        /* Register button */
        .register-button {
            width: 100%;
            padding: 13px;
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

        .register-button:hover {
            background: #173c67;
            transform: translateY(-2px);
        }

        /* Validation errors */
        .alert {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #b91c1c;
            border-radius: 7px;
            padding: 12px 15px;
            margin-bottom: 22px;
            font-size: 14px;
        }

        .alert ul {
            padding-left: 20px;
        }

        .alert li {
            margin: 5px 0;
        }

        /* Login link */
        .login-link {
            text-align: center;
            margin-top: 23px;
            font-size: 14px;
            color: #64748b;
        }

        .login-link a {
            color: #071A35;
            font-weight: bold;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Mobile layout */
        @media (max-width: 480px) {
            .container {
                padding: 28px 22px;
            }

            h2 {
                font-size: 21px;
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

        <h2>Create Your Account</h2>

        <p class="subtitle">
            Join us and explore our latest fashion collection.
        </p>

        {{-- Display validation errors --}}
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/register') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Full Name</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old('name') }}"
                    placeholder="Enter your full name"
                    autocomplete="name"
                    required
                >
            </div>

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
                    placeholder="Create a password"
                    autocomplete="new-password"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password_confirmation">
                    Confirm Password
                </label>
                <input
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    placeholder="Enter your password again"
                    autocomplete="new-password"
                    required
                >
            </div>

            <button type="submit" class="register-button">
                Create Account
            </button>
        </form>

        <p class="login-link">
            Already have an account?
            <a href="{{ url('/login') }}">Login here</a>
        </p>

    </div>

</body>
</html>
