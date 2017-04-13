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