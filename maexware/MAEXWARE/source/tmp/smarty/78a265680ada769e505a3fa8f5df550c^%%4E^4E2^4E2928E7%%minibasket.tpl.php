<?php /* Smarty version 2.6.34, created on 2025-02-07 16:19:55
         compiled from widget/minibasket/minibasket.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'widget/minibasket/minibasket.tpl', 12, false),array('modifier', 'cat', 'widget/minibasket/minibasket.tpl', 75, false),array('function', 'oxprice', 'widget/minibasket/minibasket.tpl', 21, false),array('function', 'oxmultilang', 'widget/minibasket/minibasket.tpl', 28, false),array('function', 'oxgetseourl', 'widget/minibasket/minibasket.tpl', 75, false),array('function', 'oxscript', 'widget/minibasket/minibasket.tpl', 83, false),array('block', 'oxhasrights', 'widget/minibasket/minibasket.tpl', 44, false),)), $this); ?>
<?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount() >= 5): ?>
    <?php $this->assign('blScrollable', true); ?>
<?php endif; ?>

<?php ob_start(); ?>
    <?php $_from = $this->_tpl_vars['oxcmp_basket']->getContents(); if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['miniBasketList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['miniBasketList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_product']):
        $this->_foreach['miniBasketList']['iteration']++;
?>
        
            <?php $this->assign('minibasketItemTitle', $this->_tpl_vars['_product']->getTitle()); ?>
            <div class="row minibasket-item-row">
                <div class="<?php if ($this->_tpl_vars['_prefix'] == 'modal'): ?>col-4 col-sm-2<?php else: ?>col-4<?php endif; ?> minibasket-item-col text-center">
                    <span class="badge"><?php echo $this->_tpl_vars['_product']->getAmount(); ?>
</span>
                    <a class="minibasket-link" href="<?php echo $this->_tpl_vars['_product']->getLink(); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
">
                        <img class="minibasket-img" src="<?php echo $this->_tpl_vars['_product']->getIconUrl(); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
"/>
                    </a>
                </div>
                <div class="<?php if ($this->_tpl_vars['_prefix'] == 'modal'): ?>col-4 col-sm-7<?php else: ?>col-4<?php endif; ?> minibasket-item-col">
                    <a class="minibasket-link" href="<?php echo $this->_tpl_vars['_product']->getLink(); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</a>

                </div>
                <div class="<?php if ($this->_tpl_vars['_prefix'] == 'modal'): ?>col-4 col-sm-3<?php else: ?>col-4<?php endif; ?> minibasket-item-col text-right">
                    <span class="price"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['_product']->getPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</span>
                </div>
            </div>
        
    <?php endforeach; endif; unset($_from); ?>
    <div class="row minibasket-total-row">
        <div class="<?php if ($this->_tpl_vars['_prefix'] == 'modal'): ?>col-8 col-sm-9<?php else: ?>col-8<?php endif; ?> minibasket-total-col">
            <strong><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL'), $this);?>
</strong>
        </div>
        <div class="<?php if ($this->_tpl_vars['_prefix'] == 'modal'): ?>col-4 col-sm-3<?php else: ?>col-4<?php endif; ?> minibasket-total-col text-right">
            <strong>
                <?php if ($this->_tpl_vars['oxcmp_basket']->isPriceViewModeNetto()): ?>
                    <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oxcmp_basket']->getNettoSum(),'currency' => $this->_tpl_vars['currency']), $this);?>

                <?php else: ?>
                    <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oxcmp_basket']->getBruttoSum(),'currency' => $this->_tpl_vars['currency']), $this);?>

                <?php endif; ?>
            </strong>
        </div>
    </div>
<?php $this->_smarty_vars['capture']['cartTable'] = ob_get_contents(); ob_end_clean(); ?>


    <?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
        <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>

            <?php if ($this->_tpl_vars['_prefix'] == 'modal'): ?>
                <div class="modal fade basketFlyout" id="basketModal" tabindex="-1" role="dialog" aria-labelledby="basketModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <h4 class="modal-title" id="basketModalLabel"><?php echo $this->_tpl_vars['oxcmp_basket']->getItemsCount(); ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'ITEMS_IN_BASKET'), $this);?>
</h4>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only"><?php echo smarty_function_oxmultilang(array('ident' => 'CLOSE'), $this);?>
</span>
                                </button>
                            </div>
                            
                            
                            <div class="modal-body">
                                <?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
                                    <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                        <div id="<?php echo $this->_tpl_vars['_prefix']; ?>
basketFlyout" class="basketFlyout">
                                            <?php echo $this->_smarty_vars['capture']['cartTable']; ?>

                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/minibasket/countdown.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        </div>
                                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                                <?php endif; ?>
                            </div>
                            
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_MINIBASKET_CONTINUE_SHOPPING'), $this);?>
</button>
                                <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=basket") : smarty_modifier_cat($_tmp, "cl=basket"))), $this);?>
" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="<?php echo smarty_function_oxmultilang(array('ident' => 'DISPLAY_BASKET'), $this);?>
">
                                    <i class="fa fa-shopping-cart"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'DISPLAY_BASKET'), $this);?>

                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <?php echo smarty_function_oxscript(array('add' => "$('#basketModal').modal('show');"), $this);?>

            <?php else: ?>
                
                    <p class="title">
                        <strong><?php echo $this->_tpl_vars['oxcmp_basket']->getItemsCount(); ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'ITEMS_IN_BASKET'), $this);?>
</strong>
                    </p>
                

                <div id="<?php echo $this->_tpl_vars['_prefix']; ?>
basketFlyout" class="basketFlyout<?php if ($this->_tpl_vars['blScrollable']): ?> scrollable<?php endif; ?>">
                    

                    <div class="minibasket">
                        <?php echo $this->_smarty_vars['capture']['cartTable']; ?>

                    </div>

                        <div class="clearfix">
                            
                        </div>
                    
                </div>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/minibasket/countdown.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                
                    <p class="functions clear text-right">
                        <?php if ($this->_tpl_vars['oxcmp_user']): ?>
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=payment") : smarty_modifier_cat($_tmp, "cl=payment"))), $this);?>
" class="btn btn-primary"><?php echo smarty_function_oxmultilang(array('ident' => 'CHECKOUT'), $this);?>
</a>
                        <?php else: ?>
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=user") : smarty_modifier_cat($_tmp, "cl=user"))), $this);?>
" class="btn btn-primary"><?php echo smarty_function_oxmultilang(array('ident' => 'CHECKOUT'), $this);?>
</a>
                        <?php endif; ?>
                        <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=basket") : smarty_modifier_cat($_tmp, "cl=basket"))), $this);?>
" class="btn btn-outline-dark"><?php echo smarty_function_oxmultilang(array('ident' => 'DISPLAY_BASKET'), $this);?>
</a>
                    </p>
                
            <?php endif; ?>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php else: ?>
        
            <div class="alert alert-info"><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_EMPTY'), $this);?>
</div>
        
    <?php endif; ?>