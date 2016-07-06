<?php 
$menus = array(
	array('TITLE'=>'Home','PAGE-SLUG'=>'transporter-home'),

	array('TITLE'=>'Post a Truck','PAGE-SLUG'=>'transporter-post'),

	array('TITLE'=>'Find Load','PAGE-SLUG'=>'transporter-find'),

	array('TITLE'=>'Distance Calculator','PAGE-SLUG'=>'transporter-distance'),

	array('TITLE'=>'Truck Requests','PAGE-SLUG'=>'transporter-requests'),
	
	array('TITLE'=>'Add Ons','PAGE-SLUG'=>'transporter-add')
	);
?>

<!-- Do not edit any line below this! -->
<div class="col-md-12">	

	<?php foreach($menus as $menu): ?>

		<a href="<?php echo get_permalink ( get_page_by_path( $menu['PAGE-SLUG'] ) ) ;?>">

		<div class="col-md-2 hortab<?php if (is_page( $menu['PAGE-SLUG'] )) echo '-active'; ?>">
		
		<?php echo $menu['TITLE']; ?>

		</div>
		</a>


	<?php endforeach; ?>

</div>