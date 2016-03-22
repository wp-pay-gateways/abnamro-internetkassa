<?php

/**
 * Title: ABN AMRO - Internetkassa config factory
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_Internetkassa_ConfigFactory extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_ConfigFactory {
	public function __construct() {
		parent::__construct( 'Pronamic_WP_Pay_Gateways_AbnAmro_Internetkassa_Config', 'Pronamic_WP_Pay_Gateways_AbnAmro_Internetkassa_TestConfig' );
	}
}
