<?php 

/** 
* Generated at: 2017-01-03T07:30:13+01:00
* Inheritance: no
* Variants: no
* Changed by: admin (2)
* IP: 127.0.0.1


Fields Summary: 
- localizedfields [localizedfields]
-- Link [link]
-- HeadDes [href]
*/ 

namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\CLink\Listing getByLocalizedfields ($field, $value, $locale = null, $limit = 0) 
*/

class CLink extends Concrete {

public $o_classId = 3;
public $o_className = "cLink";
public $localizedfields;


/**
* @param array $values
* @return \Pimcore\Model\Object\CLink
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
	return $data;
}

/**
* Get Link - Link
* @return \Pimcore\Model\Object\Data\Link
*/
public function getLink ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("Link", $language);
	$preValue = $this->preGetValue("Link"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	 return $data;
}

/**
* Get HeadDes - HeadDes
* @return 
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
* @return \Pimcore\Model\Object\CLink
*/
public function setLocalizedfields ($localizedfields) {
	$this->localizedfields = $localizedfields;
	return $this;
}

/**
* Set Link - Link
* @param \Pimcore\Model\Object\Data\Link $Link
* @return \Pimcore\Model\Object\CLink
*/
public function setLink ($Link, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("Link", $Link, $language);
	return $this;
}

/**
* Set HeadDes - HeadDes
* @param  $HeadDes
* @return \Pimcore\Model\Object\CLink
*/
public function setHeadDes ($HeadDes, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("HeadDes", $HeadDes, $language);
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

