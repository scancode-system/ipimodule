<?php

namespace Modules\Ipi\Observers;


use Modules\Order\Entities\Item;
use Modules\Order\Repositories\ItemTaxRepository;


class ItemObserver
{

	public function created(Item $item)
	{
		ItemTaxRepository::store(['item_id' => $item->id, 'name' => 'ipi', 'porcentage' => $item->product->ipi, 'module' => 'Ipi']);
	}

}
