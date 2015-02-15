<?php

defined('_JEXEC') or die("Restricted access");

jimport('joomla.application.component.view');


class SliderViewSlider extends JViewLegacy{
    
    protected $items;
    protected $pagination;
    
    public function display($tpl = null){
        
        $models = $this->getModel();
        
        $this->items =  $models->getItems();
        $this->pagination = $models->getPagination();
        
        parent::display($tpl); // незабыть вызывать этот метод для отображения шаблона
    }
    
    
    
}