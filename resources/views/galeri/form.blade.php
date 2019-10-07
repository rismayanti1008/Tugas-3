@csrf
<<<<<<< HEAD

<div class="form-group row">
    <label for="nama" class="col-md-2 col form-label text-md-right">{{__('Nama')}}</label>

    <div class="col-md-10">
    <input id="nama" type="text" class="Form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autofocus>
=======
<title>Membuat Artikel?</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<div class="form-group row">
    <label for="nama" class="col-md-2 col form-label text-md-right">{{__('nama')}}</label>

    <div class="col-md-10">
    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autofocus>
>>>>>>> e91e0a425a169fd11bed46112613feb8d61afefb

    @error('nama')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $massege }}</strong>
<<<<<<< HEAD
=======

>>>>>>> e91e0a425a169fd11bed46112613feb8d61afefb
    </span>
    @enderror
    </div>
</div>

<div class="form-group row">
<<<<<<< HEAD
    <label for="keterangan" class="col-md-2 col form-label text-md-right">{{__('keterangan')}}</label>

    <div class="col-md-10">
    <input id="keterangan" type="text" class="Form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" required autofocus>

    @error('keterangan')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $massege }}</strong>
=======
    <label for="keterangan" class="col-md-2 col form-label text-md-right">{{__('Keterangan')}}</label>

    <div class="col-md-10">
    <input id="path" type="keterangan" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" required autofocus>

    @error('keterangan')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
>>>>>>> e91e0a425a169fd11bed46112613feb8d61afefb
    </span>
    @enderror
    </div>
</div>

<div class="form-group row">
    <label for="path" class="col-md-2 col form-label text-md-right">{{__('Path')}}</label>

    <div class="col-md-10">
<<<<<<< HEAD
    <input id="path" type="text" class="Form-control @error('path') is-invalid @enderror" name="path" value="{{ old('path') }}" required autofocus>

    @error('path')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $massege }}</strong>
=======
    <input id="path" type="text" class="form-control @error('path') is-invalid @enderror" name="path" value="{{ old('path') }}" required autofocus>
   
    @error('path')

    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
>>>>>>> e91e0a425a169fd11bed46112613feb8d61afefb
    </span>
    @enderror
    </div>
</div>

<<<<<<< HEAD
<div class="Form-group row">
    <label for="kategori_berita_id" class="col-md-2 col Form-label text-md-right">{{__('Kategori Galeri')}}</label>

    <div class="col-md-10">
    {!! Form::select('kategori_galeri_id', $kategori_galeri, null, ["class"=> "Form-control", "required"]) !!}

    @error('kategori_galeri_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
=======
<div class="form-group row">
    <label for="kategori_galeri_id" class="col-md-2 col form-label text-md-right">{{__('Kategori Galeri')}}</label>

    <div class="col-md-10">
    {!!Form::select('kategori_galeri_id',$kategori_galeri, null,["class"=>"form-control", "required"]) !!}
    @error('Isi')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $messege }}</strong>
>>>>>>> e91e0a425a169fd11bed46112613feb8d61afefb
    </span>
    @enderror
    </div>
</div>

<<<<<<< HEAD

<input id="users_id" type="hidden" class="Form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required>

<div class="Form-group row mb-0">
=======
<input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required>

<div class="form-group row mb-0">
>>>>>>> e91e0a425a169fd11bed46112613feb8d61afefb
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Simpan') }}
        </button>
<<<<<<< HEAD
        <a herf="{!! route('berita.index') !!}" class="btn btn-danger">
            {{ __('Batal') }}
        </a>
    </div>
</div>
=======
        <a herf="{!! route('galeri.index') !!}" class="btn btn-danger">
            {{ __('Batal') }}
        </a>
    </div>
</div>
>>>>>>> e91e0a425a169fd11bed46112613feb8d61afefb
