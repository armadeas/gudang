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
      <h4 class="modal-title">View Barang Dialog</h4>
</div>
<div class="modal-body">
         <div class="row">
            <div class="col-md-12">
               <table id="user" class="table table-bordered table-striped">
                  <tbody>
                      <tr>
                        <td>Kode Barang</td>
                        <td><?php echo $barang->kode_barang ?></td>
                      </tr>
                     <tr>
                        <td style="width:15%">Nama Barang</td>
                        <td style="width:50%"><a href="#" id="nama_barang" data-type="text" data-original-title="Enter username"><?php echo $barang->nama_barang ?></a></td>
                     </tr>
                     <tr>
                        <td>Satuan</td>
                        <td><a href="#" id="satuan" data-type="select" data-value="<?php echo $barang->satuan ?>" data-source="<?php echo base_url('search/satuan') ?>" data-original-title="Select Satuan"><?php echo $barang->satuan ?></a></td>
                     </tr>
                     <tr>
                        <td>Merk</td>
                        <td><a href="#" id="merk" data-type="typeahead" data-placement="right" data-source="<?php echo base_url('search/brand') ?>" data-original-title="Masukan Merk"><?php echo $barang->merk ?></a></td>
                     </tr>
                     <tr>
                        <td>Deskripsi <a href="#" id="pencil"><i class="icon-pencil"></i> [edit]</a></td>
                        <td>
                           <div id="deskripsi" data-type="wysihtml5" data-toggle="manual" data-original-title="Enter Deskripsi">
                          <?php echo $barang->deskripsi ?>    
                          </div>
                        </td>
                     </tr>
                     <tr>
                        <td>Gambar Barang</td>
                        <td>
                          <div class="fileupload fileupload-exist" data-provides="fileupload">
                     <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="<?php echo base_url('assets/img/barang/'.$barang->gambar_barang) ?>" alt="" />
                     </div>
                     <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                     <div>
                        <span class="btn default btn-file">
                        <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                        <input type="file" id="gambar_barang" name="gambar_barang" class="default" />
                        </span>
                        <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                        <a href="#" class="btn green" onclick="change_image();"><i class="icon-upload"></i> Upload</a>
                     </div>
                  </div>
                        </td>
                     </tr>
                     <tr>
                        <td>Kategory</td>
                        <td><a href="#" id="kategory" data-type="select" data-value="<?php echo $barang->kategory ?>" data-source="<?php echo base_url('search/kategory') ?>" data-original-title="Select Kategory"><?php echo $barang->kategory ?></a></td>
                     </tr>                     
                     <tr>
                        <td>Berat</td>
                        <td><a href="#" id="berat"><?php echo $barang->berat_size ?></a>&nbsp;&nbsp;<a href="#" id="berat_barang" data-type="select" data-value="<?php echo $barang->berat_barang ?>" data-original-title="Select sex"><?php echo $barang->berat_barang; ?></a></td>
                     </tr>                    
                  </tbody>
               </table>
            </div>
         </div>         
</div>
<div class="modal-footer">
      <button type="button" id="close_btn" class="btn default" data-dismiss="modal">Close</button>
      <button type="button" class="btn blue" id="btnSubmit">Save changes</button>
</div>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/bootstrap-editable/inputs-ext/address/address.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/bootstrap-editable/inputs-ext/wysihtml5/wysihtml5.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/ajaxfileupload.js"></script>
<script>
var kode_barang = '<?php echo $barang->kode_barang ?>';
var lost_status;
var berat_size;
var spinners;
//jQuery.noConflict();
 jQuery(document).ready(function() {
      $("#berat").click(function(event) {
          // Call `myFunc`
          berat();
          //console.log('deas wkwkwk');          
          // Use `event` here at the event handler level, for instance
          event.stopPropagation();
          return false;
      });
      //FormEditable.init();      
      //$('.berats').spinner({value:0, min: 0});      
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
                console.log(data);
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
        $.fn.editable.defaults.mode = 'inline';
        //global settings 
        $.fn.editable.defaults.inputclass = 'form-control';
        $.fn.editable.defaults.url =  base_url+'systems/edit_barang';
        $.fn.editable.defaults.pk = kode_barang;

        //editables element samples 
        $('#nama_barang, #kategory, #merk').editable({
          success : function() {
                    load_table();
                }
        });
        $('#berat_barang,#satuan').editable({
            source: [{
                    value: 'G',
                    text: 'Gram'
                }, {
                    value: 'KG',
                    text: 'Kilo Gram'
                }, {
                    value: 'Kwintal',
                    text: 'Kwintal'
                }, {
                    value: 'Ton',
                    text: 'Ton'
                }
            ],
            success : function() {
                    load_table();
                }
        });

      $('#deskripsi').editable({
            showbuttons : (App.isRTL() ? 'left' : 'right'),
            success : function() {
                    load_table();
                }
        });

        $('#pencil').click(function (e) {
            e.stopPropagation();
            e.preventDefault();
            $('#deskripsi').editable('toggle');
        });          
});
function berat(){
  console.log($('#berat').html());
  berat_size = $('#berat').html();
  spinners = $('<div id="berats" style="width:40%" class="pull-left"><div class="input-group" style="width:100%;"><input type="text" name="berat_size" id="berat_size" class="spinner-input form-control" onfocus="lost_status=1" onclick="lost_status=1" onblur="lost_status=0;cek_focus();" maxlength="3" readonly><div class="spinner-buttons input-group-btn"><button type="button" class="btn spinner-down default red" onfocus="lost_status=1" onclick="lost_status=1" onblur="lost_status=0;cek_focus();" ><i class="icon-angle-down"></i></button><button type="button" class="btn spinner-up default blue" onfocus="lost_status=1" onclick="lost_status=1" onblur="lost_status=0;cek_focus();" ><i class="icon-angle-up"></i></button></div></div></div>').spinner({value:0, min: 0});
  spinners.insertAfter('#berat');
  //$('#berat_size').val(berat_size);
  spinners.spinner( "value", berat_size);
  $('#berat_size').focus();
  $('#berat').hide();
  //return;
  //if ($('#berat_size').onblur()) {};
}
function cek_focus(){
  setTimeout(function(){
  //console.log(spinners.spinner( "value" ));
    if(lost_status==0){
      $('#berat').show();
      $('#berat').html(spinners.spinner( "value" ));
      $.ajax({
        url: "<?php echo base_url('systems/edit_barang'); ?>",
        data: {name: 'berat_size', value: spinners.spinner( "value" ), pk: '<?php echo $barang->kode_barang ?>'},
        dataType: 'JSON',
        type: 'POST',
        chache: false,
        success: function(data){
          $('#berats').remove();
          load_table();
        }
      });
    }
  }, 250);
}
function change_image(){ 
  $.ajaxFileUpload({
            url: "<?php echo base_url('systems/change_image') ?>",
            secureuri      :false,
            fileElementId  :'gambar_barang',            
            data: {kode_barang:'<?php echo $barang->kode_barang ?>'},
            type : 'POST',
            chache : false,
            dataType : 'json',
            success: function (data, status)
            {
            console.log('upload proses');

               if(data.status != 'error')
               {       
                  //$('#close_btn').click();
                  load_table();
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
return false;
}
   
</script>
