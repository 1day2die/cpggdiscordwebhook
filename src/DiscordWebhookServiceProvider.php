<?php
namespace OneDayToDie\DiscordWebHook;


use App\Providers\BasePackageServiceProvider;
use App\Enums\NavigationLocation;

class DiscordWebhookServiceProvider extends BasePackageServiceProvider
{
    public function boot()
    {


        $this->loadJsonTranslationsFrom(__DIR__ . '/../lang/en.json');

        $this->publishes([
            __DIR__ . '/../lang' => $this->app->langPath('vendor/discordWebHook'),
        ]);
    }
}


