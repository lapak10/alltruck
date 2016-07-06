<?php 
$menus = array(

	array('TITLE'=>'Home','PAGE-SLUG'=>'customer-home'),
	array('TITLE'=>'Post Load','PAGE-SLUG'=>'customer-post'),
	array('TITLE'=>'Find Truck','PAGE-SLUG'=>'customer-find'),
	array('TITLE'=>'Distance Calculator','PAGE-SLUG'=>'customer-distance'),
	array('TITLE'=>'Quotations','PAGE-SLUG'=>'customer-quotes'),
	array('TITLE'=>'Add Ons','PAGE-SLUG'=>'customer-add')

	);
?>

<!-- Do not edit any line below this! -->
<div class="col-md-12">	

	<?php foreach($menus as $menu){ ?>

		<a href="<?php echo get_permalink ( get_page_by_path( $menu['PAGE-SLUG'] ) ) ;?>">

		<div class="col-md-2 hortab<?php if (is_page( $menu['PAGE-SLUG'] )) echo '-active'; ?>">
		
		<?php echo $menu['TITLE']; ?>

		</div>
		</a>


	<?php }; ?>

</div>