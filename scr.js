var newview = document.querySelector('#view');
var newviewname = document.querySelector('#viewname');
var newviewaddress = document.querySelector('#viewaddress');
var newviewnumber = document.querySelector('#viewnumber');
var newviewmail = document.querySelector('#viewmail');
var newviewquestion = document.querySelector('#viewquestion');
document.forms.ourForm.onsubmit = function(e){
	e.preventDefault();
	var Name = document.forms.ourForm.username.value;
	Name = encodeURIComponent(Name);
	var address = document.forms.ourForm.useraddress.value;
	address = encodeURIComponent(address);
	var number = document.forms.ourForm.usernumber.value;
	number = encodeURIComponent(number);
	var mail = document.forms.ourForm.usermail.value;
	mail = encodeURIComponent(mail);
	var question = document.forms.ourForm.question.value;
	question = encodeURIComponent(question); 
	
	//var xhr = new XMLHttpRequest('GET','email.php?', + 'username=' + Name, + '&useraddress=' + address, + '&usernumber=' + number, + '&usermail=' + mail, + '&userquestion=' + question);
	var xhr = new XMLHttpRequest();
	xhr.open('POST','email.php');
	xhr.setRequestHeader('Content-Type','multipart/form-data');
	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4 && xhr.status ===200){
			newview.style="width: 100%; max-width: 355px; background-color: white ; position: relative; margin:0 auto ;margin-top: 20px";

			newviewname.innerHTML = Name;
			newviewname.style = "padding: 15px 0; margin-left: 15px";
			newviewaddress.innerHTML = address;
			newviewaddress.style = "padding: 15px 0; margin-left: 15px";
			newviewnumber.innerHTML = number;
			newviewnumber.style = "padding: 15px 0; margin-left: 15px";
			newviewmail.innerHTML = mail;
			newviewmail.style = "padding: 15px 0; margin-left: 15px";

			newviewquestion.innerHTML = "<textarea readonly= 'readonly' >"+question+"</textarea>";
			newviewquestion.style = "padding: 15px 0; margin-left: 20px; margin-right: 20px;";
			newviewquestion.firstChild.style = "resize: none; background: #ffffff;  border-color: #797979; border-width: 2px; border-radius: 4px; padding: 10px;  width: 100%; height: 200px;  box-sizing: border-box;  font-size: 14px; ";
			
		}
		
	}
	xhr.send('username=' + Name);
};