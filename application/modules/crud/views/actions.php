<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* Manggu Framework
 * Simple PHP Application Development
 * Kusnassriyanto S. Bahri
 * kusnassriyanto@gmail.com
 * 
 */
//print_r(get_defined_vars());
?>
<?php foreach ($actions as $action) { ?>
    <?php if ($action['xtype']=='button') { ?>
        <div class="btn-group">
        <button class ="btn-group rowactionbutton btn btn-sm <?php echo getArrayDef($action, 'class');?>"
            data-action="<?php echo getArrayDef($action, 'action');?>"
            <?php echo (isset($action['modalwidth']))?'data-modalwidth="'.$action['modalwidth'].'"':''; ?>
            data-y=""
            >
        <?php if(isset($action['icon'])) { ?>
            <i class="icon <?php echo $action['icon']; ?>"></i>
        <?php } ?>
        <?php echo getArrayDef($action, 'caption');?>
        </button>
        </div>
    <?php } else if ($action['xtype']=='link') { ?>
        <div class="btn-group">
        <button class ="rowactionlink btn btn-sm <?php echo getArrayDef($action, 'class');?>"
            data-target ="<?php echo getArrayDef($action, 'target');?>"
            data-x="" data-link-replace="<?php echo getArrayDef($action, 'linkreplace');?>"
            >
        <?php if(isset($action['icon'])) { ?>
            <i class="icon <?php echo $action['icon']; ?>"></i>
        <?php } ?>
        <?php echo getArrayDef($action, 'caption');?>
        </button>
        </div>
    <?php } else if ($action['xtype']=='multi') { ?>
        <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle <?php echo getArrayDef($action, 'class');?>">
                <?php if(isset($action['icon'])) { ?>
                    <i class="icon <?php echo $action['icon']; ?>"></i>
                <?php } ?>
                <?php echo getArrayDef($action, 'caption');?>
                    <i class="icon-angle-down icon-on-right"></i>
            </button>

            <ul class="dropdown-menu">
                <?php foreach($action['items'] as $item) { ?>
                    <li>
                        <a href="#" class ="<?php echo (getArrayDef($item, 'xtype')=='link'?'rowactionlink': 'rowactionbutton'); ?>" data-action="<?php echo getArrayDef($item, 'action');?>"
                           <?php echo (isset($item['modalwidth']))?'data-modalwidth="'.$item['modalwidth'].'"':''; ?>
                           data-target ="<?php echo getArrayDef($item, 'target');?>"
                           >
                        <i class="icon <?php echo getArrayDef($item, 'icon'); ?> "></i>&nbsp;
                        <?php echo getArrayDef($item, 'caption');?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
		<?php } else if ($action['xtype']=='buttonlink') { ?>
        <div class="btn-group">
        <button class ="btn-group rowactionbuttonlink btn btn-sm <?php echo getArrayDef($action, 'class');?>"
            data-action="<?php echo getArrayDef($action, 'action');?>"
            <?php echo (isset($action['modalwidth']))?'data-modalwidth="'.$action['modalwidth'].'"':''; ?>
            data-y=""
            >
        <?php if(isset($action['icon'])) { ?>
            <i class="icon <?php echo $action['icon']; ?>"></i>
        <?php } ?>
        <?php echo getArrayDef($action, 'caption');?>
        </button>
        </div>
    <?php } ?>

<?php } ?>


