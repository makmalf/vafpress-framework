<tr class="vp-upload<?php echo ($container_extra_classes) ? ' ' . $container_extra_classes : '' ?>" <?php echo VP_Util_Text::print_if_exists($validation, 'data-vp-validation="%s"'); ?> id="<?php echo $name; ?>">
	<td class="label">
		<label>
			<?php echo $label; ?>
			<?php VP_Util_Text::print_if_exists($description, '<div class="description">%s</div>'); ?>
		</label>
	</td>
	<td class="fields">
		<div class="vp-control">
			<input type="text" readonly id="<?php echo $name; ?>" name="<?php echo $name; ?>" value="<?php echo $value; ?>">
			<input class="vp-js-upload vp-button" type="button" value="<?php _e('Choose File', 'vp_textdomain'); ?>" >
			<div class="image">
				<img src="<?php echo $value; ?>" alt="" style="max-width: 300px; max-height: 300px; " />
			</div>
		</div>
		<div class="validation-msgs"><ul></ul></div>
	</td>
</tr>