<?php /* Smarty version Smarty-3.1.19, created on 2017-01-02 04:47:42
         compiled from "/var/www/html/prestashop/backoffice/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1833017380586a21bebb07a2-11271216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae2db656f11ab3f234eb40ce9ecaa3eecc856914' => 
    array (
      0 => '/var/www/html/prestashop/backoffice/themes/default/template/content.tpl',
      1 => 1480071784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1833017380586a21bebb07a2-11271216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586a21bebb4b18_13887735',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a21bebb4b18_13887735')) {function content_586a21bebb4b18_13887735($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
