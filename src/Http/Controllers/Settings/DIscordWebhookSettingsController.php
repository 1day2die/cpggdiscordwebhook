<?php

namespace OneDayToDie\DiscordWebHook\Http\Controllers\Settings;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OneDayToDie\DiscordWebHook\Settings\WebHookSettings;

class DiscordWebhookSettingsController extends Controller
{
    /**

     */
    public function index(WebHookSettings $settings)
    {

        return view('discordwebhook::settings.discordwebhook', compact('settings'));
    }

    /**

     */
    public function update(WebHookSettings $settings, Request $request)
    {
        $settings->webhook_url = $request->input('webhook_url');

        $settings->save();

        return redirect()->back()->with('success', __('Settings saved'));
    }
}
