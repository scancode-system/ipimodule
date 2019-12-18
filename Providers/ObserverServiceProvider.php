<?php

namespace Modules\Ipi\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Order\Entities\Item;
use Modules\Ipi\Observers\ItemObserver;


class ObserverServiceProvider extends ServiceProvider {

	public function boot() {
		Item::observe(ItemObserver::class);
	}

	public function register() {
        //
	}

}
