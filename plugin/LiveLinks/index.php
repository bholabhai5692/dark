<?php
require_once '../../videos/configuration.php';

$plugin = AVideoPlugin::loadPluginIfEnabled('LiveLinks');

if (empty($plugin) || !$plugin->canAddLinks()) {
    forbiddenPage(__("You can not do this"));
}
?>
<!DOCTYPE html>
<html lang="<?php echo getLanguage(); ?>">
    <head>
        <title><?php echo __("Live Links") . $config->getPageTitleSeparator() . $config->getWebSiteTitle(); ?></title>
        <?php
        include $global['systemRootPath'] . 'view/include/head.php';
        ?>
    </head>
    <body class="<?php echo $global['bodyClass']; ?>">
        <?php
        include $global['systemRootPath'] . 'view/include/navbar.php';
        ?>
        <div class="container">
            <?php
                    include_once './view/panel.php';
            ?>
        </div>
        <?php
        include $global['systemRootPath'] . 'view/include/footer.php';
        ?>
    </body>
</html>
