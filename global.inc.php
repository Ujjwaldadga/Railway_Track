<?php
	/**
	 * Gets the current URL of the web server running the sample code
	 *
	 * @return array
	 */
	function getCurrentUrl() {

		$url = array();

		// set protocol
		$url['protocol'] = 'http://';
		if (isset($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) === 'on' || $_SERVER['HTTPS'] == 1)) {
			$url['protocol'] = 'https://';
		} elseif (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) {
			$url['protocol'] = 'https://';
		}

		// set host
		$url['host'] = $_SERVER['HTTP_HOST'];
		// set request uri in a secure way
		$url['request_uri'] = $_SERVER['REQUEST_URI'];

		return $url;
	}

	/**
	 * Gets the root directory of the Sample Code
	 *
	 * @param $urlArray
	 * @return string
	 */
	function getRoot($urlArray){

		$pathArray = explode('/', $urlArray['request_uri']);

		return $pathArray[1];
	}

	/**
	 * @param $urlArray
	 * @return string
	 */
	function getFinalDirectory($urlArray){

		$pathArray      = explode('/', $urlArray['request_uri']);
		$numDirectories = count($pathArray);
		$finalDirectory = '';

		for($i=0;$i<($numDirectories-1);$i++){

			$finalDirectory .= $pathArray[$i].'/';
		}

		return $finalDirectory;
	}

	/**
	 * generates a string reference according to Date/Time
	 *
	 * @return string
	 */
	function generateReference(){
		return 'pgtest_' . getDateTime('YmdHis');
	}

	function getDateTime($format){
		$dateTime = new DateTime();
		return $dateTime->format($format);
	}

	function generateCountrySelectOptions(){
		$options = '';
		$country = 'ZAF';

		$mostUsedCountryArray = array(
			'DEU' => 'Germany',
			'ZAF' => 'South Africa',
			'USA' => 'United States'
		);

		$countryArray = array(
			
			'ZWE'  => 'Zimbabwe'
		);

		$defaultSet = false;

		$options .= '<optgroup label="">
    <option value="" >Select Country</option>
</optgroup>';

		$options .= '<optgroup label="Most Used">';
		foreach ($mostUsedCountryArray as $id => $name) {
			$options .= '   <option value="'.$id.'" ';
			if ($country == $id && !$defaultSet) {
				$options .= 'selected="selected" ';
				$defaultSet = true;
			}
			$options .= '>'.$name.'</option>';
		}

		$options .= '</optgroup>';
		$options .= '<optgroup label="All Countries">';

		foreach ( $countryArray as $id => $name) {

			$options .= '   <option value="'.$id.'" ';
			if ($country == $id && !$defaultSet) {
				$options .= 'selected="selected" ';
				$defaultSet = true;
			}
			$options .= '>'.$name.'</option>';
		}

		$options .= '</optgroup>';

		return $options;
	}

	$fullPath  = getCurrentUrl();
	$root      = getRoot($fullPath);
	$directory = getFinalDirectory($fullPath);
