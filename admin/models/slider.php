<?php

defined('_JEXEC') or die("Restricted access");

jimport('joomla.application.component.modellist');
jimport('joomla.libraries.cms.pagination'); 

class SliderModelSlider extends JModelList{
    
    private $perPage;
    private $limitstart;
    
    
    public function __construct() {  
        
        $this->_db = JFactory::getDbo();
        parent::__construct();  
    
    }   
    
    public function getTable($name = 'Slider', $prefix = 'Table', $options = array()) {  
        
        parent::getTable($name, $prefix, $options);
    }    
     
    public function getItems() {  
        
        $query = $this->_db->getQuery(true);
        $query->select('banner_id, file_name');
        $query->from('#__slider_banners');	
        $query->order('banner_id');  
        $this->_db->setQuery($query, $this->limitstart, $this->perPage);
        $this->_db->query();
        $rows=$this->_db->loadObjectList();
                  
       
        return $rows;        
        
        //  $rows[] =  'http://'.$_SERVER["HTTP_HOST"].'/joomla33/images/slider/'.$file;                       
    }    
        
}