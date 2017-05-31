<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{url('/')}}/css/tema_sunny/jquery-ui.theme.min.css" rel="stylesheet">
        <link href="{{url('/')}}/css/jquery-ui.structure.min.css" rel="stylesheet">
        <link href="{{url('/')}}/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="{{url('/')}}/css/datatable.responsive.css" rel="stylesheet">
        <link href="{{url('/')}}/libs/bootstrap/css/bootstrap.css" rel="stylesheet">

  
         <script src="{{url('/')}}/js/jquery.js"></script>
        <script src="{{url('/')}}/js/jquery-ui.min.js"></script>
        <script src="{{url('/')}}/js/ui_punch.js"></script>
        <script src="{{url('/')}}/js/jquery.dataTables.min.js"></script>
        <script src="{{url('/')}}/js/datatables.responsive.js"></script>
        <script src="{{url('/')}}/libs/bootstrap/js/bootstrap.js"></script>

   <style type="text/css">
            
        div.fw-body li {
            padding: 0.33em 0.5em;
        }
        div.fw-body li ul {
            margin-top: 0;
        }

        #usedBy div {
            height: 93px;
            line-height: 93px;
        }
        #usedBy img {
            vertical-align: middle;
            margin: 0 auto;
        }

        div.grid.margin {
            margin-bottom: 1em;
        }

        ul.blog_link_list {
            margin: 0;
        }
    
        </style>

        <script type="text/javascript">
            $(document).ready( function () {
            $('#tdatos').DataTable( {
              "processing": true,
              "serverSide": true,
              "ajax": "prueba_db_server",
              "columns":[
            {data:id},
            {data:name},
            {data:posicion},
            {data:office},
            {data:age},
            {data:start_date},
            {data:salario},
            ]
         } );//fin tdatos
} );//fin document
</script>
<head>
<body>
    
<div class="row">
    <div class="col-sm-6">
        <table id="tdatos" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                 <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>


       
   </div><!--fin col-->
</div><!--fin row-->  
  
    
            
    </body>
    </html>     



    