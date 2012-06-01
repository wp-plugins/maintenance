	<?php global $mt_option; $lib_options = ''; $lib_options = $mt_option['lib_options']; ?>
		<label for="page_title">Page title</label>
			<input type="text" id="page_title" name="lib_options[page_title]" value="<?php echo ( isset( $lib_options['page_title'] ) ) ? $lib_options['page_title'] : 'Website is under construction'; ?>" />
		<label for="heading">Headline</label>
			<input type="text" id="heading" name="lib_options[heading]" value="<?php echo ( isset( $lib_options['heading'] ) ) ? $lib_options['heading'] : 'Customer login'; ?>" />
		<label for="time_text">Description</label>
			<input type="text" id="time_text" name="lib_options[time_text]" value="<?php echo ( isset( $lib_options['time_text'] ) ) ? $lib_options['time_text'] : 'Please login to see website'; ?>" />
		<label for="theme_logo">Logo</label>
			<input type="file" id="theme_logo" name="lib_options[logo]" />
			<?php if ( $lib_options['logo'] ): ?><input class="button remove" type="submit" name="remove_logo" value="x" /><?php endif; ?>
		<label for="body_bg">Background image</label>
			<input type="file" id="body_bg" name="lib_options[body_bg]" />
			<?php if ( $lib_options['body_bg'] ): ?><input class="button remove" type="submit" name="remove_bg" value="x" /><?php endif; ?>
		<label for="body_bg_color">Background color</label>
			<input type="text" id="body_bg_color" name="lib_options[body_bg_color]" value="<?php echo ( isset( $lib_options['body_bg_color'] ) ) ? stripslashes($lib_options['body_bg_color']) : '#fff'; ?>" />
