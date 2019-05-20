<div class="box_links">
    <?php if(doo_here_links($post->ID)){ ?>
    <div class="linktabs">
    	<h2><?php _d('Links'); ?></h2>
    	<ul class="idTabs">
    		<?php // Menu Link types
            if(doo_here_type_links($post->ID, __d('Download'))) echo '<li><a href="#download">'. __d('Download'). '</a></li>';
    		if(doo_here_type_links($post->ID, __d('Torrent'))) echo '<li><a href="#torrent">'. __d('Torrent'). '</a></li>';
    	    if(doo_here_type_links($post->ID, __d('Watch online'))) echo '<li><a href="#videos">'. __d('Watch online'). '</a></li>';
            if(doo_here_type_links($post->ID, __d('Rent or Buy'))) echo '<li><a href="#buy">'. __d('Rent or Buy'). '</a></li>';
            // End Menu ?>
    	</ul>
    </div>
    <?php // Table lists

        DooLinks::tablelist_front($post->ID, __d('Download'), 'download');
        DooLinks::tablelist_front($post->ID, __d('Torrent'), 'torrent');
        DooLinks::tablelist_front($post->ID, __d('Watch online'), 'videos');
        DooLinks::tablelist_front($post->ID, __d('Rent or Buy'), 'buy');

    }

    // Form Post Links
    if(is_user_logged_in() && DooLinks::front_publisher_role() === true) { ?>
    <div id="form" class="sbox">
        <div id="resultado_link_form"></div>
        <div class="form_post_lik">
        	<form id="doopostlinks" enctype="application/json">
        		<div class="table">
        			<table data-repeater-list="data" class="post_table">
        				<thead>
        					<tr>
        						<th><?php _d('Type'); ?></th>
        						<th><?php _d('URL'); ?></th>
        						<th><?php _d('Quality'); ?></th>
        						<th><?php _d('Language'); ?></th>
        						<th><?php _d('File size'); ?></th>
        						<th></th>
        					</tr>
        				</thead>
        				<tbody class="tbody">
        					<tr data-repeater-item class="row first_tr">
        						<td>
        							<select name="type">
        								<?php foreach( DooLinks::types() as $type) { echo "<option>{$type}</option>"; } ?>
        							</select>
        						</td>
        						<td>
        							<input name="url" type="text" class="url" placeholder="http://">
        						</td>
        						<td>
        							<select name="quality">
        							    <?php foreach( DooLinks::resolutions() as $resolution) { echo "<option>{$resolution}</option>"; } ?>
        							</select>
        						</td>
        						<td>
        							<select name="lang">
        							    <?php foreach( DooLinks::langs() as $lang) { echo "<option>{$lang}</option>"; } ?>
        							</select>
        						</td>
        						<td>
        							<input name="size" type="text" class="size">
        						</td>
        						<td>
        							<a data-repeater-delete class="remove_row">X</a>
        						</td>
        					</tr>

        				</tbody>
        			</table>
        		</div>
        		<div class="control">
        			<div class="left"><a data-repeater-create id="add_row" class="add_row">+ <?php _d('Add row'); ?></a></div>
        			<div class="right"><input type="submit" value="<?php _d('Send link(s)'); ?>"></div>
        		</div>
        		<input type="hidden" name="post_id" value="<?php the_id(); ?>">
                <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('doolinks'); ?>">
                <input type="hidden" name="action" value="doopostlinks">
        	</form>
        </div>
    </div>
    <?php } ?>
</div>
