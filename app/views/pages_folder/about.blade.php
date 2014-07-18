<!-- @extends('layouts.home_master')
 -->@section('content')
<!-- <h1>ABOUT PAGE</h1> -->
<!DOCTYPE HTML>  
<html>  
       <head>  
              <meta http-equiv="X-UA-Compatible" content="IE=edge">  
     <script src="resources/sap-ui-core.js"  
                      id="sap-ui-bootstrap"  
                      data-sap-ui-libs="sap.ui.commons,sap.ui.table"  
                      data-sap-ui-theme="sap_goldreflection" >  
              </script>  
              <!-- add sap.ui.table,sap.ui.ux3 and/or other libraries to 'data-sap-ui-libs' if required -->  
   <script>  
     //Creation of a layout on which 2 tables will be added  
     var oMasterLayout = new sap.ui.commons.layout.MatrixLayout({id:"idMasterLayout",layoutFixed :false});  
       
      //Creation of the table and adding columns  
    var oTableComponent1 = new sap.ui.table.Table({  
    id : "idTableComponent1",  
    visibleRowCount: 5,    
    navigationMode : sap.ui.table.NavigationMode.Paginator,  
    width:"25%"  
    });          
    oTableComponent1.addColumn(new sap.ui.table.Column({  
    label: new sap.ui.commons.Label({text: "Item"}),  
    template: new sap.ui.commons.TextView().bindProperty("text", "Item"),  
    width:"10%"  
    }));  
    oTableComponent1.addColumn(new sap.ui.table.Column({  
    label: new sap.ui.commons.Label({text: "IFS Material No."}),  
    template: new sap.ui.commons.TextView().bindProperty("text","Material")  
    }));  
     
    //Adding above table to the layout  
    oMasterLayout.addRow(new sap.ui.commons.layout.MatrixLayoutRow({  
  cells:[new sap.ui.commons.layout.MatrixLayoutCell({  
  content: [oTableComponent1]  
  })]  
  }));  
     
       //Creation of the table and adding columns  
    var oTableComponent2 = new sap.ui.table.Table({  
    id : "idTableComponent2",  
    visibleRowCount: 5,  
    navigationMode : sap.ui.table.NavigationMode.Paginator,  
    width:"25%"  
    });          
    oTableComponent2.addColumn(new sap.ui.table.Column({  
    label: new sap.ui.commons.Label({text: "Item"}),  
    template: new sap.ui.commons.TextView().bindProperty("text", "Item"),  
    width:"10%"  
    }));  
    oTableComponent2.addColumn(new sap.ui.table.Column({  
    label: new sap.ui.commons.Label({text: "IFS Material No."}),  
    template: new sap.ui.commons.TextView().bindProperty("text","Material")  
    }));  
     
    //Adding above table to the layout  
    oMasterLayout.addRow(new sap.ui.commons.layout.MatrixLayoutRow({  
  cells:[new sap.ui.commons.layout.MatrixLayoutCell({  
  content: [oTableComponent2]  
  })]  
  }));  
    oMasterLayout.addRow(new sap.ui.commons.layout.MatrixLayoutRow({  
  cells:[new sap.ui.commons.layout.MatrixLayoutCell({  
  content: [new sap.ui.commons.Button({text:"Final Values"})]  
  })]  
  }));    
    oMasterLayout.placeAt("content");  
     
      //Setting data to above 2 tables  
      var initialTableData1 = [{Item: "1",Material:"Mat1"},  
                                 {Item: "2",Material:"Mat2"},  
                                 {Item: "3",Material:"Mat3"},                            
                                ];     
        var oModel1 = new sap.ui.model.json.JSONModel();  
        oModel1.setData(initialTableData1);  
        oTableComponent1.setModel(oModel1).bindRows("/");  
          
        var initialTableData2 = [{Item: "6",Material:"Mat6"},  
                             {Item: "7",Material:"Mat7"},  
                             {Item: "8",Material:"Mat8"},                                
                            ];     
        var oModel2 = new sap.ui.model.json.JSONModel();  
        oModel2.setData(initialTableData2);  
        oTableComponent2.setModel(oModel2).bindRows("/");         
          
  //Adding jquery ui plugin  
        $.sap.require('sap.ui.thirdparty.jqueryui.jquery-ui-core');  
        $.sap.require('sap.ui.thirdparty.jqueryui.jquery-ui-widget');  
        $.sap.require('sap.ui.thirdparty.jqueryui.jquery-ui-mouse');  
        $.sap.require('sap.ui.thirdparty.jqueryui.jquery-ui-draggable');  
        $.sap.require('sap.ui.thirdparty.jqueryui.jquery-ui-sortable');  
         
$(function() {        
            $("#idTableComponent1 tbody, #idTableComponent2 tbody").sortable({  
                 connectWith : ".ui-sortable"              
            }).disableSelection();  
       });  
     </script>  
       </head>  
       <body class="sapUiBody" role="application">  
              <div id="content"></div>  
       </body>  
</html>  
@stop