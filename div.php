<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

    <body class="bd">
        <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">ADDITION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sub.php">SUBTRATION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mult.php">MULTIPLICATION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="div.php">DIVISION</a>
              </li>
            </ul>
          </nav>
        <div class="container">
            <div class="row">
                <div class="col col-12 col-sm-4"></div>
                <div class="col col-12 col-sm-4">
                    <table class="table">
                        <H1> <p class="center">DIVISION</p></H1>
                        <tr>
                            <td>Number1</td>
                            <td><input id="num1" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Number2</td>
                            <td><input id="num2" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button onclick="division()"class="btn btn-info"> / </button></td>
                        </tr>
                        <tr>
                            <td>RESULT</td>
                            <td><input id="res" type="text" class="form-control"></td>
                        </tr>
                    </table>
    
                </div>
                <div class="col col-12 col-sm-4"></div>
            </div>
        </div>
        <script>
            function division()
            {
                var getNumber1=parseInt(document.getElementById("num1").value)
                var getNumber2=parseInt(document.getElementById("num2").value)
        
                var RESULT = getNumber1/getNumber2
                
                document.getElementById("res").value=RESULT
            }
        </script>
    </body>
    

</html>