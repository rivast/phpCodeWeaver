<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsFilter
 */

/**
 * Custom space trimming plugin. Created for Clickatell Central
 * to strip more than 1 space and replace it with 1.
 *
 * @author   Chris Brand
 * @param string                   $source input string
 * @param Smarty_Internal_Template $smarty Smarty object
 * @return string filtered output
 */
function smarty_outputfilter_centralphptidy($source, Smarty_Internal_Template $smarty)
{
	// Controller Render and not Module
	$main = preg_match("/<html(.*)>/", $source);

	// Add &nbsp; to all empty tags
	$source = preg_replace("/<([^\/>]*)>([\s]?)*<(\/[^>]*)>/", "<$1>&nbsp;<$3>", $source);

	// Tidy configs
	$config = array(
           	'indent'         	=> true,
           	'indent-spaces'     => 4,
        	'wrap'				=> 0,
        	'vertical-space'	=> true,
        	'output-html'		=> true,
        );

	// Only wrap whole source if it's not a module
	if ($main)
	{
		// Split old code into lines
		$lines = explode("\n", $source);

	    $tidy = tidy_parse_string($source, $config, 'utf8');

		// Custom cleanup jobs
		$tidy->value = str_replace("\n</script>", "</script>", $tidy->value);
		$tidy->value = str_replace("\n</textarea>", "</textarea>", $tidy->value);
		$tidy->value = preg_replace("/<(div class=(\"clear\"|'clear'))>([^<.]*)<(\/div)>/s", "<$1><$4>", $tidy->value);

	    
	    // Errors
		if ($tidy->errorBuffer && $main) 
		{	
			// Global usage of Render_Debug, at this point the correct adapters are already set
			$errors = explode("\n", $tidy->errorBuffer);
			foreach ($errors as $error)
			{	
				// Ignore proprietary attr errors
				if (strpos($error, 'proprietary') === false) 
				{	
					// Get error line
					preg_match("/line\s([0-9]+)/", $error, $matches);
					$line = $matches[1];


					Render_Debug::LogWarn("HTML Warning", $error . " :: " . $lines[$line - 1]);
				}
			}
		}

		$source = $tidy->value;
	}

    return $source;
}

?>