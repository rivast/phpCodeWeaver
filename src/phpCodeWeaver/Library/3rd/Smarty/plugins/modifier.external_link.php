<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty external_link modifier plugin
 *
 * Type:     modifier<br>
 * Name:     external_link<br>
 * Purpose:  simple external_link modifier
 *
 * @author Thomas Shone
 * @param string
 * @return string
 */
function smarty_modifier_external_link($string)
{
    return BuildExternalLink($string);
}