<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* Manggu Framework
 * Simple PHP Application Development
 * Kusnassriyanto S. Bahri
 * kusnassriyanto@gmail.com
 * 
 */

?>
<?php
    foreach($arrelements as $element){
?>

<?php   if($element['xtype']=='row'){ ?>
<div class="<?php echo getArrayDef($element, 'class', 'row');?>" >
<?php   } else if($element['xtype']=='/row'){ ?>
</div>
<?php   } else if($element['xtype']=='column'){ ?>
    <div class="<?php echo getArrayDef($element, 'class', '');?>" >
<?php   } else if($element['xtype']=='/column'){ ?>
    </div>
<?php   } else if($element['xtype']=='checkbox'){ ?>
    <div class="checkbox">
        <label>
            <input name="form-field-checkbox" class="ace ace-checkbox-2" 
                    type="checkbox" data-cboxid="<?php echo $element['id']; ?>" 
                    <?php echo ($element['checked']==1? 'checked': '' ); ?>
                    >
            <span class="lbl"> <?php echo $element['value']; ?></span>
        </label>
    </div>

<?php   } else if($element['xtype']==''){ ?>
<?php   } ?>

<?php } ?>

