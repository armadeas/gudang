var FormEditable = function () {

    $.mockjaxSettings.responseTime = 500;

    var log = function (settings, response) {
        var s = [],
            str;
        s.push(settings.type.toUpperCase() + ' url = "' + settings.url + '"');
        for (var a in settings.data) {
            if (settings.data[a] && typeof settings.data[a] === 'object') {
                str = [];
                for (var j in settings.data[a]) {
                    str.push(j + ': "' + settings.data[a][j] + '"');
                }
                str = '{ ' + str.join(', ') + ' }';
            } else {
                str = '"' + settings.data[a] + '"';
            }
            s.push(a + ' = ' + str);
        }
        s.push('RESPONSE: status = ' + response.status);

        if (response.responseText) {
            if ($.isArray(response.responseText)) {
                s.push('[');
                $.each(response.responseText, function (i, v) {
                    s.push('{value: ' + v.value + ', text: "' + v.text + '"}');
                });
                s.push(']');
            } else {
                s.push($.trim(response.responseText));
            }
        }
        s.push('--------------------------------------\n');
        $('#console').val(s.join('\n') + $('#console').val());
    }

    var initAjaxMock = function () {
        //ajax mocks

        $.mockjax({
            url: base_url+'systems/edit_barang',
            response: function (settings) {
                log(settings, this);
            }
        });

        $.mockjax({
            url: '/error',
            status: 400,
            statusText: 'Bad Request',
            response: function (settings) {
                this.responseText = 'Please input correct value';
                log(settings, this);
            }
        });

        $.mockjax({
            url: '/status',
            status: 500,
            response: function (settings) {
                this.responseText = 'Internal Server Error';
                log(settings, this);
            }
        });

        $.mockjax({
            url: '/groups',
            response: function (settings) {
                this.responseText = [{
                        value: 0,
                        text: 'Guest'
                    }, {
                        value: 1,
                        text: 'Service'
                    }, {
                        value: 2,
                        text: 'Customer'
                    }, {
                        value: 3,
                        text: 'Operator'
                    }, {
                        value: 4,
                        text: 'Support'
                    }, {
                        value: 5,
                        text: 'Admin'
                    }
                ];
                log(settings, this);
            }
        });

    }

    var initEditables = function () {

        //set editable mode based on URL parameter
        /*if (App.getURLParameter('mode') == 'inline') {
            $.fn.editable.defaults.mode = 'inline';
            $('#inline').attr("checked", true);
            jQuery.uniform.update('#inline');
        } else {
            $('#inline').attr("checked", false);
            jQuery.uniform.update('#inline');
        }*/
        $.fn.editable.defaults.mode = 'inline';
        //global settings 
        $.fn.editable.defaults.inputclass = 'form-control';
        $.fn.editable.defaults.url =  base_url+'systems/edit_barang';
        $.fn.editable.defaults.pk = kode_barang;

        //editables element samples 
        $('#nama_barang').editable({
            //pk:90
            /*url: base_url+'systems/edit_barang',
            type: 'number',
            //pk: 1,
            name: 'username',
            title: 'Enter username'*/
        });

        $('#firstname').editable({
            validate: function (value) {
                if ($.trim(value) == '') return 'This field is required';
            }
        });

        $('#berat_barang').editable({
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
            ]
        });

        $('#status').editable();
        $('#kategory').editable();
        $('#satuan').editable({
            //showbuttons: false
        });

        $('#vacation').editable({
            rtl : App.isRTL() 
        });

        $('#dob').editable({
            inputclass: 'form-control',
        });

        $('#event').editable({
            placement: (App.isRTL() ? 'left' : 'right'),
            combodate: {
                firstItem: 'name'
            }
        });

        $('#meeting_start').editable({
            format: 'yyyy-mm-dd hh:ii',
            viewformat: 'dd/mm/yyyy hh:ii',
            validate: function (v) {
                if (v && v.getDate() == 10) return 'Day cant be 10!';
            },
            datetimepicker: {
                rtl : App.isRTL(),
                todayBtn: 'linked',
                weekStart: 1
            }
        });

        $('#comments').editable({
            showbuttons: 'bottom'
        });

        $('#deskripsi').editable({
            showbuttons : (App.isRTL() ? 'left' : 'right')
        });

        $('#pencil').click(function (e) {
            e.stopPropagation();
            e.preventDefault();
            $('#deskripsi').editable('toggle');
        });

        $('#merk').editable();

        
    }

    return {
        //main function to initiate the module
        init: function () {

            // inii ajax simulation
            //initAjaxMock();

            // init editable elements
            initEditables();                    


        }

    };

}();