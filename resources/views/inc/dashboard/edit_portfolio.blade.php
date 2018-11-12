

<div class="">
      <div class="row">

        <div class="container-fluid" >
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
              <h3 class="panel-title pull-left" style="padding: 5px;">Portfolios</h3>
              <div class="pull-right">
                <span>Updated at {{$Portfolio->updated_at}}</span>
              </div>
              
              <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                  
                {!! Form::model($Portfolio, ['enctype' => 'multipart/form-data','method' => 'PUT', 'action' => ['PortfolioController@update',$Portfolio->id]]) !!}
              
                  <div class="col-md-4">
                      <img id="output" class="img-responsive" src="/images/portfolio/cover/{{$Portfolio->cover}}" style="width:100%;max-height: 300px;" >
                      <div class="photo_post">
                        {{Form::file('image', ['class'=>'file', 'id'=>'f02','placeholder'=>'Insert Image', 'onchange'=>'loadFile(event)'])}}
                        {!! Form::label('f02', 'Change Cover') !!}
                      </div>
                  </div>

                  <div class="col-md-8"> 


                      <div class="clearfix"></div>

                      <fieldset  class="form-group">
                        {!! Form::label('title', 'Title: ') !!}
                        {{Form::text('title',null,['value'=>'$Portfolio->title','placeholder' => 'Portfolio Title', 'class' => 'form-control'])}}
                      </fieldset>

                      <fieldset  class="form-group">
                        {{ Form::label('catagory') }}
                        {{ Form::select('catagory_id', $CatagoryList, $Portfolio->catagory_id, array('class'=>'form-control', 'placeholder'=>'Please select ...')) }}
                      </fieldset>

                      <fieldset  class="form-group">
                        {!! Form::label('link', 'Link (if exist): ') !!}
                        {{Form::text('link',null,['value'=>'$Portfolio->link','placeholder' => 'Portfolio link', 'class' => 'form-control'])}}
                      </fieldset>

                      <fieldset  class="form-group">
                        {!! Form::label('description', 'Short Description: ') !!}
                        {{Form::textarea('description',null,['value'=>'$Portfolio->description','placeholder' => '', 'class' => 'form-control'])}}
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

 @include('inc.dashboard.include.portfolio_modal')