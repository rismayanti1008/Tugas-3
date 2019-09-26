<!DOCTYPE html>
<html>
<head>
	<title>KategoriaBerita</title>
</head>
<body>
<table border="1">
	<tr>
		<td>id</td>
		<td>judul</td>
		<td>isi</td>
		<td>user_id</td>
	</tr>
	@foreach($kategori_berita as $item)
	<tr>{
			<td>{!! $item->id !!}</td>
			<td>{!! $item->nama !!}</td>
			<td>{!! $item->user_id !!}</td>
	</tr>
	@endforeach
</body>
</html>