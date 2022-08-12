<?php
header('Content-Type: application/json');
require_once '../../../videos/configuration.php';
require_once $global['systemRootPath'] . 'plugin/LiveLinks/Objects/LiveLinksTable.php';

$obj = new stdClass();
$obj->error = true;
$obj->msg = "";
$obj->date = date('Y-m-d H:i:s');
$obj->mysqlDate = ObjectYPT::getNowFromDB();
$obj->convertedDate = ObjectYPT::clientTimezoneToDatabaseTimezone($obj->date);
$obj->start_date = $_POST['start_date'];
$obj->end_date = $_POST['end_date'];

$plugin = AVideoPlugin::loadPluginIfEnabled('LiveLinks');

if(!$plugin->canAddLinks()){
    $obj->msg = "You cant add links";
    die(json_encode($obj));
}

if(!empty($_POST['start_date'])){
    //$_POST['start_date'] = conver
    $_POST['start_date'] = convertFromMyTimeTODefaultTimezoneTime($_POST['start_date']);
}
if(!empty($_POST['end_date'])){
    //$_POST['start_date'] = conver
    $_POST['end_date'] = convertFromMyTimeTOMySQL($_POST['end_date']);
}

$obj->start_date_new = $_POST['start_date'];
$obj->end_date_new = $_POST['end_date'];

$o = new LiveLinksTable(@$_POST['linkId']);
$o->setDescription($_POST['description']);
$o->setCategories_id($_POST['categories_id']);
$o->setEnd_date($_POST['end_date']);
$o->setLink($_POST['link']);
$o->setStart_date($_POST['start_date']);
$o->setStatus($_POST['status']);
$o->setTitle($_POST['title']);
$o->setType($_POST['type']);

if($id = $o->save()){
    $o = new LiveLinksTable($id);
    $o->deleteAllUserGorups();
    $o->addUserGorups($_POST['userGroups']);
    $obj->error = false;
}
echo json_encode($obj);
