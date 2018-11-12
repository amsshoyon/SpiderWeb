
<div class="modal fade" id="add_catagory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Catagory</h4>
      </div>
      <form action="{{route('Catagory.store')}}" method="POST">
      <div class="modal-body">

            {{csrf_field()}}

            @include('inc.dashboard.include.catagory_form')


      </div>
      <div class="clearfix"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Add</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>




<div class="modal fade" id="edit_catagory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Catagory</h4>
      </div>
      <form action="{{route('Catagory.update','test')}}" method="post">
      <div class="modal-body">

                  {{method_field('patch')}}
                  {{csrf_field()}}

                  <input type="hidden" name="catagory_id" id="catagory_id">

                  @include('inc.dashboard.include.catagory_form')


      </div>
      <div class="clearfix"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>