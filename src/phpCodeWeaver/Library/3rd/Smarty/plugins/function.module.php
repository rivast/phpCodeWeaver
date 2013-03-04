<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage PluginsFunction
 */

/**
 * Smarty {module} function plugin
 *
 * Type:     function<br>
 * Name:     module<br>
 * Purpose:  include clickatell render framework modules in a template
 *
 * @author Chris Brand
 * @param array $params
 * @param Smarty_Internal_Template $template template object
 * @return string|null
 */
function smarty_function_module($params, $template)
{
    if (isset($params['template']) && APPLICATION != '')
    {
        #-> Determine module
        $sClass = "Application_". APPLICATION ."_Module_".$params['template'];

        #-> params?
        unset($params['template']);
        foreach ($params as $key => $value) {
            $_GET[$sClass.'_'.ucfirst($key)] = $value;
        }

        $sResult = "";

        #-> Invoke controller
        try
        {
            $oController = new $sClass();
            $oResponse = $oController->Run('ActionModule');
            $sResult = $oResponse->GetBody();
        } 
        catch (Exception $e)
        {
            error_log(print_r($e->getMessage(), 1));
        }

        return $sResult;
    }
    else
    {
        return null;
    }  
}

?>
