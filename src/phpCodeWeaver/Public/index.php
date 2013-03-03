<?php

/**
 *
 * index.php for our public folder - everything comes through here
 *
 * @category	index.php
 * @author 		Zachie du Bruyn
 *
 */

include_once(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'Shared.php');

$sUrlRequested = isset($_GET['url']) ? $_GET['url'] : '';

require_once (ROOT . DS . 'Bootstrap.php');