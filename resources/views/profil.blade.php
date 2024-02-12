<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Profile nyong dewek</h1>
        </div>
        <div class="sidebar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/profil">Profil</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/kontak">Kontak</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="profile-info">
                <h2>Biodata</h2>
                <p><strong>NIS:</strong> {{ $biodata['nis'] }}</p>
                <p><strong>Nama:</strong> {{ $biodata['nama'] }}</p>
                <p><strong>Tempat Lahir:</strong> {{ $biodata['tempat_lahir'] }}</p>
                <p><strong>Tanggal Lahir:</strong> {{ $biodata['tanggal_lahir'] }}</p>
                <p><strong>Hobi:</strong> {{ $biodata['hobi'] }}</p>
            </div>
        </div>
        <div class="footer">
            &copy; 2023 My Personal Website. All rights reserved.
        </div>
    </div>
</body>
</html>
