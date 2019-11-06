# Captcha Demo plugin for CakePHP 3

**Requires**  [CakePHP 3 Captcha Plugin](https://github.com/inimist/cakephp3-captcha)

## Installation

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```
composer require inimist/captcha-demo
```

And

```
bin/cake plugin load CaptchaDemo -b -r
```

Create captcha_demo table using Migrations plugin:

```
bin/cake migrations migrate -p CaptchaDemo
```

After installation visit `my_app_url/captcha-demo/`

You can delete this plugin using:

```
composer remove inimist/captcha-demo
```
