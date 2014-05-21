<table class="table table-striped table-hover table-bordered"  style=" word-wrap: break-word; border-collapse: collapse;" id="tbl_order">
            <thead>
               <tr>
                  <th style="width:15px;">No.</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Satuan</th>
                  <th>Brand</th>
                  <th style="width:20px;">Tools</th>
               </tr>
            </thead>
            <tbody>
            <?php $no = 1; foreach ($result as $key => $row): ?>               
               <tr >
                  <td><?php echo $no ?></td>
                  <td><?php echo $row->kode_barang ?></td>
                  <td><?php echo $row->nama_barang ?></td>
                  <td class="center"><?php echo $row->satuan ?></td>
                  <td><?php echo $row->merk ?></td>
                  <td>
                     <a href="<?php echo base_url('systems/modal_viewbarang/'.$row->kode_barang) ?>" class="btn blue ajax-modals" onclick='return false;' id="ajax-demo" data-toggle="modal">
                        <i class="icon-plus"></i>
                     </a>
                  </td>
               </tr>
            <?php $no++; endforeach ?>               
            </tbody>
         </table>
<script src="<?php echo base_url() ?>assets/scripts/ui-extended-modals.js"></script>          
<script>
   jQuery(document).ready(function() {
    Table.init();
    UIExtendedModals.init();
});
</script>