=== Clashvibes ===
Contributors: automattic
Donate link: https://example.com/
Tags: custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready
Requires at least: 6.0
Tested up to: 6.2
Requires PHP: 8.1.9
Stable tag: 1.0.0
License: GNU General Public License v2 or later
License URI: LICENSE

A theme called clashvibes.

== Description ==

Hi. I'm a starter theme called `clashvibes`, or `underscores`, if you like. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

* A modern workflow with a pre-made command-line interface to turn your project into a more pleasant experience.
* A just right amount of lean, well-commented, modern, HTML5 templates.
* A custom header implementation in `inc/custom-header.php`. Just add the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/template-functions.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample layouts in `sass/layouts/` made using CSS Grid for a sidebar on either side of your content. Just uncomment the layout of your choice in `sass/style.scss`.
Note: `.no-sidebar` styles are automatically loaded.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Full support for `WooCommerce plugin` integration with hooks in `inc/woocommerce.php`, styling override woocommerce.css with product gallery features (zoom, swipe, lightbox) enabled.
* Licensed under GPLv2 or later. :) Use it to make something cool.


== Installation ==

### Requirements

`clashvibes` requires the following dependencies:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

### Quick Start

Clone or download this repository, change its name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a six-step find and replace on the name in all the templates.

1. Search for `'clashvibes'` (inside single quotations) to capture the text domain and replace with: `'megatherium-is-awesome'`.
2. Search for `clashvibes` to capture all the functions names and replace with: `megatherium_is_awesome_`.
3. Search for `Text Domain: clashvibes` in `style.css` and replace with: `Text Domain: megatherium-is-awesome`.
4. Search for <code>&nbsp;clashvibes</code> (with a space before it) to capture DocBlocks and replace with: <code>&nbsp;Megatherium_is_Awesome</code>.
5. Search for `clashvibes-` to capture prefixed handles and replace with: `megatherium-is-awesome-`.
6. Search for `CLASHVIBES` (in uppercase) to capture constants and replace with: `MEGATHERIUM_IS_AWESOME_`.

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `clashvibes.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

### Setup

To start using all the tools that come with `clashvibes`  you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ npm install
```

### Available CLI commands

`clashvibes` comes packed with CLI commands tailored for WordPress theme development :

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer make-pot` : generates a .pot file in the `languages/` directory.
- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!

== Frequently Asked Questions ==

= Does this theme support any plugins? =

clashvibes includes support for clashvibes-plugin and clashplayer plugins.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is stored in the /assets directory.
2. This is the second screen shot

== Changelog ==

= 1.0 - May 12 2016 =
* Initial release

== Upgrade Notice ==

= 1.0 =
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.

= 0.5 =
This version fixes a security related bug.  Upgrade immediately.

Features:

1. custom posts.
2. block audio & video player.


== Credits ==

* Based on Underscores https://underscores.me/, (C) 2012-2020 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css https://necolas.github.io/normalize.css/, (C) 2012-2018 Nicolas Gallagher and Jonathan Neal, [MIT](https://opensource.org/licenses/MIT)
* SIL OFL 1.1 License (https://scripts.sil.org/OFL). In the Font Awesome Free download, the SIL OFL license applies to all icons packaged as web and desktop font files.
* CC BY 4.0 License (https://creativecommons.org/licenses/by/4.0/) In the Font Awesome Free download, the CC BY 4.0 license applies to all icons packaged as SVG and JS file types.
MIT License (https://opensource.org/licenses/MIT) In the Font Awesome Free download, the MIT license applies to all non-font and non-icon files.


