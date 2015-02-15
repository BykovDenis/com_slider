<?php

defined('_JEXEC') or die("Restricted access");


class SliderTableSlider extends JTable{
    
    public function __construct($db) {
        parent::__construct('#__slider_banners', 'banner_id', $db);
    }
    
}
