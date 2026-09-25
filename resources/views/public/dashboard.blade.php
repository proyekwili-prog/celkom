<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMPN Satu Atap 1 Mangunreja - Website Resmi Sekolah</title>

    <!-- Local Third-Party Libraries (100% Offline Compatible) -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-icons/bootstrap-icons.css') }}">
</head>
<body class="bg-light text-dark">

    <!-- ================= NAVBAR ================= -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <img src="{{ asset('assets/images/satap.png') }}" alt="Logo" width="40" height="40" class="object-fit-contain">
                <div>
                    <span class="fw-bold d-block fs-6 lh-1 text-dark">SMPN SATAP 1</span>
                    <span class="text-muted fs-7" style="font-size: 11px;">MANGUNREJA</span>
                </div>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center gap-3 mb-3 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active fw-semibold text-secondary" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link text-muted" href="#profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link text-muted" href="#ekskul">Ekstrakurikuler</a></li>
                    <li class="nav-item"><a class="nav-link text-muted" href="#guru">Guru & Staf</a></li>
                    <li class="nav-item"><a class="nav-link text-muted" href="#berita">Berita</a></li>
                    <li class="nav-item"><a class="nav-link text-muted" href="#galeri">Galeri</a></li>
                </ul>
                <div class="ms-lg-3">
                    <a href="{{ route('admin.login') }}" class="btn btn-secondary px-4 py-2 rounded-pill fw-semibold shadow-sm d-inline-flex align-items-center gap-2">
                        <i class="bi bi-box-arrow-in-right"></i> Login Admin
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- ================= HERO SECTION ================= -->
    <header class="py-5 bg-white border-bottom">
        <div class="container py-md-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle px-3 py-2 rounded-pill mb-3 fw-semibold">
                        <i class="bi bi-star-fill text-warning me-1"></i> Selamat Datang di Website Resmi
                    </span>
                    <h1 class="display-5 fw-bold text-dark lh-base mb-3">
                        Membangun Generasi Unggul, Berkarakter & Berprestasi
                    </h1>
                    <p class="text-muted lead fs-6 mb-4">
                        Pusat informasi resmi kegiatan akademik, ekstrakurikuler, dan perkembangan siswa SMPN Satu Atap 1 Mangunreja.
                    </p>
                    <div class="d-flex justify-content-center justify-content-lg-start gap-3">
                        <a href="#berita" class="btn btn-secondary px-4 py-2 fw-semibold shadow-sm">Baca Berita</a>
                        <a href="#profil" class="btn btn-outline-secondary px-4 py-2 fw-semibold">Tentang Kami</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=700&auto=format&fit=crop&q=80" alt="Gedung Sekolah" class="img-fluid rounded-4 shadow-lg border">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ================= SAMBUTAN KEPALA SEKOLAH ================= -->
    <section id="profil" class="py-5">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-4 text-center">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=500&auto=format&fit=crop&q=80" alt="Kepala Sekolah" class="rounded-4 shadow border img-fluid" style="max-height: 350px; object-fit: cover;">
                </div>
                <div class="col-lg-8">
                    <h2 class="fw-bold text-dark mb-2">Sambutan Kepala Sekolah</h2>
                    <p class="text-muted fw-semibold small mb-3">Dra. Hj. Siti Aminah, M.Pd. — Kepala Sekolah</p>
                    <p class="text-muted lh-lg mb-4">
                        "Puji syukur kami panjatkan ke hadirat Tuhan Yang Maha Esa karena atas limpahan rahmat-Nya, website resmi SMPN Satu Atap 1 Mangunreja dapat kembali hadir. Website ini dikembangkan sebagai sarana informasi dan komunikasi publik agar sekolah dapat diakses secara terbuka oleh seluruh warga sekolah, orang tua, maupun masyarakat luas."
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <div class="p-3 bg-white rounded-3 shadow-sm border text-center">
                                <h3 class="fw-bold text-secondary mb-1">150+</h3>
                                <span class="text-muted small">Siswa Aktif</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="p-3 bg-white rounded-3 shadow-sm border text-center">
                                <h3 class="fw-bold text-secondary mb-1">12</h3>
                                <span class="text-muted small">Guru & Staf</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="p-3 bg-white rounded-3 shadow-sm border text-center">
                                <h3 class="fw-bold text-secondary mb-1">4</h3>
                                <span class="text-muted small">Ekstrakurikuler</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= EKSTRAKURIKULER ================= -->
    <section id="ekskul" class="py-5 bg-white border-top border-bottom">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-dark">Kegiatan Ekstrakurikuler</h2>
                <p class="text-muted small">Wadah pengembangan bakat, minat, dan karakter peserta didik.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-3 col-sm-6">
                    <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4 bg-light">
                        <div class="mx-auto mb-3 p-3 bg-white rounded-circle shadow-sm border text-secondary" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-compass fs-3"></i>
                        </div>
                        <h5 class="fw-bold text-dark">Pramuka</h5>
                        <p class="text-muted small mb-0">Kepanduan wajib untuk melatih kedisiplinan dan kemandirian siswa.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4 bg-light">
                        <div class="mx-auto mb-3 p-3 bg-white rounded-circle shadow-sm border text-secondary" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-flag fs-3"></i>
                        </div>
                        <h5 class="fw-bold text-dark">Paskibra</h5>
                        <p class="text-muted small mb-0">Pasukan pengibar bendera untuk menumbuhkan jiwa nasionalisme.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4 bg-light">
                        <div class="mx-auto mb-3 p-3 bg-white rounded-circle shadow-sm border text-secondary" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-activity fs-3"></i>
                        </div>
                        <h5 class="fw-bold text-dark">Bola Voli</h5>
                        <p class="text-muted small mb-0">Olahraga prestasi tim untuk mengasah potensi di bidang kebugaran.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4 bg-light">
                        <div class="mx-auto mb-3 p-3 bg-white rounded-circle shadow-sm border text-secondary" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-shield-shaded fs-3"></i>
                        </div>
                        <h5 class="fw-bold text-dark">Perisai Diri</h5>
                        <p class="text-muted small mb-0">Seni bela diri tradisional untuk ketahanan fisik dan mental.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= BERITA TERBARU ================= -->
    <section id="berita" class="py-5">
        <div class="container py-4">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <h2 class="fw-bold text-dark mb-1">Berita & Informasi</h2>
                    <p class="text-muted small mb-0">Informasi seputar kegiatan dan pengumuman terbaru sekolah.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden bg-white">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=500&auto=format&fit=crop&q=80" class="card-img-top" alt="Berita 1" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <span class="badge bg-light text-secondary border mb-2">Kegiatan Sekolah</span>
                            <h5 class="fw-bold text-dark">Upacara Peringatan Hari Kemerdekaan RI di Sekolah</h5>
                            <p class="text-muted small mb-3">Kegiatan khidmat bersama seluruh guru dan siswa dalam rangka memperingati HUT RI...</p>
                            <span class="text-muted fs-7"><i class="bi bi-calendar3 me-1"></i> 17 Agustus 2026</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden bg-white">
                        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?w=500&auto=format&fit=crop&q=80" class="card-img-top" alt="Berita 2" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <span class="badge bg-light text-secondary border mb-2">Pengumuman</span>
                            <h5 class="fw-bold text-dark">Penerimaan Rapor Semester Ganjil Tahun Ajaran</h5>
                            <p class="text-muted small mb-3">Informasi pembagian hasil belajar siswa serta jadwal libur semester ganjil...</p>
                            <span class="text-muted fs-7"><i class="bi bi-calendar3 me-1"></i> 10 September 2026</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden bg-white">
                        <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=500&auto=format&fit=crop&q=80" class="card-img-top" alt="Berita 3" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <span class="badge bg-light text-secondary border mb-2">Prestasi</span>
                            <h5 class="fw-bold text-dark">Tim Voli Sekolah Berhasil Meraih Juara 2 Kabupaten</h5>
                            <p class="text-muted small mb-3">Prestasi membanggakan yang diraih oleh tim ekstrakurikuler bola voli sekolah...</p>
                            <span class="text-muted fs-7"><i class="bi bi-calendar3 me-1"></i> 22 September 2026</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="bg-dark text-white py-4 border-top">
        <div class="container text-center">
            <p class="small mb-1">&copy; 2026 SMPN Satu Atap 1 Mangunreja. Hak Cipta Dilindungi.</p>
            <p class="text-muted fs-7 mb-0">Kabupaten Tasikmalaya, Provinsi Jawa Barat</p>
        </div>
    </footer>

    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>