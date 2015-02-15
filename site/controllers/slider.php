<?php

defined('_JEXEC') or die("Restricted access");

jimport('joomla.application.component.controlleradmin');

class SliderControllerSlider extends JControllerAdmin {
    
    public function getModel($name = 'Slider', $prefix = 'SliderModel', $config = array('ignore_request'=> true)) {       
        
        $model = parent::getModel($name, $prefix, $config);        
        return $model;
        
    }
    
}