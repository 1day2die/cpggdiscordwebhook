<?php
use Spatie\LaravelSettings\Migrations\SettingsMigration;


class CreateDiscordWebHookSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('discordwebhook.webhook_url', '');
    }

}
