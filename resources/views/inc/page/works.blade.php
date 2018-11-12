
<section class="container-fluid">
    
        <div class="col-lg-2 col-md-2 hidden-sm margin-top">
            
                <div class="list-group">
                    <a href="#" class="list-group-item active"><i class="fa fa-key"></i> <span>App Settings</span></a>
                    <a href="#" class="list-group-item"><i class="fa fa-credit-card"></i> <span>Billing</span></a>
                    <a href="#" class="list-group-item"><i class="fa fa-question-circle"></i> <span>Support</span></a>
                    <a href="#" class="list-group-item"><i class="fa fa-arrow-circle-o-left"></i> <span>Sandbox Account</span></a>
                    <a href="#" class="list-group-item"><i class="fa fa-book"></i> <span>QuickStart Overview</span></a>
                    <a href="#" class="list-group-item"><i class="fa fa-compass"></i> <span>Documentation</span></a>
                </div>

                <div class="list-group margin-top">
                    <a href="#" class="list-group-item active"><i class="fa fa-key"></i> <span>App Settings</span></a>
                    <a href="#" class="list-group-item"><i class="fa fa-credit-card"></i> <span>Billing</span></a>
                    <a href="#" class="list-group-item"><i class="fa fa-question-circle"></i> <span>Support</span></a>
                    <a href="#" class="list-group-item"><i class="fa fa-arrow-circle-o-left"></i> <span>Sandbox Account</span></a>
                    <a href="#" class="list-group-item"><i class="fa fa-book"></i> <span>QuickStart Overview</span></a>
                    <a href="#" class="list-group-item"><i class="fa fa-compass"></i> <span>Documentation</span></a>
                </div>
        </div>


        <div class="col-lg-10 col-md-2 padding">
            <div class="well well-sm">
                <strong>All Projects </strong>
                <div class="btn-group">
                    <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                    </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                        class="glyphicon glyphicon-th"></span>Grid</a>
                </div>
            </div>
            <div id="works" class="row list-group">

                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="/images/works/1.jpg" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                Product title</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        
                            <a class="btn btn-success pull left" href="http://www.jquery2dotnet.com">Add to cart</a>
                                
                        </div>
                    </div>
                </div>

                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="/images/works/1.jpg" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                Product title</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        
                            <a class="btn btn-success pull left" href="http://www.jquery2dotnet.com">Add to cart</a>
                                
                        </div>
                    </div>
                </div>

                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="/images/works/1.jpg" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                Product title</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        
                            <a class="btn btn-success pull left" href="http://www.jquery2dotnet.com">Add to cart</a>
                                
                        </div>
                    </div>
                </div>

                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="/images/works/1.jpg" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                Product title</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        
                            <a class="btn btn-success pull left" href="http://www.jquery2dotnet.com">Add to cart</a>
                                
                        </div>
                    </div>
                </div>

                
            </div>
        </div>


</section>









<script type="text/javascript">
	$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#works .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#works .item').removeClass('list-group-item');$('#works .item').addClass('grid-group-item');});
});
</script>