@extends('member.template')

@section('content')

<style>
  /* Container row */
  .dashboard-row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 20px;
  }

  /* Card style */
  .dashboard-card {
    flex: 1 1 30%;
    background: linear-gradient(145deg, #ffe8f1, #ffffff);
    border-radius: 16px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
    padding: 40px 20px;
    text-align: center;
    position: relative;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .dashboard-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
  }

  /* Card icon */
  .dashboard-card .icon {
    font-size: 40px;
    margin-bottom: 15px;
    color: #d6336c; /* MAROON PINK */
  }

  /* Card title */
  .dashboard-card h5 {
    font-size: 18px;
    color: #800020; /* MARUN */
    margin-bottom: 10px;
    font-weight: 600;
  }

  /* Card number */
  .dashboard-card h3 {
    font-size: 38px;
    font-weight: 700;
    margin: 0;
  }

  /* Color variations */
  .users h3 { color: #ff4f8b; }   /* Pink terang */
  .produk h3 { color: #800020; }  /* Marun pekat */
  .toko h3 { color: #ff9fbd; }    /* Pink pastel */

  /* Accent bar bottom */
  .dashboard-card::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 6px;
    border-radius: 0 0 16px 16px;
    background: linear-gradient(90deg, #ff4f8b, #800020, #ff9fbd);
  }

  /* Responsive */
  @media (max-width: 768px) {
    .dashboard-card {
      flex: 1 1 100%;
    }
  }
</style>

<div class="dashboard-row">
  <div class="dashboard-card users">
    <div class="icon">👤</div>
    <h5>Total Produk Saya</h5>
    <h3>10</h3>
  </div>

  <div class="dashboard-card produk">
    <div class="icon">🏪</div>
    <h5>Toko Saya</h5>
    <h3>1</h3>
  </div>

  <div class="dashboard-card toko">
    <div class="icon">📦</div>
    <h5>Produk Terjual</h5>
    <h3>45</h3>
  </div>
</div>

@endsection
