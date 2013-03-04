<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty link modifier plugin
 *
 * Type:     modifier<br>
 * Name:     favicon<br>
 * Purpose:  simple favicon link generator
 *
 * @author Thomas Shone
 * @param string
 * @return string
 */
function smarty_modifier_favicon($string)
{
    return BuildFavicon($string);
}