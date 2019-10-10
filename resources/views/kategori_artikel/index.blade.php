@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">"List Kategori artikel"</div>
               
               <div class="card-body">
<a href="{!! route('kategori_artikel.create') !!}" class="btn btn-success">Tambah Data</a>
<table border="2">
               	<tr bgcolor='khaki' align="center"> 
               		<td>ID</td>
               		<td>Nama</td>
               		<td>Users id</td>
               		<td>Create</td>
                  <td>Update</td>
               		<td>Aksi</td>

               		
               	</tr>
               	@foreach($kategori_artikel as $item)
               	<tr>
					     <td>{!! $item->id !!}</td>
					     <td>{!! $item->nama !!}</td>
					     <td>{!! $item->users_id!!}</td>}
					     <td>{!! $item->created_at !!}</td>
               <td>{!! $item->updated_at !!}</td>
					     <td>

				

               	<a href="{!! route('kategori_artikel.show',[$item->id]) !!}" class="btn btn-sm btn-success">
               		 View </a>
                <a href="{!! route('kategori_artikel.edit',[$item->id]) !!}" class="btn btn-sm btn-warning">
                  Edit </a>
                {!! Form::open(['route'=>['kategori_artikel.destroy', $item->id],'method'=>'delete']) !!}

                {!! Form::submit('Hapus',['class'=>'btn btn-sn btn-danger','onclick'=>"return confirm('Apakah anda yakin menghapus data ini?')"]) !!}

                {!! Form::close() !!}

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