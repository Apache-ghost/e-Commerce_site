<?php
//about theme info
add_action( 'admin_menu', 'ecommerce_watch_store_gettingstarted' );
function ecommerce_watch_store_gettingstarted() {
	add_theme_page( esc_html__('About Ecommerce Watch Store ', 'ecommerce-watch-store'), esc_html__('About Ecommerce Watch Store ', 'ecommerce-watch-store'), 'edit_theme_options', 'ecommerce_watch_store_guide', 'ecommerce_watch_store_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function ecommerce_watch_store_admin_theme_style() {
	wp_enqueue_style('ecommerce-watch-store-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('ecommerce-watch-store-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'ecommerce_watch_store_admin_theme_style');

//guidline for about theme
function ecommerce_watch_store_mostrar_guide() { 
	//custom function about theme customizer
	$ecommerce_watch_store_return = add_query_arg( array()) ;
	$ecommerce_watch_store_theme = wp_get_theme( 'ecommerce-watch-store' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to Ecommerce Watch Store ', 'ecommerce-watch-store' ); ?> <span class="version"><?php esc_html_e( 'Version', 'ecommerce-watch-store' ); ?>: <?php echo esc_html($ecommerce_watch_store_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','ecommerce-watch-store'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy Ecommerce Watch Store at 20% Discount','ecommerce-watch-store'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','ecommerce-watch-store'); ?> ( <span><?php esc_html_e('vwpro20','ecommerce-watch-store'); ?></span> ) </h4>
			<div class="info-link">
				<a href="<?php echo esc_url(ECOMMERCE_WATCH_STORE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'ecommerce-watch-store' ); ?></a>
			</div>
		</div>
	</div>


    <div class="tab-sec">
    	<div class="tab">
			<button class="tablinks" onclick="ecommerce_watch_store_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'ecommerce-watch-store' ); ?></button>
			<button class="tablinks" onclick="ecommerce_watch_store_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'ecommerce-watch-store' ); ?></button>
			<button class="tablinks" onclick="ecommerce_watch_store_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'ecommerce-watch-store' ); ?></button>
			<button class="tablinks" onclick="ecommerce_watch_store_open_tab(event, 'product_addons_editor')"><?php esc_html_e( 'Woocommerce Product Addons', 'ecommerce-watch-store' ); ?></button>
			<button class="tablinks" onclick="ecommerce_watch_store_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'ecommerce-watch-store' ); ?></button>
			<button class="tablinks" onclick="ecommerce_watch_store_open_tab(event, 'free_pro')"><?php esc_html_e( 'Support', 'ecommerce-watch-store' ); ?></button>
		</div>

		<?php
			$ecommerce_watch_store_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$ecommerce_watch_store_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Ecommerce_Watch_Store_Plugin_Activation_Settings::get_instance();
				$ecommerce_watch_store_actions = $plugin_ins->recommended_actions;
				?>
				<div class="ecommerce-watch-store-recommended-plugins">
				    <div class="ecommerce-watch-store-action-list">
				        <?php if ($ecommerce_watch_store_actions): foreach ($ecommerce_watch_store_actions as $key => $ecommerce_watch_store_actionValue): ?>
				                <div class="ecommerce-watch-store-action" id="<?php echo esc_attr($ecommerce_watch_store_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($ecommerce_watch_store_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($ecommerce_watch_store_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($ecommerce_watch_store_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','ecommerce-watch-store'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($ecommerce_watch_store_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'ecommerce-watch-store' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('Ecommerce Watch Store is a sleek and user-friendly digital storefront designed for watch retailers and enthusiasts. With a modern and stylish layout, this theme creates a visually appealing online space, showcasing a wide range of watches in an easy-to-navigate format. Crafted for businesses in the watch industry, the theme offers an engaging online shopping experience for customers seeking quality timepieces. Its design is clean and sophisticated, ensuring that visitors can effortlessly browse through various watch collections, explore detailed product information, and make informed purchasing decisions. Tailored to cater to the needs of watch stores, this theme is not only aesthetically pleasing but also functional. It provides a seamless and secure platform for transactions, enabling customers to explore the latest watch models, check prices, and complete their purchases with confidence. The responsive design ensures a consistent and enjoyable experience across different devices, including desktops, tablets, and smartphones. For businesses looking to establish a distinctive online presence, the Ecommerce Watch Store WordPress Theme allows for easy customization. You can personalize elements such as logos, colors, and fonts to align with your brand identity, creating a cohesive and memorable representation. The Ecommerce Watch Store WordPress Theme is an ideal solution for watch retailers aiming to thrive in the digital space. Its user-friendly design, functional features, and customization options make it a valuable tool for creating an attractive and efficient online watch store, catering to both the needs of the business and the preferences of watch enthusiasts.','ecommerce-watch-store'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'ecommerce-watch-store' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'ecommerce-watch-store' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( ECOMMERCE_WATCH_STORE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'ecommerce-watch-store' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'ecommerce-watch-store'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'ecommerce-watch-store'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'ecommerce-watch-store'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'ecommerce-watch-store'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'ecommerce-watch-store'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( ECOMMERCE_WATCH_STORE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'ecommerce-watch-store'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'ecommerce-watch-store'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'ecommerce-watch-store'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( ECOMMERCE_WATCH_STORE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'ecommerce-watch-store'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'ecommerce-watch-store' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','ecommerce-watch-store'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=ecommerce_watch_store_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','ecommerce-watch-store'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=ecommerce_watch_store_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Banner Settings','ecommerce-watch-store'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=ecommerce_watch_store_product_setting') ); ?>" target="_blank"><?php esc_html_e('Product Section','ecommerce-watch-store'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','ecommerce-watch-store'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','ecommerce-watch-store'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=ecommerce_watch_store_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','ecommerce-watch-store'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=ecommerce_watch_store_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','ecommerce-watch-store'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','ecommerce-watch-store'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','ecommerce-watch-store'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','ecommerce-watch-store'); ?></span><?php esc_html_e(' Go to ','ecommerce-watch-store'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','ecommerce-watch-store'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','ecommerce-watch-store'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','ecommerce-watch-store'); ?></span><?php esc_html_e(' Go to ','ecommerce-watch-store'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','ecommerce-watch-store'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','ecommerce-watch-store'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','ecommerce-watch-store'); ?> <a class="doc-links" href="<?php echo esc_url( ECOMMERCE_WATCH_STORE_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','ecommerce-watch-store'); ?></a></p>
			  	</div>
			</div>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$plugin_ins = ecommerce_watch_store_Plugin_Activation_Settings::get_instance();
				$ecommerce_watch_store_actions = $plugin_ins->recommended_actions;
				?>
				<div class="ecommerce-watch-store-recommended-plugins">
				    <div class="ecommerce-watch-store-action-list">
				        <?php if ($ecommerce_watch_store_actions): foreach ($ecommerce_watch_store_actions as $key => $ecommerce_watch_store_actionValue): ?>
				                <div class="ecommerce-watch-store-action" id="<?php echo esc_attr($ecommerce_watch_store_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($ecommerce_watch_store_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($ecommerce_watch_store_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($ecommerce_watch_store_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','ecommerce-watch-store'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($ecommerce_watch_store_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'ecommerce-watch-store' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','ecommerce-watch-store'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon ','ecommerce-watch-store'); ?></b></p>
	              	<div class="ecommerce-watch-store-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','ecommerce-watch-store'); ?></a>
				    </div>
				    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern1.png" alt="" />
				    <p><b><?php esc_html_e('Click on Patterns Tab >> Click on Theme Name >> Click on Section >> Publish.','ecommerce-watch-store'); ?></b></p>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern.png" alt="" />
	            </div>

	            <div class="block-pattern-link-customizer">
					<h3><?php esc_html_e( 'Link to customizer', 'ecommerce-watch-store' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','ecommerce-watch-store'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=ecommerce_watch_store_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','ecommerce-watch-store'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','ecommerce-watch-store'); ?></a>
							</div>

							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=ecommerce_watch_store_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','ecommerce-watch-store'); ?></a>
							</div>
						</div>

						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=ecommerce_watch_store_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','ecommerce-watch-store'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','ecommerce-watch-store'); ?></a>
							</div>
						</div>
					</div>
				</div>
	     	</div>
		</div>
		
		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = Ecommerce_Watch_Store_Plugin_Activation_Settings::get_instance();
			$ecommerce_watch_store_actions = $plugin_ins->recommended_actions;
			?>
				<div class="ecommerce-watch-store-recommended-plugins">
				    <div class="ecommerce-watch-store-action-list">
				        <?php if ($ecommerce_watch_store_actions): foreach ($ecommerce_watch_store_actions as $key => $ecommerce_watch_store_actionValue): ?>
				                <div class="ecommerce-watch-store-action" id="<?php echo esc_attr($ecommerce_watch_store_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($ecommerce_watch_store_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($ecommerce_watch_store_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($ecommerce_watch_store_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'ecommerce-watch-store' ); ?></h3>
				<hr class="h3hr">
				<div class="ecommerce-watch-store-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','ecommerce-watch-store'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
	              	<div class="link-customizer-with-block-pattern">
						<h3><?php esc_html_e( 'Link to customizer', 'ecommerce-watch-store' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','ecommerce-watch-store'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=ecommerce_watch_store_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','ecommerce-watch-store'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','ecommerce-watch-store'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=ecommerce_watch_store_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','ecommerce-watch-store'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=ecommerce_watch_store_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','ecommerce-watch-store'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','ecommerce-watch-store'); ?></a>
								</div> 
							</div>
						</div>
					</div>	
				</div>
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent">
				<?php if(!class_exists('IEPA_Loader')){
				$plugin_ins = Ecommerce_Watch_Store_Plugin_Activation_Woo_Products::get_instance();
				$ecommerce_watch_store_actions = $plugin_ins->recommended_actions;
				?>
				<div class="ecommerce-watch-store-recommended-plugins">
				    <div class="ecommerce-watch-store-action-list">
				        <?php if ($ecommerce_watch_store_actions): foreach ($ecommerce_watch_store_actions as $key => $ecommerce_watch_store_actionValue): ?>
				                <div class="ecommerce-watch-store-action" id="<?php echo esc_attr($ecommerce_watch_store_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($ecommerce_watch_store_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($ecommerce_watch_store_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($ecommerce_watch_store_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'ecommerce-watch-store' ); ?></h3>
				<hr class="h3hr">
				<div class="ecommerce-watch-store-pattern-page">
					<p><?php esc_html_e('Follow the below instructions to setup Products Templates.','ecommerce-watch-store'); ?></p>
					<p><b><?php esc_html_e('1. First you need to activate these plugins','ecommerce-watch-store'); ?></b></p>
						<p><?php esc_html_e('1. Ibtana - WordPress Website Builder ','ecommerce-watch-store'); ?></p>
						<p><?php esc_html_e('2. Ibtana - Ecommerce Product Addons.','ecommerce-watch-store'); ?></p>
						<p><?php esc_html_e('3. Woocommerce','ecommerce-watch-store'); ?></p>

					<p><b><?php esc_html_e('2. Go To Dashboard >> Ibtana Settings >> Woocommerce Templates','ecommerce-watch-store'); ?></b></p>
	              	<div class="ecommerce-watch-store-pattern-page">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-woocommerce-templates&ive_wizard_view=parent' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','ecommerce-watch-store'); ?></a>
			    	</div>
	              	<p><?php esc_html_e('You can create a template as you like.','ecommerce-watch-store'); ?></p>
			    </div>
			<?php } ?>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'ecommerce-watch-store' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Ecommerce Watch Store is a sleek and user-friendly digital storefront designed for watch retailers and enthusiasts. With a modern and stylish layout, this theme creates a visually appealing online space, showcasing a wide range of watches in an easy-to-navigate format. Crafted for businesses in the watch industry, the theme offers an engaging online shopping experience for customers seeking quality timepieces. Its design is clean and sophisticated, ensuring that visitors can effortlessly browse through various watch collections, explore detailed product information, and make informed purchasing decisions. Tailored to cater to the needs of watch stores, this theme is not only aesthetically pleasing but also functional. It provides a seamless and secure platform for transactions, enabling customers to explore the latest watch models, check prices, and complete their purchases with confidence. The responsive design ensures a consistent and enjoyable experience across different devices, including desktops, tablets, and smartphones. For businesses looking to establish a distinctive online presence, the Ecommerce Watch Store WordPress Theme allows for easy customization. You can personalize elements such as logos, colors, and fonts to align with your brand identity, creating a cohesive and memorable representation. The Ecommerce Watch Store WordPress Theme is an ideal solution for watch retailers aiming to thrive in the digital space. Its user-friendly design, functional features, and customization options make it a valuable tool for creating an attractive and efficient online watch store, catering to both the needs of the business and the preferences of watch enthusiasts.','ecommerce-watch-store'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( ECOMMERCE_WATCH_STORE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'ecommerce-watch-store'); ?></a>
					<a href="<?php echo esc_url( ECOMMERCE_WATCH_STORE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'ecommerce-watch-store'); ?></a>
					<a href="<?php echo esc_url( ECOMMERCE_WATCH_STORE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'ecommerce-watch-store'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'ecommerce-watch-store' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'ecommerce-watch-store'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'ecommerce-watch-store'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'ecommerce-watch-store'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'ecommerce-watch-store'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'ecommerce-watch-store'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><?php esc_html_e('10', 'ecommerce-watch-store'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'ecommerce-watch-store'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'ecommerce-watch-store'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'ecommerce-watch-store'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'ecommerce-watch-store'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'ecommerce-watch-store'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'ecommerce-watch-store'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'ecommerce-watch-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( ECOMMERCE_WATCH_STORE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'ecommerce-watch-store'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'ecommerce-watch-store'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'ecommerce-watch-store'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( ECOMMERCE_WATCH_STORE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'ecommerce-watch-store'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'ecommerce-watch-store'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'ecommerce-watch-store'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( ECOMMERCE_WATCH_STORE_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'ecommerce-watch-store'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'ecommerce-watch-store'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'ecommerce-watch-store'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( ECOMMERCE_WATCH_STORE_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'ecommerce-watch-store'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'ecommerce-watch-store'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'ecommerce-watch-store'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( ECOMMERCE_WATCH_STORE_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','ecommerce-watch-store'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'ecommerce-watch-store'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'ecommerce-watch-store'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( ECOMMERCE_WATCH_STORE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'ecommerce-watch-store'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>

<?php } ?>