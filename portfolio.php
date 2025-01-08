<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, rgb(4, 23, 54), black); 
            color: #fff; 
            line-height: 1.6;
            transition: opacity 0.5s ease-in-out;
        }
        header {
            background-color: rgba(51, 51, 51, 0.8);
            color: whitesmoke;
            padding: 20px;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #fff;
            transition: color 0.3s ease;
        }
        nav a:hover {
            color: #f4f4f4;
        }
        .gallery img {
            width: 200px;
            object-fit: cover;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin: 5px;
        }
        .gallery img:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }
        .fade {
            opacity: 0;
        }
        .fade-in {
            opacity: 1;
        }
        .gallery {
    display: flex;
    flex-wrap: wrap;
}

.figure-content {
    display: flex;
    align-items: center;
    margin: 10px;
}

.figure-content img {
    margin-right: 10px;
}

.figure-content figcaption {
    color: white; 
    max-width: 300px;
}
    </style>
</head>
<body>
    <header class="text-center">
        <h1>DENI HARYANTO</h1>
        <nav>
            <a href="index.php">Beranda</a>
            <a href="about.php">Tentang Saya</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="blog.php">Blog</a>
            <a href="contact.php">Kontak</a>
        </nav>
    </header>
    <div class="container my-4">
        <h2 style="color: white;">Galeri Portfolio</h2>
        <div class="mb-3">
            <button class="btn btn-primary filter-button" data-filter="all">Semua</button>
            <button class="btn btn-secondary filter-button" data-filter="Penata">Penata Artistik</button>
            <button class="btn btn-secondary filter-button" data-filter="Aktor">Aktor</button>
            <button class="btn btn-secondary filter-button" data-filter="Penari">Penari</button>
            <button class="btn btn-secondary filter-button" data-filter="Penulis">Penulis</button>
        </div>
        <div class="gallery">
            <figure class="item Penata figure-content">
                <img src="assets/photo_02_y.jpg" alt="Penata Artistik" width="200">
                <figcaption>Proyek ini menampilkan keahlian saya dalam menciptakan suasana visual yang mendukung narasi. Saya bertanggung jawab untuk merancang set dan pemilihan warna yang sesuai dengan tema.</figcaption>
            </figure>
            <figure class="item Penata figure-content">
                <img src="assets/photo_40_y.jpg" alt="Penata Artistik" width="200">
                <figcaption>Dalam proyek ini, saya bekerja sama dengan tim untuk menciptakan desain panggung yang inovatif. Fokus utama adalah pada penggunaan elemen alami untuk menciptakan pengalaman yang imersif.</figcaption>
            </figure>
            <figure class="item Penata figure-content">
                <img src="assets/photo_41_y.jpg" alt="Penata Artistik" width="200">
                <figcaption>Proyek ini adalah kolaborasi dengan sutradara untuk menciptakan estetika visual yang kuat. Saya merancang elemen set yang berfungsi untuk memperkuat emosi dalam setiap adegan.</figcaption>
            </figure>
            <figure class="item Penata figure-content">
                <img src="assets/photo_42_y.jpg" alt="Penata Artistik" width="200">
                <figcaption>Dalam proyek ini, saya mengeksplorasi penggunaan cahaya dan bayangan untuk menciptakan suasana yang dramatis. Desain saya membantu menyoroti momen-momen kunci dalam pertunjukan.</figcaption>
            </figure>
            <figure class="item Aktor figure-content">
                <img src="assets/photo_43_y.jpg" alt="Aktor" width="200">
                <figcaption>Saya berperan sebagai karakter utama dalam drama ini. Performa saya berfokus pada pengembangan karakter yang mendalam dan interaksi yang kuat dengan pemain lain.</figcaption>
            </figure>
            <figure class="item Aktor figure-content">
                <img src="assets/photo_44_y.jpg" alt="Aktor" width="200">
                <figcaption>Dalam proyek ini, saya berperan sebagai antagonis. Tantangan terbesar adalah menampilkan sisi gelap karakter dengan cara yang meyakinkan dan menarik.</figcaption>
            </figure>
            <figure class="item Aktor figure-content">
                <img src="assets/photo_45_y.jpg" alt="Aktor" width="200">
                <figcaption>Proyek ini adalah sebuah komedi di mana saya berperan sebagai karakter yang lucu. Saya berusaha untuk membawa keceriaan dan humor ke dalam setiap adegan.</figcaption>
            </figure>
            <figure class="item Aktor figure-content">
                <img src="assets/photo_46_y.jpg" alt="Aktor" width="200">
                <figcaption>Dalam drama ini, saya berperan sebagai karakter yang mengalami konflik internal. Saya berusaha untuk menampilkan emosi yang kompleks dan mendalam.</figcaption>
            </figure>
            <figure class="item Aktor figure-content">
                <img src="assets/photo_49_y.jpg" alt="Aktor" width="200">
                <figcaption>Proyek ini adalah sebuah pertunjukan teater yang mengangkat isu sosial. Saya berperan sebagai juru bicara yang menyampaikan pesan penting kepada penonton.</figcaption>
            </figure>
            <figure class="item Penata figure-content">
                <img src="assets/photo_50_y.jpg" alt="Penata Artistik" width="200">
                <figcaption>Dalam proyek ini, saya bertanggung jawab untuk menciptakan desain set yang mencerminkan tema cerita. Saya menggunakan berbagai bahan untuk menciptakan efek visual yang menarik.</figcaption>
            </figure>
            <figure class="item Penari figure-content">
                <img src="assets/photo_52_y.jpg" alt="Penari" width="200">
                <figcaption>Saya berpartisipasi dalam pertunjukan tari yang menggabungkan berbagai gaya. Proyek ini menekankan pada ekspresi gerakan dan harmoni dengan musik.</figcaption>
            </figure>
            <figure class="item Penulis figure-content">
                <img src="assets/photo_54_y.jpg" alt="Penulis" width="200">
                <figcaption>Saya menulis naskah untuk pertunjukan ini, yang mengeksplorasi tema cinta dan kehilangan. Proyek ini merupakan perjalanan emosional yang mendalam.</figcaption>
            </figure>
            <figure class="item Penulis figure-content">
                <img src="assets/photo_94_y.jpg" alt="Penulis" width="200">
                <figcaption>Dalam proyek ini, saya menulis cerita pendek yang diadaptasi menjadi pertunjukan teater. Fokus saya adalah pada pengembangan karakter dan plot yang menarik.</figcaption>
            </figure>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-button');
            const items = document.querySelectorAll('.gallery .item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filterValue = this.getAttribute('data-filter');

                    items.forEach(item => {
                        if (item.classList.contains(filterValue) || filterValue === 'all') {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
<footer class="text-center" style="color: white;">
        <p>&copy; 2025 Deni Haryanto. Semua hak dilindungi.</p>
    </footer>
</body>
</html>