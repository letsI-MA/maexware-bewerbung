<?php /* Smarty version 2.6.34, created on 2025-02-07 16:19:56
         compiled from widget/minibasket/minibasketmodal.tpl */ ?>
<?php if ($this->_tpl_vars['oxcmp_basket']->isNewItemAdded() && $this->_tpl_vars['oView']->getNewBasketItemMsgType() == 2): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/minibasket/minibasket.tpl", 'smarty_include_vars' => array('_prefix' => 'modal')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>