 <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
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

        <div class="panel panel-default">
          <div class="panel-heading">Register</div>
          @if(session()->has('message'))
            <div class="alert alert-success">
              {{ session()->get('message') }}
            </div>
          @endif

          <div class="panel-body">

             {!!Form::open(['action' => 'RegisterController@store','method' => 'POST'])!!}
                <div class="clearfix"></div>

                <fieldset  class="form-group">
                  {!! Form::label('name', 'Full Name: ') !!}
                  {{Form::text('name',null,['placeholder' => 'Full Name', 'class' => 'form-control'])}}
                </fieldset>

                <fieldset  class="form-group">
                  {!! Form::label('email', 'Email Address: ') !!}
                  {{Form::text('email',null,['placeholder' => 'Admin Email', 'class' => 'form-control'])}}
                </fieldset>

                <fieldset  class="form-group">
                  {!! Form::label('password', 'Password: ') !!}
                  {{ Form::password('password', array('id' => 'password', 'class' => 'form-control','placeholder' => 'Enter a Password', )) }}
                </fieldset>

                <fieldset  class="form-group">
                  {!! Form::label('password_confirmation', 'Confirm Password: ') !!}
                  {{ Form::password('password_confirmation', array('id' => 'password_confirmation', 'class' => 'form-control','placeholder' => 'Re-Enter the Password', )) }}
                </fieldset>

                <fieldset class="form-group">
                      {{Form::submit('Update', ['class'=>'btn btn-info'])}}
                </fieldset>


            {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
</div>