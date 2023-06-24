<?php 
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class M_wilayah extends CI_Model {
		
		/*function __construct() {
			parent::__construct();
		}*/
		
		function get_all_provinsi() {
			$this->db->select('*');
			$this->db->from('wilayah_provinsi');
			$this->db->order_by('nama_provinsi','ASC');
			$query = $this->db->get();
			return $query->result();
		}
		function get_all_kab($id_prov)
		{
			$this->db->select('*');
			$this->db->from('wilayah_kabupaten');
			$this->db->where('provinsi_id',$id_prov);
			$this->db->order_by('nama_kabupaten','ASC');
			return $this->db->get();

			//$this->db->get_where('wilayah_kabupaten',array('provinsi_id'=>$id_prov));
		}
		function get_all_kec($id_kab)
		{
			$this->db->select('*');
			$this->db->from('wilayah_kecamatan');
			$this->db->where('kabupaten_id',$id_kab);
			$this->db->order_by('nama_kecamatan','ASC');
			return $this->db->get();
			//$query = $this->db->get_where('wilayah_kecamatan',array('kabupaten_id'=>$id_kab));
		}
		function get_all_des($id_kec)
		{
			$this->db->select('*');
			$this->db->from('wilayah_desa');
			$this->db->where('kecamatan_id',$id_kec);
			$this->db->order_by('nama_desa','ASC');
			return $this->db->get();
			//$query = $this->db->get_where('wilayah_desa',array('kecamatan_id'=>$id_kec));
		}
		
	}
?>
