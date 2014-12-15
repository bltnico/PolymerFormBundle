<?php 

namespace Bltnico\Bundle\FormPolymerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Polymer input Exception
 *
 * @name ExceptionController
 * @author bltnico
 * @version 0.1
 */
class ExceptionController extends Controller 
{
	/**
	 *
	 * @throw Exception
	 */
	public function formNotExistAction()
	{
		throw new \Exception("The controller must return a form"); 
	}

	/**
	 * 
	 * @param (string) $field
	 * @throw Exception
	 */
	public function ignoreFieldNotExistAction($field) 
	{
		$err = sprintf("Field \"%s\" doesn't exist.", $field);

		throw new \Exception($err);
	}

	/**
	 * 
	 * @param (string) $type
	 * @throw Exception
	 */
	public function unknownFieldTypeAction($type) 
	{
		$err = sprintf("Unknow field %s", $type);

		throw new \Exception($err);
	}
}