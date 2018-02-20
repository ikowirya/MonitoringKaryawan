<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Divisi_Model extends CI_Model {

		public function GetDivisi()
		{
			$query = $this->db->get('divisi');
			return $query;
		}

		
}
/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>