<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

	public function index()
	{
		$this->load->view('anasayfa');
	}

	public function semt_getir(){
		$ilce_id = $_POST['ilce'];
		$ilce_getir = $this->db->where('ILCE_ID',$ilce_id)->get('semt')->result();
		foreach ($ilce_getir as $key => $value) {
			echo '<option value="' . $value->SEMT_ID . '">' . $value->SEMT_ADI . '</option>';
		}
	}
	public function mahalle_getir(){
		$semt_id = $_POST['semt'];
		$mahalle_getir = $this->db->where('SEMT_ID',$semt_id)->get('mahalle_koy')->result();
		foreach ($mahalle_getir as $key => $value) {
			echo '<option value="' . $value->MAH_ID . '">' . $value->MAHALLE_ADI . '</option>';
		}
	}

	public function kayit_ekle(){
		$kayit_ekle = $this->db->insert('ihbarlar',array(
			'ad_soyad' => $_POST['ad_soyad'],
			'irtibat_no' => $_POST['irtibat_no'],
			'yangin_mahali' => $_POST['yangin_mahali'],
			'yangin_turu' => $_POST['yangin_turu'],
			'yangin_sinifi' => $_POST['yangin_sinifi'],
			'yangin_sebebi' => $_POST['yangin_sebebi'],
			'yapi_sekli' => $_POST['yapi_sekil'],
			'olay_tarihi' => $_POST['olay_tarihi'],
			'ilce' => $_POST['ilce'],
			'semt' => $_POST['semt'],
			'mahalle' => $_POST['mahalle'],
			'yangin_kontrol_saati' => $_POST['yangin_kontrol_saat'],
			'yanan_sey_sahip' => $_POST['yanan_sey_sahip'],
			'giden_ekip_amir' => $_POST['giden_ekip_amir'],
			'arac_plakasi' => $_POST['arac_plakasi'],
			'personel_sayisi' => $_POST['personel_sayisi'],
			'cikis_saati' => $_POST['cikis_saati'],
			'varis_saati' => $_POST['varis_saati'],
			'elektrik_ekip_gelis_saati' => $_POST['elektrik_ekip_gelis_saati'],
			'saglik_ekip_gelis_saati' => $_POST['saglik_ekip_gelis_saati'],
			'emniyet_ekip_gelis_saati' => $_POST['emniyet_ekip_gelis_saati'],
			'dogalgaz_ekip_gelis_saati' => $_POST['dogalgaz_ekip_gelis_saati'],
			'yardimci_ekip_amiri' => $_POST['yardimci_ekip_amiri'],
			'yardimci_arac_plaka' => $_POST['yardimci_arac_plaka'],
			'yardimci_personel_sayisi' => $_POST['yardimci_personel_sayisi'],
			'yardimci_ekip_cikis_saati' => $_POST['yardimci_ekip_cikis_saati'],
			'yardimci_ekip_varis_saati' => $_POST['yardimci_ekip_varis_saati'],
			'olayin_goruldugu_durum' => $_POST['olayin_goruldugu_durum'],
			'sondurme_tur' => json_encode($_POST['sondurme_tur']),
			'kullanilan_su' => $_POST['kullanilan_su'],
			'kullanilan_kopuk' => $_POST['kullanilan_kopuk'],
			'kullanilan_kkt' => $_POST['kullanilan_kkt'],
			'sondurme_sonundaki_hasar_durumu' => $_POST['sondurme_sonrasi_hasar_durumu'],
			'sigorta_sirketi_adi' => $_POST['sigorta_sirketi_adi'],
			'sigorta_sirketi_bedeli' => $_POST['sigorta_sirketi_bedeli'],
			'arac_gerec_kaybi' => $_POST['arac_gerec_kaybi'],
			'yangin_yerini_teslim_alan' => $_POST['yangin_yerini_teslim_alan'],
			'ekibin_donus_tarihi' => $_POST['ekibin_donus_tarihi'],
			'ekibin_donus_saati' => $_POST['ekibin_donus_saati'],
			'ust_amiri' => $_POST['ust_amiri'],
			'yangina_el_koyan_ekip_amiri' => $_POST['yangina_el_koyan_ekip_amiri'],
			'onaylayan' => $_POST['onaylayan'],
			'olu_yarali' => $_POST['olu_yarali']
		));
		echo '<div class="alert alert-success">Kayit basariyla eklendi. Yonlendiriliyorsunuz</div>';
		echo '<script language="javascript">' .
		'setTimeout(function(){ window.location.href = "/anasayfa"; }, 3000);' .
		'</script>';
	}

}
