function createError(element,error_message)
{
	var errorHTML = "<p class='error_message'>"+error_message+"</p>";
	$(element).parent().append(errorHTML);
}
function validateExistance(field)
{
	if(field.value.trim()=="")
	{
		createError(field,"This field should not be blanks");
		return false;
	}
	else
		return true;
}
function validateForm() {
	var errorCount=0;
	$(".error_message").remove();
    var form=document.forms["comment_form"];
    var elements = form.elements;
  	for (i=0; i<elements.length; i++){
  		var type=elements[i].type;
    	if(type=='text'||type=="password" || type=="email" || type=="tel" || type=="textarea")
    	{
    			if(validateExistance(elements[i])==false) errorCount++;
    	}
 	 }

 	 if(errorCount>0) 
 	 	return false;
 	 else
 	 {
 	 	//alert('Yes');
 	 	$.ajax({
 	 		method: "GET",
 	 		url: 'https://internalapi.engagespot.co/websitepartnercontact.php',		//This is temporary.
 	 		data: "name="+elements[0].value+"&email="+elements[1].value+"&phone="+elements[2].value+"&message="+elements[3].value,
 	 		success:function(data){
 	 			alert('Thank you for contacting us');
 	 			$("#commentForm")[0].reset();

 	 		},
 	 		error:function(data){
 	 			alert('error occured');
 	 		}
 	 	});

 	 	return false;
 	 }
 	 
}