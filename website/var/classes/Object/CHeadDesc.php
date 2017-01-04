<?php 

/** 
* Generated at: 2017-01-03T07:28:26+01:00
* Inheritance: yes
* Variants: no
* Changed by: admin (2)
* IP: 127.0.0.1


Fields Summary: 
- localizedfields [localizedfields]
-- Heading [wysiwyg]
-- Description [wysiwyg]
*/ 

namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\CHeadDesc\Listing getByLocalizedfields ($field, $value, $locale = null, $limit = 0) 
*/

class CHeadDesc extends Concrete {

public $o_classId = 1;
public $o_className = "cHeadDesc";
public $localizedfields;


/**
* @param array $values
* @return \Pimcore\Model\Object\CHeadDesc
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
* Get Heading - Heading
* @return string
*/
public function getHeading ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("Heading", $language);
	$preValue = $this->preGetValue("Heading"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	 return $data;
}

/**
* Get Description - Description
* @return string
*/
public function getDescription ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("Description", $language);
	$preValue = $this->preGetValue("Description"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	 return $data;
}

/**
* Set localizedfields - 
* @param \Pimcore\Model\Object\Localizedfield $localizedfields
* @return \Pimcore\Model\Object\CHeadDesc
*/
public function setLocalizedfields ($localizedfields) {
	$this->localizedfields = $localizedfields;
	return $this;
}

/**
* Set Heading - Heading
* @param string $Heading
* @return \Pimcore\Model\Object\CHeadDesc
*/
public function setHeading ($Heading, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("Heading", $Heading, $language);
	return $this;
}

/**
* Set Description - Description
* @param string $Description
* @return \Pimcore\Model\Object\CHeadDesc
*/
public function setDescription ($Description, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("Description", $Description, $language);
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

