@extends('layouts.app')
@section('content')
    
<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-md-9">
              <div class="panel panel-default">
               <div class="panel-body">
                <div class="post-detail">
                 @foreach($berita as $item)
                 <h3>{!! $item->judul !!}</h3>
                  
                    <div class="info-meta">
                        <ul class="list-inline">
                            <li><i class="fa fa-clock-o"></i>{!! $item->created_at !!}</li>
                            <li><i class="fa fa-user"></i> {!! $item->users_id !!}</li>
                            <li class="pull-right">{!! $item->kategori_berita_id !!}</li>
                        </ul>
                    </div>
                    <div class='info-meta'>{!! $item->isi !!} </div>
                    @endforeach
             	</div><!--recent-->
                </div>
            </div>      
        </div>          
    </div>          
</div>
<!--FOOTER-->
</div>  
</div>   
@endsection