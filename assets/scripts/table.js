var Table = function () {
var tbl_transMasuk;
    
        var table_trans_masuk = function(){
            function restoreRow(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
                var jqTds = $('>td', nRow);

                for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                    oTable.fnUpdate(aData[i], nRow, i, false);
                }

                oTable.fnDraw();
            }

            function editRow(oTable, nRow, type) {
                var aData = oTable.fnGetData(nRow);
                var jqTds = $('>td', nRow);
                //console.log(nRow);
                //console.log(aData);
                jqTds[1].innerHTML = '<input type="text" id="field1" onkeypress="return runScript(event,2)" class="form-control input-small" value="' + aData[1] + '">';
                jqTds[2].innerHTML = '<input type="text" id="field2" onkeypress="return runScript(event,3)" class="form-control input-small" value="' + aData[2] + '">';
                jqTds[3].innerHTML = '<input type="text" id="field3" onkeypress="return runScript(event,4)" class="form-control input-small" value="' + aData[3] + '">';
                jqTds[4].innerHTML = '<textarea id="field4" class="form-control input-small">' + aData[4] + '</textarea>';
                jqTds[5].innerHTML = '<input type="text" id="field5" onkeypress="return runScript(event,5)" class="form-control input-small" value="' + aData[5] + '"><input type="hidden" name="" value="'+type+'">';
                jqTds[6].innerHTML = '<a class="edit btn blue" data-mode="save" href=""><i class="icon-save"></i>s</a><a class="cancel btn red" href=""><i class="icon-remove"></i></a>';
                $('#field1').focus();
                return jqTds;
            }

            function saveRow(oTable, nRow) {
                var jqInputs = $('input', nRow);
                var deas = $('textarea', nRow);
                //console.log(jqInputs[4]);
                var json_data = {so_number: so_number, nama_barang: jqInputs[0].value, satuan: jqInputs[1].value, jumlah_satuan: jqInputs[2].value, deskripsi: deas[0].value, berat: jqInputs[3].value};
                $.ajax({
                    url: base_url+'transaksi/simpan_barang/'+jqInputs[4].value,
                    dataType : 'json',
                    type : 'POST',
                    data : json_data,
                    chache : false,
                    success : function(){
                          //alert(response);
                    }
                });
                oTable.fnUpdate(jqInputs[0].value, nRow, 1, false);
                oTable.fnUpdate(jqInputs[1].value, nRow, 2, false);
                oTable.fnUpdate(jqInputs[2].value, nRow, 3, false);
                oTable.fnUpdate(deas[0].value, nRow, 4, false);
                oTable.fnUpdate(jqInputs[3].value, nRow, 5, false);                
                oTable.fnUpdate('<a class="delete btn red" href=""><i class="icon-trash"></i></a><a class="edit btn green" href=""><i class="icon-pencil"></i></a>', nRow, 6, false);
                oTable.fnDraw();
            }

            function cancelEditRow(oTable, nRow) {
                var jqInputs = $('input', nRow);
                var deas = $('textarea', nRow);
                oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
                oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
                oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
                oTable.fnUpdate(deas[0].value, nRow, 4, false);
                oTable.fnUpdate(jqInputs[4].value, nRow, 5, false);
                oTable.fnUpdate('<a class="edit btn green" href=""><i class="icon-pencil"></i></a>', nRow, 6, false);
                oTable.fnDraw();
            }

            var oTable = $('#tbl_transMasuk').dataTable({
                "aLengthMenu": [
                    [5, 15, 20, -1],
                    [5, 15, 20, "All"] // change per page values here
                ],
                // set the initial value
                "iDisplayLength": 100,
                
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ records",
                    "oPaginate": {
                        "sPrevious": "Prev",
                        "sNext": "Next"
                    }
                },
                "bInfo": false,
            "bJQueryUI": true,
            "bAutoWidth": false//,
           // "aaSorting": [[2, "desc"]],
            /*"aoColumns": [
            { "sWidth": "10px" },
            { "sWidth": "10px" },
            { "sWidth": "20%" },
            { "sWidth": "20px" },
            { "sWidth": "9%" },
            { "sWidth": "11%" } ]*///,
               /* "aoColumnDefs": [{
                        "sWidth": "10px",
                        'aTargets': [4]
                    }
                ],*/
                /*"aoColumnDefs": [
                  { "sWidth": "20%", "aTargets": [ 0 ] }
                ]*/
                //"bAutoWidth": false
                //"aoColumns": [{sWidth:"10px"},{sWidth:"10px"},{sWidth:"10px"},{sWidth:"10px"},{sWidth:"10px"},{sWidth:"10px"}]
            }); oTable.fnDraw();

            jQuery('#tbl_transMasuk_wrapper .dataTables_filter input').addClass("form-control input-medium"); // modify table search input
            jQuery('#tbl_transMasuk_wrapper .dataTables_length select').addClass("form-control input-small"); // modify table per page dropdown
            jQuery('#tbl_transMasuk_wrapper .dataTables_length select').select2({
                showSearchInput : true //hide search box with special css class
            }); // initialize select2 dropdown

            var nEditing = null;

            $('#tbl_transMasuk_new').click(function (e) {
                e.preventDefault();
                var aiNew = oTable.fnAddData(['', '', '', '', '',  '',
                    '<a class="edit btn green" href=""><i class="icon-pencil"></i></a> <a class="cancel btn red" data-mode="new" href=""><i class="icon-remove"></i></a>'
                ]);
                var nRow = oTable.fnGetNodes(aiNew[0]);
                editRow(oTable, nRow, 'new');
                nEditing = nRow;
            });

            $('#tbl_transMasuk a.delete').live('click', function (e) {
                e.preventDefault();

                if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }

                var nRow = $(this).parents('tr')[0];
                oTable.fnDeleteRow(nRow);
                alert("Deleted! Do not forget to do some ajax to sync with backend :)");
            });

            $('#tbl_transMasuk a.cancel').live('click', function (e) {
                e.preventDefault();
                if ($(this).attr("data-mode") == "new") {
                    var nRow = $(this).parents('tr')[0];
                    oTable.fnDeleteRow(nRow);
                    //alert('wkwk');
                } else {
                    //alert('deas');
                    restoreRow(oTable, nEditing);
                    nEditing = null;
                }
            });

        }
        var tableOrder = function() {
        var oTable = $('#tbl_order').dataTable( {           
            "aoColumnDefs": [
                { "aTargets": [ 0 ] }
            ],
            //"aaSorting": [[1, 'asc']],
             "aLengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "iDisplayLength": 10,
            "bAutoWidth": false
        });

        jQuery('#tbl_order_wrapper .dataTables_filter input').addClass("form-control input-small"); // modify table search input
        jQuery('#tbl_order_wrapper .dataTables_length select').addClass("form-control input-small"); // modify table per page dropdown
        jQuery('#tbl_order_wrapper .dataTables_length select').select2(); // initialize select2 dropdown

        $('#tbl_order_column_toggler input[type="checkbox"]').change(function(){
            /* Get the DataTables object again - this is not a recreation, just a get of the object */
            var iCol = parseInt($(this).attr("data-column"));
            var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
            oTable.fnSetColumnVis(iCol, (bVis ? false : true));
        });
        }
        var tableBrgMasuk = function() {
        var oTable = $('#tbl_transMasuk').dataTable( { 
            "ajax": base_url+"transaksi/data_table/"+so_number,
            "columns": [
                { "data": "barang_trans_id" },
                { "data": "nama_barang" },
                { "data": "satuan" },
                { "data": "no_satuan" },
                { "data": "deskripsi" },
                {
                "targets": -1,
                "data": null,
                "defaultContent": "<button>Click!</button>"
            }
            ],          
            "aoColumnDefs": [
                { "aTargets": [ 0 ] }
            ],
            //"aaSorting": [[1, 'asc']],
             "aLengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "iDisplayLength": 10,
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
        $('#tbl_transMasuk tbody').on( 'click', 'button', function () {
        //console.log('kwkw');
            var data = oTable.row($(this).parents('tr')).data();
            console.log(data);
            $("#nama_barang").select2("data", {id: data['kode_barang'], text: data['nama_barang']});
            alert( data['barang_trans_id'] +"'s salary is: "+ data[2] );
          } );
        }
   
     return {

        //main function to initiate the module
        init: function () {
            
            if (!jQuery().dataTable) {
                return;
            }
            //table_trans_masuk();
            tableOrder();
            //tableBrgMasuk();
        }

    };

}();