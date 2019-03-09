<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>

<body>
<div class="form-group">
<form action="result.php" class="form-horizontal"  role="form">
    <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label>
    <div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
        <input class="form-control" size="16" name="datetime" type="text" value="" readonly>
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
    </div>
    <input type="submit" value="Submit" />
    </form>
</div>

</body>
</html>
