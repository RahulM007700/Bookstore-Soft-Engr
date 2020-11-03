var profile_info = ["fullName", "password"];
var payment_info = ["cardType", "cardNumber", "cvc", "expirationDate"];
var address_info = ["streetAddress", "city", "state", "zipCode"];

function changeToInputPersonal() {
  profile_info.forEach(
    (element) => (document.getElementById(element).readOnly = false)
  );
}

function changeToTextPersonal() {
  profile_info.forEach((element) =>
    document.getElementById(element).setAttribute("readOnly", "true")
  );
}

function changeToInputPayment() {
  payment_info.forEach(
    (element) => (document.getElementById(element).readOnly = false)
  );
}

function changeToTextPayment() {
  payment_info.forEach((element) =>
    document.getElementById(element).setAttribute("readOnly", "true")
  );
}

function changeToInputAddress() {
  address_info.forEach(
    (element) => (document.getElementById(element).readOnly = false)
  );
}

function changeToTextAddress() {
  address_info.forEach((element) =>
    document.getElementById(element).setAttribute("readOnly", "true")
  );
}
