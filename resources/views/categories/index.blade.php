<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Clothing Store</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #071A35;
            color: #ffffff;
            min-height: 100vh;
            padding: 30px;
        }

        .page-header {
            text-align: center;
            margin-bottom: 35px;
        }

        .page-header h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .page-header p {
            color: #cbd5e1;
        }

        .category-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 25px;
            max-width: 1100px;
            margin: 0 auto 35px;
        }

        .category-card {
            background: #102747;
            border: 1px solid #263e5e;
            border-radius: 12px;
            overflow: hidden;
            text-align: center;
            padding-bottom: 22px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        }

        .category-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
            background: #ffffff;
        }

        .category-card h3 {
            font-size: 21px;
            margin: 20px 10px;
        }

        .category-card a,
        .back-link {
            display: inline-block;
            text-decoration: none;
            background: #ffffff;
            color: #071A35;
            padding: 11px 18px;
            border-radius: 6px;
            font-weight: bold;
            transition: background 0.2s ease;
        }

        .category-card a:hover,
        .back-link:hover {
            background: #dbeafe;
        }

        .back-container {
            text-align: center;
        }

        @media (max-width: 600px) {
            body {
                padding: 20px 12px;
            }

            .page-header h1 {
                font-size: 26px;
            }
        }
    </style>
</head>
<body>

    <header class="page-header">
        <h1>Clothing Categories</h1>
        <p>Browse our clothing collections and explore available products.</p>
    </header>

    <main>
        <div class="category-container">

            <div class="category-card">
                <img src="{{ asset("storage/categories/men's clothings.jpg") }}"
                     alt="Men's Clothing">

                <h3>Men's Clothing</h3>
                <a href="{{ route('product.index') }}">Explore Products</a>
            </div>

            <div class="category-card">
                <img src="{{ asset('storage/categories/women\'s clothings.jpg') }}"
                     alt="Women's Clothings">
                <h3>Women's Clothing</h3>
                <a href="{{ route('product.index') }}">Explore Products</a>
            </div>

            <div class="category-card">
                <img src="{{ asset('storage/categories/children\'s clothing.jpg') }}"
                     alt="Children's Clothings">
                <h3>Children's Clothing</h3>
                <a href="{{ route('product.index') }}">Explore Products</a>
            </div>

        </div>

        <div class="back-container">
            <a href="{{ route('dashboard') }}" class="back-link">
                Return to Dashboard
            </a>
        </div>
    </main>

</body>
</html>