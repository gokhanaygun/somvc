<?php
$buffer = new buffer();

$buffer->config = $config;

$buffer->database = $database;

$buffer->error_message = $error_msg;

$db = new Database($buffer->database['user'], $buffer->database['pass'], $buffer->database['name'], $buffer->database['server']); 
$db->query($buffer->database['charset']);
$buffer->db= $db;

include __Helper_Dir__.'/general/general.php';
$buffer->general = new general($db);

$request = new Request($buffer);

if(isset($_GET)){ $request->get = $_GET;}
if(isset($_POST)){ $request->post = $_POST;}
if(isset($_COOKIE)){ $request->cookie = $_COOKIE;}
if(isset($_REQUEST)){ $request->request = $_REQUEST;}
if(isset($_ENV)){ $request->env = $_ENV;}
if(isset($_FILES)){ $request->files = $_FILES;}
if(isset($_SERVER)){ $request->server = $_SERVER;}
$buffer->request = $request;



$buffer->router = new router($buffer, __Controller_Dir__);
$smarty = new Smarty;
$smarty->force_compile = false;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->template_dir = array(__View_Dir__);
$smarty->cache_dir = __Cache_Dir__;
$smarty->cache_lifetime = 120;
$smarty->allow_php_tag=true;
$smarty->php_handling = 3;
$buffer->template = $smarty;

include __Helper_Dir__.'/session/session.php';
include __Helper_Dir__.'/redirect/redirect.php';
$buffer->redirect = new redirect();
$buffer->session = new session();


$buffer->router->get_elementer();
$buffer->router->load();

?>
