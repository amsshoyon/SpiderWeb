<div class="container">
    <section class="margin-bottom">
		<div class="padding">				
			<div class="col-md-6">
				<h3 class="dark-grey">Registration</h3>
				
				<div class="form-group col-lg-12">
					<label>Username</label>
					<input type="" name="" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Password</label>
					<input type="password" name="" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Repeat Password</label>
					<input type="password" name="" class="form-control" id="" value="">
				</div>
								
				<div class="form-group col-lg-12">
					<label>Email Address</label>
					<input type="" name="" class="form-control" id="" value="">
				</div>		

				<div class="form-row">
					<div class="form-group col-md-6">
						<label>City</label>
						<input type="text" class="form-control">
					</div> <!-- form-group end.// -->
					<div class="form-group col-md-6">
						<label>Country</label>
						<select id="inputState" class="form-control">
							<option> Choose...</option>
							<option>Uzbekistan</option>
							<option>Russia</option>
							<option selected="">United States</option>
							<option>India</option>
							<option>Afganistan</option>
						</select>
					</div> <!-- form-group end.// -->
				</div> <!-- form-row.// -->	

				<div class="form-group col-lg-6">
					<label>Phone Number</label>
					<input type="text" name="" class="form-control" id="" value="">
				</div>		

				<div class="form-group col-md-6">
					<label>Gender</label>
					<select id="inputState" class="form-control">
						<option> Choose...</option>
						<option>Male</option>
						<option>Female</option>
						<option>Others</option>
					</select>
				</div> <!-- form-group end.// -->
				
				
			</div>
		
			<div class="col-md-6">
				<h3 class="dark-grey">Terms and Conditions</h3>
				<div style="width: 100%; height: 30px;"></div>
				<p>
					By clicking on "Register" you agree to The Company's' Terms and Conditions
				</p>
				<p>
					While rare, prices are subject to change based on exchange rate fluctuations - 
					should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8)
				</p>
				<p>
					Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6)
				</p>
				<p>
					Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6)
				</p>

				<div class="row">
					<div class="col-xs-4 col-sm-3 col-md-3">
						<span class="button-checkbox">
							<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
	                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
						</span>
					</div>
					<div class="col-xs-8 col-sm-9 col-md-9">
						 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
					</div>
				</div>
				<div style="width: 100%; height: 30px;"></div>
				<div class="row">
					<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
					<div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Sign In</a></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</section>
</div>

<div class="space"></div>
<div class="space"></div>
<div class="space"></div>


<script type="text/javascript">
	$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});
</script>