<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 04:47:42
         compiled from "/var/www/html/prestashop/backoffice/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:554297736586a21bec4c543-80046266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b798b3f33073a03b1ac24917bd7b7c8907bfccb5' => 
    array (
      0 => '/var/www/html/prestashop/backoffice/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1480071784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '554297736586a21bec4c543-80046266',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a21bec4df68_90185696',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a21bec4df68_90185696')) {function content_586a21bec4df68_90185696($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
