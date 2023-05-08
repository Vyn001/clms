<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIME IN/OUT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <style>
        body {
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            background: url('../img/uibg.jpeg')no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>

    <div class="container" style="margin-top:100px;">
        <div class="row">
            <div class="col">
                <div class="card shadow mt-5 pb-3">
                    <div class="card-header text-center fw-bold">Time In</div>
                    <div class="card-body">
                        <form action="process.php" method="POST">
                            <div class="input-group" style="width:300px;">
                                <label class="input-group-text" for="">Select Type</label>
                                <select class="form-control" name="type" id="" style="width:100px;">
                                    <option value="Time In">Time In</option>
                                    <option value="Time Out">Time Out</option>
                                </select><i class="bi bi-caret-down-fill"></i>
                            </div>
                            <label class="form-label fw-bold">Time in</label>
                            <div class="input-group">
                                <span class="input-group-text">ID</span>
                                <input class="form-control" type="text" autofocus name="time" id="">
                                <button type="submit" name="time" hidden>Hide</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Table for recent Time in-->
        <div class="table-responsive table-bordered mt-5 shadow">
            <table class="table text-center table-light">
                <thead>
                    <tr>
                        <th>ID #</th>
                        <th>Lastname</th>
                        <th>Firstname</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>04-1819-04894</td>
                        <td>Aungon</td>
                        <td>Marvin</td>
                        <td>12:00</td>
                        <td>5:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



</body>

</html>