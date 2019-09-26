<!DOCTYPE html>
<html>
<head>
	<title>KategoriaGaleri</title>
</head>
<body>
<table border="1">
	<tr>
		<td>id</td>
		<td>nama</td>
		<td>keterangan</td>
		<td>path</td>
		<td>user_id</td>
	</tr>
	@foreach($kategori_galeri as $item)
	<tr>{
			<td>{!! $item->id !!}</td>
			<td>{!! $item->nama !!}</td>
			<td>{!! $item->keterangan !!}</td>
			<td>{!! $item->path !!}</td>
			<td>{!! $item->user_id !!}</td>
	</tr>
	@endforeach
</body>
</html>