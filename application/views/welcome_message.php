<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanarrs Sweet Delights - Toko Kue</title>
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #fef6f0;
        color: #333;
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    h1 {
        text-align: center;
        font-size: 3em;
        color: #e84c93;
    }
    
    h2 {
        color: #d54f7b;
        margin-top: 40px;
        border-bottom: 2px dotted #f7cac9;
        padding-bottom: 10px;
    }
    
    p {
        font-size: 1.2em;
        line-height: 1.6;
    }
    
    .highlight {
        color: #e63946;
        font-weight: bold;
        text-decoration: underline;
    }
    
    .italic {
        font-style: italic;
    }
    
    .marquee {
        background: #ffd6e0;
        color: #8a4f7d;
        padding: 15px;
        font-weight: bold;
        border-radius: 8px;
        margin: 20px 0;
    }
    
    .animated-text {
        display: inline-block;
        animation: fadeIn 3s ease-in-out infinite;
    }
    
    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
    
        50% {
            opacity: 1;
        }
        
        100% {
            opacity: 0;
        }
    }

    .image-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
        margin: 30px 0;
    }

    .cake-image {
        width: 300px;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .cake-image:hover {
        transform: scale(1.05);
    }

    .cake-card {
        width: 300px;
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .cake-card:hover {
        transform: translateY(-5px);
    }

    .cake-info {
        padding: 15px;
    }

    .cake-name {
        font-weight: bold;
        color: #d54f7b;
        font-size: 1.2em;
        margin: 0 0 10px 0;
    }

    .cake-price {
        color: #e84c93;
        font-weight: bold;
    }

    .cake-description {
        font-size: 0.9em;
        color: #666;
        margin: 10px 0;
    }

    .about-section {
        display: flex;
        align-items: center;
        gap: 30px;
        margin: 40px 0;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .store-image {
        width: 400px;
        height: auto;
        border-radius: 8px;
    }

    .contact-info {
        background-color: #ffd6e0;
        padding: 20px;
        border-radius: 10px;
        margin-top: 30px;
    }

    .special-offers {
        margin: 30px 0;
    }
    
    .featured-box {
        max-width: 600px;
        margin: 30px auto;
        border: 2px solid #f7cac9;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        background-color: white;
    }
    
    .featured-image {
        width: 100%;
        max-width: 550px;
        border-radius: 8px;
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }
    </style>
</head>
<body>
    <h1>Sweet Delights Bakery</h1>
    <h2>Toko Kue Terbaik di Bekasi</h2>

    <div class="marquee">
        <marquee behavior="scroll" direction="left">Promo Spesial! Diskon 20% untuk semua pesanan kue ulang tahun di bulan ini. Kunjungi toko kami sekarang!</marquee>
    </div>
    
    <div class="featured-box">
        <h2>Koleksi Mini Tart Premium</h2>
        <img src="/api/placeholder/550/400" alt="Koleksi Mini Tart Premium" class="featured-image">
        <p>Set 9 mini tart dengan berbagai rasa dan hiasan yang menggugah selera</p>
    </div>

    <div class="about-section">
        <img src="/api/placeholder/400/300" alt="Toko Kue Sweet Delights" class="store-image">
        <div>
            <p>Selamat datang di <span class="highlight">Sweet Delights Bakery</span>, toko kue terbaik di Bekasi! Kami menyediakan berbagai macam kue dan pastry dengan bahan-bahan berkualitas dan resep rahasia yang telah diwariskan selama tiga generasi.</p>
            <p>Setiap kue dibuat dengan <span class="italic">cinta dan dedikasi</span> oleh para <strong>pastry chef</strong> profesional kami untuk memastikan kualitas dan rasa terbaik untuk setiap pelanggan.</p>
        </div>
    </div>

    <h2>Produk Unggulan Kami</h2>
    <div class="image-container">
        <div class="cake-card">
            <img src="/api/placeholder/300/200" alt="Rose Apple Tart" class="cake-image">
            <div class="cake-info">
                <h3 class="cake-name">Rose Apple Tart</h3>
                <p class="cake-description">Tart dengan irisan apel yang dibentuk seperti mawar, memberikan sentuhan elegan.</p>
                <p class="cake-price">Rp 85.000</p>
            </div>
        </div>
        
        <div class="cake-card">
            <img src="/api/placeholder/300/200" alt="Chocolate Truffle" class="cake-image">
            <div class="cake-info">
                <h3 class="cake-name">Chocolate Truffle</h3>
                <p class="cake-description">Kue cokelat lezat dengan lapisan ganache yang meleleh di mulut.</p>
                <p class="cake-price">Rp 78.000</p>
            </div>
        </div>
        
        <div class="cake-card">
            <img src="/api/placeholder/300/200" alt="Blueberry Tart" class="cake-image">
            <div class="cake-info">
                <h3 class="cake-name">Blueberry Tart</h3>
                <p class="cake-description">Perpaduan sempurna antara tart renyah dengan blueberry segar dan glaze mengkilap.</p>
                <p class="cake-price">Rp 82.000</p>
            </div>
        </div>
    </div>

    <div class="special-offers">
        <h2>Penawaran Spesial</h2>
        <p><span class="animated-text">Pre-order sekarang dan dapatkan diskon 15% untuk pesanan minggu depan!</span></p>
    </div>

    <div class="contact-info">
        <h2>Kunjungi Kami</h2>
        <p>Alamat: Jl. Raya Bekasi No. 123, Bekasi Barat</p>
        <p>Telepon: 021-12345678</p>
        <p>Instagram: @sweetdelights_bakery</p>
        <p>Jam Operasional: Senin - Minggu, 08.00 - 21.00 WIB</p>
    </div>
</body>
</html>