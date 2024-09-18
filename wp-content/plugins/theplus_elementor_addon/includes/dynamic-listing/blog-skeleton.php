<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
if ( ( ! empty( $filter_type ) && ( $filter_type == 'search_list' ) ) || ( ! empty( $paginationType ) && $paginationType == 'ajaxbased' ) || $filter_type == 'recently_viewed' || $filter_type == 'wishlist')  { 
	
	?>
	<div class="tp-skeleton">  
		<div class="tp-skeleton-img loading">
			<div class="tp-skeleton-bottom">
				<div class="tp-skeleton-title loading"></div>
				<div class="tp-skeleton-description loading"></div>
			</div>
		</div>
	</div>
<?php } ?>
