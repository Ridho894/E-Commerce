<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

	public function getAllGame($keyword = null)
	{
		if ($keyword) {
			$this->db->like('name', $keyword);
		}
		return $this->db->get('products')->result_array();
	}

	public function getAllBanner()
	{
		return $this->db->get('banners')->result_array();
	}

	public function getGameById($id)
	{
		return $this->db->get_where('products', ['id' => $id])->row_array();
	}
}

/* End of file Home_model.php */
