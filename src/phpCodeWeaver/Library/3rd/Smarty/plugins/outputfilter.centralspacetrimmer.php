<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsFilter
 */

/**
 * Custom space trimming plugin. Created for Clickatell Central
 * to strip more than 1 space and replace it with 1.
 *
 * @author   Chris Brand
 * @param string                   $source input string
 * @param Smarty_Internal_Template $smarty Smarty object
 * @return string filtered output
 */
function smarty_outputfilter_centralspacetrimmer($source, Smarty_Internal_Template $smarty)
{
    $source = preg_replace('!\s+!', ' ', $source);

    return $source;
}

?>