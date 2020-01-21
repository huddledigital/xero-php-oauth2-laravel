<?php namespace Huddle\Xero\Providers;

use Illuminate\Support\ServiceProvider;
use Huddle\Xero\Services\XeroService;

class XeroServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider and merge config.
	 *
	 * @return void
	 */
	public function register() {
	    $packageName = 'xero-laravel';
	    $configPath = __DIR__.'/../../config/xero-laravel.php';

        $this->mergeConfigFrom(
            $configPath, $packageName
        );

        $this->publishes([
            $configPath => config_path(sprintf('%s.php', $packageName)),
        ]);
	}

	/**
	 * Bind service to 'zendesk' for use with Facade
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->app->bind('xero', XeroService::class);
	}

}