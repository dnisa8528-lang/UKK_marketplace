<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Member Panel</title>

  <!-- Bootstrap & Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/a2d9d6a52c.js" crossorigin="anonymous"></script>

  <style>
    body {
      background-color: #f8e1e7; /* very light pink background */
      font-family: 'Poppins', sans-serif;
      color: #5b0b15; /* dark maroon text */
    }

    /* ===== SIDEBAR ===== */
    .sidebar {
      width: 250px;
      min-height: 100vh;
      background: linear-gradient(180deg, #e91e63 0%, #800000 100%);
      /* dari pink cerah ke marun */
      color: #fff;
      box-shadow: 3px 0 10px rgba(128, 0, 0, 0.5);
    }

    .sidebar h4 {
      font-weight: 700;
      color: #ffc1dc; /* soft pink */
    }

    .sidebar .nav-link {
      color: #ffb6c1; /* light pink */
      padding: 10px 15px;
      border-radius: 8px;
      transition: all 0.3s ease;
      font-weight: 500;
    }

    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
      background-color: #800000; /* marun */
      color: #ffd6de; /* very light pink */
      font-weight: 600;
      transform: translateX(5px);
    }

    .sidebar hr {
      border-color: rgba(255, 182, 193, 0.3);
    }

    /* ===== CONTENT ===== */
    .content {
      background-color: #fff0f5; /* very light pink */
      border-radius: 12px;
      min-height: 100vh;
      padding: 20px;
      box-shadow: 0 2px 12px rgba(128, 0, 0, 0.15);
    }

    /* ===== CARD ===== */
    .card {
      border: none;
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-3px);
      box-shadow: 0 4px 15px rgba(128, 0, 0, 0.3);
    }

    /* ===== BUTTON ===== */
    .btn-custom {
      background-color: #800000; /* marun */
      color: #fff0f5;
      font-weight: 600;
      border-radius: 50px;
      border: none;
      transition: 0.3s;
    }

    .btn-custom:hover {
      background-color: #e91e63; /* pink */
      color: #fff;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      .sidebar {
        width: 100%;
        min-height: auto;
      }

      .content {
        border-radius: 0;
      }
    }
  </style>
</head>

<body>
  <div class="d-flex">
    <!-- SIDEBAR MEMBER -->
    <div class="sidebar p-3">
      <h4 class="text-center mb-4">Member Panel</h4>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a href="{{ route('member.dashboard') }}" class="nav-link active">
            <i class="fa-solid fa-house me-2"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('member.toko.index') }}" class="nav-link">
            <i class="fa-solid fa-store me-2"></i> Toko Saya
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('member.produk.index') }}" class="nav-link">
            <i class="fa-solid fa-box me-2"></i> Produk
          </a>
        </li>
        <li class="nav-item">
          <a href="/member/profil" class="nav-link">
            <i class="fa-solid fa-user me-2"></i> Profil
          </a>
        </li>
        <li class="nav-item mt-3 border-top pt-2">
          <a href="#" class="nav-link text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa-solid fa-right-from-bracket me-2"></i> Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
      </ul>
    </div>

    <!-- CONTENT MEMBER -->
    <div class="content flex-grow-1 p-4">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>@yield('title')</h2>
      </div>

      @yield('content')
    </div>
  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
