<?php 

class HTmlTag {

	// Define　property 
	protected $className;

	// Define a constructor that takes arguments
	public function __construct($className) {
		$this->className = $className;
	}

	// getter
    public function getClass() {
        return $this->className;
    }

    // setter
    public function setClass($className) {
        $this->className = $className;
    }

	// Store flienames in an array from the Image directory
	public function getImage() {
		global $imageItems;
		global $imageCount;
		$imageItems = array();
		$indexImages = glob('./image/*');
		$imageCount = count($indexImages);

		while ($i <= $imageCount) {
			foreach ($indexImages as $indexImage => $value) {
				// if ($indexImage == 0) {
				// 	continue;
				// }
				if ($i == $indexImage) {
					array_push($imageItems, $value);	
				}				
			}
			$i ++;
		}
	}
}
 ?>