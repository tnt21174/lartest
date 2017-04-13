<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="./<?php echo e(mix('/js/app.js')); ?>" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->



<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxbuttons.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxscrollbar.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxlistbox.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxdropdownlist.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxcheckbox.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxmenu.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxgrid.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxgrid.filter.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxgrid.sort.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxgrid.selection.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxgrid.columnsresize.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxgrid.pager.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxgrid.edit.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxpanel.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxgrid.aggregates.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxdatatable.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/globalization/globalize.js'); ?>"></script>

<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/generatedata.js'); ?>"></script>


<script type="text/javascript">
	jQuery.noConflict();
        $(document).ready(function () {
            // prepare the data
            var data = generatedata(200);

            var source =
            {
                localdata: data,
                datafields:
                [
                    { name: 'id', type: 'number'},
                    { name: 'firstname', type: 'string' },
                    { name: 'lastname', type: 'string' },
                    { name: 'productname', type: 'string' },
                    { name: 'available', type: 'bool' },
                    { name: 'quantity', type: 'number' },
                    { name: 'price', type: 'number' },
                    { name: 'total', type: 'number' }
                ],
                datatype: "array"
            };

            var columns = [
                  { text: 'First Name', datafield: 'firstname', width: 200, cellsalign: 'center', align: 'center' },
                  { text: 'Last Name', datafield: 'lastname', width: 200, cellsalign: 'center', align: 'center' },
                  { text: 'Product', datafield: 'productname', width: 180, cellsalign: 'center', align: 'center' },
                  { text: 'Quantity', datafield: 'quantity', width: 80, cellsalign: 'center', align: 'center' },
                  { text: 'Unit Price', datafield: 'price', width: 90, cellsalign: 'center', align: 'center', cellsformat: 'c2' },
                  { text: 'Total', datafield: 'total', cellsalign: 'center', align: 'center', cellsformat: 'c2' }
                ];

            var dataAdapter = new $.jqx.dataAdapter(source);

            // initialize jqxGrid
            $("#jqxgrid").jqxGrid(
            {
                width: 850,
                source: dataAdapter,                
                selectionmode: 'multiplecellsextended',
                columns: columns
            });

            $("#leftbutton").jqxRadioButton({  width: 55 });
            $("#centerbutton").jqxRadioButton({ checked: true,  width: 70 });
            $("#rightbutton").jqxRadioButton({  width: 70 });

            var setAlignment = function (align) {
                $("#jqxgrid").jqxGrid('beginupdate');
                for (var index = 0; index < columns.length; index++) {
                    $("#jqxgrid").jqxGrid('setcolumnproperty', columns[index].datafield, 'align', align);
                    $("#jqxgrid").jqxGrid('setcolumnproperty', columns[index].datafield, 'cellsalign', align);
                }
                $("#jqxgrid").jqxGrid('endupdate');
            }

            $("#leftbutton").on('checked', function () {
                setAlignment('left');
            });
            $("#centerbutton").on('checked', function () {
                setAlignment('center');
            });
            $("#rightbutton").on('checked', function () {
                setAlignment('right');
            });

        });
    </script>
<!-- 
<script type="text/javascript" src="<?php echo asset('public/app/app.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxangular.js'); ?>"></script> 

-->
