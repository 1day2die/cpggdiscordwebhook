
# Controlpanel Discord Webhook Integration

Helper Class for Discord Webhooks and more

#### Features
- Send Webhook Messages with ease to your Discord Server



## Installation

Run this from your Terminal inside your Controlpanel directory (usually /var/www/controlpanel)
<br/>
`composer require 1day2die/cpgg-discordwebhook`<br/>

## Usage
For Devs, include this at the top of your new file<br/>
`use OneDayToDie\DiscordWebHook\Classes\DiscordNotification;`
<br/>
Create a new Webhook embed like this
<br/>
`DiscordNotification::embed("WEBHOOK URL","TITLE","TEXT","COLOR INTEGER VALUE");`<br/>

<br/>
Grab the Color Int Value from here
https://gist.github.com/thomasbnt/b6f455e2c7d743b796917fa3c205f812

## Support
DM me on Discord or Join my Discord Hub
https://discord.gg/UgJcvgCg6N
