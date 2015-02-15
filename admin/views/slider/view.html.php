<?php

defined('_JEXEC') or die("Restricted access");

jimport('joomla.application.component.view');


class SliderViewSlider extends JViewLegacy{
    
    protected $items;
        
    public function display($tpl = null){
        
        JToolBarHelper::title("Слайдер для отображения баннеров");
        
        $models = $this->getModel();
        
        $this->items =  $models->getItems();        
        
        parent::display($tpl); // незабыть вызывать этот метод для отображения шаблона
    }
    
    
    
}