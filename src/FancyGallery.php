<?php

namespace bigpaulie\fancybox;

use bigpaulie\fancybox\Widget;
use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Json;

class FancyGallery extends Widget {

    public $tag = 'ul';
    public $items;
    public $template = '<li>{item}</li>';
    
    public function init() {
        parent::init();
        $this->registerScripts($this->getView());
    }

    public function run() {
        echo Html::beginTag($this->tag, ['class' => 'con']);
        if (!empty($this->items)) {
            foreach ($this->items as $item) {
                echo $this->parseTemplate($item);
            }
        }
        echo Html::endTag($this->tag);
    }

    protected function parseTemplate(array $item) {
        $title = (isset($item['title']))? "title=\"{$item['title']}\"" : "";
        $replace = "<a href=\"{$item['href']}\" class=\"fancybox fancybox.image\" {$title} rel=\"{$this->id}\">"
        . "<img src=\"{$item['src']}\" />"
        . "</a>";
        $template = str_replace('{item}', $replace, $this->template);
        return $template;
    }
    
    /**
     * @inheritDoc
     */
    protected function registerScripts(\yii\web\View $view) {
        if ($this->clientOptions !== false) {
            $options = empty($this->clientOptions) ? '' : Json::encode($this->clientOptions);
            $js = "jQuery('.fancybox').fancybox($options);";
            $view->registerJs($js , View::POS_READY);
        }
    }

}
