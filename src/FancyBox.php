<?php

/**
 * Yii2 FancyBox Extension 
 * @author Paul P <bigpaulie25ro@yahoo.com>
 * @license MIT
 */

namespace bigpaulie\fancybox;

use yii\helpers\Html;
use yii\web\View;
use bigpaulie\fancybox\FancyBoxAsset;
use bigpaulie\fancybox\Widget;

class FancyBox extends Widget {

    public function run() {
        if ($this->type == "image") {
            // create anchor tag & image tag
            echo Html::beginTag('a', $this->item['href'], $this->htmlOptions['linkOptions']);
            echo Html::img($this->item['src'], $this->htmlOptions['imageOptions']);
            echo Html::endTag('a');
        } elseif ($this->type == "inline") {
            echo Html::a($this->item['text'], $this->item['href'], $this->htmlOptions['linkOptions']);
        } elseif ($this->type == "iframe") {
            /**
             * Add class iframe to the link 
             */
            $class = 'iframe ' . $this->htmlOptions['linkOptions']['class'];
            $this->htmlOptions['linkOptions']['css'] = $class;

            echo Html::a($this->item['text'], $this->item['href'], $this->htmlOptions['linkOptions']);
        } elseif ($this->type == "ajax") {
            echo Html::a($this->item['text'] , $this->item['href'] , $this->htmlOptions['linkOptions']);
        }
    }

}
