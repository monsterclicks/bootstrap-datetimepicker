<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="bootstrap_datepicker/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css_datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>

<body>
  <div class="container">
      <form action="result.php" method="post" class="form-horizontal"  role="form">
          <fieldset>
              <legend>Test</legend>
              <div class="form-group">
                  <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label>
                  <!--<div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">-->
                  <div class="input-group date form_datetime col-md-5" data-date="<?php echo date('Y-m-d H:i:s'); ?>" data-date-format="yyyy-mm-dd hh:ii:00" data-link-field="dtp_input1">
                      <input class="form-control" size="16" name="datetime" type="text" value="" readonly>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
  					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                  </div>
  				<input type="submit" value="Submit"  /><br/>
              </div>


          </fieldset>
      </form>
  </div>

<script type="text/javascript" src="jquery_datepicker/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="bootstrap_datepicker/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js_datepicker/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js_datepicker/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
</body>
</html>
