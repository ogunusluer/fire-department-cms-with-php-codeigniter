<?php $this->load->view('header'); ?>

    <div class="row my-4">
      <div class="col-md-4 offset-md-4">
        <form action="<?=base_url('anasayfa/kayit_ekle')?>" method="post">
          <div class="form1">
            <div class="form-group">
              <label for="">İsim Soyisim</label>
              <input type="text" class="form-control" name="ad_soyad">
            </div>
            <div class="form-group">
              <label for="">İrtibat Numarası</label>
              <input type="text" class="form-control" name="irtibat_no">
            </div>
            <div class="form-group">
              <label for="">Yangın Mahali</label>
              <input type="text" class="form-control" name="yangin_mahali">
            </div>
            <div class="form-group">
              <label for="">Yangın Türü</label>
              <input type="text" class="form-control" name="yangin_turu">
            </div>
            <div class="form-group">
              <label for="">Yangın Sınıfı</label>
              <select class="form-control" name="yangin_sinifi">
                <option value="">Seçiniz</option>
                <?php foreach ($this->db->get('yangin_siniflar')->result() as $key => $value): ?>
                  <option value="<?=$value->yangin_sinif_id?>"><?=$value->yangin_sinif?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="">Yangın Sebebi</label>
              <input type="text" class="form-control" name="yangin_sebebi">
            </div>
            <div class="form-group">
              <label for="">Yapı Şekli</label>
              <select class="form-control" name="yapi_sekil">
                <option value="">Seçiniz</option>
                <?php foreach ($this->db->get('yapi_sekiller')->result() as $key => $value): ?>
                  <option value="<?=$value->yapi_sekil_id?>"><?=$value->yapi_sekil?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <button type="button" onclick="form2()" class="btn btn-primary">Devam</button>
          </div>
          <div class="form2">
            <button type="button" onclick="form1()" class="btn btn-primary btn-block">Geri don</button>
            <div class="form-group">
              <label for="">Olay Tarihi</label>
              <input type="date" class="form-control" name="olay_tarihi">
            </div>
            <div class="form-group">
              <label for="">İlçe</label>
              <select class="form-control" name="ilce">
                <option value="">Seçiniz</option>
                <?php foreach ($this->db->where('IL_ID',35)->get('ilce')->result() as $key => $value): ?>
                  <option value="<?=$value->ILCE_ID?>"><?=$value->ILCE_ADI?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="">Semt</label>
              <select class="form-control" name="semt" id="semt" disabled></select>
            </div>
            <div class="form-group">
              <label for="">Mahalle</label>
              <select class="form-control" name="mahalle" id="mahalle" disabled></select>
            </div>
            <div class="form-group">
              <label for="">Yangının kontrole alınma saati</label>
              <input type="time" class="form-control" name="yangin_kontrol_saat">
            </div>
            <div class="form-group">
              <label for="">Yanan şeyin sahibi [İsim Soyisim]</label>
              <input type="text" class="form-control" name="yanan_sey_sahip">
            </div>
            <div class="form-group">
              <label for="">Giden Ekibin Amiri</label>
              <input type="text" class="form-control" name="giden_ekip_amir">
            </div>
            <div class="form-group">
              <label for="">Araç Plakası</label>
              <input type="text" class="form-control" name="arac_plakasi">
            </div>
            <div class="form-group">
              <label for="">Personel Sayısı</label>
              <input type="text" class="form-control" name="personel_sayisi">
            </div>
            <div class="form-group">
              <label for="">Çıkış Saati</label>
              <input type="time" class="form-control" name="cikis_saati">
            </div>
            <div class="form-group">
              <label for="">Varış Saati</label>
              <input type="time" class="form-control" name="varis_saati">
            </div>
            <div class="form-group">
              <label for="">Elektrik Arıza Ekibinin Geliş Saati</label>
              <input type="time" class="form-control" name="elektrik_ekip_gelis_saati">
            </div>
            <div class="form-group">
              <label for="">112 Acil Servis Geliş Saati</label>
              <input type="time" class="form-control" name="saglik_ekip_gelis_saati">
            </div>
            <div class="form-group">
              <label for="">Emniyet veya Jandarma Geliş Saati</label>
              <input type="time" class="form-control" name="emniyet_ekip_gelis_saati">
            </div>
            <div class="form-group">
              <label for="">Doğalgaz Ekibi Geliş Saati</label>
              <input type="time" class="form-control" name="dogalgaz_ekip_gelis_saati">
            </div>
            <div class="form-group">
              <input type="checkbox" class="yardimci-check">
              <label for="">Yardımcı Ekip Gittiyse</label>
            </div>
            <div class="yardimciekip">
              <div class="form-group">
                <label for="">Giden Ekibin Amiri</label>
                <input type="text" class="form-control" name="yardimci_ekip_amiri">
              </div>
              <div class="form-group">
                <label for="">Araç Plakası</label>
                <input type="text" class="form-control" name="yardimci_arac_plaka">
              </div>
              <div class="form-group">
                <label for="">Personel Sayısı</label>
                <input type="text" class="form-control" name="yardimci_personel_sayisi">
              </div>
              <div class="form-group">
                <label for="">Çıkış Saati</label>
                <input type="time" class="form-control" name="yardimci_ekip_cikis_saati">
              </div>
              <div class="form-group">
                <label for="">Varış Saati</label>
                <input type="time" class="form-control" name="yardimci_ekip_varis_saati">
              </div>
            </div>
            <div class="form-group">
              <label for="">Olayın Görüldüğü Durum</label>
              <input type="text" class="form-control" name="olayin_goruldugu_durum">
            </div>
            <div class="form-group">
              <label for="">Söndürme Türü</label> <br>
                <?php foreach ($this->db->get('sondurme_turler')->result() as $key => $value): ?>
                 <input type="checkbox" name="sondurme_tur[]" value="<?=$value->sondurme_tur_id?>"><?=$value->sondurme_tur?> <br>
                <?php endforeach; ?>
            </div>
            <div class="form-group">
              <label for="">Kaç metre küp su kullanıldı</label>
              <input type="text" class="form-control" name="kullanilan_su">
            </div>
            <div class="form-group">
              <label for="">Köpük</label>
              <input type="text" class="form-control" name="kullanilan_kopuk">
            </div>
            <div class="form-group">
              <label for="">K.K.T.</label>
              <input type="text" class="form-control" name="kullanilan_kkt">
            </div>
            <div class="form-group">
              <label for="">Söndürme Sonundaki Hasar Durumu</label>
              <input type="text" class="form-control" name="sondurme_sonrasi_hasar_durumu">
            </div>
            <div class="form-group">
              <label for="">Yapı Sigortalı mı?</label>
              <input type="radio" name="sigorta" value="Evet"> Evet
              <input type="radio" name="sigorta" value="Hayır" checked> Hayır
            </div>
            <div class="sigorta">
              <div class="form-group">
                <label for="">Sigorta Şirketinin Adı</label>
                <input type="text" class="form-control" name="sigorta_sirketi_adi">
              </div>
              <div class="form-group">
                <label for="">Bedel</label>
                <input type="text" class="form-control" name="sigorta_sirketi_bedeli">
              </div>
            </div>
            <div class="form-group">
              <label for="">Araç Gereç Kaybı</label>
              <input type="text" class="form-control" name="arac_gerec_kaybi">
            </div>
            <div class="form-group">
              <label for="">Yangın Yerini Teslim Alan</label>
              <input type="text" class="form-control" name="yangin_yerini_teslim_alan">
            </div>
            <div class="form-group">
              <label for="">Ekibin Dönüş Tarihi</label>
              <input type="date" class="form-control" name="ekibin_donus_tarihi">
            </div>
            <div class="form-group">
              <label for="">Ekibin Dönüş Saati</label>
              <input type="time" class="form-control" name="ekibin_donus_saati">
            </div>
            <div class="form-group">
              <label for="">Var ise Ölü ve Yaralılar</label>
              <input type="text" class="form-control" name="olu_yarali">
            </div>
            <div class="form-group">
              <label for="">Üst Amiri</label>
              <input type="text" class="form-control" name="ust_amiri">
            </div>
            <div class="form-group">
              <label for="">Yangına El Koyan Ekip Amiri</label>
              <input type="text" class="form-control" name="yangina_el_koyan_ekip_amiri">
            </div>
            <div class="form-group">
              <label for="">Onaylayan</label>
              <input type="text" class="form-control" name="onaylayan">
            </div>
            <button type="submit" name="button" class="btn btn-primary">Kaydet</button>
          </div>
        </form>
      </div>
    </div>
    <?php $this->load->view('footer'); ?>
