<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty build_resource modifier plugin
 *
 * Type:     modifier<br>
 * Name:     build_resource<br>
 * Purpose:  simple link modifier
 *
 * @author Thomas Shone
 * @param string
 * @return string
 */
function smarty_modifier_build_resource($string)
{
    return Render_Helper_Utility::BuildResource($string);
}
