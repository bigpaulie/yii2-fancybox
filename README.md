# yii2-fancybox
Yii2 FancyBox extension

Form more information on how to use FancyBox please go to their website http://fancyapps.com/fancybox/

# Example usage :
# Images
```php
    echo FancyBox::widget([
        'type' => 'image',
        'item' => [
            'href' => 'url_to_thumbnail',
            'src' => 'url_to_big_image',
        ],
    ]);
```
# Inline content
```php
    echo FancyBox::widget([
        'type' => 'inline',
        'item' => [
            'href' => '#myInline',
        ],
    ]);
```
```html
    <div style="display:none;"><p>This is my inline content !</p></div>
```
# Ajax
```php
    echo FancyBox::widget([
        'type' => 'ajax',
        'item' => [
            'href' => 'http://example.com/ajax.php',
        ],
    ]);
```

OR

```php
    echo FancyBox::widget([
        'type' => 'ajax',
        'item' => [
            'href' => Url::to(['site/ajax']),
        ],
    ]);
```
