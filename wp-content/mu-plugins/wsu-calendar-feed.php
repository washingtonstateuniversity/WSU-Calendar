<?php

add_action( 'rss2_item', 'wsu_calendar_rss_item' );
/**
 * Add calendar specific items to the events feed.
 */
function wsu_calendar_rss_item() {
	global $post;

	if ( 'tribe_events' !== $post->post_type ) {
		return;
	}

	$start_date = get_post_meta( $post->ID, '_EventStartDate', true );
	$end_date   = get_post_meta( $post->ID, '_EventEndDate',   true );

	if ( $start_date ) {
		echo '<startDate>' . esc_html( $start_date ) . '</startDate>';
	}

	if ( $end_date ) {
		echo '<endDate>' . esc_html( $end_date ) . '</endDate>';
	}

}