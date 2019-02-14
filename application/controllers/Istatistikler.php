<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Istatistikler extends CI_Controller {

	public function index()
	{
		$veri = $this->db->get('ihbarlar');
		$count = $veri->num_rows();
		$veri = $veri->result();
		$sure = 0;
		if($count > 0){
			foreach ($veri as $key => $value) {
				$v = explode(':',$value->varis_saati);
				$v_saat = $v[0];
				$v_dakika = $v[1];
				$v_saniye = $v[2];
				$v_sure = ($v_saat * 60 * 60) + ($v_dakika * 60) + $v_saniye;
				$c = explode(':',$value->cikis_saati);
				$c_saat = $c[0];
				$c_dakika = $c[1];
				$c_saniye = $c[2];
				$c_sure = ($c_saat * 60 * 60) + ($c_dakika * 60) + $c_saniye;
			echo	$sure = $sure + ($v_sure - $c_sure);
			}
			$data['ortalama'] = ($sure / $count) >= 0 ? ($sure / $count) : 0;
		}else{
			$data['ortalama'] = $sure;
		}
		$this->load->view('istatistik',$data);
	}



}
