<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
    <link rel="stylesheet" href="{{ asset('css/galeri.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/profil">Profil</a></li>
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/kontak">Kontak</a></li>
        </ul>
    </nav>
    <h1>Gallery</h1>
    <div class="gallery-container">
        <div class="image">
            <img src="{{ asset('image/persebaya.webp') }}" alt="Image 1">
            <p style="color: darkgreen">Salam Satu Wani</p>
        </div>
        <div class="image">
            <img src="{{ asset('image/persija.webp') }}" alt="Image 2">
            <p style="color: orangered">Lu Sopan Kami Segan</p>
        </div>
        <!-- Tambahkan lebih banyak gambar jika diperlukan -->
    </div>
</body>
</html>
