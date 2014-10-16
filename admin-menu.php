<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>


		<h2>WooCommerce Email Test</h2>
		
		<hr/>		

		<?php 
		
		// update options if POST	
		if( $_POST['submit'] ) {
		
			update_test_email_options();
			
		}	
		
		$test_email_options = get_test_email_options();

		?>			
		
		<h3>Settings</h3>
		
		<form method="post" action=""> 
		
			<div class="form-field form-required">
				<label for="wc_email_test_email"><strong>Email Address</strong> for receiving all tests (Admin email address used if left blank)</label><br/>
				<input id="wc_email_test_email" type="text" size="40" style="width:320px;" width="320px" value="<?php echo $test_email_options['wc_email_test_email'];?>" name="wc_email_test_email"></input>
			</div>				

			<br/>
			
			<div class="form-field ">
				<label for="wc_email_test_order_id"><strong>Order ID</strong> for test email content (optional - defaults to most recent if left blank)</label>	<br/>				
				<?php echo $order_id_select = get_order_id_select_field( $test_email_options['wc_email_test_order_id'] ); ?>						
			</div>	

			<p class="submit">
				<input id="submit" class="button button-primary" type="submit" value="Save Settings" name="submit"></input>
			</p>
			
		</form>
	
		<hr/>
		
		<h3>Test Send & Preview</h3>
		<p>The below buttons will open a new tab containing a preview of the test email within your browser, and also send a test email to the email specified above
			<br/>
			Note - test emails will get sent to the email address specified above, and not customers. 
		</p>
		
		<br/>
		
		<?php show_test_email_buttons(); ?>