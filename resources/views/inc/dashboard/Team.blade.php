

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
          <h3 class="panel-title">Upload Images</h3>

        </div>

        <div class="panel-body">
          <div class="col-md-10 col-lg-offset-1">

            @if(isset($Team))
                {!! Form::model($Team, ['enctype' => 'multipart/form-data','method' => 'PUT', 'action' => ['TeamController@update',$Team->id]]) !!}
            @else
            
                {!!Form::open(['action' => 'TeamController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
            @endif
                <div class="col-md-4">
                  @if(isset($Team))
                    <img id="output" class="img-responsive" src="/images/team/{{$Team->image}}" style="width:100%;height: 300px;" >
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
                      {!! Form::label('name', "Member's Name: ") !!}
                      {{Form::text('name',null,['value'=>'$Team->name','placeholder' => "Member's Name", 'class' => 'form-control'])}}
                    </fieldset>
                    
                    <fieldset  class="form-group">
                      {!! Form::label('designation', 'Designation: ') !!}
                      {{Form::text('designation',null,['value'=>'$Team->designation','placeholder' => 'Designation', 'class' => 'form-control'])}}
                    </fieldset>
                    
                    <fieldset  class="form-group">
                      {!! Form::label('fb_link', 'Facebook Link: ') !!}
                      {{Form::text('fb_link',null,['value'=>'$Team->fb_link','placeholder' => 'Facebook Link..', 'class' => 'form-control'])}}
                    </fieldset>
                    
                    <fieldset  class="form-group">
                      {!! Form::label('twitter_link', 'Twitter Link: ') !!}
                      {{Form::text('twitter_link',null,['value'=>'$Team->twitter_link','placeholder' => 'Twitter Link', 'class' => 'form-control'])}}
                    </fieldset>
                    
                    <fieldset  class="form-group">
                      {!! Form::label('google_link', 'Google Link: ') !!}
                      {{Form::text('google_link',null,['value'=>'$Team->google_link','placeholder' => 'Google Link', 'class' => 'form-control'])}}
                    </fieldset>
                    
                    <fieldset  class="form-group">
                      {!! Form::label('linkedin_link', 'Linkedin Link: ') !!}
                      {{Form::text('linkedin_link',null,['value'=>'$Team->linkedin_link','placeholder' => 'Linkedin Link', 'class' => 'form-control'])}}
                    </fieldset>

                    <fieldset class="form-group">
                      @if(isset($Team))
                          {{Form::submit('Update', ['class'=>'btn btn-info'])}}
                      @else
                          {{Form::submit('Upload', ['class'=>'btn btn-info'])}}
                      @endif
                    </fieldset>

                    
                  </div>    

              {!! Form::close() !!}
            </div>
        </div>
        


      </div>
    </div>
  </div>
</div>





<div class="row col-md-12 margin-bottom padding">
     @foreach($TeamMembers as $Team)
    <div class="col-md-3 col-sm-6">
       <div class="our-team">
            <div class="pic">
                <img src="/images/team/{{$Team->image}}" class="img-fluid" />

            </div>
            <div class="team-content">
                <h3>{{$Team->name}}</h3>
                <span class="post">{{$Team->designation}}</span>
                {!!Form::open(['route' => ['Team.destroy', $Team->id], 'method' => 'DELETE'])!!}
                  <div class="col-md-6">
                    {{link_to_route('Team.edit','Edit',[$Team->id],['class'=>'btn btn-success','style'=>'width:100%;height:30px;color:#fff'])}}
                  </div>
                  <div class="col-md-6">
                    {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick'=>'return deleletconfig()','style'=>'width:100%'])}}
                  </div>
                {!!Form::close()!!}
            </div>
            <ul class="social">
                <li><a href="{{$Team->fb_link}}" class="fa fa-facebook"></a></li>
                <li><a href="{{$Team->twitter_link}}" class="fa fa-twitter"></a></li>
                <li><a href="{{$Team->google_link}}" class="fa fa-google-plus"></a></li>
                <li><a href="{{$Team->linkedin_link}}" class="fa fa-linkedin"></a></li>
            </ul>
       </div>
    </div>
    @endforeach
</div>