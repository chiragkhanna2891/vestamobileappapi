<?php

use Website\Controller\Action;
use Pimcore\Model\Object;
class DefaultController extends Action
{
    public function defaultAction(){
    }
	
	public function getDataAction(){
		$this->disableViewAutoRender();
		
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
	
		$responsedata=[];
		for($count=0;$count<count($request);$count++){
			$objectId=$request[$count]->objectId;
			$object=Object_Abstract::getById($objectId);
			$objectdata=$this->getObjectData($object);
			$responsedata.push($objectdata);
		}
		
		print_r($responsedata);
	}
	
	public function getObjectData($object){
		if($object instanceof Object\CHeadDesc){
				$this->getHeadDesData($object);
		}else if($object instanceof Object\CImage){
				$this->getImageData($object);
	    }else if($object instanceof Object\CLink){
				$this->getLinkData($object);
		}
	}
	
	public function getHeadDesData($object){
		$objectdata=array('heading'=>$object->getHeading(),'description'=>$object->getDescription());
		return $objectdata;
	}
	
	public function getImageData($object){
		$headdesobject=$object->getHeadDes();
		if(!empty($headdesobject)){
			$objectdata=$this->getHeadDesData($headdesobject);
		}
		if(!empty($object->getImage())){
			$objectdata['image']=$object->getImage()->__toString();
		}
		return $objectdata;
	}
	
	public function getLinkData($object){
		$headdesobject=$object->getHeadDes();
		if(!empty($headdesobject)){
			$objectdata=$this->getHeadDesData($headdesobject);
		}
		if(!empty($object->getLink())){
			$objectdata['link']=$object->getLink()->getText();
			$objectdata['path']=$object->getLink()->getPath();
		}
		return $objectdata;
	}
}
