<?php 
defined('_JEXEC') or die("Restricted access"); 

?>

<style>
    .container_images{                
        text-align:center;
    }
    
    .slider_image{
        display:inline-block;
        margin-right:20px;
        
    }
    
    .slider_image>img{
        width:703px;
        border: 1px solid #E5EFFD;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
    }
    
.pagination {
	margin: -28px 0;
        text-align: left;
        
}
.pagination ul {
	display: inline-block;
	*display: inline;
	*zoom: 1;
	margin-left: 0;
	margin-bottom: 0;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
	box-shadow: 0 1px 2px rgba(0,0,0,0.05);

}
.pagination ul > li {
	display: inline;
}
.pagination ul > li > a,
.pagination ul > li > span {
	float: left;
	padding: 4px 12px;
	line-height: 18px;
	text-decoration: none;
	background-color:  rgba(255,255,255,0.2); /* #fff; */
	border: 1px solid rgba(190,190,190,0.4);   /*#ddd; */
	border-left-width: 0;
        color: rgba(3,3,3,0.7);
}
.pagination ul > li > a:hover,
.pagination ul > li > a:focus,
.pagination ul > .active > a,
.pagination ul > .active > span {
	background-color: rgba(144,144,170,0.5);
        color: #E5EFFD;
}
</style>


<form action="index.php" method="post"  name="adminForm" id="adminForm">
    <div class="container_images">        
        <?php for($i = 0, $n = count($this->items);$i<$n;$i++):
            $row = $this->items[$i];
            ?>
            <div class="slider_image">
                <img src="<?='http://'.$_SERVER["HTTP_HOST"].'/joomla33/images/slider/'.$row->file_name; ?>">
                <div class="pagination"><?=$this->pagination->getListFooter(); ?></div>
            </div>
        <?php endfor; ?>
    </div>    

    <input type="hidden" name="option" value="com_slider" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecker" value="0" />    
    
    <?php echo JHtml::_('form.token'); ?>   
    
    
    
</form>