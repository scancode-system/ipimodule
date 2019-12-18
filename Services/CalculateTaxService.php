<?php

namespace Modules\Ipi\Services;

use Modules\Order\Entities\ItemTax;


class CalculateTaxService 
{

	public static function value(ItemTax $item_tax)
	{
		$item = $item_tax->item;
		$final_price = $item->price-$item->discount_value+$item->addition_value;

		// depois é preciso calcular os outros impostos mas ainda conversar ocm o leonardo sobre

		return $final_price*($item_tax->porcentage/100);
	}

}
