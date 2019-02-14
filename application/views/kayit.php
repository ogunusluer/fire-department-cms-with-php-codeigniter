<?php $this->load->view('header'); ?>

<div class="row">
  <div class="container">
    <div class="col-md-12 text-center">
      <h5>#<?=$ihbar->KAYIT_ID?> KAYIT BİLGİLERİ</h5>
    </div>
  </div>
</div>
<div class="row">
  <div class="container">
    <div class="col-md-12">
      İsim Soyisim : <?=$ihbar->ad_soyad?>
    </div>
    <div class="col-md-12">
      İrtibat Numarası : <?=$ihbar->irtibat_no?>
    </div>
    <div class="col-md-12">
      Yangın Mahali : <?=$ihbar->yangin_mahali?>
    </div>
    <div class="col-md-12">
      Yangın Türü : <?=$ihbar->yangin_turu?>
    </div>
    <div class="col-md-12">
      Yangın Sınıfı : <?=$this->db->where('yangin_sinif_id',$ihbar->yangin_sinifi)->get('yangin_siniflar')->row()->yangin_sinif?>
    </div>
    <div class="col-md-12">
      Yangın Sebebi : <?=$ihbar->yangin_sebebi?>
    </div>
    <div class="col-md-12">
      Yapı Şekli : <?=$this->db->where('yapi_sekil_id',$ihbar->yapi_sekli)->get('yapi_sekiller')->row()->yapi_sekil?>
    </div>
    <div class="col-md-12">
      Olay Tarihi : <?=$ihbar->olay_tarihi?>
    </div>
    <div class="col-md-12">
      İlçe : <?=$this->db->where('ILCE_ID',$ihbar->ilce)->get('ilce')->row()->ILCE_ADI?>
    </div>
    <div class="col-md-12">
      Semt : <?=$this->db->where('SEMT_ID',$ihbar->semt)->get('semt')->row()->SEMT_ADI?>
    </div>
    <div class="col-md-12">
      Mahalle : <?=$this->db->where('MAH_ID',$ihbar->mahalle)->get('mahalle_koy')->row()->MAHALLE_ADI?>
    </div>
    <div class="col-md-12">
      Yangının kontrole alınma saati : <?=$ihbar->yangin_kontrol_saati?>
    </div>
    <div class="col-md-12">
      Giden Ekibin Amiri : <?=$ihbar->giden_ekip_amir?>
    </div>
    <div class="col-md-12">
      Araç Plakası : <?=$ihbar->arac_plakasi?>
    </div>
    <div class="col-md-12">
      Personel Sayısı : <?=$ihbar->personel_sayisi?>
    </div>
    <div class="col-md-12">
      Çıkış Saati : <?=$ihbar->cikis_saati?>
    </div>
    <div class="col-md-12">
      Varış Saati : <?=$ihbar->varis_saati?>
    </div>
    <div class="col-md-12">
      Elektrik Arıza Ekibinin Geliş Saati : <?=$ihbar->elektrik_ekip_gelis_saati?>
    </div>
    <div class="col-md-12">
      112 Acil Servis Geliş Saati : <?=$ihbar->saglik_ekip_gelis_saati?>
    </div>
    <div class="col-md-12">
      Emniyet veya Jandarma Geliş Saati : <?=$ihbar->emniyet_ekip_gelis_saati?>
    </div>
    <div class="col-md-12">
      Doğalgaz Ekibi Geliş Saati : <?=$ihbar->dogalgaz_ekip_gelis_saati?>
    </div>
    <hr>
    <h6>Yardımcı Ekip Bilgileri</h6>
    <div class="col-md-12">
      Giden Ekibin Amiri : <?=$ihbar->yardimci_ekip_amiri?>
    </div>
    <div class="col-md-12">
      Araç Plakası : <?=$ihbar->yardimci_arac_plaka?>
    </div>
    <div class="col-md-12">
      Personel Sayısı : <?=$ihbar->yardimci_personel_sayisi?>
    </div>
    <div class="col-md-12">
      Çıkış Saati : <?=$ihbar->yardimci_ekip_cikis_saati?>
    </div>
    <div class="col-md-12">
      Varış Saati : <?=$ihbar->yardimci_ekip_varis_saati?>
    </div>
<hr>
<div class="col-md-12">
  Olayın Görüldüğü Durum : <?=$ihbar->olayin_goruldugu_durum?>
</div>
<div class="col-md-12">
  Söndürme Türü : <?=$ihbar->sondurme_tur?>
</div>
<div class="col-md-12">
  Kaç metre küp su kullanıldı : <?=$ihbar->kullanilan_su?>
</div>
<div class="col-md-12">
  Köpük : <?=$ihbar->kullanilan_kopuk?>
</div>
<div class="col-md-12">
  K.K.T. : <?=$ihbar->kullanilan_kkt?>
</div>
<div class="col-md-12">
  Söndürme Sonundaki Hasar Durumu : <?=$ihbar->sondurme_sonundaki_hasar_durumu?>
</div>
<div class="col-md-12">
  Sigorta Şirketinin Adı : <?=$ihbar->sigorta_sirketi_adi?>
</div>
<div class="col-md-12">
  Sigorta Şirketinin Bedeli : <?=$ihbar->sigorta_sirketi_bedeli?>
</div>
<div class="col-md-12">
  Araç Gereç Kaybı : <?=$ihbar->arac_gerec_kaybi?>
</div>
<div class="col-md-12">
  Yangın Yerini Teslim Alan : <?=$ihbar->yangin_yerini_teslim_alan?>
</div>
<div class="col-md-12">
  Ekibin Dönüş Tarihi : <?=$ihbar->ekibin_donus_tarihi?>
</div>
<div class="col-md-12">
  Ekibin Dönüş Saati : <?=$ihbar->ekibin_donus_saati?>
</div>
<div class="col-md-12">
  Var ise Ölü ve Yaralılar : <?=$ihbar->olu_yarali?>
</div>
<div class="col-md-12">
  Üst Amiri : <?=$ihbar->ust_amiri?>
</div>
<div class="col-md-12">
  Yangına El Koyan Ekip Amiri : <?=$ihbar->yangina_el_koyan_ekip_amiri?>
</div>
<div class="col-md-12">
  Onaylayan : <?=$ihbar->onaylayan?>
</div>

  </div>
</div>


<?php $this->load->view('footer'); ?>
