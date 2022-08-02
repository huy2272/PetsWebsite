function getCurrentDate(){
  var weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
  var month = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug", "Sep", "Oct", "Nov", "Dec"];
  let today = new Date();
  var day = weekday[today.getDay()];
  var date = today.getDate();
  var month = month[today.getMonth()];
  var year = today.getFullYear();
  var hour = today.getHours();
  var minute = today.getMinutes();
  var second = today.getSeconds();
  document.getElementById("dateAndTime").innerHTML =
  "Date: " + day + ", " + month + ", "+ date + ", " + year +
  "<br> Time: " + hour + ":" + minute + ":" + second;
  setTimeout(getCurrentDate, 1000);
};
function validateForm() {
  var a = document.forms["UserDetailForm"]["answer_a"].value;
  var b = document.forms["UserDetailForm"]["answer_b"].value;
  var c = document.forms["UserDetailForm"]["answer_c"].checked;
  var d = document.forms["UserDetailForm"]["answer_d"].checked;
  var e = document.forms["UserDetailForm"]["answer_e"].checked;
  if (a == null || a == "") {
    alert("Please Fill All Required Field");
    return false;
  }
  if (b == null || b == "") {
    alert("Please Fill All Required Field");
    return false;
  }
  if ((c == null || c == "") && (d == null || d == "") && (e == null || e == "")) {
    alert("Please Fill All Required Field");
    return false;
  }
};
function validateFormGiveAway() {
  // a=Breed
  // b=descriptionBox
  // c=firstName
  // d=famName
  // e=Email
  // f,g,h=dogType,catType,Mixed
  // x,y,z=behaviorDogs,behaviorCats,behaviorChildren
  var a = document.forms["UserDetailForm"]["answer_a"].value;
  var b = document.forms["UserDetailForm"]["answer_b"].value;
  var c = document.forms["UserDetailForm"]["answer_c"].value;
  var d = document.forms["UserDetailForm"]["answer_d"].value;
  var e = document.forms["UserDetailForm"]["answer_e"].value;
  var f = document.forms["UserDetailForm"]["answer_f"].checked;
  var f1 = document.forms["UserDetailForm"]["answer_f1"].checked;
  var f2 = document.forms["UserDetailForm"]["answer_f2"].checked;
  var g = document.forms["UserDetailForm"]["answer_g"].checked;
  var g1 = document.forms["UserDetailForm"]["answer_g1"].checked;
  var g2 = document.forms["UserDetailForm"]["answer_g2"].checked;
  var h = document.forms["UserDetailForm"]["answer_h"].checked;
  var x = document.forms["UserDetailForm"]["answer_x"].checked;
  var y = document.forms["UserDetailForm"]["answer_y"].checked;
  var z = document.forms["UserDetailForm"]["answer_z"].checked;
  if (a == null || a == "") {
    alert("Please Fill All Required Field");
    return false;
  }
  if (b == null || b == "") {
    alert("Please Fill All Required Field");
    return false;
  }
  if (c == null || c == "") {
    alert("Please Fill All Required Field");
    return false;
  }
  if (d == null || d == "") {
    alert("Please Fill All Required Field");
    return false;
  }
  if (e == null || e == "") {
    alert("Please Fill All Required Field");
    return false;
  }
  if ((f == null || f == "") && (f1 == null || f1 == "") && (f2 == null || f2 == "") && (g == null || g == "") &&
   (g1 == null || g1 == "") && (g2 == null || g2 == "") && (h == null || h == "")) {
    alert("Please Fill All Required Field");
    return false;
  }
  if ((x == null || x == "") && (y == null || y == "") && (z == null || z == "")) {
    alert("Please Fill All Required Field");
    return false;
  }
};
