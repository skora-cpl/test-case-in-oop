<?php

namespace CplPlugin\TestCase;

final class MySpecialClass {


	protected function get_aspen_url(): string {
		return defined( 'ASPEN_API_CATALOG_URL' ) ? constant( 'ASPEN_API_CATALOG_URL' ) : '';
	}

	protected function get_aspen_special_token(): string {
		return defined( 'ASPEN_API_AUTHORIZATION_TOKEN' ) ? constant( 'ASPEN_API_AUTHORIZATION_TOKEN' ) : '';
	}

	// public function fetch_prep() {

	// }

	// returns an array, teh_request
	public function fetch_list() {
		echo 'successfully fetched list';

		$the_stored_time = date( 'l jS \of F Y h:i:s A' );

		// set_transient( 'transient-stored-time', $the_stored_time, 140 );
	}
}
