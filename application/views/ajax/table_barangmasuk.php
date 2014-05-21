<style>
  #satuan{    
    border: 0 !important;  /*Removes border*/
    -webkit-appearance: none;  /*Removes default chrome and safari style*/
    -moz-appearance: none; /* Removes Default Firefox style*/
    background: #0088cc url(<?php echo base_url() ?>assets/img/select-arrow.png) no-repeat 90% center;
    width: 28%; /*Width of select dropdown to give space for arrow image*/
    text-indent: 0.01px; /* Removes default arrow from firefox*/
    text-overflow: "";  /*Removes default arrow from firefox*/ /*My custom style for fonts*/
    color: #FFF;
    border-radius: 15px;
    /*padding: 5px;*/
    /*box-shadow: inset 0 0 5px rgba(000,000,000, 0.5);*/
  }
  #satuan option{
    background-color:#fff;color:#000;
  }
  #satuan:focus{
    border: none;
  }
</style>
         <form action="#" class="form-horizontal" id="add_new" onsubmit="save_barang(this);return false;">
            <input type="hidden" name="type" value="save" id="type"/>
            <input type="hidden" name="kode_so" id="kode_so">
                <div class="form-body">
                    <div class="form-group">
                       <label class="col-md-4 control-label">Nama Barang</label>
                       <div class="col-md-6 input-group">
                          <span class="input-group-addon"><i class="icon-shopping-cart"></i></span>                                                                                                      
                          <input type='hidden' class="form-control" data-init-text='' name='nama_barang' id='nama_barang' />
                       </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4">Jumlah Satuan</label>
                      <div class="col-md-6">
                        <input type="text" class="form-control pull-left" name="berat_size" id="nilai_satuan" value="" placeholder="" style="width:72%">
                        <select name="berat" id="satuan" class="form-control select2_category pull-right" style="border-left:none;background-color:#ffb848;color:#fff;">
                           <option value="G">Gram</option>
                           <option value="KG">Kilo Grams &sup3;</option>
                           <option value="Kwintal">Kwintal</option>
                           <option value="Ton">TON</option>
                        </select>
                         <!-- /input-group -->      
                      </div>
                   </div>
                   <div class="table-toolbar">
                      <div class="btn-group">
                         <button type="submit" id="add_new_brg" class="btn green">
                         Add New <i class="icon-plus"></i>
                         </button>
                      </div>
                      <div class="btn-group pull-right">
                        <a href="<?php echo base_url('cetak/barang_masuk/') ?>" target="_BLANK" class="btn print blue"><i class="icon-print"></i> Print</a>
                        <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down"></i></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Excel</a></li>
                            <li><a href="#">PDF</a></li>
                        </ul>
                      </div>
                   </div>
                </div>                
             </form>
         
         <table class="table table-striped table-hover table-bordered"  style=" word-wrap: break-word; border-collapse: collapse;" id="tbl_transMasuk">
            <thead>
               <tr>
                  <th style="width:10%;">No.</th>
                  <th style="width:20%;">Nama Barang</th>
                  <th style="width:10%;">Satuan Barang</th>
                  <th style="width:10%;">Jumlah Satuan</th>
                  <th style="width:40%;">Dekripsi Barang</th>
                  <th style="width:10%;">Tools</th>
               </tr>
            </thead>
            <!-- <tbody>
            <?php//echo json_encode($result); ?>
            <?php //$no=1; foreach ($result as $key => $row): ?>                           
               <tr>
                  <td data-kode="<?php //echo $row->kode_barang ?>" style="width:10%;"><?php echo $no ?></td>
                  <td style="width:20%;"><?php //echo $row->nama_barang ?></td>
                  <td style="width:10%;"><?php //echo $row->satuan ?></td>
                  <td style="width:10%;"><?php //echo $row->no_satuan." ".$row->val_satuan ?></td>
                  <td style="width:40%;"><?php //echo $row->deskripsi ?></td>
                  <td style="width:10%;"><?php //echo $row->berat_barang ?></td>
                  <td style="width:10%;">
                     <a class="btnDelete btn red" href="javascript:;"><i class="icon-trash"></i></a>
                     <a class="btnEdit btn green" href="javascript:;"><i class="icon-pencil"></i></a>
                  </td>
               </tr>
            <?php //$no++; endforeach ?>               
            </tbody> -->
         </table>
<!--<script src="<?php echo base_url() ?>assetss/scripts/table.js"></script>-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>
<script>
//$.noConflict();
var editstatus = 'none';
//var table;
function deas(){
  
}
   jQuery(document).ready(function() {
      //$(".btnDelete").bind("click", Delete);
      
      Table.init();
      $("#nilai_satuan").inputmask({"mask": "9",
            "repeat": 10,
            "greedy": false});
      $(".print").attr('href', "<?php echo base_url('cetak/barang_masuk/') ?>"+so_number);
      $("#kode_so").val(so_number);
      //$(".btnEdit").bind("click", Edit);
      $('#tbl_transMasuk a.btnEdit').live('click', function (e) {
                e.preventDefault();
                alert('wkwk');
                Edit();
            });
      $(".btnDelete").bind("click", Delete);
      $('#nama_barang').select2({      
          minimumInputLength: 2,
          ajax: {
            url: "<?php echo base_url('search/barang') ?>",
            dataType: 'json',
            quietMillis: 800,
            data: function (term, page) {
              return {
                q: term
              };
            },
            results: function (data, page) {
              return { results: data };
            }
          }
        });
      $('#nama_barang').change(function(){
        barang_terpilih();
      });
   });
   function barang_terpilih(){
      kode_barang = $('#nama_barang').select2('data').id;      
      //console.log($(this).select2('data').id);
      if (kode_barang!=0){
        $.ajax({
         type: 'POST',
         url : '<?php echo base_url("transaksi/get_barang") ?>',
         data : "kode_barang="+kode_barang,
         dataType : 'json',
         success : function(data){
            //console.log(data);
            if (data.satuan=='Ukuran'){
              var ukuran = ["CM&sup2;", "CM&sup3;", "M&sup2;", "M&sup3;", "KM", "H"];
              var options = ["CM&sup2;", "CM&sup3;", "M&sup2;", "M&sup3;", "KM", "H"];
              for (var i = 0; i < ukuran.length; i++) {
                options += "<option value='" + ukuran[i] + "'>" + ukuran[i] + "</option>";
                //console.log(ukuran[i]);
              }
              $('#satuan').html(options);
            }
            else if (data.satuan=='Berat'){
              var ukuran = ["Gram", "Kilo Gram", "Kwintal", "TON"];
              var option = ["G", "KG", "Kwintal", "TON"];
              var options = "";
              for (var i = 0; i < ukuran.length; i++) {
                options += "<option value='" + option[i] + "'>" + ukuran[i] + "</option>";
                //console.log(ukuran[i]);
              }
              $('#satuan').html(options);
            }
            else $('#satuan').html("<option value='"+data.satuan+"'>"+data.satuan+"</option>");            
          }
        });
      }
      
    }
  function save_barang(form){
    var json = jsonQuery2(form);
    //console.log(json);
    $.ajax({
          url: "<?php echo base_url('transaksi/add_barang') ?>",
          dataType : 'json',
          data: json,
          type : 'POST',
          chache : false,
          success : function(response){
                load_table();            
                //alert(response);
                console.log(response);
          }
    });
  }
   function Edit(){
    alert("wkwkw");
    var par = $(this).parent().parent(); //tr
    /*if (editstatus=='ya') {return};
    editstatus='ya';*/
    /*var tdNamaBarang = par.children("td:nth-child(2)");
    var tdSatuanBarang = par.children("td:nth-child(3)");
    var tdJumlahSatuan = par.children("td:nth-child(4)");
    var tdDeskripsi = par.children("td:nth-child(5)");
    var tdBeratBarang = par.children("td:nth-child(6)");
    var tdButtons = par.children("td:nth-child(7)");*/
    //console.log(par.children("td:nth-child(1)").html());
    $("#nama_barang").select2("data", {id: par.children("td:nth-child(1)").attr('data-kode'), text: par.children("td:nth-child(2)").html()});
    barang_terpilih();
    $("#nilai_satuan").val(par.children("td:nth-child(4)").html().split(" ")[0]);
    //$("#satuan").val(par.children("td:nth-child(4)").html().split(" ")[1]);
    $("#satuan option").each(function() {
      if($(this).text() == "KG") {
        $(this).attr('selected', 'selected');            
      }                        
    });
    //$(".btnSave").bind("click", Save);
    //$(".btnEdit").bind("click", Edit);
    /*$(".btnDelete").bind("click", Delete);  */  

};
function Save(){    
    var par = $(this).parent().parent(); //tr
    var tdNamaBarang = par.children("td:nth-child(2)");
    var tdSatuanBarang = par.children("td:nth-child(3)");
    var tdJumlahSatuan = par.children("td:nth-child(4)");
    var tdDeskripsi = par.children("td:nth-child(5)");
    var tdBeratBarang = par.children("td:nth-child(6)");
    var tdButtons = par.children("td:nth-child(7)");
    /*$.ajax({
            type: 'POST',
            url: 'absensi/update_absen',
            data: 
            {"no_kartu": 'deas'},
            cache: false,
            success: function(){ //alert(msg);                                  
                    var companyid   = escapeHtml($('#divisi').val());
                    if (companyid=='') {
                        var companyid='undefined';
                    };
                    //alert(companyid);
                    var tanggal     = escapeHtml($('#_tanggal').val());
                    //alert(tanggal);
                    table_absensi(companyid, tanggal);
                    table_absensi_not_day(companyid, tanggal);
                    setTimeout(function () {
                    var unique_id = $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: '<i class="ok_2"></i>Absen Terupdate !',
                    // (string | mandatory) the text inside the notification
                    text: 'Data absensi berhasil Terupdate pada system.'
                    });

                    // You can have it return a unique id, this can be used to manually remove it later using
                    setTimeout(function () {
                        $.gritter.remove(unique_id, {
                            fade: true,
                            speed: 'slow'
                        });
                        }, 15000);
                    }, 1);

            }
        });*/
    editstatus='none';
    /*tdNoKartu.html(tdNoKartu.children("input[type=text]").val());
    tdMasuk1.html(tdMasuk1.children("input[type=text]").val());
    tdKeluar1.html(tdKeluar1.children("input[type=text]").val());
    tdMasuk2.html(tdMasuk2.children("input[type=text]").val());
    tdKeluar2.html(tdKeluar2.children("input[type=text]").val());
    tdMasuk3.html(tdMasuk3.children("input[type=text]").val());
    tdKeluar3.html(tdKeluar3.children("input[type=text]").val());
    tdMasuk4.html(tdMasuk4.children("input[type=text]").val());
    tdKeluar4.html(tdKeluar4.children("input[type=text]").val());
    tdKeterangan.html(tdKeterangan.children("input[type=text]").val());
    tdButtons.html("<a href='#' class='btnEdit btn blue mini tooltips' data-placement='top' data-original-title='Edit'><i class='icon-edit'></i></a>");   
    tdButtons.html("<a href='#' class='btnDelete btn red mini tooltips' data-placement='top' data-original-title='Delete'><i class='icon-remove'></i></a>");
    */$(".btnEdit").bind("click", Edit);
    $(".btnDelete").bind("click", Delete);
};
function Delete(){
   if (confirm('Are you sure you want to Delete this Absen row')) {
    var par = $(this).parent().parent(); //tr
    var tdNoKartu = par.children("td:nth-child(2)");
    console.log('deas'); 
     /*$.ajax({
            type: 'POST',
            url: 'absensi/delete_absen',
            data: 
            {"no_kartu": tdNoKartu.html(), "tanggal": $('#_tanggal').val()},
            cache: false,
            success: function(){ //alert(msg);                                  
                    var companyid   = escapeHtml($('#divisi').val());
                    if (companyid=='') {
                        var companyid='undefined';
                    };
                    //alert(companyid);
                    var tanggal     = escapeHtml($('#_tanggal').val());
                    //alert(tanggal);
                    table_absensi(companyid, tanggal);
                    table_absensi_not_day(companyid, tanggal);
                    setTimeout(function () {
                    var unique_id = $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: '<i class="ok_2"></i>Absen Terhapus !',
                    // (string | mandatory) the text inside the notification
                    text: 'Data absensi berhasil Terupdate pada system.'
                    });

                    // You can have it return a unique id, this can be used to manually remove it later using
                    setTimeout(function () {
                        $.gritter.remove(unique_id, {
                            fade: true,
                            speed: 'slow'
                        });
                        }, 15000);
                    }, 1);

            }
        });*/
}
}; 
</script>