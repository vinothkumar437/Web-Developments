function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

$(document).ready(function(){
  $("#submit").click(function(){
	  var empid = $("#empid").val();
	  var place = $("#sel1").children("option:selected").val();
	  var problem = $("#sel2").children("option:selected").val();
	  var comment = $("#comment").val();
	  
	  var empErr = locErr = probErr = comErr = true;
	  
	  // validate employee ID
	  if(empid == ""){
		  printError("empErr","Please enter your employee id");
		}else{
			var regex = /^[0-9]*$/;
			if ((regex.test(empid)) === false){
				printError("empErr","Please enter valid employee id");
			}else{
				printError("empErr", "");
				empErr = false;
			}
		}
	
	  // validate location
	  if(place == ""){
			printError("locErr","Please choose the location");
		}else{
			printError("locErr", "");
			locErr = false;
	  }
	  
	  // validate problem
	  if(problem == ""){
			printError("probErr","Please choose the problem");
		}else{
			printError("probErr", "");
			probErr = false;
	  }
	  
	  // validate problem
	  if(comment == ""){
			printError("comErr","Please enter the comments");
		}else{
			printError("comErr", "");
			comErr = false;
	  }
	  
	  if((empErr || locErr || probErr || comErr) == true)
	  {
		  return false;
	  }else{
		  var dataString = "empid1=" + empid + "&place1=" + place + "&problem1=" + problem + "&comment1=" + comment;
		  $.ajax({
			  type: "POST",
			  url: "db.php",
			  data: dataString,
			  cache: false,
			  success: function(result){
				  $("#myModal").modal();
				  $(".confirm").html(result);
				  
				  //$('button').click(function() {
				//	location.reload();
				  //});
				  $(document).click(function() {
					location.reload();
				  });
			  }
		  });
	  }
  });
});
