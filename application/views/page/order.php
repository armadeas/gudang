<div class="row">
<div class="col-md-12">
   <!-- BEGIN EXAMPLE TABLE PORTLET-->
   <div class="portlet box red">
      <div class="portlet-title">
         <div class="caption"><i class="icon-edit"></i>List Order</div>
         <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
         </div>
      </div>
      <div class="portlet-body">
         <div class="table-toolbar">
            <div class="btn-group">
               <a href="<?php echo base_url('order/modal_order') ?>" class="btn green ajax-modals" id="ajax-demo" data-toggle="modal">
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
         <table class="table table-striped table-hover table-bordered" id="tbl_order">
            <thead>
               <tr>
                  <th>Username</th>
                  <th>Full Name</th>
                  <th>Points</th>
                  <th>Notes</th>
                  <th>Edit</th>
                  <th>Delete</th>
               </tr>
            </thead>
            <tbody>
               <tr >
                  <td>alex</td>
                  <td>Alex Nilson</td>
                  <td>1234</td>
                  <td class="center">power user</td>
                  <td><a class="edit" href="javascript:;">Edit</a></td>
                  <td><a class="delete" href="javascript:;">Delete</a></td>
               </tr>
               <tr >
                  <td>lisa</td>
                  <td>Lisa Wong</td>
                  <td>434</td>
                  <td class="center">new user</td>
                  <td><a class="edit" href="javascript:;">Edit</a></td>
                  <td><a class="delete" href="javascript:;">Delete</a></td>
               </tr>
               <tr >
                  <td>nick12</td>
                  <td>Nick Roberts</td>
                  <td>232</td>
                  <td class="center">power user</td>
                  <td><a class="edit" href="javascript:;">Edit</a></td>
                  <td><a class="delete" href="javascript:;">Delete</a></td>
               </tr>
               <tr >
                  <td>goldweb</td>
                  <td>Sergio Jackson</td>
                  <td>132</td>
                  <td class="center">elite user</td>
                  <td><a class="edit" href="javascript:;">Edit</a></td>
                  <td><a class="delete" href="javascript:;">Delete</a></td>
               </tr>
               <tr >
                  <td>webriver</td>
                  <td>Antonio Sanches</td>
                  <td>462</td>
                  <td class="center">new user</td>
                  <td><a class="edit" href="javascript:;">Edit</a></td>
                  <td><a class="delete" href="javascript:;">Delete</a></td>
               </tr>
               <tr >
                  <td>gist124</td>
                  <td>Nick Roberts</td>
                  <td>62</td>
                  <td class="center">new user</td>
                  <td><a class="edit" href="javascript:;">Edit</a></td>
                  <td><a class="delete" href="javascript:;">Delete</a></td>
               </tr>
            </tbody>
         </table>
         <div id="ajax-modal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="490">
                        
         </div>
      </div>
   </div>
   <!-- END EXAMPLE TABLE PORTLET-->
</div>
</div>                                                
<script src="<?php echo base_url() ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/scripts/ui-extended-modals.js"></script>          
<script>
   jQuery(document).ready(function() {
    Table.init();
    UIExtendedModals.init();
});
</script>