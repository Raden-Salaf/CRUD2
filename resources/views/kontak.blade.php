<!DOCTYPE html>
<html>
<head>
    <title>Kontak</title>
    <link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>COD NAN AEE!!</h1>
        </header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/profil">Profil</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/kontak">Kontak</a></li>
            </ul>
        </nav>
        <main>
            <section>
                <h2>Contact Information</h2>
                <ul>
                    <li><strong>Email:</strong> {{ $kontak['email'] }}</li>
                    <li><strong>Instagram:</strong> {{ $kontak['ig'] }}</li>
                    <li><strong>Twitter:</strong> {{ $kontak['twitter'] }}</li>
                    <li><strong>Facebook:</strong> {{ $kontak['fb'] }}</li>
                    <li><strong>No Telp:</strong> {{ $kontak['no_telp'] }}</li>
                </ul>
            </section>
        </main>
        <footer>
            Monggo disave kabeh kue kontake cah:)
        </footer>
    </div>
</body>
</html>
