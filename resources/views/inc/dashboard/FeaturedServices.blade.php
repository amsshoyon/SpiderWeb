


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

            @if(isset($FeaturedService))
                {!! Form::model($FeaturedService, ['enctype' => 'multipart/form-data','method' => 'PUT', 'action' => ['FeaturedServicesController@update',$FeaturedService->id]]) !!}
            @else
            
                {!!Form::open(['action' => 'FeaturedServicesController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
            @endif
                <div class="col-md-4">
                  @if(isset($FeaturedService))
                    <img id="output" class="img-responsive" src="/images/services/{{$FeaturedService->image}}" style="width:100%;height: 300px;" >
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
                      {!! Form::label('title', 'Add a Title: ') !!}
                      {{Form::text('title',null,['value'=>'$FeaturedService->title','placeholder' => 'Image Title', 'class' => 'form-control'])}}
                    </fieldset>

                    <fieldset  class="form-group">
                      {!! Form::label('description', 'Add a Description: ') !!}
                      {{Form::textarea('description',null,['value'=>'$FeaturedService->description','placeholder' => 'Album Description', 'class' => 'form-control', 'rows' => '7'])}}
                    </fieldset>

                    <fieldset class="form-group">
                      @if(isset($FeaturedService))
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


<div class="container margin-top">
    <h2 class="text-center font-bold">FEATURED <span class="text-green">SERVICES</span></h2>
    <div class="row padding">

        @foreach($FeaturedServices as $FeaturedService)
        
        <div class="col-lg-4">
             <div class="our-team-main">
             
                  <div class="team-front">
                       <img src="/images/services/{{$FeaturedService->image}}" class="img-fluid" />
                       <h3>{{$FeaturedService->title}}</h3>
                  </div>
                  
                  <div class="team-back">
                       <span>
                            {{$FeaturedService->description}}
                       </span>
                       <hr>
                       {!!Form::open(['route' => ['FeaturedServices.destroy', $FeaturedService->id], 'method' => 'DELETE'])!!}
                         <div class="col-md-6">
                           {{link_to_route('FeaturedServices.edit','Edit',[$FeaturedService->id],['class'=>'btn btn-success','style'=>'width:100%;height:30px;color:#fff'])}}
                         </div>
                         <div class="col-md-6">
                           {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick'=>'return deleletconfig()','style'=>'width:100%'])}}
                         </div>
                       {!!Form::close()!!}
                  </div>
             
             </div>
        </div>

        @endforeach

    </div>
</div>
