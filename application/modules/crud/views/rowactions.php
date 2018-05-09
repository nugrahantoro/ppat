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
<?php foreach ($rowactions as $action) { ?>
    <?php if (getArrayDef($action, 'visible', '1')==1){ ?>
        <?php if ($action['xtype']=='button') { ?>
            <button class ="rowactionbutton btn btn-minier <?php echo getArrayDef($action, 'class');?>" data-rel="tooltip" title="" data-original-title="<?php echo $action['hint']?>" 
                data-action="<?php echo getArrayDef($action, 'action');?>"
                <?php echo (isset($action['modalwidth']))?'data-modalwidth="'.$action['modalwidth'].'"':''; ?>
                >
            <?php if(isset($action['icon'])) { ?>
                <i class="icon <?php echo $action['icon']; ?>"></i>
            <?php } ?>
            <?php echo getArrayDef($action, 'caption');?>
            </button>
        <?php } else if ($action['xtype']=='link') { ?>
            <button class ="rowactionlink btn btn-minier <?php echo getArrayDef($action, 'class');?>" data-rel="tooltip" title="" data-original-title="<?php echo $action['hint']?>"
                data-target ="<?php echo getArrayDef($action, 'target');?>"
                >
            <?php if(isset($action['icon'])) { ?>
                <i class="icon <?php echo $action['icon']; ?>"></i>
            <?php } ?>
            <?php echo getArrayDef($action, 'caption');?>
            </button>
        <?php } else if ($action['xtype']=='crud') { ?>
            <button class ="rowactioncrud btn btn-minier <?php echo getArrayDef($action, 'class');?>" data-rel="tooltip" title="" data-original-title="<?php echo $action['hint']?>"
                data-target ="<?php echo getArrayDef($action, 'target');?>"
                data-paramlist ='<?php echo json_encode(getArrayDef($action, 'paramlist'));?>'
                >
            <?php if(isset($action['icon'])) { ?>
                <i class="icon <?php echo $action['icon']; ?>"></i>
            <?php } ?>
            <?php echo getArrayDef($action, 'caption');?>
            </button>
        <?php } else if ($action['xtype']=='multi') { ?>
            <div class="btn-group"  data-rel="tooltip" title="" data-original-title="<?php echo $action['hint']?>">
                <button data-toggle="dropdown" class="btn btn-minier dropdown-toggle <?php echo getArrayDef($action, 'class');?>">
                    <?php if(isset($action['icon'])) { ?>
                        <i class="icon <?php echo $action['icon']; ?>"></i>
                        <i class="fa fa-caret-down icon-on-right"></i>
                    <?php } ?>
                    <?php echo getArrayDef($action, 'caption');?>
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
			<?php } else if ($action['xtype']=='multis') { ?>
            <div class="btn-group" data-rel="tooltip" title="" data-original-title="<?php echo $action['hint']?>">
                <button data-toggle="dropdown" class="btn btn-minier dropdown-toggle <?php echo getArrayDef($action, 'class');?>">
                    <?php if(isset($action['icon'])) { ?>
                        <i class="icon <?php echo $action['icon']; ?>"></i>
                        <i class="fa fa-caret-down icon-on-right"></i>
                    <?php } ?>
                    <?php echo getArrayDef($action, 'caption');?>
                </button>

                <ul class="dropdown-menu">
                    <?php foreach($action['items'] as $item) { ?>
                        <li>
                            <a href="#" class ="<?php echo (getArrayDef($item, 'xtype')=='link'?'rowactionlink2': 'rowactionbutton'); ?>" data-action="<?php echo getArrayDef($item, 'action');?>"
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
            <button class ="rowactionbuttonlink btn btn-minier <?php echo getArrayDef($action, 'class');?>" data-rel="tooltip" title="" data-original-title="<?php echo $action['hint']?>"
                data-action="<?php echo getArrayDef($action, 'target');?>"
                <?php echo (isset($action['modalwidth']))?'data-modalwidth="'.$action['modalwidth'].'"':''; ?>
                >
            <?php if(isset($action['icon'])) { ?>
                <i class="icon <?php echo $action['icon']; ?>"></i>
            <?php } ?>
            <?php echo getArrayDef($action, 'caption');?>
            </button>
        <?php } ?>
    <?php } ?>
<?php } ?>



