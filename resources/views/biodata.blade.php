<!DOCTYPE html>
<html>
<head>
<title>Mengirim Data</title>
</head>
<body>
<h1>Laravel 2</h1>
<br>
<p>Nama : {{ $nama }}</p>
<p>Mata Pelajaran</p>
<ul>
@foreach($matkul as $m)
<li>{{ $m }}</li>
@endforeach
</ul>
</body>
</html>