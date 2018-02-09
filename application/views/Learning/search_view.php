<html>
 <head>
   <title><?php echo $title; ?></title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
      <script src="assets/DataTables-1.10.16/css/dataTables.bootstrap.min.css"> </script>
      <script src="assets/DataTables-1.10.16/js/dataTables.min.js"> </script>
      <script src="assets/DataTables-1.10.16/js/dataTables.bootstrap.min.js"> </script>

   <style>
           body
           {
                margin:0;
                padding:0;
                background-color:#f1f1f1;
           }
           .box
           {
                width:900px;
                padding:20px;
                background-color:#fff;
                border:1px solid #ccc;
                border-radius:5px;
                margin-top:10px;
           }
      </style>
 </head>
 <body>
      <div class="container box">
           <h3 align="center"><?php echo $title; ?></h3><br />
           <div class="table-responsive">
                <br />
                <table id="user_data" class="table table-bordered table-striped">
                     <thead>
                          <tr>

                               <th width="35%">Title</th>
                               <th width="35%">Course</th>
                               <th width="10%">Edit</th>
                               <th width="10%">Delete</th>
                          </tr>
                     </thead>
                </table>
           </div>
      </div>
 </body>
 </html>
 <script type="text/javascript" language="javascript" >
 $(document).ready(function(){
      var dataTable = $('#user_data').DataTable({
           "processing":true,
           "serverSide":true,
           "order":[],
           "ajax":{
                url:"<?php echo base_url() . 'search/fetch_user'; ?>",
                type:"POST"
           },
           "columnDefs":[
                {
                     "targets":[0, 3, 4],
                     "orderable":false,
                },
           ],
      });
 });
 </script>
