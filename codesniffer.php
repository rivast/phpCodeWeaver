<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CodeSniffer</title>
  </head>

<body>
<?php

/**
 *
 * CodeSniffer - access this via browser for nice report ;-)
 *
 * @category	CodeSniffer
 * @author 		Zachie du Bruyn
 *
 */


function render_xml_data($sXml) {
	$aXml = new SimpleXMLElement($sXml);

	foreach ($aXml->file as $oRecord) {
		$aFileDetail = $oRecord->attributes();
		$sFilename = $aFileDetail[0];
		$iErrors   = $aFileDetail[1];
		$iWarnings = $aFileDetail[2]; 

		$aWarnings = array();
		$aErrors   = array();

		if ($iWarnings > 1) {
			$aWarnings = $oRecord->warning;
		} else {
			$aWarnings[] = $oRecord->warning;
		}

		if ($iErrors > 1) {
			$aErrors = $oRecord->error;
		} else {
			$aErrors[] = $oRecord->error;
		}

		echo '<div class="file-record">'."\n";

		echo "<h3>$sFilename</h3>\n";

		if ((int)$iWarnings) {
			echo "<table>\n";
			echo "\t<tr>\n";
			echo "\t\t<td>Line</td>\n";
			echo "\t\t<td>Severity</td>\n";
			echo "\t\t<td>Description</td>\n";
			echo "\t\t<td>Source</td>\n";
			echo "\t</tr>";

			foreach ($aWarnings as $oWarning) {

				$aWarning = $oWarning->attributes();
				echo "\t<tr>\n";
				echo "\t\t<td>{$aWarning['line']}</td>\n";
				echo "\t\t<td>{$aWarning['severity']}</td>\n";
				echo "\t\t<td>{$oWarning}</td>\n";
				echo "\t\t<td>{$aWarning['source']}</td>\n";
				echo "\t</tr>";
			}
			echo "</table>\n";
		}

		if ((int)$iErrors) {
			echo "<table>\n";
			echo "\t<tr>\n";
			echo "\t\t<td>Line</td>\n";
			echo "\t\t<td>Severity</td>\n";
			echo "\t\t<td>Description</td>\n";
			echo "\t\t<td>Source</td>\n";
			echo "\t</tr>";

			foreach ($aErrors as $oError) {

				$aError = $oError->attributes();
				echo "\t<tr>\n";
				echo "\t\t<td>{$aError['line']}</td>\n";
				echo "\t\t<td>{$aError['severity']}</td>\n";
				echo "\t\t<td>{$oError}</td>\n";
				echo "\t\t<td>{$aError['source']}</td>\n";
				echo "\t</tr>";
			}
			echo "</table>\n";
		}	

		echo "</div>\n";

//		var_dump($aWarnings);
//		var_dump($aErrors);
	}
}

$sCommand = 'phpcs --tab-width=4 --standard=PSR2 --extensions=php --ignore=*/3rd/*,codesniffer.php --report=xml ./';

exec($sCommand, $sOutput);

$sOutput = implode("\n", $sOutput);

//var_dump($sOutput);

render_xml_data($sOutput);

?>
</body>
</html>