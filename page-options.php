<?php

	function mt_manage_options()
	{
		global $mt_option;
		
		$mt_option = mt_get_option();
		
		if ( $_POST ) {
				  $state = $_POST['state']; 
  			  if (!$state)   { $mt_option['state'] = 'live';  } 
						else { $mt_option['state'] = 'maintenance'; }
			
			$mt_option['lib_options'] = $_POST['lib_options'];
			
			/* trigger theme activation */
			if ( file_exists( dirname( __FILE__ ).'/'.LIB_DIR.'/functions.php' ) ) {
			 include_once dirname( __FILE__ ).'/'.LIB_DIR.'/functions.php';
   		     $mt_option = apply_filters( 'lib_update', $mt_option );
			}
			
			/* counter */
			$mt_option['expiry_date'] = $_POST['lib_options']['expiry_date'] ? $_POST['lib_options']['expiry_date'] : '';
			if ( !$mt_option['expiry_date'] ) {
	   unset( $mt_option['expiry_date'] );
														}
			mt_update_option($mt_option);
		}
		
		mt_get_lib_var();
		?>
		
		<div id="options" class="wrap">	
			<form method="post" action="" enctype="multipart/form-data" name="options-form">

				<div class="title">
						 <img src="<?php echo PLUGIN_URL ?>images/icon.png" alt="Logo" class="logo" />
						<h2>Maintenance -</h2>						
						<input name="state" type="checkbox" id="ch_location" name="ch_location"  <?php if ( $mt_option['state'] == 'maintenance' )  echo 'checked="true"' ?> />
				</div>						
					<div id="general">
							<div class="theme-options">
								<?php  include_once dirname( __FILE__ ).'/'.LIB_DIR.'/options.php';  ?>
								 <input type="submit" id="mt-submit" name="save_changes" class="button-primary" value="Save changes" />
						    </div>  
					</div>					 
			</form>
		</div>
		
		<?php
	
	}

?>