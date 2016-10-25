<!DOCTYPE html>
<html>
    <head>
        <title>prueba daattables</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">


    </head>
    <body>
        <div class="col-xs-6 col-lg-offset-3">


          <table id="usuarios" class="table table-hover table-condensed table-bordered">
          </table>
        


        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>

    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modificacion de usuarios</h4>
      </div>
      <div class="modal-body">
      <table class="table table-condensed">
          <tr>
              <td>
                  nombre
              </td>
              <td>
                  <input type="text" name="nombre" class="form-control" id="nombre_edit">
              </td>
          </tr>
          <tr>
              <td>
                  email
              </td>
              <td>
                  <input type="email" name="email" class="form-control" id="email_edit">
              </td>
          </tr>
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<a href="" onclick=""></a>
<script>
$('#usuarios').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "usuarios/search",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });

function ver(id){
  alert(id);
}
</script>
</html>