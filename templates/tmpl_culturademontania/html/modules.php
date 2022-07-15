<?php
defined('_JEXEC') or die;

if (!defined('_ARTX_FUNCTIONS'))
  require_once dirname(__FILE__) . str_replace('/', DIRECTORY_SEPARATOR, '/../functions.php');

function modChrome_artstyle($module, &$params, &$attribs)
{
  $style = isset($attribs['artstyle']) ? $attribs['artstyle'] : 'cul-nostyle';
  $styles = array(
    'cul-nostyle' => 'modChrome_artnostyle',
    'cul-block' => 'modChrome_artblock',
    'cul-article' => 'modChrome_artarticle',
    'cul-vmenu' => 'modChrome_artvmenu'
  );
  // moduleclass_sfx support:
  //  '' or 'suffix'   - use default style, suffix will not be added to the module tag
  //                     but will be added to the module elements.
  //  ' suffix'        - adds suffix to the module root tag as well as to the module elements.
  //  'cul-...'        - overwrites module style.
  //  'cul-... suffix' - overwrites style and adds suffix to the module root tag and
  //                     to the module elements, does not add cul-... to the module elements.
  $classes = '';
  $sfx = $params->get('moduleclass_sfx');
  if (strlen($sfx) != 0) {
    if (' ' == $sfx[0])
      $classes = $sfx;
    else {
      $parts = explode(' ', $sfx, 2);
      if (in_array($parts[0], array_keys($styles))) {
        $style = $parts[0];
        if (count($parts) > 1)
          $classes = ' ' . $parts[1];
        $params->set('moduleclass_sfx', $classes);
      }
    }
  }
  $params->set('artx-module-classes', $classes);
  !call_user_func((isset($styles[$style])) ? $styles[$style]: 'modChrome_adcp', $module, $params, $attribs);
}

function modChrome_adcp($module, &$params, &$attribs)
{
if (!empty ($module->content)) : ?>
<div class="<?php echo $attribs['artstyle'].$params->get('artx-module-classes').$params->get('moduleclass_sfx'); ?>">
<?php if ($module->showtitle != 0) : ?>
<h3><?php echo $module->title; ?></h3>
<?php endif; ?>
<?php echo $module->content; ?>
</div>
<?php endif;
}

function modChrome_artnostyle($module, &$params, &$attribs)
{
if (!empty ($module->content)) : ?>
<div class="cul-nostyle <?php echo $params->get('moduleclass_sfx'); ?>">
<?php if ($module->showtitle != 0) : ?>
<h3><?php echo $module->title; ?></h3>
<?php endif; ?>
<?php echo $module->content; ?>
</div>
<?php endif;
}

function modChrome_artblock($module, &$params, &$attribs)
{
  if (!empty ($module->content))
    echo artxBlock(($module->showtitle != 0) ? $module->title : '', $module->content,
      $params->get('moduleclass_sfx')); //adcp
}

function modChrome_artvmenu($module, &$params, &$attribs)
{
  if (!empty ($module->content)) {
    if (function_exists('artxVMenuBlock'))
      echo artxVMenuBlock(($module->showtitle != 0) ? $module->title : '', $module->content,
        $params->get('artx-module-classes'));
    else
      echo artxBlock(($module->showtitle != 0) ? $module->title : '', $module->content,
        $params->get('artx-module-classes'));
  }
}

function modChrome_artarticle($module, &$params, &$attribs)
{
  if (!empty ($module->content)) {
    $data = array('classes' => $params->get('artx-module-classes'), 'content' => $module->content);
    if ($module->showtitle != 0)
      $data['header-text'] = $module->title;
    echo artxPost($data);
  }
}
