@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">"List Kategori artikel"</div>
               
               <div class="card-body">
<a href="{!! route('berita.create') !!}" class="btn btn-primary">Tambah Data</a>
<table border="2">
               	<tr>
               		<td>id</td>
               		<td>nama</td>
               		<td>users id</td>
               		<td>create</td>
               		<td>Aksi</td>

               		
               	</tr>
               	@foreach($kategori_artikel as $item)
               	<tr>
					     <td>{!! $item->id !!}</td>
					     <td>{!! $item->nama !!}</td>
					     <td>{!! $item->users_id!!}</td>}
					     <td>{!! $item->created_at !!}</td>
					     <td>

				

               	<a href="{!! route('kategori_artikel.show',[$item->id]) !!}" class="btn btn-sm btn-success">
<<<<<<< HEAD
               		 View </a>
                <a href="{!! route('kategori_artikel.edit',[$item->id]) !!}" class="btn btn-sm btn-success">
                  Edit </a>
                {!! Form::open(['route'=>['kategori_artikel.destroy', $item->id],'method'=>'delete']) !!}

                {!! Form::submit('Hapus',['class'=>'btn btn-sn btn-danger','onclick'=>"return confirm('Apakah anda yakin menghapus data ini?')"]) !!}

                {!! Form::close() !!}

                  
=======
               		lihat </a>
>>>>>>> e91e0a425a169fd11bed46112613feb8d61afefb
               	</td>
               </tr>
               @endforeach
               		
           </div>
        </div>
    </div>
 </div>
 </body>
</html>
               
@endsection