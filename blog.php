<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, rgb(0, 0, 0), rgb(4, 51, 128)); 
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
        .fade {
            opacity: 0;
        }
        .fade-in {
            opacity: 1;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            border-radius: 10px 10px 0 0;
            height: 200px; 
            object-fit: cover; 
        }
        .card-title {
            font-size: 1.2rem;
            margin: 10px 0;
        }
        .card a {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .card a:hover {
            background-color: #0056b3;
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
    <main class="container m-4">
        <h2>Blog</h2>
        <p>Artikel dan tulisan terbaru saya akan ditampilkan di sini.</p>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/2-1.png" alt="foto">
                    <div class="card-body" >
                        <h5 class="card-title">Cerpen: Tungku</h5>
                        <p style="text-align: justify">Sinopsis: Hangatnya tungku, kini tak lagi terasa. Dingin meratapi akan kehidupan yang terus berjalan. Hingga Sang Ia memanggilku.</p><br>
                        <a href="https://www.wouwoo.com/tungku/" target="_blank">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/2-2.png" alt="foto">
                    <div class="card-body">
                        <h5 class="card-title">Cerpen: Hari</h5>
                        <p style="text-align: justify">Sinopsis: Hari-hari terus berlalu dengan banyaknya ratapan duniawi yang kian lama membusuk. Hingga hari itu tiba.</p><br>
                        <a href="https://www.wouwoo.com/hari/" target="_blank">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/2-3.jpg" alt="foto">
                    <div class="card-body">
                        <h5 class="card-title">Artikel : Kesenjangan Sosial Akibat Musim Kemarau. Dampak dan Solusinya</h5>
                        <p style="text-align: justify">Dalam mengatasi kesenjangan sosial yang diakibatkan oleh musim kemarau, kolaborasi antara pemerintah, lembaga non-profit, dan masyarakat sangat penting.</p>
                        <a href="https://kuninganpos.com/2023/10/07/kesenjangan-sosial-akibat-musim-kemarau-dampak-dan-solusinya/" target="_blank">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/2-4.jpg" alt="foto">
                    <div class="card-body">
                        <h5 class="card-title">Artikel : Kebutuhan Kebahagiaan: Penting atau Tidak?</h5>
                        <p style="text-align: justify">Keberagaman tujuan hidup dan pandangan mengenai kebahagiaan menunjukkan bahwa mungkin tidak ada jawaban tunggal apakah kita benar-benar “membutuhkan” kebahagiaan atau tidak.</p>
                        <a href="https://kuninganpos.com/2023/09/04/kebutuhan-kebahagiaan-penting-atau-tidak/" target="_blank">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-center" style="color: white;">
        <p>&copy; 2025 Deni Haryanto. Semua hak dilindungi.</p>
    </footer>
</body>
</html>