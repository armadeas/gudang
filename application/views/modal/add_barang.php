<style type="text/css" media="screen">
      .popover{
            z-index: 9999999999;
      }
      .shake {
            -webkit-animation-name: tada;
            -moz-animation-name: tada;
            -o-animation-name: tada;
            animation-name: tada;
            
      }
</style>
<div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
      <h4 class="modal-title">Add Barang Dialog</h4>
</div>
<div class="modal-body">
      <form action="#" id="frm_ModalAdd" class="form-horizontal form-bordered" enctype="multipart/form-data" onsubmit="saveBarang(this); return false">
         <div class="form-body">
            <div class="form-group">
               <label class="control-label col-md-3">Nama Barang</label>
               <div class="col-md-9">
                  <input type="text" name="nama" placeholder="Namanya" class="form-control" />
                  <span class="help-block">Masukan nama barang dengan benar</span>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-md-3">Satuan Barang</label>
               <div class="col-md-9">
                  <select name="satuan"  class="form-control">
                    <?php foreach ($satuan as $key => $row): ?>
                     <option value="<?php echo $row->satuan ?>"><?php echo $row->satuan ?></option>                      
                    <?php endforeach ?>                    
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-md-3">Brand</label>
               <div class="col-md-9">
                  <input type="text" id="merk" name="merk" class="form-control"  placeholder="Merk Barang">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label  col-md-3">Deskripsi</label>
               <div class="col-md-9">
                  <textarea class="wysihtml5 form-control" name="deskripsi" rows="6"></textarea>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-md-3">Category</label>
               <div class="col-md-9">
                  <select name="kategory" class="form-control select2_category">
                     <option value="null">Category</option>
                     <option value="Category 1">Category 1</option>
                     <option value="Category 2">Category 2</option>
                     <option value="Category 3">Category 5</option>
                     <option value="Category 4">Category 4</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-md-3">Berat Barang</label>
               <div class="col-md-9">
                <div id="berats" style="width:40%" class="pull-left">
                  <div class="input-group" style="width:100%;">
                     <input type="text" name="berat_size" class="spinner-input form-control" maxlength="3" readonly>
                     <div class="spinner-buttons input-group-btn">                                                             
                        <button type="button" class="btn spinner-down default red">                        
                        <i class="icon-angle-down"></i>                     
                        </button>   
                        <button type="button" class="btn spinner-up default blue">                       
                        <i class="icon-angle-up"></i>                    
                        </button>               
                     </div>
                  </div>
               </div>
                  <select name="berat" class="form-control select2_category pull-right" style="width:58%">
                     <option value="G">Gram</option>
                     <option value="KG">Kilo Grams</option>
                     <option value="Kwintal">Kwintal</option>
                     <option value="Ton">TON</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-md-3">Gambar Barang</label>
               <div class="col-md-9">
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                     <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                     </div>
                     <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                     <div>
                        <span class="btn default btn-file">
                        <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                        <input type="file" id="gambar_barang" name="gambar_barang" class="default" />
                        </span>
                        <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                     </div>
                  </div>
                  <span class="label label-danger">NOTE!</span>
                  <span>
                  Attached image will resize to default size is 640px x 480px
                  </span>
               </div>
            </div>        
         </div>         
      </form>
</div>
<div class="modal-footer">
      <button type="button" id="close_btn" class="btn default" data-dismiss="modal">Close</button>
      <button type="button" class="btn blue" id="btnSubmit">Save changes</button>
</div>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/ajaxfileupload.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/fuelux/js/spinner.min.js"></script>                                   
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script>
 jQuery(document).ready(function() {      
      $('#berats').spinner({value:0, min: 0});      
      $('.wysihtml5').wysihtml5({
         "stylesheets": [base_url+"assets/plugins/bootstrap-wysihtml5/wysiwyg-color.css"]
      });
      //$('body').removeClass("modal-open");
      $('#btnSubmit').click(function(){
         if ($('#frm_ModalAdd').validate().form()) {
                 $('#frm_ModalAdd').submit();
             }
                      //return false;
      });
      $('#merk').typeahead({
          source: function (query, process) {
            $.ajax({
              url: "<?php echo base_url('search/brand') ?>",
              type: 'POST',
              dataType: 'JSON',
              data: 'query=' + query,
              success: function(data) {
                //console.log(data);
                process(data);
              }
            });
          }
        });
      var forms = $('#frm_ModalAdd');
            var error = $('.alert-error', forms);
            var success = $('.alert-success', forms);
      $('#frm_ModalAdd').validate({
                  errorElement: 'span', //default input error message container
                  errorClass: 'help-block', // default input error message class
                  focusInvalid: false, // do not focus the last invalid input
                  doNotHideMessage: true,
                  ignore: "",
                  rules: {
                      nama: {
                        required: true
                      },
                      satuan: {
                          required: true
                      },
                      merk: {
                          required: true
                      },
                      deskripsi: {
                          required: true
                      },
                      kategory: {
                          required: true
                      },
                      berat_size: {
                          required: true
                      },
                      berat: {
                          required: true
                      }
                  },

                  /*messages: {
                      so_number: {
                          required: "so_number is required1."
                      },
                      so_status: {
                          required: "Please select  at least 2 types of Service",
                          minlength: jQuery.format("Please select  at least {0} types of Service")
                      }
                  },*/

                  invalidHandler: function (event, validator) { //display error alert on form submit   
                      $('.alert-error', $('#frm_ModalAdd')).show();
                      success.hide();
                    error.show();
                    App.scrollTo(error, -200);
                  },

                  highlight: function (element) { // hightlight error inputs
                      $(element)
                          .closest('.form-group').addClass('has-error'); // set error class to the control group
                  },

                  unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                  errorPlacement: function (error, element) {
                      error.insertAfter(element.closest('.input-icon'));
                  },

                  /*submitHandler: function (form) {
                      form.submit();
                  }*/
              });
            $('#frm_ModalAdd input').keypress(function (e) {
                  if (e.which == 13) {
                      if ($('#frm_ModalAdd').validate().form()) {
                          $('#frm_ModalAdd').submit();
                      }
                      //return false;
                  }
              });            
});
function saveBarang(form){
  $('#btnSubmit').addClass("disabled");
      var json = jsonQuery2(form);
      //console.log(json);
      //form.preventDefault();      
      $.ajaxFileUpload({
            url: "<?php echo base_url('systems/save_barang') ?>",
            secureuri      :false,
            fileElementId  :'gambar_barang',            
            data: json,
            type : 'POST',
            chache : false,
            dataType : 'json',
            success: function (data, status)
            {                
               if(data.status != 'error')
               {  
                  if ("<?php echo $this->uri->segment(3); ?>"!="from_transaksi") {
                    load_table();                    
                  }
                  $('#close_btn').click();
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
                  toastr.info(
                    data.msg, 
                    "Success");
               }else{
                $('#btnSubmit').removeClass("disabled");
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
                  toastr.error(
                    data.msg, 
                    "Error");
               }
               //alert(data.msg);         
            },
            error: function (data, status, e)
            {
               alert(e);
            }
      });
}    
</script>
