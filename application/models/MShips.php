<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class MShips extends CI_Model
{
	
	public function save($post)
	{
		$name_ship_list = $this->db->escape($post["name_ship_list"]);
		$image_ship_list = $this->db->escape($post["image_ship_list"]);

		$sql = $this->db->query("INSERT INTO tb_ships_list VALUES (NULL, $name_ship_list, $image_ship_list)");

		if($sql){
			return true;
		}else{
		return false;
		}
	}

	public function getAll()
	{
		return $this->db->get("tb_ships_list")->result();
	}

	public function update($post, $id)
	{
		$name_ship_list = $this->db->escape($post["name_ship_list"]);
		$image_ship_list = $this->db->escape($post["image_ship_list"]);


		$sql = $this->db->query("UPDATE tb_ships_list SET name_ship_list = $name_ship_list, image_ship_list = $image_ship_list WHERE id_ship_list =" .intval($id));

		return true;
	}

	public function getById($id)
	{
		return $this->db->get_where("tb_ships_list", ["id_ship_list" => $id])->row();
	}

	public function delete($id)
	{
		return $this->db->delete("tb_ships_list", array("id_ship_list"=>$id));
	}
}
?>