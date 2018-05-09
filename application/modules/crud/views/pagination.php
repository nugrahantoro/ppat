<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* Manggu Framework
 * Simple PHP Application Development
 * Kusnassriyanto S. Bahri
 * kusnassriyanto@gmail.com
 * 
 */
//print_r($pagebuttons);
?>
<ul class="pagination">
    <?php foreach ($pagebuttons as $button) { ?>
    <?php //print_r($button);?>
        <?php if ($button['type']=='start') { ?>
            <li class = "<?php echo getArrayDef($button, 'class', ''); ?>" data-number="<?php echo getArrayDef($button, 'data-page', ''); ?>"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
        <?php } else if ($button['type']=='end') { ?>
            <li class = "<?php echo getArrayDef($button, 'class', ''); ?>" data-number="<?php echo getArrayDef($button, 'data-page', ''); ?>"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
        <?php } else if ($button['type']=='dots') { ?>
            <li class=""><span class = "" href="#">...</span></li>
        <?php } else if ($button['type']=='number') { ?>
            <li class="<?php echo getArrayDef($button, 'class', ''); ?>" data-number="<?php echo getArrayDef($button, 'data-page', ''); ?>"><a class = "" href="#"><?php echo getArrayDef($button, 'caption', ''); ?></a></li>
        <?php }?>
    <?php }?>
</ul>    

<script>
    OnReadyArray.push(function(){
        $('.pagebutton').click(function(){
            number = $(this).attr('data-number');
            //alert(number);
            $('#pagenum').val(number);
            Manggu.Crud.loadData({'paramclass': 'crud-param',
                'url': '<?php echo $crudurl.'svqueryview/'.$crudname.'/'.$actionname;?>'
            });
            
            
            return false;
        })
    });
    
    OnReadyArray.push(function(){
        $('.page-disabled').click(function(){
            return false;
        })
    });
    
</script>    