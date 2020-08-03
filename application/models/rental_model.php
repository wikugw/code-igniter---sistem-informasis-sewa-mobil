<?php
class rental_model extends CI_Model {

	public function get_data($table){
    return $this->db->get($table);
  }

  public function insert_data($data, $table){
    $this->db->insert($table,$data);
  }

	public function update_data($table, $data, $where){
		$this->db->update($table, $data, $where);
	}

	public function ambil_id_mobil($id){
		$hasil = $this->db->where('id_mobil', $id)->get('mobil');
		if ($hasil->num_rows() > 0 ) {
			return $hasil->result();
		} else {
			return false;
		}
	}

	public function delete_data($table, $where){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function cek_login($username,$password){
		$username = set_value('username');
		$password = set_value('password');

		$result = $this->db
									 ->where('username',$username)
									 ->where('password',md5($password))
									 ->limit('1')
									 ->get('customer');

		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return FALSE;
		}
	}

	public function update_password($id,$data,$table){
		$this->db->where($id);
		$this->db->update($table,$data);
	}
}
 ?>
