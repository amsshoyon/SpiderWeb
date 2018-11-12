
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
                    <h3 class="panel-title pull-left" style="padding: 5px;">Portfolio Catagories</h3>
                    <div class="pull-right">
                        <span><a data-toggle="modal" data-target="#add_catagory" title="Add Expetience" class="btn btn-sm btn-info pull-right">Add New</a></span>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <table class="table table-hover table-stripped">
                            <thead>
                                <tr>
                                    <th>Catagory Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($Catagories as $Catagory)
                                    <tr>
                                        <td>{{$Catagory->name}}</td>
                                        <td style="width: 150px;">
                                            {!!Form::open(['route' => ['Catagory.destroy', $Catagory->id], 'method' => 'DELETE'])!!}
                                                <button type="button" 
                                                    class="btn btn-default edit" 
                                                    data-toggle="modal" 
                                                    data-target="#edit_catagory" 
                                                    data-catagory_id='{{$Catagory->id}}'  
                                                    data-name='{{$Catagory->name}}'
                                                    >
                                                        <i class="fa fa-edit"></i>
                                                </button>
                                                {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-warning','onclick'=>'return deleletconfig()'] )  }}
                                                  
                                              {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

 @include('inc.dashboard.include.catagory_modal')


<script type="text/javascript">
  $('#edit_catagory').on('shown.bs.modal', function (event) {
    
    var button = $(event.relatedTarget)
    var catagory_id = button.data('catagory_id')
    var name = button.data('name')
    var modal = $(this)

    modal.find('.modal-body #catagory_id').val(catagory_id);
    modal.find('.modal-body #name').val(name);
  })
</script>

