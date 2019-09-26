<!DOCTYPE html>
<html>
<head>
	<title>KategoriPengumuman</title>
</head>
<body>
<table border="1">
	<tr>
		<td>id</td>
		<td>nama</td>
		<td>user_id</td>
	</tr>
	@foreach($kategori_pengumuman as $item)
	<tr>{
			<td>{!! $item->id !!}</td>
			<td>{!! $item->nama !!}</td>
			<td>{!! $item->users_id !!}</td>
	</tr>
	@endforeach
</body>
</html>