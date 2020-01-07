<?php

namespace Modules\Ipi\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Product\Events\ProductRequestRulesEvent;
use Modules\Ipi\Listeners\ProductRequestRulesListener;

use Modules\Product\Events\ProductFillablesEvent;
use Modules\Ipi\Listeners\ProductFillablesListener;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider 
{

	public function boot() 
	{

	}

	public function register() 
	{
		Event::listen(ProductFillablesEvent::class, ProductFillablesListener::class);
		Event::listen(ProductRequestRulesEvent::class, ProductRequestRulesListener::class);
	}

}
