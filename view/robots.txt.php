<?php
global $global, $config;
if (!isset($global['systemRootPath'])) {
    require_once '../videos/configuration.php';
}

//header('Content-Type: application/json');
header("Content-Type: text/plain");
?>
Sitemap: <?php echo $global['webSiteRootURL']; ?>sitemap.xml
User-Agent: *
<?php echo $advancedCustom->robotsTXT->value; ?>