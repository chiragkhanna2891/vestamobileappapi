<?php 

/** 
* Generated at: 2017-01-03T07:21:28+01:00
* Inheritance: yes
* Variants: no
* Changed by: admin (2)
* IP: 127.0.0.1


Fields Summary: 
- localizedfields [localizedfields]
-- Image [image]
-- HeadDes [href]
*/ 

namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\CImage\Listing getByLocalizedfields ($field, $value, $locale = null, $limit = 0) 
*/

class CImage extends Concrete {

public $o_classId = 2;
public $o_className = "cImage";
public $localizedfields;


/**
* @param array $values
* @return \Pimcore\Model\Object\CImage
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get localizedfields - 
* @return \Pimcore\Model\Object\Localizedfield
*/
public function getLocalizedfields () {
	$preValue = $this->preGetValue("localizedfields"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("localizedfields")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("localizedfields")->isEmpty($data)) {
		return $this->getValueFromParent("localizedfields");
	}
	return $data;
}

/**
* Get Image - Image
* @return \Pimcore\Model\Asset\Image
*/
public function getImage ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("Image", $language);
	$preValue = $this->preGetValue("Image"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	 return $data;
}

/**
* Get HeadDes - HeadDes
* @return \Pimcore\Model\Object\cHeadDesc
*/
public function getHeadDes ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("HeadDes", $language);
	$preValue = $this->preGetValue("HeadDes"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	 return $data;
}

/**
* Set localizedfields - 
* @param \Pimcore\Model\Object\Localizedfield $localizedfields
* @return \Pimcore\Model\Object\CImage
*/
public function setLocalizedfields ($localizedfields) {
	$this->localizedfields = $localizedfields;
	return $this;
}

/**
* Set Image - Image
* @param \Pimcore\Model\Asset\Image $Image
* @return \Pimcore\Model\Object\CImage
*/
public function setImage ($Image, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("Image", $Image, $language);
	return $this;
}

/**
* Set HeadDes - HeadDes
* @param \Pimcore\Model\Object\cHeadDesc $HeadDes
* @return \Pimcore\Model\Object\CImage
*/
public function setHeadDes ($HeadDes, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("HeadDes", $HeadDes, $language);
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

