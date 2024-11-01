<?php
function tcode_add_submenu_page() {
	 	add_submenu_page(
	 		'edit.php?post_type=tc-bcarousel',
	 		'Slider Settings',
	 		'Slider Settings',
	 		'manage_options',
	 		'slider_setting',
	 		'tcode_slider_options_function'
	 	);
	 }
	 add_action( 'admin_menu', 'tcode_add_submenu_page' );

		function tcode_slider_register_settings() {
			//register our settings
			register_setting( 'tcode_slider_settings_group', 'number_slides' );
			register_setting( 'tcode_slider_settings_group', 'header_color' );
			register_setting( 'tcode_slider_settings_group', 'text_color' );
			register_setting( 'tcode_slider_settings_group', 'display_header' );
			register_setting( 'tcode_slider_settings_group', 'display_text' );
		}

		add_action('admin_init','tcode_slider_register_settings');



		function tcode_slider_options_function() { ?>
		  <div class="wrap">
			<h2>ThemesCode Bootstrap Slider Settings.</h2>
	      <form method="post" action="options.php">
		      <?php settings_fields( 'tcode_slider_settings_group' ); ?>
		      <?php do_settings_sections( 'tcode_slider_settings_group' ); ?>
		      <table class="form-table">
		          <tr valign="top">
		          <th scope="row">Number of slides:</th>
		          <td><input type="text" name="number_slides" class="form-control" value="<?php echo esc_attr( get_option('number_slides') ); ?>" /></td>
		          </tr>

							<tr valign="top">
							<th scope="row">Header Color:</th>
							<td><input type="color" name="header_color" class="" value="<?php echo esc_attr( get_option('header_color') ); ?>" /></td>
							</tr>

							<tr valign="top">
							<th scope="row">Text Color:</th>
							<td><input type="color" name="text_color" class="" value="<?php echo esc_attr( get_option('text_color') ); ?>" /></td>
							</tr>

							<tr valign="top">
							<th scope="row">Display Header:</th>
							<td>
								<select name="display_header" class="form-control">
								  <option <?php if( get_option('display_header') == 'Yes'){?> selected="selected"<?php }?> value="Yes">Yes</option>
								  <option <?php if( get_option('display_header') == 'No'){?> selected="selected"<?php }?> value="No">No</option>
								</select>
							</td>
							</tr>
							<tr valign="top">
							<th scope="row">Display Text:</th>
							<td>
								<select name="display_text" class="form-control">
									<option <?php if( get_option('display_text') == 'Yes'){?> selected="selected"<?php }?> value="Yes">Yes</option>
									<option <?php if( get_option('display_text') == 'No'){?> selected="selected"<?php }?> value="No">No</option>
								</select>
							</td>
							</tr>

		      </table>

		      <?php submit_button(); ?>

		  </form>

		</div>
		<?php } ?>
