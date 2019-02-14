<?php $this->load->view('header'); ?>
<?php

  if($_POST){
    $sql = $this->db->where('KAYIT_ID',$_POST['kayit_no'])->get('ihbarlar');
    if($sql->num_rows() > 0){
      redirect('kayitsorgula/kayit/'.$_POST['kayit_no']);
    }else{
      echo '<div class="alert alert-danger">Aradığınız kayıt numarasına uygun veri bulunamadı.</div>';
    }
  }

?>
<div class="row my-4">
  <div class="col-md-4 offset-md-4">
    <form action="<?=base_url('kayitsorgula')?>" method="post">
        <div class="form-group">
          <label for="">Kayıt No</label>
          <input type="text" class="form-control" name="kayit_no">
        </div>
        <button type="submit" name="button" class="btn btn-primary">Sorgula</button>
    </form>
  </div>
</div>

<div class="row">
  <?php foreach ($this->db->get('ihbarlar')->result() as $key => $value): ?>
    <div class="col-md-2">
      <div class="alert alert-warning text-center">
        <h4>#<?=$value->KAYIT_ID?></h4> <br>
        <a href="<?=base_url('kayitsorgula/kayit/').$value->KAYIT_ID?>" class="btn btn-primary">İNCELE</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>


<?php $this->load->view('footer'); ?>
