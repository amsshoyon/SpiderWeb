




<div class="modal fade" id="Add_Portfolio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!!Form::open(['action' => 'ImageController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
      <div class="modal-body">
		
      	<div class="photo_post">
			{{Form::file('images[]', ['multiple','class'=>'file', 'id'=>'f02','placeholder'=>'Insert Image', 'onchange'=>'loadFile(event)'])}}
			{!! Form::label('f02', 'Select Images') !!}
		</div>
		{{Form::hidden('image_id',null,['id'=>'image_id'])}}
		<div class="clearfix"></div>
      	<div class="col-md-12" style="margin-top: 30px;">
      		<div class="col-md-12">
      			<div class="gallery"></div>
      		</div>
      
            </div>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {{Form::submit('Upload', ['class'=>'btn btn-primary'])}}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>


<script type="text/javascript">
	$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img style="width:100%;padding:15px;border:2px solid #333;margin:5px;">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#f02').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
</script>