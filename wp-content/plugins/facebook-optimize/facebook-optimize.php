<?php
/*
Plugin Name: Facebook Optimize
Plugin URI: http://feelsen.com/facebook-optimize-wordpress-plugin
Description: A plugin to optimize the pages of your site to sharing on Facebook.
Version: 1.2.1
Author: Sérgio Vilar
Author URI: http://about.me/vilar
License: GPL
*/

function fb_optimization($admins,$type,$default_image){

	global $post;
		
		// Tags comuns
		echo '<meta property="fb:admins" content="'.$admins.'" />';
		echo '<meta property="og:site_name" content="'.get_bloginfo('name').'" />';
		echo '<meta property="og:type" content="'.$type.'" />';
		
		// Caso seja um post ou página
		if(is_single() || is_page()):
			while(have_posts()): the_post(); 

				if(function_exists('has_post_thumbnail')):
				
					// Se houver post thumbnail
					if(has_post_thumbnail()):
						$imageArray = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), get_option('fbop_image_size') );
						$image = $imageArray[0];
				
					// Se não, verifica se há imagem anexada ao post
					else:
					 	$arrImages =& get_children('post_type=attachment&post_mime_type=image&post_parent=' . $post->ID );
						 if($arrImages):
        					$arrKeys = array_keys($arrImages);
        					$iNum = $arrKeys[0];
 							$url = wp_get_attachment_link( $iNum, get_option('fbop_image_size'), false );
 							$array = explode('src="',$url);
 							$array2 = explode('"',$array[1]);

 							$image = $array2[0];
    					endif;
					endif;
				
				else:
					 $arrImages =& get_children('post_type=attachment&post_mime_type=image&post_parent=' . $post->ID );
					 if($arrImages):
        				$arrKeys = array_keys($arrImages);
        				$iNum = $arrKeys[0];
 						$url = wp_get_attachment_link( $iNum, get_option('fbop_image_size'), false );
 						$array = explode('src="',$url);
 						$array2 = explode('"',$array[1]);

 						$image = $array2[0];
 					endif;
    			endif;

				// Se não, coloca a imagem padrão
				if(empty($image) || $image==" "):
					$image = $default_image;
				endif;

				// Tags específicas com o conteúdo do post ou página
				echo '<meta property="og:title" content="'.get_the_title().'" />';
				echo '<meta property="og:url" content="'.get_permalink().'" />';
				echo '<meta property="og:image" content="'.$image.'" />';
				echo '<meta property="og:description" content="'.strip_tags(get_the_excerpt()).'"/>';
			endwhile; 
		
		else:
			
			// Tags com informações do site
			echo '<meta property="og:title" content="'.get_bloginfo('name').'" />';
			echo '<meta property="og:url" content="'.get_bloginfo('url').'" />';
			echo '<meta property="og:image" content="'.$default_image.'" />';
			echo '<meta property="og:description" content="'.get_bloginfo('description').'"/>';

		endif;
}

// Insere a função no wp_head
function fbop_header() {

    fb_optimization(get_option('fbop_admins'), get_option('fbop_type'), get_option('fbop_default_image'));

}

function fbop_menu() {
	add_options_page('Facebook Optimize Configuration', 'Facebook Optimize', 'manage_options', 'facebook-optimize', 'fbop_options');
}

function fbop_options() {

    // Variáveis de opções
    $opt_name = array(
	    'admins' =>'fbop_admins',
		'type' => 'fbop_type',
		'default_image' => 'fbop_default_image',
		'image_size' => 'fbop_image_size'
	);

    $hidden_field_name = 'fbop_submit';

    // Lendo as variáveis de opção
	$opt_val = array(
		'admins' => get_option( $opt_name['admins'] ),
  		'type' => get_option( $opt_name['type'] ),
  		'default_image' => get_option( $opt_name['default_image'] ),
		'image_size' => get_option( $opt_name['image_size'] )
  	);

	// Se o usuário tiver submetido alguma informação
	if(isset($_POST[ $hidden_field_name ]) && $_POST[ $hidden_field_name ] == 'Y' ) {
    	
    	// Lemos a informação postada
    	$opt_val = array(
	    	'admins' => $_POST[ $opt_name['admins'] ],
    		'type' => $_POST[ $opt_name['type'] ],
      		'default_image' => $_POST[ $opt_name['default_image'] ],
			'image_size' => $_POST[ $opt_name['image_size'] ]
    	);

    	// Atualizamos as informações
        update_option( $opt_name['admins'], $opt_val['admins'] );
		update_option( $opt_name['type'], $opt_val['type'] );
		update_option( $opt_name['default_image'], $opt_val['default_image'] );
		update_option( $opt_name['image_size'], $opt_val['image_size'] );

?>
<div id="message" class="updated fade">
  <p><strong>
    <?php _e('Options saved.', 'att_trans_domain' ); ?>
    </strong></p>
</div>
<?php } ?>

<div class="wrap">
	<div id="icon-options-general" class="icon32"></div>
	<h2><?php _e( 'Facebook Optimize Options', 'att_trans_domain' ); ?></h2>
	<form name="att_img_options" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">  		
   		<ul>
			<li>
				<label for="<?php echo $opt_name['admins']?>">Admin Code<span> *</span>: </label>
   				<input type="text" name="<?php echo $opt_name['admins']?>" value="<?php echo $opt_val['admins']; ?>" />
   			</li>
   			<li>
				<label for="<?php echo $opt_name['type']?>">Website Type<span> *</span>: </label>
   				<input type="text" name="<?php echo $opt_name['type']?>" value="<?php echo $opt_val['type']; ?>" />
   			</li>
   			<li>
				<label for="<?php echo $opt_name['default_image']?>">Default Image<span> *</span>: </label>
   				<input type="text" name="<?php echo $opt_name['default_image']?>" value="<?php echo $opt_val['default_image']; ?>" />
   			</li>
   			<?php if(function_exists('has_post_thumbnail')): ?>
            <li>
            	<?php $image_sizes = get_intermediate_image_sizes(); ?>
                <label for="<?php echo $opt_name['image_size']?>">Image Size<span> *</span>: </label>
                <select name="<?php echo $opt_name['image_size']?>">
                  <?php foreach ($image_sizes as $size_name): if( $size_name != 'large' ): ?>
                    <option value="<?php echo $size_name ?>" <?php selected( $opt_val['image_size'], $size_name )?>><?php echo $size_name ?></option>
                  <?php endif; endforeach; ?>
                </select>
   			</li>
   		<?php endif; ?>
   		</ul>
   		<input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">
   		<input class='button-primary' type='submit' name='Save' value='<?php _e('Save Options'); ?>' id='submitbutton' />
	</form>

	<br /><br />

	<h3>Important Notes</h3>
	<ol>
		<li>You can find your admin code <a target="_blank" href="http://www.facebook.com/insights/">here</a>, clicking in the green button.</li>
		<li>A complete list of types cand be founded <a target="_blank" href="http://developers.facebook.com/docs/opengraphprotocol/#types">here</a></li>
		<li>In the default image, insert the complete url of the image. Ex: http://yoursite.com/image.jpg</li>
	</ol><br />
	<h3>Liked the plugin? Please donate!</h3>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post"><input type="hidden" name="cmd" value="_s-xclick" /> <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7----- " /> <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" alt="PayPal - The safer, easier way to pay online!" /> <img src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" alt="" width="1" height="1" border="0" /></form>
</div>

<?php
}

// Actions
add_action('wp_head', 'fbop_header');
add_action('admin_menu', 'fbop_menu');

?>