<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

$host = 'localhost';
$user = 'root';
$pass = '';


?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PekanSehat - Platform Kesehatan Terpercaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #20c997;
            --secondary-color: #0dcaf0;
            --dark-color: #198754;
            --light-color: #d1f2eb;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .navbar, .btn-primary {
            background-color: var(--primary-color) !important;
        }
        
        .btn-primary {
            border-color: var(--dark-color);
        }
        
        .btn-primary:hover {
            background-color: var(--dark-color);
            border-color: var(--dark-color);
        }
        
        .text-primary {
            color: var(--primary-color) !important;
        }
        
        .hero-section {
            background: linear-gradient(rgba(32, 201, 151, 0.8), rgba(13, 202, 240, 0.8)), url('https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            color: white;
        }
        
        .feature-card {
            transition: transform 0.3s;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            cursor: pointer;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .article-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }
        
        .article-card:hover {
            transform: translateY(-5px);
        }
        
        .stat-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .welcome-section {
            background: linear-gradient(135deg, #20c997 0%, #0dcaf0 100%);
            color: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-heartbeat me-2"></i>
                <strong>PekanSehat</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#konsultasi">Konsultasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Janji Temu">Janji Temu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Pendaftaran RS">Pendaftaran RS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Forum Diskusi">Forum</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="login.php" class="btn btn-light me-2">Login</a>
                    <a href="register.php" class="btn btn-outline-light">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Beranda PekanSehat</h2>
        </div>

        <!-- Welcome Section -->
        <div class="welcome-section">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3 class="mb-3">Selamat Datang di PekanSehat!</h3>
                    <p class="mb-0">Platform Digital Layanan Kesehatan Berbasis Smart City</p>
                    <p>Memberikan layanan kesehatan terbaik dengan teknologi terkini untuk kenyamanan Anda.</p>
                    <div>
                        <a href="register.php" class="btn btn-light me-2">Daftar Sekarang</a>
                        <a href="login.php" class="btn btn-outline-light">Login</a>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-heartbeat fa-5x opacity-75"></i>
                </div>
            </div>
        </div>

        <!-- Statistik (Placeholder) -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card stat-card text-white bg-primary mb-3">
                    <div class="card-body text-center">
                        <i class="fas fa-users fa-3x mb-2"></i>
                        <h3>1,000+</h3>
                        <p class="mb-0">Pengguna Terdaftar</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card text-white bg-success mb-3">
                    <div class="card-body text-center">
                        <i class="fas fa-user-md fa-3x mb-2"></i>
                        <h3>50+</h3>
                        <p class="mb-0">Dokter Professional</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card text-white bg-info mb-3">
                    <div class="card-body text-center">
                        <i class="fas fa-calendar-check fa-3x mb-2"></i>
                        <h3>500+</h3>
                        <p class="mb-0">Konsultasi Bulanan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card text-white bg-warning mb-3">
                    <div class="card-body text-center">
                        <i class="fas fa-hospital fa-3x mb-2"></i>
                        <h3>10+</h3>
                        <p class="mb-0">Rumah Sakit Partner</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Layanan Kesehatan -->
        <div class="row mb-4">
            <div class="col-12">
                <h4>Layanan Kesehatan</h4>
                <p class="text-muted">Pilih layanan yang Anda butuhkan:</p>
            </div>
        </div>
        
        <div class="row g-4 mb-5">
            <div class="col-md-3">
                <div class="card feature-card h-100 text-center" onclick="showLoginAlert('konsultasi')">
                    <div class="card-body">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-video fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Konsultasi Online</h5>
                        <p class="card-text">Konsultasi dengan dokter profesional secara online</p>
                        <span class="btn btn-primary">Mulai Konsultasi</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card feature-card h-100 text-center" onclick="showLoginAlert('janji_temu')">
                    <div class="card-body">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-calendar-check fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Janji Temu Dokter</h5>
                        <p class="card-text">Buat janji temu dengan dokter pilihan</p>
                        <span class="btn btn-primary">Buat Janji</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card feature-card h-100 text-center" onclick="showLoginAlert('pendaftaran_rs')">
                    <div class="card-body">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-hospital fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Pendaftaran RS</h5>
                        <p class="card-text">Daftar ke rumah sakit tujuan dengan mudah</p>
                        <span class="btn btn-primary">Daftar Sekarang</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card feature-card h-100 text-center" onclick="showLoginAlert('forum')">
                    <div class="card-body">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-comments fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Forum Diskusi</h5>
                        <p class="card-text">Berbagi pengalaman kesehatan dengan komunitas</p>
                        <span class="btn btn-primary">Lihat Forum</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Artikel Kesehatan -->
        <div class="row mb-5">
            <div class="col-12">
                <h4>Artikel Kesehatan Terbaru</h4>
            </div>
            <?php if (isset($artikel_result) && $artikel_result && $artikel_result->num_rows > 0): ?>
            <?php while($artikel = $artikel_result->fetch_assoc()): ?>
            <div class="col-md-4 mb-4">
                <div class="card article-card h-100">
                    <img src="<?php echo $artikel['gambar'] ?: 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'; ?>" class="card-img-top" alt="<?php echo $artikel['judul']; ?>" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $artikel['judul']; ?></h5>
                        <p class="card-text"><?php echo substr(strip_tags($artikel['konten']), 0, 100); ?>...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">Oleh: <?php echo $artikel['penulis']; ?></small>
                            <small class="text-muted"><?php echo date('d M Y', strtotime($artikel['dibuat_pada'])); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <div class="col-12">
                <div class="alert alert-info">Belum ada artikel yang tersedia.</div>
            </div>
            <?php endif; ?>
        </div>

        <!-- Info Kesehatan Cepat -->
        <div class="row">
            <div class="col-12">
                <h4>Informasi Penting</h4>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-phone-alt fa-2x text-primary"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5>Darurat Medis</h5>
                                <p class="mb-0">Hubungi 119 jika mengalami keadaan darurat medis</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-calendar-check fa-2x text-primary"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5>Jadwal Layanan</h5>
                                <p class="mb-0">Senin - Minggu: 24 Jam<br>Layanan konsultasi online</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-info-circle fa-2x text-primary"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5>Bantuan</h5>
                                <p class="mb-0">Butuh bantuan? Hubungi customer service kami</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5><i class="fas fa-heartbeat me-2"></i> PekanSehat</h5>
                    <p>Platform kesehatan terpercaya untuk memudahkan akses layanan kesehatan bagi masyarakat.</p>
                </div>
                <div class="col-md-4">
                    <h5>Link Cepat</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Tentang Kami</a></li>
                        <li><a href="#" class="text-white">Kebijakan Privasi</a></li>
                        <li><a href="#" class="text-white">Syarat dan Ketentuan</a></li>
                        <li><a href="#" class="text-white">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Kontak Kami</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Jl. Kesehatan No. 123, Jakarta</p>
                    <p><i class="fas fa-phone me-2"></i> (021) 1234-5678</p>
                    <p><i class="fas fa-envelope me-2"></i> info@pekansehat.com</p>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; 2023 PekanSehat. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login Diperlukan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        Anda harus login terlebih dahulu untuk mengakses fitur ini.
                    </div>
                    <div class="text-center">
                        <a href="login.php" class="btn btn-primary me-2">Login Sekarang</a>
                        <a href="register.php" class="btn btn-outline-primary">Daftar Akun</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Fungsi untuk menampilkan modal login
        function showLoginAlert(feature) {
            var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
            loginModal.show();
        }
        
        // Tambahkan event listener untuk semua card feature
        document.querySelectorAll('.feature-card').forEach(card => {
            card.addEventListener('click', function() {
                showLoginAlert();
            });
        });
    </script>
</body>
</html>

<?php
// Tutup koneksi database jika ada
if (isset($conn)) {
    $conn->close();
}
?>