<?php
Class User_Model extends CI_Model{
	
	/**
	 * Primary Table name
	 */
	private $table = "user";

	/**
	 * Default Process Type
	 */


	/**
 	 * Add new user
	 */
	public function add($data){}

	public function delete(){}

	public function update(){}

	/**
	 * Superior Types are:
	 * Estimator Head
	 * Sales manager
	 * Sales Supervisor
	 * Sales Admin
	 */
	public function getUIDBySuperior($superior_type){}

}