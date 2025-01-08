<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc); 
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
        .profile-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; 
        }
        .profile-container img {
            max-width: 200px;
            border-radius: 10px;
            margin-right: 20px; 
        }
    </style>
</head>
<body>
    <header class="text-center">
        <nav>
            <a href="index.php">Beranda</a>
            <a href="about.php">Tentang Saya</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="blog.php">Blog</a>
            <a href="contact.php">Kontak</a>
        </nav>
    </header>
    <main class="container my-4 profile-container" style="color: white">
        <div>
      <img src="assets/4903.jpg" alt="foto saya">
    </div>
      <div>
        <h1>Deni Haryanto</h1>
        <p>Salam kenal saya mahasiswa semester 3 Program Studi Sistem Informasi Universitas Kuningan</p>
    </div>
    </main>
    <footer class="text-center" style="color: white;">
        <p>&copy; 2025 Deni Haryanto. Semua hak dilindungi.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Menambahkan efek fade-in saat halaman dimuat
        document.addEventListener("DOMContentLoaded", function() {
            document.body.classList.add("fade-in");
        });

        // Menangani transisi saat berpindah halaman
        const links = document.querySelectorAll('nav a');
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault(); // Mencegah perilaku default
                const href = this.getAttribute('href');

                // Menambahkan efek fade-out
                document.body.classList.remove("fade-in");
                document.body.classList.add("fade");

                // Menunggu transisi selesai sebelum berpindah halaman
                setTimeout(() => {
                    window.location.href = href;
                }, 500); // Waktu yang sama dengan durasi transisi
            });
        });

        // AJAX untuk memuat konten tanpa memuat ulang halaman
        $(document).ready(function() {
            $('nav a').click(function(e) {
                e.preventDefault();
                var page = $(this).attr('href');

                $('.container').fadeOut(300, function() {
                    $('.container').load(page + ' .container > *', function() {
                        $('.container').fadeIn(300);
                    });
                });
            });
        });
    </script>s
</body>
</html>