<?php
namespace OneDayToDie\DiscordWebHook\Settings;

use Spatie\LaravelSettings\Settings;

class WebHookSettings extends Settings
{

    //title displayed on the checkout page
    public string $webhook_url;

    public static function group(): string
    {
        return 'discordwebhook';
    }


}
