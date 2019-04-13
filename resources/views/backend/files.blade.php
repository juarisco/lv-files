<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Archivos</title>
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

       
</head>
<body>
    
    <div class="container">
        <div class="row">
    
            <div class="col s6 left">
                <h1>Esta es la página para usbir archivos</h1>
            </div>
    
            <div class="col s6 right">
                <form action="guardar" id="upload"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Seleccionar</span>
                            <input type="file" name="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Save
                        <i class="material-icons right">save</i>
                    </button>
                </form>
            </div>
    
        </div>
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>     
</body>
</html>
