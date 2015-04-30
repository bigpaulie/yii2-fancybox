# yii2-fancybox
Yii2 FancyBox extension

Form more information on how to use FancyBox please go to their website http://fancyapps.com/fancybox/

## Example usage :
### Images
```php
    echo FancyBox::widget([
        'type' => 'image',
        'item' => [
            'href' => 'url_to_thumbnail',
            'src' => 'url_to_big_image',
        ],
    ]);
```
### Inline content
```php
    echo FancyBox::widget([
        'type' => 'inline',
        'item' => [
            'href' => '#myInline',
            'text' => 'click here',
        ],
    ]);
```
```html
    <div style="display:none;"><p id="#myInline">This is my inline content !</p></div>
```
### Ajax
```php
    echo FancyBox::widget([
        'type' => 'ajax',
        'item' => [
            'href' => 'http://example.com/ajax.php',
            'text' => 'click here',
        ],
    ]);
```

#### OR

```php
    echo FancyBox::widget([
        'type' => 'ajax',
        'item' => [
            'href' => Url::to(['site/ajax']),
            'text' => 'click here',
        ],
    ]);
```
### Media
```php
    echo FancyBox::widget([
        'type' => 'media',
        'item' => [
            'href' => 'https://www.youtube.com/watch?v=YE7VzlLtp-4',
            'text' => 'click here',
        ],
    ]);
```
