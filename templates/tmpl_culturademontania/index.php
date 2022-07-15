<?php
defined('_JEXEC') or die;

/** Para usar el parámetro 'Page Class' y Cambiar la imagen de fondo **/
$menu = JSite::getMenu()->getActive();
$img = @str_replace('/', '-', $menu->route); // expediciones-inicio
$pagebackgroundglare = 'images/banners/home.jpg';
if(file_exists('images/banners/'.$img.'.jpg')) $pagebackgroundglare = 'images/banners/'.$img.'.jpg';

$pageclass = '';
if (is_object($menu)) $pageclass = $menu->params->get('pageclass_sfx');

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';

// Create alias for $this object reference:
$document = & $this;

// Shortcut for template base url:
$templateUrl = $document->baseurl . '/templates/' . $document->template;

// Initialize $view:
$view = $this->artx = new ArtxPage($this);
$view->componentWrapper();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $document->language; ?>" lang="<?php echo $document->language; ?>" dir="ltr">
<head>
 <jdoc:include type="head" />
 <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" type="text/css" />
 <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" type="text/css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/css/template.css" media="screen" />
 <meta name="google-translate-customization" content="fae26e253b01e618-22ed1aa6f8c66edc-g392988a7dab1815a-22"></meta>
 <!--[if IE 6]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie6.css" type="text/css" media="screen" /><![endif]-->
 <!--[if IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" type="text/css" media="screen" /><![endif]-->
 <script type="text/javascript">if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
 <script type="text/javascript" src="<?php echo $templateUrl; ?>/jquery.js"></script>
 <script type="text/javascript">jQuery.noConflict();</script>
 <script type="text/javascript" src="<?php echo $templateUrl; ?>/script.js"></script>
 <script type="text/javascript">if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
<style type="text/css">
#cul-page-background-glare{
   position: relative;
   top: 0;
   max-width:1920px;
   min-width: 979px;
   height:363px;
   margin: 0 auto;
   background-image: url('<?php echo $document->baseurl.'/'.$pagebackgroundglare; ?>');
   background-repeat: no-repeat;
   background-position: center top;
}
</style>
</head>
<body id="<?php echo $pageclass ? htmlspecialchars(trim($pageclass)) : 'default'; ?>">
<div id="cul-page-background-glare-wrapper">
    <div id="cul-page-background-glare"></div>
</div>
<div id="cul-main">
    <div class="cleared reset-box"></div>
<div class="cul-header">
<div class="cul-header-position">
    <div class="cul-header-wrapper">
        <div class="cleared reset-box"></div>
        <div class="cul-header-inner">
<a href="/" class="cul-headerobject"></a>
<div class="cul-top"><?php echo $view->position('position-0'); ?></div>

        </div>
    </div>
</div>

<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
<div class="cul-bar cul-nav">
<div class="cul-nav-outer">
<div class="cul-nav-wrapper">
<div class="cul-nav-inner">
	<?php if ($view->containsModules('position-28')) : ?>
	<div class="cul-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
	<?php endif; ?>
	<?php if ($view->containsModules('position-29')) : ?>
	<div class="cul-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
	<?php endif; ?>
	<?php echo $view->position('position-1'); ?>
</div>
</div>
</div>
</div>
<div class="cleared reset-box"></div>
<?php endif; ?>

</div>
<div class="cleared reset-box"></div>
<div class="cul-box cul-sheet">
	<div class="cul-box-body cul-sheet-body">
		<?php if ($view->containsModules('position-15')): ?>
			<div class="cul-portada">
				<?php echo $view->position('position-15', 'cul-nostyle'); ?>
			</div>
		<?php endif; ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33, 'position-18' => 34), 'cul-block'); ?>
<div class="cul-layout-wrapper">
    <div class="cul-content-layout">
        <div class="cul-content-layout-row">
<?php if ($view->containsModules('position-7', 'position-4', 'position-5')) : ?>
<div class="cul-layout-cell cul-sidebar1">
<?php echo $view->position('position-7', 'cul-block'); ?>
<?php echo $view->position('position-4', 'cul-block'); ?>
<?php echo $view->position('position-5', 'cul-block'); ?>

  <div class="cleared"></div>
</div>
<?php endif; ?>
<div class="cul-layout-cell cul-content">

<?php
  echo $view->position('position-19', 'cul-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
  echo $view->position('position-12', 'cul-nostyle');
  echo $view->positions(array('position-20' => 46, 'position-21' => 40), 'cul-article');
  if ($view->hasMessages())
    echo artxPost('<jdoc:include type="message" />');
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'cul-nostyle');
  echo $view->positions(array('position-23' => 45, 'position-24' => 50), 'cul-article');
  echo $view->position('position-25', 'cul-nostyle');
?>

  <div class="cleared"></div>
</div>
<?php if ($view->containsModules('position-6', 'position-8', 'position-3')) : ?>
<div class="cul-layout-cell cul-sidebar2">
<?php echo $view->position('position-6', 'cul-block'); ?>
<?php echo $view->position('position-8', 'cul-block'); ?>
<?php echo $view->position('position-3', 'cul-block'); ?>

  <div class="cleared"></div>
</div>
<?php endif; ?>

        </div>
    </div>
</div>
<div class="cleared"></div>


<?php //echo $view->positions(array('position-9' => 33, 'position-10' => 33, 'position-11' => 34), 'cul-block'); ?>
<?php echo $view->positions(array('position-9' => 100, 'position-10' => 50), 'cul-adcp'); ?>
<?php echo $view->position('position-26', 'cul-nostyle'); ?>

		<div class="cleared"></div>
    </div>
</div>
<div class="cul-footer">
    <div class="cul-footer-body">
        <div class="cul-footer-center">
            <div class="cul-footer-wrapper">
                <div class="cul-footer-text">
                    <?php echo $view->position('position-14'); ?>
                    <?php if ($view->containsModules('position-27')): ?>
                    <?php echo $view->position('position-27', 'cul-mnufooter'); ?>
                    <?php else: ?>
                    <?php ob_start(); ?>
<p><a href="#">Link1</a> | <a href="#">Link2</a> | <a href="#">Link3</a></p><p>Copyright Â© 2013. All Rights Reserved.</p>
<div class="cleared"></div>
<p class="cul-page-footer"></p>

                    <?php echo str_replace('%YEAR%', date('Y'), ob_get_clean()); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="cleared"></div>
    </div>
</div>

    <div class="cleared"></div>
</div>

<?php
if($view->containsModules('position-30')):
	echo '<div id="tmp_blogright">';
	echo $view->position('position-30');
	echo '</div>';
endif;
echo $view->position('debug'); ?>
</body>
</html>