

function vali()
{
  var nam=/^[a-zA-Z]{4,15}$/;
  var phn=/^[0-9]{9,14}$/;

  var len=document.myform.phone.length;


  if(document.myform.fname.value.search(nam)==-1)
  {
    alert("Enter correct  first name");
    document.myform.fname.focus();
    return false;
  }

  else if(document.myform.sname.value.search(nam)==-1)
  {
    alert("Enter correct  last name");
    document.myform.sname.focus();
    return false;
  }


  else if(document.myform.phone.value.search(phn)==-1)
  {
    if(len!=10)
    {
      alert("Enter correct phone no");
      document.myform.phone.focus();
      return false;
    }
  }

  else if(document.myform.hname.value.search(hnam)==-1)
  {
    alert("Enter valid house name");
    document.myform.hname.focus();
    return false;
  }
  else
  {
    return true;
  }

}
