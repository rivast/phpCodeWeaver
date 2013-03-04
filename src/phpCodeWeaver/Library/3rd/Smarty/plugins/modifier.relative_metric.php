<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty relative metric modifier plugin
 * 
 * Type:     modifier<br>
 * Name:     relative_metric<br>
 * Purpose:  basic relative metric modifier
 * 
 * @author Thomas Shone 
 * @param integer 
 * @return string 
 */
function smarty_modifier_relative_metric($iSize)
{
    return Render_Helper_Utility::RelativeMetric($iSize);
}