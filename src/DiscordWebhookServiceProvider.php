<?php
namespace OneDayToDie\DiscordWebHook;


use Illuminate\Support\ServiceProvider;

class DiscordWebhookServiceProvider extends ServiceProvider
{
    public function boot()
    {


        $this->loadJsonTranslationsFrom(__DIR__ . '/../lang/en.json');


        $this->publishes([
            __DIR__ . '/../lang' => $this->app->langPath('vendor/discordWebHook'),
        ]);
    }
}


