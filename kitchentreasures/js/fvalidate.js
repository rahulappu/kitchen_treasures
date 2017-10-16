function p(){

	  var val_phone= /^[0-9]{2,4}$/;
	 $foodrate= document.getElementById('foodrate').value;

	 if(!val_phone.test($foodrate)){

      alert("enter valid rate or lack of sufficient digits");
	   document.getElementById('foodrate').value='';
	   $("#foodrate").focus();
      return false;
    }

}
function q(){

	  var val_phone= /^[0-9]{2,4}$/;
	 $quantity= document.getElementById('quantity').value;

	 if(!val_phone.test($quantity)){

      alert("enter valid quantity or lack of sufficient digits");
	   document.getElementById('quantity').value='';
	   $("#quantity").focus();
      return false;
    }

}
function f(){

 var val_fname= /^[A-Za-z]{3,20}$/;
 $foodname= document.getElementById('foodname').value;

 if(!val_fname.test($foodname)){

    alert("Food Name Must be Alphabets Only or lack of sufficient characters");
   document.getElementById('foodname').value='';
   $("#foodname").focus();
    return false;
  }

}
