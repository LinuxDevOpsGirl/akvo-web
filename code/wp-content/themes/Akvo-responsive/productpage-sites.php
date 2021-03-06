<?php
	/*
		Template Name: product-akvosites v1.0
	*/
?>
<?php get_header(); ?>
<!--Start of Akvo.org RSR Product Page-->

<?php
	
	$tabs = array(
		'overview' => array(
			'title' => 'overview',
			'tagline' => 'overview_tagline',
			'elements' => array(
				'overview_cover' => 'akvo_page_section',
				'overview_intro' => 'akvo_tab_inner_section',
				'overview_buttons' => 'akvo_tab_buttons',
				'testimonials' => 'testimonials'
			)
		),
		'features' => array(
			'title' => 'features',
			'tagline' => 'features_tagline',
			'elements' => array(
				'features_cover' => 'akvo_page_section',
				'features_columns' => 'features_columns'
			)
		),
		'pricing' => array(
			'title' => 'pricing',
			'tagline' => 'pricing_tagline',
			'elements' => array(
				'pricing_cover' => 'akvo_page_section',
				'pricing_intro' => 'akvo_tab_inner_section',
				'pricing_buttons' => 'akvo_tab_buttons',
				'pricing_ending' => 'akvo_tab_inner_section'
			)
		),
		'gallery' => array(
			'title' => 'gallery',
			'tagline' => 'gallery_tagline',
			'elements' => array(
				'gallery_cover' => 'akvo_page_section',
				'section' => 'gallery'
				
			)
		)
	);
	
	
	
	
	
	
	
	function features_columns($el){
	?>
		<div id="<?php _e($el);?>" class='sub-section'>
		<div class='threeColumns wrapper'>
		<?php while(have_rows($el)): the_row();?>
			<div>
				<?php
					$boxes = get_sub_field('columns');
					foreach($boxes as $box):
				?>
				<div class='box-col'>
					<i class="fa fa-2x <?php _e($box['icon']);?>"></i>
					<p><?php _e($box['description']);?></p>
				</div>	
				<?php endforeach;?>
			<p><?php _e(get_sub_field('description'));?></p>
			</div>
		<?php endwhile;?>
		</div>
		<div class='clearfix'></div>
		</div>
	<?php }
	
	
	function gallery($el){
	?> 
	<div class="sub-section" id="<?php _e($el);?>">
		<div class="row">
    		<?php while( have_rows($el) ): the_row(); ?>
      		<div class='col-6'>
      			<a href="<?php the_sub_field('image_link'); ?>">
      				<img src="<?php the_sub_field('image'); ?>" title="akvosites"/>
      				<?php the_sub_field('description');?>
      			</a>
      		</div>
    		<?php endwhile; ?>
    	</div>
    </div>	
    <?php
    }
?>

<div id="content" class="floats-in productPage akvositesProduct">
	<?php akvo_tabs($tabs);?>
</div>  
<?php get_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/tabs.js"></script>
<script type="text/javascript">
	(function($){
		$('body').find('[data-behaviour~=akvo-tabs]').akvo_tabs();
	}(jQuery));  
</script>	