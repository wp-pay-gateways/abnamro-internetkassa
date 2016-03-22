<?php

/**
 * Title: ABN AMRO - Internetkassa integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.1
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_Internetkassa_Integration extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Integration {
	public function __construct() {
		$this->id            = 'abnamro-internetkassa';
		$this->name          = 'ABN AMRO - Internetkassa';
		$this->url           = 'https://internetkassa.abnamro.nl/';
		$this->product_url   = 'https://www.abnamro.nl/nl/zakelijk/betalen/online-betalen/betaaloplossing/';
		$this->dashboard_url = 'https://internetkassa.abnamro.nl/';
		$this->provider      = 'abnamro';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_AbnAmro_Internetkassa_ConfigFactory';
	}
}
