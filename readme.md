# Kirby Panel Flags

*Version 0.1*

In a multi language installation of the panel, the language code shows the current language. Because there is no visual element (only letters) it can be easy to accidentally save the content in the wrong language.

**This plugin adds flags as a complement to the language code.**

![Screenshot](docs/screenshot.png)

## Installation

Use one of the alternatives below.

### 1. Kirby CLI

If you are using the [Kirby CLI](https://github.com/getkirby/cli) you can install this plugin by running the following commands in your shell:

```
$ cd path/to/kirby
$ kirby plugin:install jenstornell/kirby-panel-flags
```

### 2. Clone or download

1. [Clone](https://github.com/jenstornell/kirby-panel-flags.git) or [download](https://github.com/jenstornell/kirby-panel-flags/archive/master.zip)  this repository.
2. Unzip the archive if needed and rename the folder to `kirby-panel-flags`.

**Make sure that the plugin folder structure looks like this:**

```
site/plugins/kirby-panel-flags/
```

### 3. Git Submodule

If you know your way around Git, you can download this plugin as a submodule:

```
$ cd path/to/kirby
$ git submodule add https://github.com/username/kirby-panel-flags site/plugins/kirby-panel-flags
```

## Setup

### 1. Blueprint

To make it work as expected, add the following code to your blueprint:

```
fields:
  flags:
    type: flags
```

## Options

This option can be set in your `/site/config/config.php` file:

```php
c::set('plugin.flags.filenames', array(
  'en' => 'gb'
));
```

### filenames

If the language code does not match the filename, you can use this option.

- The key `en` in the example is the language code.
- The value `gb` in this example is the filename without extension.

**For a full list of filenames, look here:**

https://github.com/lipis/flag-icon-css/tree/master/flags/4x3

Because `en` is really common and does not exist as filename it defaults to `gb`. 

## Changelog

**0.1**

- Initial release

## Requirements

- [**Kirby**](https://getkirby.com/) 2.3+

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/jenstornell/kirby-panel-flags/issues/new).

## License

- **Kirby Panel Flags** - [MIT](https://opensource.org/licenses/MIT)
- **[flag-icon-css](https://github.com/lipis/flag-icon-css)** - [MIT](https://github.com/lipis/flag-icon-css/blob/master/LICENSE)

## Credits

- [Jens Törnell](https://github.com/jenstornell)