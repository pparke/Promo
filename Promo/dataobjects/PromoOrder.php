<?php

require_once 'Swat/SwatDate.php';
require_once 'Store/dataobjects/StoreOrder.php';
require_once 'Promo/dataobjects/PromoOrderItem.php';

/**
 * Promo specific order
 *
 * @package   Promo
 * @copyright 2011-2015 silverorange
 * @license   http://www.opensource.org/licenses/mit-license.html MIT License
 */
class PromoOrder extends StoreOrder
{
	// {{{ public properties

	/**
	 * Promotion code.
	 *
	 * @var string
	 */
	public $promotion_code;

	/**
	 * Promotion title.
	 *
	 * @var string
	 */
	public $promotion_title;

	/**
	 * Amount of discount from a promotion.
	 *
	 * @var float
	 */
	public $promotion_total;
}

?>
