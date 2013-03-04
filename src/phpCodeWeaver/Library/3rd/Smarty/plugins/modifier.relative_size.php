<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty relative size modifier plugin
 * 
 * Type:     modifier<br>
 * Name:     relative_size<br>
 * Purpose:  basic relative size modifier
 * 
 * @author Thomas Shone 
 * @param integer 
 * @return string 
 */
function smarty_modifier_relative_size($iSize)
{
    return Render_Helper_Utility::RelativeSize($iSize);
}