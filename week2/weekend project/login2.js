var person={
    FirstName: "lidu",
    Email: "lidu@gmail.com",
    phonenumber:"0989005520",

};
function login()
{ 
  
    var FirstName = document.getElementById("fname").value;
    var Email = document.getElementById("lname").value;
    var phonenumber = document.getElementById("pname").value;
   
if(FirstName == person.FirstName && person.Email && person.phonenumber)
{
    window.open=("./home.html");
    alert("succesfully");
}
else{
    alert('error');    
}
  }
  