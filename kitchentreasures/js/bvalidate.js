function f(){

 var val_fname= /^[A-Za-z]{3,20}$/;
 $name= document.getElementById('name').value;

 if(!val_fname.test($name)){

    alert("First Name Must be Alphabets Only or lack of sufficient characters");
   document.getElementById('name').value='';
   $("#name").focus();
    return false;
  }

}
function p(){

	  var val_phone= /^[0-9]{9,12}$/;
	 $phone= document.getElementById('phone').value;

	 if(!val_phone.test($phone)){

      alert("enter valid phone number or lack of sufficient digits");
	   document.getElementById('phone').value='';
	   $("#phone").focus();
      return false;
    }

}
function d()
{
  var timestamp = new date().getTime() + (30 * 24 * 60 * 60 * 1000)
  $selectedTimestamp=document.getElementById('date').value;
  if (timestamp > selectedTimestamp) {
    alert("The selected time is less than 30 days from now") ;
}
else if (timestamp < selectedTimestamp) {
    // The selected time is more than 30 days from now
}
else {
  alert("The selected time is less than 30 days from now") ;

}

}
