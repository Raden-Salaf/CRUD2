<!DOCTYPE html>
<html>
<head>
    <title>Mengirim Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #a00707;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #1a1a1a;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            padding: 20px 0;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        h2 {
            color: #ccc;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
        }

        /* Menu Responsif */
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav ul {
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline-block;
            margin: 0 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
        }

        nav a:hover {
            background-color: #555;
        }

        /* Garis Berwarna Merah */
        .red-border {
            border: 2px solid red;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .red-border h1, .red-border h2, .red-border ul {
            margin: 0;
            padding: 0;
        }

        .red-border ul li {
            color: #ccc;
        }

        .red-border ul li:hover {
            color: #fff;
        }

        /* Responsif */
        @media screen and (max-width: 768px) {
            .container {
                max-width: 100%;
                padding: 10px;
            }

            nav {
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Pamong 1</a></li>
            <li><a href="#">Pamong 2</a></li>
            <li><a href="#">Pamong 3</a></li>
            <li><a href="#">Pamong 4</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="red-border">
            <h1>Daftar Pamong MTK</h1>
            <br>
            <p><strong>Mapel :</strong> <strong>{{ $mapel }}</strong></p>
            <p><strong>Pamong:</strong></p>
            <ul>
                @foreach($pamong as $m)
                    <li>{{ $m }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
