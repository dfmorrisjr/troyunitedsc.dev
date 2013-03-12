<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Determine Age Group</title>
<script src="http://code.jquery.com/jquery-latest.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
        
		$('#txtBirthDate').change( function() {
  			var birthDate = $('#txtBirthDate').val();
			birthDate = new Date(birthDate);
			
			if(birthDate){
				$('#txtAgeGroup').val(birthDate.toDateString());
			}
		});
          
	});

	
</script>

</head>

<body>
<section>
<fieldset>
	<legend>Determine Age Group</legend>
    <label for="txtBirthDate">BirthDate</label><input type="text" id="txtBirthDate"/><br />
    <label for="txtAgeGroup"></label>Age Group<input type="text" id="txtAgeGroup"/>
</fieldset>
</section>
</body>
</html>