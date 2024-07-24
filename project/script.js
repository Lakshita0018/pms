//for name validation
function fname() {
  let x = document.getElementById("inputdefault").value;
  console.log(x);
  if (x == "") {
    document.getElementById("fnameerror").innerHTML = "* first name is required";
    document.getElementById("inputdefault").style.border = "2px solid red";
  } else {
    document.getElementById("fnameerror").innerHTML = " ";
    document.getElementById("inputdefault").style.border = "1px solid black"
  }
}
function lname() {
  let x = document.getElementById("inputdefault1").value;
  console.log(x);
  if (x == "") {
    document.getElementById("lnameerror").innerHTML = "* last name is required";
    document.getElementById("inputdefault1").style.border = "2px solid red";
  } else {
    document.getElementById("lnameerror").innerHTML = " ";
    document.getElementById("inputdefault1").style.border = "1px solid black"
  }
}
function email() {
  let x = document.getElementById("inputdefault2").value;
  console.log(x);
  if (x == "") {
    document.getElementById("emailerror").innerHTML = "*This feild is required";
    document.getElementById("inputdefault2").style.border = "2px solid red";
  } else {
    document.getElementById("emailerror").innerHTML = " ";
    document.getElementById("inputdefault2").style.border = "1px solid black"
  }
}
function password() {
  let x = document.getElementById("inputdefault3").value;
  console.log(x);
  if (x == "") {
    document.getElementById("passworderror").innerHTML = "*This feild is required";
    document.getElementById("inputdefault3").style.border = "2px solid red";
  } else {
    document.getElementById("passworderror").innerHTML = " ";
    document.getElementById("inputdefault3").style.border = "1px solid black"
  }
}
// for submit
function submitform() {
  fname();
  lname();
  email();
  password();
  
}