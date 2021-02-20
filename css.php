<?php
require_once('dataImage.php');
header('Content-Type: text/css;', 'charset=utf-8'); 

class CssSelector extends HtmlTag {
    
    // Call the construct of the parent class
	public function __construct() {
		parent:: __construct($className);
	}

	// Getter override
	public function getClass() {
		return '.'.$this->className;
	}
}

// Instance generation
$cssSelector = new CssSelector();

// Call each method
$cssSelector->getImage();

$cssSelector->getClass();
$cssSelector->setClass('imageItem');
$imgSelector = $cssSelector->getClass();

// CSS genertion
for ($i=0; $i <= $imageCount; $i++) { 

	// if ($i == 0) {
	// 	continue;
	// }	
	echo $imgSelector.$i.' {
		display: flex;
		justify-content: center;
		background-size: cover;
	}';
	echo $imgSelector.$i.' '.'h3' .'{
		display: flex;
		justify-content: center;
		position: absolute;
		top: 70%;
		-ms-transform: translate(-50%, -50%);
		-webkit-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
		margin: 0;
		padding: 0;
		font-size: 13px;
	}';
}

?>
 
