<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, rgb(11, 28, 102), rgb(34, 44, 61)); 
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
    <main class="container my-4">
        <h2 style="color: white;"> Kontak </h2>
        <p style="color: white;">Jika Anda ingin menghubungi saya, silakan isi formulir di bawah ini:</p>
        <form action="send_email.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label" style="color: white;">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label" style="color: white;">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label" style="color: white;">Pesan</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form><br>
        <p style="color: white; font-size: 15px;">
            Atau ingin berdiskusi berbagi cerita, silakan hubungi saya melalui:
        </p>
        <ul>
            <li style="color: white;">Instagram: <a href="https://www.instagram.com/haryantodeni121748/">haryantodeni121748</a></li>
            <li style="color: white;">Threads: <a href="https://www.threads.net/@haryantodeni121748?xmt=AQGzZ44EPffeXIRe4KyI12Wm4Xoeis5zNlrNZy3QPX1LTdo">Deni Haryanto</a></li>
        </ul>
    </main>
    <footer class="text-center" style="color: white;">
        <p>&copy; 2025 Deni Haryanto. Semua hak dilindungi.</p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.body.classList.add("fade-in");
        });

        const links = document.querySelectorAll('nav a');
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const href = this.getAttribute('href');

                document.body.classList.remove("fade-in");
                document.body.classList.add("fade");

                setTimeout(() => {
                    window.location.href = href;
                }, 500);
            });
        });
    </script>
</body>
</html>