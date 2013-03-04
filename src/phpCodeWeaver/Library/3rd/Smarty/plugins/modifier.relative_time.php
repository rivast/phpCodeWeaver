<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty relative time modifier plugin
 * 
 * Type:     modifier<br>
 * Name:     relative_time<br>
 * Purpose:  basic relative time modifier
 * 
 * @author Thomas Shone 
 * @param integer 
 * @return string 
 */
function smarty_modifier_relative_time($iTimestamp)
{
    return Render_Helper_Utility::RelativeTime($iTimestamp);
} 