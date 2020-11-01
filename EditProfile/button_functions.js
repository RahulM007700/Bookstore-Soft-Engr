var profile_info = ["fullName", "emailAddress", "password"];
var payment_info = ["cardType", "cardNumber", "cvc", "expirationDate"];
var address_info = ["streetAddress", "city", "state", "zipCode"];

function changeToInput1() {
  profile_info.forEach(
    (element) => (document.getElementById(element).readOnly = false)
  );
  document.getElementById("password").setAttribute("type", "text");
}

function changeToText1() {
  profile_info.forEach((element) =>
    document.getElementById(element).setAttribute("readOnly", "true")
  );
  document.getElementById("password").setAttribute("type", "password");
}

function changeToInput2() {
  payment_info.forEach(
    (element) => (document.getElementById(element).readOnly = false)
  );
}

function changeToText2() {
  payment_info.forEach((element) =>
    document.getElementById(element).setAttribute("readOnly", "true")
  );
}

function changeToInput3() {
  address_info.forEach(
    (element) => (document.getElementById(element).readOnly = false)
  );
}

function changeToText3() {
  address_info.forEach((element) =>
    document.getElementById(element).setAttribute("readOnly", "true")
  );
}
