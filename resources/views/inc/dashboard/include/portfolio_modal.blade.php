
<div id="Add_Portfolio" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Profile</h4>
      </div>
      <div class="modal-body">

          {!!Form::open(['action' => 'PortfolioController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
        
            <div class="col-md-4">
                <img id="output" class="img-responsive" src="/images/bg/bg-1.jpg" style="width:100%;max-height: 300px;" >
                <div class="photo_post">
                  {{Form::file('image', ['class'=>'file', 'id'=>'f02','placeholder'=>'Insert Image', 'onchange'=>'loadFile(event)'])}}
                  {!! Form::label('f02', 'Select Cover') !!}
                </div>
            </div>

            <div class="col-md-8"> 


                <div class="clearfix"></div>

                <fieldset  class="form-group">
                  {!! Form::label('title', 'Title: ') !!}
                  {{Form::text('title',null,['value'=>'','placeholder' => 'Portfolio Title', 'class' => 'form-control'])}}
                </fieldset>

                <fieldset  class="form-group">
                  {{ Form::label('catagory_id') }}
                    {{ Form::select('catagory_id', $CatagoryList, null, array('class'=>'form-control', 'placeholder'=>'Please select ...')) }}
                </fieldset>

                <fieldset  class="form-group">
                  {!! Form::label('link', 'Link (if exist): ') !!}
                  {{Form::text('link',null,['value'=>'','placeholder' => 'Portfolio link', 'class' => 'form-control'])}}
                </fieldset>

                <fieldset  class="form-group">
                  {!! Form::label('description', 'Short Description: ') !!}
                  {{Form::textarea('description',null,['value'=>'','placeholder' => '', 'class' => 'form-control'])}}
                </fieldset>

                <fieldset class="form-group">
                      {{Form::submit('Add', ['class'=>'btn btn-info'])}}
                </fieldset>

                
              </div>    

          {!! Form::close() !!}

      </div>
      <div class="clearfix"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>