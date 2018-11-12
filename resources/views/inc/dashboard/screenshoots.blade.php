


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
              <h3 class="panel-title pull-left" style="padding: 5px;">{{$Portfolio->title}}, {{$Portfolio->catagory->name}}</h3>
              <div class="pull-right">
                {{link_to_route('Image.show',"Edit",[$Portfolio->id],['class'=>'btn btn-danger'])}}
                <button type="button" 
                    class="btn btn-primary" 
                    data-toggle="modal" 
                    data-target="#Add_Portfolio" 
                    data-image_id='{{$Portfolio->id}}'  
                    data-
                    >
                        Add New
                </button>
              </div>
              
              <div class="clearfix"></div>
            </div>
            <div class="panel-body">
            

                @foreach($images as $image)
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <div style="padding: 5px;margin: 5px;max-height: 250px;overflow: hidden;box-shadow: 10px 10px 5px #aaaaaa;">
                        <a data-fancybox="gallery" href="/images/portfolio/images/{{$image->image}}" >
                            <img src="/images/portfolio/images/{{$image->image}}" style="width: 100%;">
                        </a>
                      </div>
                        

                    </div>
                @endforeach


            </div>
            
          </div>
        </div>
      </div>
    </div>





 @include('inc.dashboard.include.screenshoot_modal')


<script type="text/javascript">
  $('#Add_Portfolio').on('shown.bs.modal', function (event) {
    
    var button = $(event.relatedTarget)
    var image_id = button.data('image_id')
    var modal = $(this)

    modal.find('.modal-body #image_id').val(image_id);
  });
</script>

