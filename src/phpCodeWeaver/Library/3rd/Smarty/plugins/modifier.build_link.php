<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty build_link modifier plugin
 *
 * Type:     modifier<br>
 * Name:     build_link<br>
 * Purpose:  simple link modifier
 *
 * @author Thomas Shone
 * @param string
 * @return string
 */
function smarty_modifier_build_link($string)
{
    return Render_Helper_Utility::BuildLink($string);
}