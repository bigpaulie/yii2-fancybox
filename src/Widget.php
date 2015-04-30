<?php
/**
 * Yii2 FancyBox Extension 
 * @author Paul P <bigpaulie25ro@yahoo.com>
 * @license MIT
 */
namespace bigpaulie\fancybox;

use yii\helpers\Json;

class Widget extends \yii\base\Widget {
    
    public $item;
    public $type = 'image';
    public $htmlOptions = [
        'linkOptions' => [],
        'imageOptions' => [],
    ];
    public $clientOptions = [];

    public function init() {
        parent::init();
        
        if (empty($this->id)) {
            $this->id = $this->getId();
        }

        if (!isset($this->htmlOptions['linkOptions']['id'])) {
            $this->htmlOptions['linkOptions']['id'] = $this->id;
        }
        
        // Register the asset bundle
        $view = $this->getView();
        FancyBoxAsset::register($view);
        
        // Register the javascript
        if ($this->clientOptions !== false) {
            $options = empty($this->clientOptions) ? '' : Json::encode($this->clientOptions);
            $js = "jQuery('#{$this->id}').fancybox($options);";
            $view->registerJs($js);
        }
    }
    
}
