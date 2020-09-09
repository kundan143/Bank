<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/user.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
        $("#btn2").click(function(){
            $("#txt1").toggle();
        });
        });
        $(document).ready(function(){
        $("#btn3").click(function(){
            $("#txt1").toggle();
        });
        });
        $(document).ready(function(){
        $("#btn1").click(function(){
            $("tbl1").toggle();
        });
        });
    </script>
</head>
<body>
    <h1>Binary Number Bank</h1>
    <button id="btn1">Transection Details</button>
    <button id="btn2">withdraw</button>
    <button id="btn3">deposit </button>
    <input id="txt1"type="text">
    <table class= "table table-bordered" id="tbl1" >
        <thead>
            <tr>
                <th style="text-align:center">Date</th>
                <th style="text-align:center">Credit</th>
                <th style="text-align:center">Debit</th>
                <th style="text-align:center">Left Amount</th>
              </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align:center" ></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
