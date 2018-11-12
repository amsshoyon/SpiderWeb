
@include('inc.dashboard.image_upload_css')


<div class="">
  <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0 col-sm-offset-0" >

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

      <div class="panel panel-info">

        <div class="panel-heading">
          <h3 class="panel-title">Edit Profile : {{auth()->user()->username}}</h3>

        </div>

        <div class="panel-body">
          <div class="col-md-10 col-lg-offset-1">

           
              {!! Form::model($User, ['enctype' => 'multipart/form-data','method' => 'PUT', 'action' => ['ProfileController@update',$User->id]]) !!}
            
                <div class="col-md-4">
                  @if(!empty($User->image))
                    <img id="output" class="img-responsive" src="/storage/images/user/{{$User->image}}" style="width:100%;height: 300px;" >
                    <div class="photo_post">
                      {{Form::file('image', ['class'=>'file', 'id'=>'f02','placeholder'=>'Insert Image', 'onchange'=>'loadFile(event)'])}}
                      {!! Form::label('f02', 'Change Image') !!}
                    </div>
                  @else
                    <img id="output" class="img-responsive" src="/images/bg/bg-3.jpg" style="width:100%;height: 300px;" >
                    <div class="photo_post">
                      {{Form::file('image', ['class'=>'file', 'id'=>'f02','placeholder'=>'Insert Image', 'onchange'=>'loadFile(event)'])}}
                      {!! Form::label('f02', 'Upload Image') !!}
                    </div>
                  @endif
                </div>

                <div class="col-md-8"> 


                    <div class="clearfix"></div>

                    <fieldset  class="form-group">
                      {!! Form::label('name', 'Full Name: ') !!}
                      {{Form::text('name',null,['value'=>'$User->name','placeholder' => 'First Name', 'class' => 'form-control'])}}
                    </fieldset>

                    <fieldset  class="form-group">
                      {!! Form::label('phone', 'Mobile: ') !!}
                      {{Form::text('phone',null,['value'=>'$User->phone','placeholder' => 'Mobile', 'class' => 'form-control'])}}
                    </fieldset>

                    <fieldset class="form-group">
                          {{Form::submit('Update', ['class'=>'btn btn-info'])}}
                    </fieldset>

                    
                  </div>    

              {!! Form::close() !!}
            </div>
        </div>
        


      </div>
    </div>
  </div>
</div>
