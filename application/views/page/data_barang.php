<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/bootstrap-editable/inputs-ext/address/address.css"/>
<style type="text/css" media="screen">
.table-scrollable > .table > thead > tr > th, .table-scrollable > .table > tbody > tr > th, .table-scrollable > .table > tfoot > tr > th, .table-scrollable > .table > thead > tr > td, .table-scrollable > .table > tbody > tr > td, .table-scrollable > .table > tfoot > tr > td {
  white-space: normal;
}  
</style>
<div class="row">
<div class="col-md-12">
   <!-- BEGIN EXAMPLE TABLE PORTLET-->
   <div class="portlet box red">
      <div class="portlet-title">
         <div class="caption"><i class="icon-edit"></i>Data Barang</div>
         <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" onclick="load_table()" class="reload"></a>
         </div>
      </div>
      <div class="portlet-body">
         <div class="table-toolbar">
            <div class="btn-group">
               <a href="<?php echo base_url('systems/modal_addbarang') ?>" class="btn green ajax-modals" data-toggle="modal">
                  Add New <i class="icon-plus"></i>
               </a>
            </div>
             <div class="btn-group pull-right">
               <a class="btn default" href="#" data-toggle="dropdown">
               Columns
               <i class="icon-angle-down"></i>
               </a>
               <div id="tbl_order_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                  <label><input type="checkbox" checked data-column="0">Rendering engine</label>
                  <label><input type="checkbox" checked data-column="1">Browser</label>
                  <label><input type="checkbox" checked data-column="2">Platform(s)</label>
                  <label><input type="checkbox" checked data-column="3">Engine version</label>
                  <label><input type="checkbox" checked data-column="4">CSS grade</label>
               </div>
            </div>            
         </div>
        <div id="table_barang">         	         
         
         </div>
         <div id="ajax-modal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false"  data-width="760">
                        
         </div>
      </div>
   </div>
   <!-- END EXAMPLE TABLE PORTLET-->
</div>
</div>   
<script src="<?php echo base_url() ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script>
jQuery.noConflict();
jQuery(document).ready(function() {
   //$.ajaxSetup({ cache: false });
    load_table();
    
});
function load_table(){
   var pageContent = $('#table_barang');
   var pageContentBody = $('#table_barang');
   //pageContent.load('<?php echo base_url("transaksi/table") ?>');
   $.ajax({
       type: "GET",
       cache: false,
       url: "<?php echo base_url('systems/table_barang/') ?>",
       dataType: "html",       
       success: function (res) {
           App.unblockUI(pageContent);
           pageContentBody.html(res);
           App.fixContentHeight(); // fix content height
           App.initAjax(); // initialize core stuff
       },
       error: function (xhr, ajaxOptions, thrownError) {
           pageContentBody.html('<h4>Could not load the requested content.</h4>');
           App.unblockUI(pageContent);
       },
       async: false
   });
}
</script>       
<script src="<?php echo base_url() ?>assets/scripts/table.js"></script>
