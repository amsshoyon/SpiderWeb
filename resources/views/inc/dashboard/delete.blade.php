


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
                {{link_to_route('Portfolio.show',"Go Back",[$Portfolio->id],['class'=>'btn btn-success'])}}
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
                        <div class="col-md-12" style="padding-top: 8px;">
                          {!!Form::open(['route' => ['Image.destroy', $image->id], 'method' => 'DELETE'])!!}
                              {{Form::submit("Delete", ['class' => 'btn btn-danger text-center form-control','onclick'=>'return deleletconfig()'])}}
                        {!!Form::close()!!}
                      </div>
                        

                    </div>
                @endforeach


            </div>
            
          </div>
        </div>
      </div>
    </div>


