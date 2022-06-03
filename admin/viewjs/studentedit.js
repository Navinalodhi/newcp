function validateSelection(option)
{
  if(option.value==0)
  {
    createError(option,"This field should select a option");
    return false;
  }
  else
    return true;
}
function createError(element,error_message)
{
  var errorHTML = "<p class='error_message'>"+error_message+"</p>";
  $(element).parent().append(errorHTML);
}
function validateOther(field)
{
  if(field.value.trim()=="")
  {
    createError(field,"This field should not be blanks");
    return false;
  }
  else
    return true;
}
function validateFile(field)
{
  if(field.value.trim()!="")
  {
    var ext = field.value.substring(field.value.lastIndexOf('.') + 1); 
  
  
    if(!(ext=="jpg"||ext=="JPG"||ext=="jpeg"||ext=="JPEG"||ext=="PNG"||ext=="png"||ext=="svg"||ext=="SVG"))
    {   
      createError(field,"File should  be valid of type");
      return false;
    }
     else
     {
          createError(field,"<label for='exampleInputUploading'>Uploading...</label> <img src='../../dist/img/ajax-loader.gif'   alt='User Image' />");
        return true;
      }
  }
  else
  {
    return true;
  }
}

function validateForm() {
	var errorCount=0;
	$(".error_message").remove();
    var form=document.forms["studentadd"];
    var elements = form.elements;
  	for (i=0; i<elements.length; i++){
  		var type=elements[i].type;
     if (type=="select-one")
      {
        if(validateSelection(elements[i])==false) errorCount++;
      }
      else
        if (type=="text" || type=="textarea")
      {
        if(validateOther(elements[i])==false) errorCount++;
      }
      else
        if(type=="file")
        {
          if(validateFile(elements[i])==false) errorCount++;
        }
      


 	 }

 	 if(errorCount>0) 
 	 	return false;
 	 else
 	 	return true;
 	 
}