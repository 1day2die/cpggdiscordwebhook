<?php

namespace OneDayToDie\DiscordWebHook\Classes;


use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class DiscordNotification
{


/* Use Like:

use OneDayToDie\DiscordWebHook\Classes\DiscordNotification;


DiscordNotification::embed("https://discord.com/api/webhooks/1014441714951409746/f_vMR1M3I-rcbtC23Hsodus9mq1FolefQEDzQbVUalLopwd9pUrta4lk1PosTw6xI6sI","lol","lol","149100");
*/


public static function embed($webhookurl, $title="Embed is working", $description = "Hi, im Comming from CPGG v1", $color="149100")
    {
        return Http::post($webhookurl, [
            'embeds' => [
                [
                    'title' => $title,
                    'description' => $description,
                    'color' => $color,
                ]
            ],
        ]);
    }
}