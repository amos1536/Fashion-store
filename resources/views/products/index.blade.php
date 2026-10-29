<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products - Clothing Store</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #071A35;
        }

        header {
            background: #071A35;
            color: white;
            padding: 22px 6%;
        }

        header a {
            color: white;
            text-decoration: none;
        }

        main {
            padding: 40px 6%;
        }

        h1 {
            margin-bottom: 12px;
        }

        .intro {
            margin-bottom: 30px;
            color: #647084;
        }

        .product-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
        }

        .product-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
            padding-bottom: 20px;
        }

        .product-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
        }

        .product-card h3 {
            margin: 16px 15px 8px;
        }

        .product-card p {
            margin: 8px 15px;
        }

        .price {
            font-size: 18px;
            font-weight: bold;
        }

        .back-link {
            display: inline-block;
            margin-top: 30px;
            background: #071A35;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 5px;
        }

        .empty-message {
            background: white;
            padding: 25px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <header>
        <h2>
            <a href="{{ route('dashboard') }}">Clothing Store</a>
        </h2>
    </header>

    <main>
        <h1>Our Products</h1>

        <p class="intro">
            Explore our clothing collection and find your favourite outfit.
        </p>

        <div class="product-container">

            @forelse ($products as $product)

                <div class="product-card">

                    @if ($product->image)
                        <img
                            src="{{ asset('storage/' . $product->image) }}"
                            alt="{{ $product->name }}"
                        >
                    @endif

                    <h3>{{ $product->name }}</h3>

                    <p class="price">
                        KSh {{ number_format((float) $product->price, 2) }}
                    </p>

                    @if ($product->category)
                        <p>
                            Category: {{ $product->category->name }}
                        </p>
                    @endif

                    @if ($product->size)
                        <p>Size: {{ $product->size }}</p>
                    @endif

                    @if ($product->color)
                        <p>Color: {{ $product->color }}</p>
                    @endif

                    <p>Stock available: {{ $product->stock }}</p>

                </div>

            @empty

                <div class="empty-message">
                    <p>No products are available yet.</p>
                </div>

            @endforelse

        </div>

        <a href="{{ route('dashboard') }}" class="back-link">
            Return to Dashboard
        </a>

    </main>

</body>
</html>
