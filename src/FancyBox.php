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
            $class = $this->htmlOptions['linkOptions']['class'];
            $this->htmlOptions['linkOptions']['class'] = 'fancybox.image ' . $class;
            echo Html::a(Html::img($this->item['src'], $this->htmlOptions['imageOptions']), $this->item['href'], $this->htmlOptions['linkOptions']);
        } elseif ($this->type == "inline") {
            $class = $this->htmlOptions['linkOptions']['class'];
            $this->htmlOptions['linkOptions']['class'] = 'fancybox.inline ' . $class;
            echo Html::a($this->item['text'], $this->item['href'], $this->htmlOptions['linkOptions']);
        } elseif ($this->type == "iframe") {
            /**
             * Add class iframe to the link 
             */
            $class = $this->htmlOptions['linkOptions']['class'];
            $this->htmlOptions['linkOptions']['class'] = 'fancybox.iframe ' . $class;

            echo Html::a($this->item['text'], $this->item['href'], $this->htmlOptions['linkOptions']);
        } elseif ($this->type == "ajax") {
            $class = $this->htmlOptions['linkOptions']['class'];
            $this->htmlOptions['linkOptions']['class'] = 'fancybox.ajax ' . $class;

            echo Html::a($this->item['text'], $this->item['href'], $this->htmlOptions['linkOptions']);
        } elseif ($this->type == "media") {
            $class = $this->htmlOptions['linkOptions']['class'];
            $this->htmlOptions['linkOptions']['class'] = 'fancybox.media ' . $class;

            echo Html::a($this->item['text'], $this->item['href'], $this->htmlOptions['linkOptions']);
        }
    }

}
