<div class="whatsapp_chat_support wcs_fixed_<?=$position; ?>" id="WhatsappWidget">
		<div class="wcs_button wcs_button_circle">
			<span class="fa fa-whatsapp"></span>
		</div>	
		<div class="wcs_button_label">
 			<?=$label; ?>
 		</div>	

		<div class="wcs_popup">
			<div class="wcs_popup_close">
				<span class="fa fa-close"></span>
			</div>
			<div class="wcs_popup_header">
				<span class="fa fa-whatsapp"></span>
				<strong><?=$header; ?></strong>
				
				<div class="wcs_popup_header_description"><?=$cta; ?></div>
			</div>	
			<div class="wcs_popup_input" data-number="<?=$phone; ?>">
				<input type="text" placeholder="<?=$message; ?>" />
				<i class="fa fa-play"></i>
			</div>
			<div class="wcs_popup_avatar">
				<img src="<?=$agent_image; ?>" />" alt="">
			</div>
		</div>
	</div>	