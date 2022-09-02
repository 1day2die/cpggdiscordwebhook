<?php
$namespace = "OneDayToDie\DiscordWebHook\Http\Controllers";

use OneDayToDie\DiscordWebHook\Http\Controllers\Settings\DiscordWebhookSettingsController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    Route::get('settings/discordwebhook', [DiscordWebhookSettingsController::class, 'index'])->name('settings.discordwebhook.index');
    Route::patch('settings/discordwebhook', [DiscordWebhookSettingsController::class, 'update'])->name('settings.discordwebhook.update');
});
