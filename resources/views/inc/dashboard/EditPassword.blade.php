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
      <h3 class="panel-title">Change Password</h3>
    </div>

    <div class="panel-body">
      <div class="row"  style="padding:10px;">

           {!! Form::model($User, ['method' => 'PUT', 'action' => ['PasswordController@update',$User->id]]) !!}
              <div class="clearfix"></div>

              <fieldset  class="form-group">
                {!! Form::label('password', 'New Password: ') !!}
                {{ Form::password('password', array('id' => 'password', 'class' => 'form-control','placeholder' => 'Enter A Password', )) }}
              </fieldset>

              <fieldset  class="form-group">
                {!! Form::label('password_confirmation', 'Last Name: ') !!}
                {{ Form::password('password_confirmation', array('id' => 'password', 'class' => 'form-control','placeholder' => 'Re-Enter the Password', )) }}
              </fieldset>

              <fieldset class="form-group">
                    {{Form::submit('Update', ['class'=>'btn btn-info'])}}
              </fieldset>


          {!! Form::close() !!}
      </div>
    </div>
    
  </div>
</div>