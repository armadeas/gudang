<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
<style type="text/css" media="screen">
.table-scrollable > .table > thead > tr > th, .table-scrollable > .table > tbody > tr > th, .table-scrollable > .table > tfoot > tr > th, .table-scrollable > .table > thead > tr > td, .table-scrollable > .table > tbody > tr > td, .table-scrollable > .table > tfoot > tr > td {
 white-space: normal; 
}
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
<div class="row">
<div class="col-md-4 ">
   <!-- BEGIN SAMPLE FORM PORTLET-->   
   <div class="portlet box blue">
      <div class="portlet-title">
         <div class="caption">
            <i class="icon-reorder"></i> Customer Information
         </div>
         <div class="tools">
            <a href="" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="" class="reload"></a>
            <a href="" class="remove"></a>
         </div>
      </div>
      <div class="portlet-body form">
         <form role="form" class="form-horizontal">
            <div class="form-body">  
            <div class="row">          
               <div class="form-group">
                  <label class="control-label col-md-3">SO # :</label>
                           <div class="input-group col-md-8" id="so_div">
                     <span class="input-group-addon"><i class="icon-shopping-cart"></i></span>                                                                                                      
                     <input type='hidden' class="form-control" data-init-text='' name='so_number' id='so_number' />
                  </div>
               </div>
               </div>
              <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="control-label col-md-3">SO Stat:</label>
                        <div class="col-md-9">
                           <p class="form-control-static" id="so_stat"></p>
                        </div>
                     </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="control-label col-md-3">Customer:</label>
                        <div class="col-md-9">
                           <p class="form-control-static" id="customer"></p>
                        </div>
                     </div>
                  </div>
                  </div>
                  <!--/span-->
                  <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="control-label col-md-3">PO #:</label>
                        <div class="col-md-9">
                           <p class="form-control-static" id="po_number"></p>
                        </div>
                     </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="control-label col-md-3">PO Date:</label>
                        <div class="col-md-9">
                           <p class="form-control-static" id="po_date"></p>
                        </div>
                     </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="control-label col-md-3">PO Amount:</label>
                        <div class="col-md-9">
                           <p class="form-control-static" id="po_amount"></p>
                        </div>
                     </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="control-label col-md-3">Due Date:</label>
                        <div class="col-md-9">
                           <p class="form-control-static" id="due_date"></p>
                        </div>
                     </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="control-label col-md-3">Due Date2:</label>
                        <div class="col-md-9">
                           <p class="form-control-static" id="due_date2"></p>
                        </div>
                     </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="control-label col-md-3">TOP:</label>
                        <div class="col-md-9">
                           <p class="form-control-static" id="TOP"></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="control-label col-md-3">Delv. Term:</label>
                        <div class="col-md-9">
                           <p class="form-control-static" id="delv_term"></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="control-label col-md-3">Delv. Point:</label>
                        <div class="col-md-9">
                           <p class="form-control-static" id="delv_point"></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="control-label col-md-3">Partial Delivery:</label>
                        <div class="col-md-9">
                           <p class="form-control-static" id="part_delv"></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="control-label col-md-3">Partiak Inv:</label>
                        <div class="col-md-9">
                           <p class="form-control-static" id="partial_inv"></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="control-label col-md-3">End User:</label>
                        <div class="col-md-9">
                           <p class="form-control-static" id="end_user"></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="control-label col-md-3">Related Order:</label>
                        <div class="col-md-9">
                           <p class="form-control-static" id="rel_order"></p>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
         </form>
      </div>
   </div>
   <!-- END SAMPLE FORM PORTLET-->
   <!-- BEGIN SAMPLE FORM PORTLET-->   
   <div class="portlet box red">
      <div class="portlet-title">
         <div class="caption">
            <i class="icon-reorder"></i> Default Form Height Sizing
         </div>
         <div class="tools">
            <a href="" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="" class="reload"></a>
            <a href="" class="remove"></a>
         </div>
      </div>
      <div class="portlet-body form">
      </div>
   </div>
   <!-- END SAMPLE FORM PORTLET-->
</div>
<div class="col-md-8">
   <!-- BEGIN EXAMPLE TABLE PORTLET-->
   <div class="portlet box red">
      <div class="portlet-title">
         <div class="caption"><i class="icon-edit"></i>Data Barang</div>
         <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
         </div>
      </div>
      <div class="portlet-body" id="table_barang">
         
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
                   <div class="table-toolbar" id="toolbar">
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
         </table>
      </div>
   </div>
   <!-- END EXAMPLE TABLE PORTLET-->
</div>
</div>
<a href="<?php echo base_url('systems/modal_addbarang/from_transaksi') ?>" class="btn green ajax-modals hide" data-toggle="modal">
   Add New <i class="icon-plus"></i>
</a>
<div id="ajax-modal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false"  data-width="760">
                        
</div>
<input type="hidden" name="" value="" id="percobaan">
<script src="<?php echo base_url() ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/jquery.pulsate.min.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ui-extended-modals.js"></script>          
<script>
var so_number;
var oTable;
//$.noConflict();
jQuery(document).ready(function() {
   $.ajaxSetup({ cache: false });
   load_table();   
   UIExtendedModals.init();
   $('#toolbar').hide();
   //Table.init();   
    $('#so_number').select2({
      /*tags: true,
      tokenSeparators: [",", " "],
      createSearchChoice: function(term, data) {
         if ($(data).filter(function() {
            return this.text.localeCompare(term) === 0;
         }).length === 0) {
         return {
           id: term,
           text: term
         };
         }
      },
     multiple: true,*/
          minimumInputLength: 2,
          ajax: {
            url: "<?php echo base_url('search/so') ?>",
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
    $('#so_div').pulsate({
                    color: "#bf1c56",
                    reach: 50,
                    repeat: 10,
                    //speed: 100,
                    //glow: true
                });
    $('#so_number').change(function(){
      so_number = $(this).select2('data').id;     
      $('#kode_so') .val(so_number);
      //console.log($(this).select2('data').id);
      $.ajax({
         type: 'POST',
         url : '<?php echo base_url("transaksi/get_order/") ?>'+so_number,
         data : "so_number="+so_number,
         dataType : 'json',
         success : function(data){
            //console.log(data.Customer);
            $('#so_stat').text(data.po_status);
            $('#customer').text(data.companyname);
            $('#po_number').text(data.po_number);
            $('#po_date').text(data.OrderDate);
            $('#due_date').text(data.due_date);
            $('#due_date2').text(data.due_date2);
            $('#TOP').text(data.pay_term);
            $('#po_amount').text(data.total_order);
            $('#delv_term').text(data.deliv_term);
            $('#delv_point').text(data.deliv_point);
            $('#part_delv').text(data.Partial_delv);
            $('#partial_inv').text(data.Partial_Inv);
            $('#end_user').text(data.End_user);
            $('#rel_order').text(data.note);
            $("#kode_so").val(so_number);
            //oTable.ajax.reload();
            $('#toolbar').slideDown();
            oTable.ajax.url("<?php echo base_url('transaksi/data_table/') ?>"+so_number).load();
            //load_table(so_number);
         }
      });
    });      
      $(".print").attr('href', "<?php echo base_url('cetak/barang_masuk/') ?>"+so_number);
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
      $("#nilai_satuan").inputmask({"mask": "9",
            "repeat": 10,
            "greedy": false});
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
            var selectOptionText = $("#percobaan").text();
               $("#satuan").find("option").filter(function(index) {
                   return selectOptionText === $(this).text();
               }).prop("selected", "selected");
          }
        });
      }else{
         $(".ajax-modals").click();
      }
      
    }
  function save_barang(form){
    var json = jsonQuery2(form);
    if (json.hasOwnProperty(nama_barang)) {

    }else{
      //return false;
    }
    if (json.nama_barang=='0') {
      toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "positionClass": "toast-top-center",
                    "onclick": null,
                    "showDuration": "1000",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                  }
                  toastr.error("Please Select valid Item", 
                    "Error");
                  return false;
    }
    //console.log(json);
    $.ajax({
          url: "<?php echo base_url('transaksi/add_barang') ?>",
          dataType : 'json',
          data: json,
          type : 'POST',
          chache : false,
          success : function(response){
               if (response.status=='error') {
                   toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "positionClass": "toast-top-center",
                    "onclick": null,
                    "showDuration": "1000",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                  }
                  toastr.error(response.msg, 
                    "Error");
               }else{
                  oTable.ajax.url("<?php echo base_url('transaksi/data_table/') ?>"+so_number).load();                  
               }
                //load_table();            
                //alert(response);
                //console.log(response);
          }
    });
  }
function load_table(){
   oTable = $('#tbl_transMasuk').dataTable( { 
            "ajax": "<?php echo base_url('transaksi/data_table/') ?>"+$('kode_so').val(),            
            "columns": [
                { "data": "barang_trans_id" },
                { "data": "nama_barang" },
                { "data": "satuan" },
                { "data": "jumlah" },
                { "data": "deskripsi" },
                {
                "targets": -1,
                "data": null,
                "defaultContent": "<button class='btn green edit'>E</button><button class='btn red delete'>E</button>"
            }
            ],
            "fnDrawCallback": function ( oSettings ) {
               /* Need to redo the counters if filtered or sorted */
               if ( oSettings.bSorted || oSettings.bFiltered )
               {
                  for ( var i=0, iLen=oSettings.aiDisplay.length ; i<iLen ; i++ )
                  {
                     $('td:eq(0)', oSettings.aoData[ oSettings.aiDisplay[i] ].nTr ).html( i+1 );
                  }
               }
            },        
            "aoColumnDefs": [
                { "aTargets": [ 0 ] }
            ],
            //"aaSorting": [[1, 'asc']],
             "aLengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "iDisplayLength": 5,
            "bAutoWidth": false
        }).api();

        jQuery('#tbl_transMasuk_wrapper .dataTables_filter input').addClass("form-control input-small"); // modify table search input
        jQuery('#tbl_transMasuk_wrapper .dataTables_length select').addClass("form-control input-small"); // modify table per page dropdown
        jQuery('#tbl_transMasuk_wrapper .dataTables_length select').select2(); // initialize select2 dropdown

        $('#tbl_transMasuk_column_toggler input[type="checkbox"]').change(function(){
            /* Get the DataTables object again - this is not a recreation, just a get of the object */
            var iCol = parseInt($(this).attr("data-column"));
            var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
            oTable.fnSetColumnVis(iCol, (bVis ? false : true));
        });
        $('#tbl_transMasuk tbody').on( 'click', 'button.edit', function () {
        //console.log('kwkw');
            var data = oTable.row($(this).parents('tr')).data();
            console.log(data);
            $("#nama_barang").select2("data", {id: data['kode_barang'], text: data['nama_barang']});
            barang_terpilih();
            $("#percobaan").html(data['val_satuan']).text();
            /*setTimeout(function (){
               
               alert(selectOptionText);
            }, 1000); */                      
            //alert( data['barang_trans_id'] +"'s salary is: "+ data[2] );
          } );
        }
</script>
  
