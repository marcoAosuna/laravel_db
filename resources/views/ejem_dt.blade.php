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
            $('#tdatos')
                .addClass( 'nowrap' )
                .dataTable( {
                    responsive: true,
                    columnDefs: [
                        { targets: [-1, -3], className: 'dt-body-right' }
                    ]
                } );
           
          } );
    
    
        </script>
<head>
<body>
    
<div class="row">
    <div class="col-sm-6">
    
     

        <table id="tdatos" class="display" cellspacing="0" width="100%">
           <thead>
                    <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>posicion</th>
                    <th>office</th>
                    <th>age</th>
                    <th>date</th>
                    <th>salario</th>
                    </tr>
                    </thead>
                    <tfoot>
                        <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>posicion</th>
                    <th>office</th>
                    <th>age</th>
                    <th>date</th>
                    <th>salario</th>
                        </tr>
                    </tfoot>
                    <tbody>

                     @foreach($datos as $dato)
                   <tr>
                                   <td>{{$dato->id}}</td>
                                   <td>{{$dato->name}}</td>
                                   <td>{{$dato->posicion}}</td>
                                   <td>{{$dato->office}}</td>
                                   <td>{{$dato->age}}</td>
                                   <td>{{$dato->start_date}}</td>
                                   <td>{{$dato->salario}}</td>
                    </tr>
                    @endforeach
            </tbody>
            
        </table>
   </div><!--fin col-->
</div><!--fin row-->  
  
    
            
    </body>
    </html>     