@extends('admin.template')

@section('title', 'Dashboard')

@section('content')

<style>

    /* Row untuk menampung semua card agar berjejer ke samping */
    .dashboard-row {
        display: flex;
        gap: 25px;
        margin-top: 25px;
    }

    .dashboard-card {
        background: rgba(255, 240, 246, 0.8);
        backdrop-filter: blur(10px);
        padding: 30px 20px;
        width: 260px;
        border-radius: 18px;
        box-shadow: 0 8px 24px rgba(255, 120, 160, 0.12);
        transition: 0.3s;
        position: relative;
        border: 1px solid rgba(255, 190, 214, 0.6);
    }

    .dashboard-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(255, 120, 160, 0.18);
    }

    .dashboard-icon {
        width: 65px;
        height: 65px;
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        margin-bottom: 15px;
        background: linear-gradient(135deg, #ff9ac8, #ffb1d6, #ffc9e4);
        color: #fff;
        box-shadow: 0 4px 12px rgba(255, 100, 150, 0.25);
    }

    .dashboard-card h5 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 8px;
        color: #b84d7a;
    }

    .dashboard-card h3 {
        font-size: 40px;
        font-weight: 700;
        color: #c03974;
    }

    .dashboard-card::after {
        content: "";
        width: 100%;
        height: 5px;
        position: absolute;
        bottom: 0;
        left: 0;
        border-radius: 0 0 20px 20px;
        background: linear-gradient(90deg, #ff78a9, #ff9fc8, #ffc7e3);
    }

</style>

<div class="dashboard-row">

    <!-- Users -->
    <div class="dashboard-card">
        <div class="dashboard-icon"><i class="fa-solid fa-users"></i></div>
        <h5>Total Users</h5>
        <h3>150</h3>
    </div>

    <!-- Produk -->
    <div class="dashboard-card">
        <div class="dashboard-icon"><i class="fa-solid fa-boxes-stacked"></i></div>
        <h5>Total Produk</h5>
        <h3>87</h3>
    </div>

    <!-- Toko -->
    <div class="dashboard-card">
        <div class="dashboard-icon"><i class="fa-solid fa-store"></i></div>
        <h5>Total Toko</h5>
        <h3>25</h3>
    </div>

</div>

@endsection
