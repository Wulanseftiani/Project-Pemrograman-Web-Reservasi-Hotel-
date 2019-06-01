<!DOCTYPE html>
<html lang = "en">
    <head>
        <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
        <link rel = "stylesheet" type = "text/css" href = "css/style.css" />
    </head>
<body>
      <center>
      <style>
        body{
        background-image:url(hotel7.jpg);
            background-size:cover;
            background-attachment: fixed;
                }
        p{
            color:white;
        }
    </style>
    <nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
        <div  class = "container-fluid">
            <div class = "navbar-header">
            </div>
        </div>
    </nav>   
   
    <div style = "margin-left:0;" class = "container">
        <div class = "panel panel-default">
            <div class = "panel-body">
                 <font color="white" size="4">
                <strong><h3>MEMBUAT RESERVASI</h3></strong>
                <br />
                    <div style = "float:left; margin-left:10px;">
                        <h3><?php echo $fetch['room_type']?></h3>
                        <h3 style = "color:#00ff00;"><?php echo "Rp. ".$fetch['price'].".000";?></h3>
                    </div>
                </div>
                <br style = "clear:both;" />
                <div class = "well col-md-4">
                    <form method = "POST" enctype = "multipart/form-data">
                        <div class = "form-group">
                            <tr>
                                 <font color="white" size="3">
                            <td><label>Nama Awal</label></td>
                            </tr>
                            <input type = "text" class = "form-control" name = "firstname" required = "required" />
                        </div>
                        <div class = "form-group">
                            <tr>
                            <td><label>Nama Tengah</label></td>
                            </tr>
                            <input type = "text" class = "form-control" name = "middlename" required = "required" />
                        </div>
                        <div class = "form-group">
                            <tr>
                            <td><label>Nama Akhir</label></td>
                            </tr>
                            <input type = "text" class = "form-control" name = "lastname" required = "required" />
                        </div>
                        <div class = "form-group">
                            <tr>
                            <td><label>Alamat</label></td>
                            </tr>
                            <input type = "text" class = "form-control" name = "address" required = "required" />
                        </div>
                        <div class = "form-group">
                            <tr>
                            <td><label>Nomor Kontak</label></td>
                            </tr>
                            <input type = "text" class = "form-control" name = "contactno" required = "required" />
                        </div>
                        <div class = "form-group">
                            <tr>
                            <td><label>Check in</label></td>
                            </tr>
                            <input type = "date" class = "form-control" name = "date" required = "required" />
                        </div>
                        <div class = "form-group">
                            <tr>
                            <td><label>Check out</label></td>
                            </tr>
                            <input type = "date" class = "form-control" name = "date" required = "required" />
                        </div>
                        <br />
                        <div class = "form-group">
                            <button onclick="window.location.href='reply_reserve.php'"></i> Submit</button>

                        </div>
                    </form>
                </div>
                <div class = "col-md-4"></div>
                <?php require_once 'add_query_reserve.php';?>
            </div>
        </div>
    </div>
    <br />
    <br />
    </div>
      <center>
</body>  
