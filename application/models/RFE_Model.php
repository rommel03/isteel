<?php
Class RFE_Model extends CI_Model{
	
	/**
	 * Primary Table name
	 */
	private $table = "process";

	/**
	 * Default Process Type
	 */
	private $process_type = "rfe";

	/**
 	 * Creating new Request For Estimate
	 */
	public function add($data)
	{
		$data["type"] = $this->process_type;
		$data["uid"]  = UID();

		$this->db->insert($this->table, $data);
		return $data["uid"];
	}
}