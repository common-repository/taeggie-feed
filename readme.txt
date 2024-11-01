=== Taeggie Feed ===
Author: Taeggie
Tags: social feed, taeggie, twitter, facebook, instagram, linkedin
Requires at least: 2.5
Tested up to: 5.7.2
Stable tag: 0.1.7
Contributors: Taeggie
Author URI: https://taeggie.com
License: GPL

Taeggie Feed displays a social feed that is configured on and served from reliable taeggie.com servers. Paid plugin with monthly billing.

== Description ==

Taeggie Feed displays a feed of social media content that can be modified and configured on the fly on taeggie.com.

Major features of Taeggie Feed include:

* Simple Facebook, Instagram, Twitter and LinkedIn integrations - just link your relevant social media accounts and go!
* Retrieve content by hashtag or account (hashtag not available on Facebook).
* Premoderate or postmoderate content as required.
* Unlimited sources per feed.
* Powerful content filtering.
* Analytics and weekly email reports on social media activity.
* Software-as-a-service, so you will rarely need to touch your plugin code.ny

PS: You'll need a Taeggie account to use it (except for demo/testing purposes).

== Installation ==

Upload the Taeggie Feed plugin to your blog, activate it, then add the following Taeggie Feed shortcode to your site: 
[taeggie-feed name="demo"]

You should now be able to see the feed with demo content on your site.

In order to start displaying arbitrary content, please create a new feed on taeggie.com and replace the name parameter of the shortcode with the name of your feed:
[taeggie-feed name="YOUR_FEED_NAME_HERE"]

You can easily configure the behaviour and design of your feed by logging in to taeggie.com. Additionally, you can use CSS on your site to directly manipulate design of the feed in a more powerful fashion. 

You can switch from regular install to iframe install with additional parameter mode=iframe, as follows:
[taeggie-feed name="demo" mode="iframe"]

More advice can be found here: https://taeggie.com/support - please ask us if you don't find what you're looking for!

== Changelog ==

0.1.7 removed erroneous logging and moved jQuery enqueue call to correct location

0.1.6 tested with the latest version

0.1.5 tested with the latest version

0.1.4 tested with the latest version

0.1.3 non-iframe embeds

0.1.2 author name change

0.1.1 readme tweaks

0.1.0 first release