<?php
/**
 * session_keepalive.php
 *
 * This page is requested every 10min to keep the session alive and kicking
 */
define('IN_MANAGER_MODE', true);
define('MODX_API_MODE', true);
include_once('../../index.php');
EvolutionCMS()->getSettings();
EvolutionCMS()->invokeEvent('OnManagerPageInit');
$ok = false;

if (isset($_SESSION['mgrToken']) && $_GET['tok'] == $_SESSION['mgrToken']) {
    $ok = true;
    EvolutionCMS()->updateValidatedUserSession();
}

header('Content-type: application/json');

echo $ok ? '{"status":"ok"}' : '{"status":"null"}';
