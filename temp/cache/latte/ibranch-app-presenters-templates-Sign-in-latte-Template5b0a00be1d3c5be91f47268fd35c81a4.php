<?php
// source: C:\xampp\htdocs\ibranch\app\presenters/templates/Sign/in.latte

class Template5b0a00be1d3c5be91f47268fd35c81a4 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('ea93fb5896', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbdc9127ef55_content')) { function _lbdc9127ef55_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;call_user_func(reset($_b->blocks['head']), $_b, get_defined_vars())  ?>
<div id="<?php echo $_control->getSnippetId('signInForm') ?>"><?php call_user_func(reset($_b->blocks['_signInForm']), $_b, $template->getParameters()) ?>
</div>
<?php
}}

//
// block head
//
if (!function_exists($_b->blocks['head'][] = '_lba421100d0d_head')) { function _lba421100d0d_head($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<link rel="stylesheet" media="screen,projection,tv" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/signin.css">
<?php
}}

//
// block _signInForm
//
if (!function_exists($_b->blocks['_signInForm'][] = '_lb07dd86bfc1__signInForm')) { function _lb07dd86bfc1__signInForm($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('signInForm', FALSE)
?>                    <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["signInForm"], array('class' => "form-signin")) ?>

                        <h2 class="form-signin-heading">Please sign in</h2>


<?php if ($form->hasErrors()) { ?>                        <div class="bs-callout bs-callout-danger">
                            <h4>Fill form correctly!</h4>
<?php if ($form->hasErrors()) { ?>                            <ul class=error>
<?php $iterations = 0; foreach ($form->errors as $error) { ?>                                <li><?php echo Latte\Runtime\Filters::escapeHtml($error, ENT_NOQUOTES) ?></li>
<?php $iterations++; } ?>
                            </ul>
<?php } ?>
                        </div>
<?php } ?>

                        <?php echo $_form["username"]->getControl()->addAttributes(array('class' => "form-control", 'placeholder' => "Login", 'required', 'autofocus' => true)) ?>
 <?php ob_start() ?><span class=error><?php ob_start() ;echo Latte\Runtime\Filters::escapeHtml($form['username']->error, ENT_NOQUOTES) ;$_l->ifcontent = ob_get_contents(); ob_end_flush() ?></span>
<?php rtrim($_l->ifcontent) === "" ? ob_end_clean() : ob_end_flush() ?>
                        <?php echo $_form["password"]->getControl()->addAttributes(array('class' => "form-control", 'placeholder' => "Password", 'required')) ?>
 <?php ob_start() ?><span class=error><?php ob_start() ;echo Latte\Runtime\Filters::escapeHtml($form['password']->error, ENT_NOQUOTES) ;$_l->ifcontent = ob_get_contents(); ob_end_flush() ?></span>
<?php rtrim($_l->ifcontent) === "" ? ob_end_clean() : ob_end_flush() ?>
                            <?php if ($_label = $_form["remember"]->getLabel()) echo $_label->addAttributes(array('class' => "checkbox"))->startTag() ?>
 <?php echo $_form["remember"]->getControl() ?> <?php if ($_label) echo $_label->endTag() ?>

                            <br><br>
                            <?php echo $_form["send"]->getControl()->addAttributes(array('class' => "btn btn-lg btn-orange btn-block")) ?>

                    <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd($_form) ?>

<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}