<?php
$size = ( ! empty( $size ) ) ? $size : 'small';
$p = ( ! empty( $p ) ) ? $p : $page;
$rating = $p->ratingAverage();
$count = $p->ratingCount();
$total = 5;
$floor = floor($rating);
$float = is_numeric( $rating ) && floor( $rating ) != $rating;

$half = ( $float && round( $rating ) != floor( $rating ) ) ? true : false;
?>

<?php if( ! empty( $count ) ) { ?>
	<div class="rating-stars rating-stars-<?php echo $size; ?>">
		<?php for( $i = 1; $i <= $floor; $i++ ) : ?>
			<div class="rating-star rating-star-checked"></div>
		<?php endfor; ?>

		<?php if( $half ) : ?>
			<div class="rating-star rating-star-half"></div>
		<?php endif; ?>

		<?php for( $i = ( $floor + $half ); $i < $total; $i++ ) : ?>
			<div class="rating-star"></div>
		<?php endfor; ?>
	</div>
<?php }else{ ?>
	<div class="rating-stars rating-stars-<?php echo $size; ?>">
		<?php for( $i = 0; $i < 5; $i++ ) : ?>
			<div class="rating-star"></div>
		<?php endfor; ?>
	</div>
<?php } ?>
