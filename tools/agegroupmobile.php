<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <title>
        </title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <link rel="stylesheet" href="my.css" />
        <script src="http://code.jquery.com/jquery-1.7.2.min.js">
        </script>
        <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js">
        </script>
        <script src="my.js">
        </script>
        <!-- User-generated css -->
        <style>
        </style>
        <!-- User-generated js -->
        <script>
            

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
		
			referenceDate =  new Date(referenceYear.toString(),"7","1");
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
        <!-- Home -->
        <div data-role="page" id="page1">
            <div data-role="content">
                <div data-role="fieldcontain" id="txtBirthDateDIV">
                    <fieldset data-role="controlgroup">
                        <label for="txtBirthDate">
                            Player's Birtdate
                        </label>
                        <input name="txtBirthDate" id="txtBirthDate" placeholder="" value="" type="date" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain" id="txtAgeGroupDIV">
                    <fieldset data-role="controlgroup">
                        <label for="txtAgeGroup">
                            Age Group
                        </label>
                        <input name="txtAgeGroup" id="txtAgeGroup" placeholder="" value="" type="text" />
                    </fieldset>
                </div>
            </div>
        </div>
    </body>
</html>
