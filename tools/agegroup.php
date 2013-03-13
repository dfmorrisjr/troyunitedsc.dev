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
			var referenceDate;
			var currentDate = new Date();
			var currentMonth = currentDate.getMonth() + 1;
			var referenceYear = currentDate.getFullYear();
		
			if(currentMonth < 8){
				referenceYear = referenceYear - 1;
			}
		
			referenceDate =  new Date(referenceYear,"7","1");
			birthDate = new Date(birthDate);
			
			var elapsedYears = referenceDate - birthDate;
			elapsedYears = Math.floor((((((elapsedYears / 1000) / 60)/ 60)/ 24)/ 365));
			
			var ageGroup = "U" + (elapsedYears + 1);
			
			if(birthDate){
				$('#txtAgeGroup').val(ageGroup);
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