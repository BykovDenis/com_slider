<?php

defined('_JEXEC') or die("Restricted access");

jimport('joomla.application.component.modellist');
jimport('joomla.libraries.cms.pagination'); 

class SliderModelSlider extends JModelList{
    
    private $perPage;
    private $limitstart;
    private $pagination;
    
    public function __construct() {  
        
        $this->_db = JFactory::getDbo();
        parent::__construct();  

        $this->perPage = 1;
        $this->limitstart = JRequest::getInt('limitstart',0);      
    }   
    
    public function getTable($name = 'Slider', $prefix = 'Table', $options = array()) {  
        
        parent::getTable($name, $prefix, $options);
    }    
     
    public function getTotal() {
        
        $query = $this->_db->getQuery(true);
        $query->select('banner_id');
        $query->from('#__slider_banners');
        $this->_db->setQuery($query);
        $this->_db->query();
        $total= $this->_db->getNumRows();
        
        return $total;       
    }    
    
    public function getItems() {  
        
        $query = $this->_db->getQuery(true);
        $query->select('banner_id, file_name');
        $query->from('#__slider_banners');	
        $query->order('banner_id');  
        $this->_db->setQuery($query, $this->limitstart, $this->perPage);
        $this->_db->query();
        $rows=$this->_db->loadObjectList();
        $total = $this->getTotal();               
        $this->pagination = new JPagination($total,$this->limitstart,$this->perPage);        
                    
        return $rows;              
        
    }    
        
    public function getPagination() {
      
        return $this->pagination;
       
    }
    
    
       
}