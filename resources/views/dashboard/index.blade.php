<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Dashboard</title>
       
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        background: #f4f6fa;
        color: #071A35;
        line-height: 1.6;
    }

    /* Navigation */
    nav {
        background: 	#F4C542;
        color: #ffffff;
        padding: 15px 6%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 25px;
        flex-wrap: wrap;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }

    nav header {
        flex-shrink: 0;
    }

    .logo {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 23px;
        font-weight: bold;
        letter-spacing: 0.5px;
    }

    .logo img {
        width: 48px;
        height: 48px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #ffffff;
    }

    nav ul {
        list-style: none;
        display: flex;
        align-items: center;
        gap: 25px;
    }

    nav ul a {
        color: #ffffff;
        text-decoration: none;
        text-transform: capitalize;
        font-size: 15px;
        font-weight: 600;
        transition: color 0.2s ease;
    }

    nav ul a:hover {
        color: #93c5fd;
    }

    .nav-user {
        display: flex;
        align-items: center;
        gap: 15px;
        flex-wrap: wrap;
    }

    .nav-user span {
        font-size: 14px;
    }

    .logout-button {
        background: #ffffff;
        color: #071A35;
        border: none;
        padding: 9px 16px;
        border-radius: 6px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.2s ease;
    }

    .logout-button:hover {
        background: #dbeafe;
    }

    /* Hero section */
    .hero {
        min-height: 520px;
        display: flex;
        align-items: center;
        padding: 70px 8%;
        background: linear-gradient(110deg, #071A35, #173c67);
        color: #ffffff;
    }

    .hero-content {
        max-width: 720px;
    }

    .hero-content h1 {
        font-size: clamp(34px, 5vw, 55px);
        line-height: 1.2;
        margin-bottom: 20px;
    }

    .hero-content > p:first-of-type {
        color: #bfdbfe;
        font-size: 21px;
        margin-bottom: 15px;
    }

    .hero-content p {
        font-size: 16px;
        line-height: 1.9;
        margin-bottom: 25px;
        color: #e2e8f0;
    }

    .button {
        display: inline-block;
        background: #ffffff;
        color: #071A35;
        padding: 13px 23px;
        border-radius: 7px;
        text-decoration: none;
        font-weight: bold;
        border: 2px solid #ffffff;
        transition: background 0.2s ease, color 0.2s ease,
                    transform 0.2s ease;
    }

    .button:hover {
        background: #dbeafe;
        transform: translateY(-2px);
    }

    /* Categories */
    .categories {
        padding: 65px 7%;
        text-align: center;
    }

    .categories > h1 {
        font-size: 32px;
        margin-bottom: 12px;
        color: #071A35;
    }

    .categories > p {
        color: #64748b;
        margin-bottom: 30px;
    }

    .category-container {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 25px;
        max-width: 1150px;
        margin: 35px auto 0;
    }

    .category-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 35px 20px;
        min-height: 200px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: 0 5px 18px rgba(7, 26, 53, 0.07);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .category-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 28px rgba(7, 26, 53, 0.13);
    }

    .category-card h3 {
        font-size: 22px;
        margin-bottom: 22px;
        color: #071A35;
    }

    .category-card .button {
        background: #071A35;
        color: #ffffff;
        border-color: #071A35;
        font-size: 14px;
        padding: 11px 16px;
    }

    .category-card .button:hover {
        background: #173c67;
        border-color: #173c67;
    }

    /* Footer */
    footer {
        background: 	#F4C542;
        color: #cbd5e1;
        text-align: center;
        padding: 22px 15px;
        font-size: 14px;
    }

    /* Responsive layout */
    @media (max-width: 850px) {
        nav {
            justify-content: center;
        }

        nav ul {
            justify-content: center;
            flex-wrap: wrap;
        }

        .category-container {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .hero {
            min-height: 430px;
        }
    }

    @media (max-width: 560px) {
        nav {
            flex-direction: column;
            padding: 18px 15px;
        }

        nav ul {
            gap: 17px;
        }

        .nav-user {
            justify-content: center;
        }

        .hero {
            min-height: 400px;
            padding: 55px 22px;
        }

        .hero-content h1 {
            font-size: 34px;
        }

        .hero-content > p:first-of-type {
            font-size: 18px;
        }

        .categories {
            padding: 45px 18px;
        }

        .categories > h1 {
            font-size: 27px;
        }

        .category-container {
            grid-template-columns: 1fr;
            gap: 18px;
        }
        
    }
</style>

    </head>

<body>
    <nav>
        <header>
            <div class="logo">
                <img src="{{ asset('storage/logo/fashion-store-logo.jpg') }}"
                     alt="Fashion Store Logo">
                <span>Fashion Store</span>
            </div>
        </header>

        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#categories">Categories</a></li>
            <li><a href="#product">Shop</a></li>
            <li><a href="/cart">Cart</a></li>
        </ul>

        <div class="nav-user">
            @auth
                <span>Hello, {{ Auth::user()->name }}</span>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-button">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}"
                   class="button">Login</a>
                <a href="{{ route('register') }}"
                   class="button">Register</a>
            @endauth
        </div>
    </nav>

    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Welcome to Our Fashion Store</h1>
            <p>Discover the latest trends and styles.</p>

            <p>
                Explore clothing and accessories for every occasion.
                Find your favourite outfit and refresh your wardrobe
                with our latest fashion collection.
            </p>

            <a href="{{ route('product.index') }}" class="button">
                Explore Products
            </a>
        </div>
    </section>

    <section class="categories" id="categories">
        <h1>Shop by Category</h1>
        <p>Discover clothing for every style and every occasion.</p>

        <div class="category-container">
            <div class="category-card">
                <h3>Men's Clothing</h3>
                <a href="{{ route('category.index') }}" class="button">
                    Explore Men's Clothing
                </a>
            </div>

            <div class="category-card">
                <h3>Women's Clothing</h3>
                <a href="{{ route('category.index') }}" class="button">
                    Explore Women's Clothing
                </a>
            </div>

            <div class="category-card">
                <h3>Children's Clothing</h3>
                <a href="{{ route('category.index') }}" class="button">
                    Explore Children's Clothing
                </a>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; {{ date('Y') }} Fashion Store. All rights reserved.</p>
    </footer>
</body>


