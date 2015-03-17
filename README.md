# WordPress Plugin Boilerplate Light [![GitHub version](https://badge.fury.io/gh/BoilWP%2FWordPress-Plugin-Boilerplate-Light.svg)](http://badge.fury.io/gh/BoilWP%2FWordPress-Plugin-Boilerplate-Light)  [![Built with Grunt](https://cdn.gruntjs.com/builtwith.png)](http://gruntjs.com/)  [![Build Status](https://travis-ci.org/BoilWP/WordPress-Plugin-Boilerplate-Light.svg?branch=dev)](https://travis-ci.org/BoilWP/WordPress-Plugin-Boilerplate-Light)  [![Coverage Status](https://coveralls.io/repos/BoilWP/WordPress-Plugin-Boilerplate-Light/badge.png)](https://coveralls.io/r/BoilWP/WordPress-Plugin-Boilerplate-Light)

## What is this boilerplate designed for?

This boilerplate is designed mainly for simple and light plugins in mind. It is constructed the same as the standard [WordPress Plugin Boilerplate](https://github.com/BoilWP/WordPress-Plugin-Boilerplate) only without most of the features. It's a developer friendly environment that allows you to get a head start with the ground work for any plugin. Included with the boilerplate you also have actions and filter hooks in place that not only make it easy for you to create extensions for your plugin but for third-party developers as well.

## What about support?

Documentation will be available soon on BoilWP.com. In the mean time you can use the [support board](http://boilwp.com/boards/forum/wordpress-plugin-boilerplate-support/) to ask questions.

## Features

* Ready to build on and is third-party ready for other developers to build add-ons for your plugin.
* Custom settings page separated via tabs and sections.
* Help Tabs on all the plugin pages ready and prepared.

## Contents

The WordPress Plugin Boilerplate includes the following files:

* This README.md
* CHANGELOG.md
* CONTRIBUTING.md
* license.txt file
* `.editorconfig` file.
* `.gitattributes` file.
* `.gitignore` file.
* `.jshintrc` file.
* `.travis.yml` file.
* `.composer.json` file.
* `Gruntfile.js` file.
* `package.json` file
* A subdirectory called `wordpress-plugin-boilerplate-light` that represents the core plugin file.

## Installation

1. Copy the `wordpress-plugin-boilerplate-light` directory into your `wp-content/plugins` directory
2. Navigate to the *Plugins* dashboard page
3. Locate 'WordPress Plugin Boilerplate Light'
4. Click on *Activate*

> This will activate "WordPress Plugin Boilerplate Light" and I recommend that you install it on a development site not a live site.

## Recommended Tools

### Localization Tools

The WordPress Plugin Boilerplate Light uses a variable to store the text domain used when internationalizing strings throughout the Boilerplate. To take advantage of this method, there are tools that are recommended for providing correct, translatable files:

* [Poedit](http://www.poedit.net/)
* [makepot](http://i18n.svn.wordpress.org/tools/trunk/)
* [i18n](https://github.com/grappler/i18n)
* [grunt-wp-i18n](https://github.com/blazersix/grunt-wp-i18n)

Any of the above tools should provide you with the proper tooling to localize the plugin.

### GitHub Updater

The WordPress Plugin Boilerplate Light includes native support for the [GitHub Updater](https://github.com/afragen/github-updater) which allows you to provide updates to your WordPress plugin from GitHub.

This uses a new tag in the plugin header:

>  `* GitHub Plugin URI: https://github.com/<owner>/<repo>`

Here's how to take advantage of this feature:

1. Install the [GitHub Updater](https://github.com/afragen/github-updater)
2. Replace the url of the repository for your plugin
3. Push commits to the master branch
4. Enjoy your plugin being updated in the WordPress dashboard

The current version of the GitHub Updater supports tags/branches - whichever has the highest number.

To specify a branch that you would like to use for updating, just add a `GitHub Branch:` header. GitHub Updater will preferentially use a tag over a branch having the same or lesser version number. If the version number of the specified branch is greater then the update will pull from the branch and not from the tag.

The default state is either `GitHub Branch: master` or nothing at all. They are equivalent.

All that info is in [the project](https://github.com/afragen/github-updater).

## Support
This repository is not suitable for support. Please don't use the issue tracker for support requests, but for core WordPress Plugin Boilerplate Light issues only. Support can take place in the appropriate channel:

* The [support board](http://boilwp.com/boards/forum/wordpress-plugin-boilerplate-support/) at BoilWP.com, where the community can help each other out.

Support requests in issues on this repository will be closed on sight.

## Contributing to WordPress Plugin Boilerplate Light

If you have a patch, or stumbled upon an issue with WordPress Plugin Boilerplate Light core, you can contribute this back to the code. Please read the [contributor guidelines](https://github.com/BoilWP/WordPress-Plugin-Boilerplate-Light/blob/master/CONTRIBUTING.md) for more information how you can do this.

## License

The WordPress Plugin Boilerplate Light is licensed under the GPL v2 or later.

> This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

> You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

## Important Notes

### Licensing

The WordPress Plugin Boilerplate Light is licensed under the GPL v2 or later; however, if you opt to use third-party code that is not compatible with v2, then you may need to switch to using code that is GPL v3 compatible.

For reference, [here's a discussion](http://make.wordpress.org/themes/2013/03/04/licensing-note-apache-and-gpl/) that covers the Apache 2.0 License used by [Bootstrap](http://twitter.github.io/bootstrap/).
