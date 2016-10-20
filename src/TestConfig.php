<?php

/**
 * Title: ABN AMRO - Internetkassa - Test config
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.2
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_Internetkassa_TestConfig extends Pronamic_WP_Pay_Gateways_AbnAmro_Internetkassa_Config {
	/**
	 * Get the default Ogone e-Commerce form action URL.
	 *
	 * @since unreleased
	 * @return string
	 */
	protected function get_default_form_action_url() {
		$is_utf8 = strcasecmp( get_bloginfo( 'charset' ), 'UTF-8' ) === 0;

		if ( $is_utf8 ) {
			return 'https://internetkassa.abnamro.nl/ncol/test/orderstandard_utf8.asp';
		}

		return 'https://internetkassa.abnamro.nl/ncol/test/orderstandard.asp';
	}

	public function get_payment_server_url() {
		return 'https://internetkassa.abnamro.nl/ncol/test/orderstandard.asp';
	}
}
