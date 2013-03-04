<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty to_dom_label modifier plugin
 *
 * Type:     modifier<br>
 * Name:     to_dom_label<br>
 * Purpose:  modify a string to a dom label
 *
 * @author Thomas Shone
 * @param string
 * @return string
 */
function smarty_modifier_to_dom_label($string)
{
    return Render_Helper_Utility::CamelCaseToDom($string);
}
