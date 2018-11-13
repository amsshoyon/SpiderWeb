

<div class="">
  <div class="row">

    @if(session('success'))
          <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{session('success')}}
          </div>
      @endif

      @foreach ($errors->all() as $error)
          <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error ! </strong>{{ $error }}
          </div>
      @endforeach

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0 col-sm-offset-0">

      <div class="panel panel-info">

        <div class="panel-heading">
          <h3 class="panel-title">About SpiderWeb</h3>
        </div>

        <div class="panel-body">
          <div class="row"  style="padding:10px;">

                {!! Form::model($about, ['enctype' => 'multipart/form-data','method' => 'PUT', 'action' => ['AboutController@update',$about->id]]) !!}
                <div class="col-md-4">
                    @if($about->image == '')
                        <img id="output" class="img-responsive" src="/images/bg/bg-3.jpg" style="width:100%;height: 300px;" >
                    @else
                        <img id="output" class="img-responsive" src="/images/about/{{$about->image}}" style="width:100%;height: 300px;"  >
                    @endif
                    <div class="photo_post">
                      {{Form::file('image', ['class'=>'file', 'id'=>'f02','placeholder'=>'Insert Image', 'onchange'=>'loadFile(event)'])}}
                      {!! Form::label('f02', 'Change Image') !!}
                    </div>

                </div>
 
                <div class="col-md-8"> 

                  <fieldset  class="form-group">
                    {{Form::textarea('about',null,['value'=>'$about->about','class' => 'form-control', 'rows' => '13'])}}
                  </fieldset>

                  {{Form::submit('Update', ['class'=>'btn btn-info'])}}
                  
                </div>    

              {!! Form::close() !!}
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>