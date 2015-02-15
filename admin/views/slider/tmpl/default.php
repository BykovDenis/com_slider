<?php 
defined('_JEXEC') or die("Restricted access"); 

?>

<style>
    .container_images{        
        border: 1px dashed yellow;
        text-align:center;
    }
    
    .slider_image{
        display:inline-block;
        margin-right:20px;
        margin-bottom: 20px;        
    }
    
    .slider_image>img{
        width:455px;
    }
</style>


<form action="index.php" method="post"  name="adminForm" id="adminForm">
    <div class="container_images">
        <?php  echo count($this->items)."\r\n";
        for($i = 0, $n = count($this->items);$i<$n;$i++):
            $row = $this->items[$i];
            ?>
            <div class="slider_image">
                <img src="<?='http://'.$_SERVER["HTTP_HOST"].'/joomla33/images/slider/'.$row->file_name; ?>">
            </div>
        <?php endfor; ?>
    </div>

    <input type="hidden" name="option" value="com_slider" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecker" value="0" />    
    
    <?php echo JHtml::_('form.token'); ?>   
    
    
    
</form>