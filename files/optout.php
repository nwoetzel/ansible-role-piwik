<?php
# https://www.slicewise.net/php/piwik-absichern/
if ($_GET['module'] === 'CoreAdminHome' && $_GET['action'] === 'optOut') {
    require_once('index.php');
} else {
    header("HTTP/1.1 404 Not Found");
    include("error404.php");
    exit;
}
