<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') - Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/a2d9d6a52c.js" crossorigin="anonymous"></script>

    <style>
        body {
            background: #f8e6ef; 
            font-family: 'Poppins', sans-serif;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: linear-gradient(180deg, #e1a4b4 0%, #c96e87 100%); /* gradient pink */
            padding: 25px 15px;
            color: #fff;
            position: sticky;
            top: 0;
            box-shadow: 2px 0 10px rgba(201,110,135,0.3);
        }

        .sidebar h4 {
            font-weight: 700;
            text-align: center;
            margin-bottom: 30px;
            color: #fff0f6;
            letter-spacing: 1px;
            text-shadow: 0 1px 3px rgba(201,110,135,0.7);
        }

        .sidebar .nav-link {
            color: #ffd6e8;
            padding: 12px 18px;
            border-radius: 8px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: background-color 0.3s, color 0.3s;
        }

        .sidebar .nav-link i {
            font-size: 1.2rem;
        }

        .sidebar .nav-link:hover {
            background: #d66f8a;
            color: #fff;
            text-shadow: 0 0 5px #fff;
        }

        .sidebar .nav-link.active {
            background: #ff85ab; 
            color: #fff !important;
            font-weight: 700;
            box-shadow: 0 0 10px #ff85ab;
        }

        .content {
            flex-grow: 1;
            padding: 30px;
            background: #fff0f6;
            min-height: 100vh;
        }

        .main-card {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 6px 18px rgba(255, 133, 171, 0.25);
            border: 1px solid #ffc2d1;
        }

        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: #c94a6e;
            margin-bottom: 25px;
            text-shadow: 0 1px 2px rgba(201,74,110,0.4);
        }
    </style>
</head>

<body>
    <div class="d-flex">

        <div class="sidebar" role="navigation" aria-label="Sidebar Menu">
            <h4>Admin Panel</h4>

            <ul class="nav flex-column" role="menu">

                <li class="nav-item" role="none">
                    <a href="/admin/dashboard" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" role="menuitem">
                        <i class="fa-solid fa-gauge"></i> Dashboard
                    </a>
                </li>

                <li class="nav-item" role="none">
                    <a href="{{ route('admin.user.index') }}" class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}" role="menuitem">
                        <i class="fa-solid fa-users"></i> Users
                    </a>
                </li>

                <li class="nav-item" role="none">
                    <a href="{{ route('admin.kategori.index') }}" class="nav-link {{ request()->is('admin/kategori*') ? 'active' : '' }}" role="menuitem">
                        <i class="fa-solid fa-tags"></i> Kategori
                    </a>
                </li>

                <li class="nav-item" role="none">
                    <a href="{{ route('admin.produk.index') }}" class="nav-link {{ request()->is('admin/produk*') ? 'active' : '' }}" role="menuitem">
                        <i class="fa-solid fa-box"></i> Produk
                    </a>
                </li>

                <li class="nav-item" role="none">
                    <a href="/admin/toko" class="nav-link {{ request()->is('admin/toko*') ? 'active' : '' }}" role="menuitem">
                        <i class="fa-solid fa-store"></i> Toko
                    </a>
                </li>

                <hr class="text-pink-300" style="border-color: #ffc2d1;" />

                <li class="nav-item" role="none">
                    <a href="#" class="nav-link text-danger"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();" role="menuitem">
                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>

        <main class="content" role="main">
            <div class="main-card">
                <div class="page-title">@yield('title')</div>
                @yield('content')
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
