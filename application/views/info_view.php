<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vanarrs Sweet Delights</title>
  <style>
    body { font-family: sans-serif; background: #fef6f0; color: #333; margin: 0; padding: 20px; }
    h1, h2 { text-align: center; color: #e84c93; }
    .promo, .contact { background: #ff6d60; padding: 10px; border-radius: 8px; margin: 20px auto; text-align: center; max-width: 800px; }
    .section { max-width: 800px; margin: auto; }
    .cakes { display: flex; flex-wrap: wrap; gap: 15px; justify-content: center; }
    .card { background: #fff; border-radius: 8px; width: 250px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); padding: 10px; }
    img { width: 100%; border-radius: 6px; }
    .name { font-weight: bold; color: #5d4f7b; }
    .price { color: #e84c93; font-weight: bold; }
    .audio-player { text-align: center; margin-top: 30px; }
  </style>
</head>
<body>
  <h1>Vanarrs Sweet Delights Bakery</h1>
  <div class="promo"><marquee>Diskon 20% untuk kue ulang tahun bulan ini!</marquee></div>

  <div class="section">
    <h2>Tentang Kami</h2>
    <p>Toko kue legendaris Bekasi dengan resep turun temurun dan rasa terbaik.</p>
  </div>

  <div class="section">
    <h2>Produk Unggulan</h2>
    <div class="cakes">
      <div class="card">
        <img src="images/rose apple.jpg" alt="Rose Apple Tart">
        <p class="name">Rose Apple Tart</p>
        <p class="price">Rp 85.000</p>
      </div>
      <div class="card">
        <img src="images/coklat truffle.jpg" alt="Chocolate Truffle">
        <p class="name">Chocolate Truffle</p>
        <p class="price">Rp 78.000</p>
      </div>
      <div class="card">
        <img src="images/blueberry tart.jpg" alt="Blueberry Tart">
        <p class="name">Blueberry Tart</p>
        <p class="price">Rp 82.000</p>
      </div>
      <div class="card">
        <img src="images/cheese cake.jpg" alt="Cheese Cake">
        <p class="name">Cheese Cake</p>
        <p class="price">Rp 90.000</p>
      </div>
    </div>
  </div>

  <div class="section">
    <h2>Penawaran</h2>
    <p>Pre-order sekarang, diskon 15% minggu depan!</p>
  </div>

  <div class="video-player">
    <h2>Video Promosi</h2>
    <video controls width="100%" style="border-radius: 8px; max-width: 800px; display: block; margin: auto;">
      <source src="video/promo_kue.mp4" type="video/mp4">
      Browser Anda tidak mendukung tag video.
    </video>
  </div>

  <div class="audio-player">
    <h2>Musik Latar</h2>
    <audio controls>
      <source src="audio/amour_plastique.mp3" type="audio/mpeg">
      Browser Anda tidak mendukung audio player.
    </audio>
  </div>

  <div class="contact">
    <h2>Kontak</h2>
    <p>Jl. Raya Bekasi No. 123</p>
    <p>Telp: 021-12345678 | IG: @sweetdelights_bakery</p>
    <p>08.00 - 21.00 WIB</p>
  </div>
</body>
</html>
