Sabayon
======
A customized version of the gitsta theme designed for my blog on [Sabayon](http://linux.x10host.com/blog/). It features the code styling of [Gentoo Wiki's Tyrian theme](https://gitweb.gentoo.org/proj/gentoo-wiki-tyrian.git/). To invoke this code styling run `<div class = "code"></div>`. I use these tags instead of `<code></code>` because `<code></code>` does not do as solid of block styling (difficult to explain, this theme supports using the `<code></code>` tags with the same styling, so if you are wondering, test it out with several lines of code and you will see what I mean). 

### Features
* Responsive
* Support for font awesome, octicons, glyphicons
* Dynamic sidebar (statically positioned if the window height allows it, otherwise non-static)
* Theme options
  * Favicon
  * Comment markdown support
  * Enable/disable blog description on front page
  * Customizable error page
* Neat comments style
* Neat source code displaying within posts and pages
* Full-width template
* Advanced menues (with icons, dividers, ...)
* Well written and documented source code

### Menu
The theme menu supports:
* Icons (Octicons, Glyphicons, Font Awesome)
* Submenus
* All features of [wp-bootstrap-navwalker](https://github.com/twittem/wp-bootstrap-navwalker): Dividers, Dropdown Headers and disabled links

To use the icons just set the "Title Attribute" of the menu item to the desired item (e.g. `fa-code`, `octicon-flame`, etc.).

### Requirements & Recommendation
* This theme requires at least PHP 5.3, due the usage of closures within the `functions.php`
* Since this theme was created with markdown in mind, you should use some kind of markdown plugin (I'm pretty satisfied with [WP-Markdown](https://wordpress.org/plugins/wp-markdown/)). If you don't like to use markdown, you can disable the markdown support within the theme settings.

### Credits
* [Bootstrap](http://www.getbootstrap.com)
* [GitHub](http://www.github.com)
* [Kevin Hirczy](https://github.com/nehalist)
* [Marked](https://github.com/chjj/marked)
* [Font Awesome](http://fortawesome.github.io/Font-Awesome/)
* SuperUser user [jin](http://meta.stackoverflow.com/users/147574/jin)
* [TGM Plugin Activation](http://tgmpluginactivation.com/)
* [Tyrian theme developers](https://gitweb.gentoo.org/proj/gentoo-wiki-tyrian.git/)
* [wp-bootstrap-navwalker](https://github.com/twittem/wp-bootstrap-navwalker)
