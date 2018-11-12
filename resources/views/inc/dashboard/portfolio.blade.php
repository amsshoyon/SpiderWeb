

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
                <span><a data-toggle="modal" data-target="#Add_Portfolio" title="Edit Profile" class="btn btn-sm btn-warning pull-right">Add New</a></span>
              </div>
              
              <div class="clearfix"></div>
            </div>
            <div class="panel-body">
            
              @foreach($Portfolios as $Portfolio)
                <div  class="col-md-3 col-sm-6 col-xs-12">
                  <div class="portfolio">
                      <div class="box21">
                          <img class="img-responsive" src="/images/portfolio/cover/{{$Portfolio->cover}}" alt="">
                          <div class="box-content">
                              <h4 class="title">{{$Portfolio->title}}</h4>
                              <p class="text-center">({{$Portfolio->catagory->name}})</p>
                              <p class="description text-center">{{$Portfolio->description}}</p>
                              
                              @if($Portfolio->link)
                                <a class="read-more" href="{{$Portfolio->link}}" target="_blank">Live Preview</a>
                              @else
                                {{link_to_route('Portfolio.show',"Screenshoots",[$Portfolio->id],['class'=>'read-more'])}}
                              @endif
                          </div>
                      </div>
                  </div>
                  <div class="col-md-12" style="padding: 8px;">
                    {!!Form::open(['route' => ['Portfolio.destroy', $Portfolio->id], 'method' => 'DELETE'])!!}
                        {{link_to_route('Portfolio.edit',"Edit",[$Portfolio->id],['class'=>'btn btn-success'])}}
                      
                        {{Form::submit("Delete", ['class' => 'btn btn-danger','onclick'=>'return deleletconfig()'])}}
                  {!!Form::close()!!}
                  </div>
                </div>
                
              @endforeach

            </div>
            
          </div>
        </div>
      </div>
    </div>

 @include('inc.dashboard.include.portfolio_modal')