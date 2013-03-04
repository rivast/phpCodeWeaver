<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty domify modifier plugin
 * 
 * Type:     modifier<br>
 * Name:     domify<br>
 * Purpose:  basic relative domifier
 * 
 * @author Thomas Shone 
 * @param string 
 * @return string 
 */
function smarty_modifier_domify($sLabel)
{
    return Render_Helper_Utility::CamelCaseToDom($sLabel);
}