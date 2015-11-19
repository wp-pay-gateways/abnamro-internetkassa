<?php

class Pronamic_WP_Pay_Gateways_AbnAmro_Internetkassa_Integration extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Integration {
	public function __construct() {
		$this->id       = 'abnamro-internetkassa';
		$this->name     = 'ABN AMRO - Internetkassa';
		$this->url      = 'https://internetkassa.abnamro.nl/';
		$this->provider = 'abnamro';
	}
}
