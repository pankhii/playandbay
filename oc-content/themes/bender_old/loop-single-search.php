<?php $size = explode('x', osc_thumbnail_dimensions()); ?>
<article class="list_result">
            	<figure>
                		    <?php if( osc_images_enabled_at_items() ) { ?>
        <?php if(osc_count_item_resources()) { ?>
           <img src="<?php echo osc_resource_thumbnail_url(); ?>" title="" alt="<?php echo osc_item_title() ; ?>" width="108" height="97">
        <?php } else { ?>
           <img src="<?php echo osc_current_web_theme_url('images/no_photo.gif'); ?>" title="" alt="<?php echo osc_item_title() ; ?>" width="108" height="97">
        <?php } ?>
    <?php } ?>
                      <?php bender_draw_dropdown(); ?>
                        
                </figure>
                <div class="list_textbox">
                		<h1><?php echo osc_item_title() ; ?>(<?php echo osc_item_category() ; ?>)</h1>
                        <h3><?php echo osc_item_city(); //osc_item()['s_city'];?> - (<?php echo osc_item_region(); ?>) - <?php echo osc_format_date(osc_item_pub_date()); ?>.</h3>
                        <p><?php echo osc_highlight( strip_tags( osc_item_description()) ,250) ; ?></p>
                </div>
                <div class="clear"></div>
        
					<div class="clear"></div>
					<?php if($admin){ ?>
                    <span class="admin-options">
                        <a href="<?php echo osc_item_edit_url(); ?>" rel="nofollow"><?php _e('Edit item', 'bender'); ?></a>
                        <span>|</span>
                        <a class="delete" onclick="javascript:return confirm('<?php echo osc_esc_js(__('This action can not be undone. Are you sure you want to continue?', 'bender')); ?>')" href="<?php echo osc_item_delete_url();?>" ><?php _e('Delete', 'bender'); ?></a>
                        <?php if(osc_item_is_inactive()) {?>
                        <span>|</span>
                        <a href="<?php echo osc_item_activate_url();?>" ><?php _e('Activate', 'bender'); ?></a>
                        <?php } ?>
                    </span>
                <?php } ?>

    </article>