# yii2-opengraphio

Yii2 component to interact with [OpenGraph.io API](https://www.opengraph.io/).

## Installation
Through Composer

From console:
```
composer require macfly/yii2-opengraphio
```
or add to "require" section to composer.json
```
"macfly/yii2-opengraphio": "*"
```
##Usage

Set your opengraphio component.

```php
'components' => [
    'opengraphio' => [
        'class'   => 'macfly\opengraphio\components\OpenGraphIo',
        'appId'	=> 'xxxxxx',
    ],
],
```
