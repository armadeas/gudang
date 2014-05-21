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
      <h4 class="modal-title">Order Dialog</h4>
</div>
<div class="modal-body">
                  <form action="<?php echo base_url('deas') ?>" class="form-horizontal form-bordered" method="post" id="frm_ModalOrder" onsubmit="saveOrder(this); return false">
                        <div class="form-body">
                        <!-- <h3 class="form-section">Person Info</h3> -->
                              <div class="row">
                                    <div class="col-md-6">                                          
                                          <div class="form-group">
                                                <label class="control-label">SO Number<span class="required">*</span></label>
                                                <input type="text" id="so_number" name="so_number" class="form-control" placeholder="Enter the SO Number">
                                                <span class="help-block">Enter Valid SO number 10 Digits</span>
                                          </div>                                    
                                    </div>
                                    <div class="col-md-6">
                                          <div class="form-group">
                                                <label class="control-label">SO Status</label>
                                                <select class="form-control" name="so_status">
                                                      <option value="">Select...</option>
                                                      <option value="Single Order">Single Order</option>
                                                      <option value="Main Combine">Main Combine</option>
                                                      <option value="Sub Combine">Sub Combine</option>
                                                      <option value="Internal PO">Internal PO</option>
                                                      <option value="Internal WO">Internal WO</option>
                                                      <option value="Service Order">Service Order</option>
                                                </select>
                                                <span class="help-block">Select the SO status</span>
                                          </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="form-group">
                                       <label class="control-label col-md-3">SO Date</label>
                                       <div class="col-md-9">
                                          <div class="input-group date date-picker" data-date="<?php echo date('d-m-Y') ?>" data-date-format="DD, dd MM yyyy" data-date-viewmode="years">
                                             <input type="text" class="form-control" name="so_date" readonly>
                                             <span class="input-group-btn">
                                             <button class="btn default" type="button"><i class="icon-calendar"></i></button>
                                             </span>
                                          </div>
                                          <span class="help-block">Select SO Date</span>
                                          <!-- /input-group -->                                 
                                       </div>
                                    </div>  
                                    <div class="form-group">
                                          <label class="control-label col-md-3">Sales Name</label>
                                          <div class="col-md-9">                                                                                                      
                                          <input type='hidden' class="form-control"data-init-text='' name='sales_name' id='select_list' />
                                          <span class="help-block">Type Sales Name Here</span>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="control-label col-md-3">Product Sales</label>
                                          <div class="col-md-9">                                                                                                      
                                          <input type='hidden' class="form-control"data-init-text='' name='product_sales' id='sales_list' />
                                          <span class="help-block">Type Product Sales Here</span>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="control-label col-md-3">Appl. Engineer</label>
                                          <div class="col-md-9">                                                                                                      
                                          <input type='hidden' class="form-control"data-init-text='' name='appl_engineer' id='appl_engineer' />
                                          <span class="help-block">Type Appl. Engineer Here</span>
                                          </div>
                                    </div>  
                                    <div class="form-group">
                                          <label class="control-label col-md-3">Expediter</label>
                                          <div class="col-md-9">                                                                                                      
                                          <input type='hidden' class="form-control"data-init-text='' name='expediter' id='expediter' />
                                          <span class="help-block">Type Expediter Here</span>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="control-label col-md-3">Customer</label>
                                          <div class="col-md-9">                                                                                                      
                                          <input type='hidden' class="form-control" data-init-text='' name='customer' id='customer' />
                                          <span class="help-block">Type Customer Here</span>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="control-label col-md-3">PO Number</label>
                                          <div class="col-md-9">                                                                                                      
                                          <input type='text' class="form-control" data-init-text='' name='po_number' id='po_number' />
                                          <span class="help-block">Type PO Number Here</span>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="control-label col-md-3">Delivery Term</label>
                                          <div class="col-md-9">                                                                                          
                                          <select class="form-control" name="delivery_term">
                                                <option value="">Select...</option>
                                                <option value="Franco">Franco</option>
                                                <option value="DDP">DDP</option>
                                                <option value="DDU">DDU</option>
                                                <option value="FOT">FOT</option>
                                                <option value="FOB">FOB</option>
                                                <option value="FCA">FCA</option>
                                          </select>
                                          <span class="help-block">Select the Delivery Term</span>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="control-label col-md-3">Delivery Point</label>
                                          <div class="col-md-9">                                                                                          
                                          <select class="form-control" name="delivery_point">
                                                <option value="">Select...</option>
                                                <option value="Jakarta">Jakarta</option>
                                                <option value="Jakarta KALIJAPAT">Jakarta KALIJAPAT</option>
                                                <option value="Surabaya">Surabaya</option>
                                                <option value="Duri">Duri</option>
                                                <option value="Bontang">Bontang</option>
                                                <option value="Balikpapan">Balikpapan</option>
                                          </select>
                                          <span class="help-block">Select the Delivery Point</span>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="control-label col-md-3">Payment Term</label>
                                          <div class="col-md-9">                                                                                          
                                          <select class="form-control" name="payment_term">
                                                <option value="">Select...</option>
                                                <option value="N-30">N-30</option>
                                                <option value="N-45">N-45</option>
                                                <option value="N-60">N-60</option>
                                                <option value="N-90">N-90</option>
                                                <option value="DP 30%  Balance Prior To Shipment">DP 30%  Balance Prior To Shipment</option>
                                                <option value="COD">COD</option>
                                                <option value="CBD">CBD</option>
                                                <option value="PROGRESS<">PROGRESS</option>
                                                <option value="T/T IN ADVANCE">T/T IN ADVANCE</option>
                                          </select>
                                          <span class="help-block">Select the Payment Term</span>
                                          </div>
                                    </div>                                 
                              </div>
                              <div class="row">
                                    <div class="col-md-6">                                          
                                          <div class="form-group">
                                                <label class="control-label">PO Amount<span class="required">*</span></label>
                                                <input type="text" id="po_amount" name="po_amount" class="form-control" placeholder="Enter the SO Number">
                                                <span class="help-block">Enter PO Amount</span>
                                          </div>                                    
                                    </div>
                                    <div class="col-md-6">
                                          <div class="form-group">
                                          <label class="control-label">Order Date</label>
                                          <div class="input-group date date-picker" data-date="<?php echo date('d-m-Y') ?>" data-date-format="D, dd M yyyy" data-date-viewmode="years">
                                             <input type="text" name="order_date" class="form-control" readonly>
                                             <span class="input-group-btn">
                                             <button class="btn default" type="button"><i class="icon-calendar"></i></button>
                                             </span>
                                          </div>
                                                <span class="help-block">&nbsp;</span>
                                          </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-6">                                          
                                          <div class="form-group">
                                                <label class="control-label">Due Date<span class="required">*</span></label>
                                                <div class="input-group date date-picker" data-date="<?php echo date('d-m-Y') ?>" data-date-format="D, dd M yyyy" data-date-viewmode="years">
                                             <input type="text" class="form-control" name="due_date" readonly>
                                             <span class="input-group-btn">
                                             <button class="btn default" type="button"><i class="icon-calendar"></i></button>
                                             </span>
                                          </div>
                                                <span class="help-block">&nbsp;</span>
                                          </div>                                    
                                    </div>
                                    <div class="col-md-6">
                                          <div class="form-group">
                                                <label class="control-label">2nd Due Date</label>
                                                <div class="input-group date date-picker" data-date="<?php echo date('d-m-Y') ?>" data-date-format="D, dd M yyyy" data-date-viewmode="years">
                                             <input type="text" class="form-control" name="due_date2" readonly>
                                             <span class="input-group-btn">
                                             <button class="btn default" type="button"><i class="icon-calendar"></i></button>
                                             </span>
                                          </div>
                                                <span class="help-block">&nbsp;</span>
                                          </div>
                                    </div>
                                    
                                    
                              </div>
                              <div class="row">
                                    <div class="form-group">
                                          <label class="control-label col-md-3">Product</label>
                                          <div class="col-md-9">                                                                                                      
                                          <input type='text' class="form-control" data-init-text='' name='product'  />
                                          <span class="help-block">Type Product Here</span>
                                          </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-6">
                                          <div class="form-group">
                                                <label class="control-label">Partial Delv</label>
                                                <select class="form-control" name="partial_delv">
                                                      <option value="">Select...</option>
                                                      <option value="Not Specify">Not Specify</option>
                                                      <option value="Allowed">Allowed</option>
                                                      <option value="Not Allowe">Not Allowed</option>
                                                </select>
                                                <span class="help-block">&nbsp;</span>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                          <div class="form-group">
                                                <label class="control-label">Partial Inv</label>
                                                <select class="form-control" name="partial_inv">
                                                      <option value="">Select...</option>
                                                      <option value="Not Specify">Not Specify</option>
                                                      <option value="Allowed">Allowed</option>
                                                      <option value="Not Allowe">Not Allowed</option>
                                                </select>
                                                <span class="help-block">&nbsp;</span>
                                          </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="form-group">
                                          <label class="control-label col-md-3">End User</label>
                                          <div class="col-md-9">                                                                                                      
                                          <input type='text' class="form-control" data-init-text='' name='end_user' />
                                          <span class="help-block">&nbsp;</span>
                                          </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="form-group">
                                          <label class="control-label col-md-3">Sub Combine</label>
                                          <div class="col-md-9">                                                                                                      
                                          <input type='text' class="form-control" data-init-text='' name='sub_combine' />
                                          <span class="help-block">&nbsp;</span>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </form>
            
</div>
<div class="modal-footer">
      <button type="button" class="btn default" data-dismiss="modal">Close</button>
      <button type="button" class="btn blue" id="btnSubmit">Save changes</button>
</div>
<script>
 jQuery(document).ready(function() {
      $('.date-picker').datepicker({
                rtl: App.isRTL(),
                autoclose: true
      });
      select_list();
      $('body').removeClass("modal-open");
      $('#btnSubmit').click(function(){
                  if ($('#frm_ModalOrder').validate().form()) {
                          $('#frm_ModalOrder').submit();
                      }
                      //return false;
            });
      var forms = $('#frm_ModalOrder');
            var error = $('.alert-error', forms);
            var success = $('.alert-success', forms);
      $('#frm_ModalOrder').validate({
                  errorElement: 'span', //default input error message container
                  errorClass: 'help-block', // default input error message class
                  focusInvalid: false, // do not focus the last invalid input
                  doNotHideMessage: true,
                  ignore: "",
                  rules: {
                      so_number: {
                         minlength: 10,
                          required: true
                      },
                      so_status: {
                          required: true
                      },
                      so_date: {
                          required: true
                      },
                      sales_name: {
                          required: true
                      },
                      product_sales: {
                          required: true
                      },
                      appl_engineer: {
                          required: true
                      },
                      expediter: {
                          required: true
                      },
                      po_number: {
                          required: true
                      },
                      delivery_term: {
                          required: true
                      },
                      delivery_point: {
                          required: true
                      },
                      customer: {
                          required: true
                      },
                      payment_term: {
                          required: true
                      },
                      po_amount: {
                          required: true
                      },
                      order_date: {
                          required: true
                      },
                      due_date: {
                          required: true
                      },
                      due_date2: {
                          required: true
                      },
                      product: {
                          required: true
                      },
                      partial_delv: {
                          required: true
                      },
                      partial_inv: {
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
                      $('.alert-error', $('#frm_ModalOrder')).show();
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
            $('#frm_ModalOrder input').keypress(function (e) {
                  if (e.which == 13) {
                      if ($('#frm_ModalOrder').validate().form()) {
                          $('#frm_ModalOrder').submit();
                      }
                      //return false;
                  }
              });
            $("#so_number").change(function() {
            var input = $(this);

            if (input.val() === "" || input.val().length < 10) {
                  //console.log('deas ganteng'+input.length);
                return;
            }

            input.attr("readonly", true).
            attr("disabled", true).
            addClass("spinner");

            $.post('<?php echo base_url("order/cek_so") ?>', {
                so_number: input.val()
            }, function (res) {
                input.attr("readonly", false).
                attr("disabled", false).
                removeClass("spinner");

                // change popover font color based on the result
                if (res.status == 'OK') {
                    input.closest('.form-group').removeClass('has-error').addClass('has-success');
                    $('.icon-exclamation-sign', input.closest('.form-group')).remove();
                    input.before('<i class="icon-ok"></i>');
                    input.data('bs.popover').tip().removeClass('error').addClass('success');
                } else {
                    input.closest('.form-group').removeClass('has-success').addClass('has-error');
                    $('.icon-ok', input.closest('.form-group')).remove();
                    input.before('<i class="icon-exclamation-sign"></i>');

                    input.popover('destroy');
                    input.popover({
                        'html': true,
                        'placement': (App.isRTL() ? 'left' : 'right'),
                        'container': 'body',
                        'content': res.message,
                    });
                    input.popover('show');
                    input.data('bs.popover').tip().removeClass('success').addClass('error');

                    App.setLastPopedPopover(input);
                }

            }, 'json');

        });
});
function select_list(){
      $('#select_list, #sales_list, #appl_engineer, #expediter').select2({
          minimumInputLength: 2,
          ajax: {
            url: "<?php echo base_url('search/employee') ?>",
            dataType: 'json',
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
      $('#customer').select2({
          minimumInputLength: 2,
          ajax: {
            url: "<?php echo base_url('search/customer') ?>",
            dataType: 'json',
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
}
function saveOrder(form){
      var json = jsonQuery2(form);
      //console.log(json);
      $.ajax({
            url: "<?php echo base_url('order/save_order') ?>",
            dataType : 'json',
            data: json,
            type : 'POST',
            chache : false,
            success : function(response){
                  alert(response);
            }
      });
}    
</script>