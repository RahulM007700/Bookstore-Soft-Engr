var profile_info = ["firstName", "lastName", "password"];
var payment_info = ["cardType", "cardNumber", "cvc", "expirationDate"];
var address_info = ["streetAddress", "city", "state", "zipCode"];
var all_info = [
  "firstName",
  "lastName",
  "password",
  "cardType",
  "cardNumber",
  "cvc",
  "expirationDate",
  "streetAddress",
  "city",
  "state",
  "zipCode",
];

function changeToInputPersonal() {
  profile_info.forEach(
    (element) => (document.getElementById(element).readOnly = false)
  );
}

function changeToTextPersonal() {
  profile_info.forEach((element) => {
    if (document.forms["editProfileForm"][element].value != "") {
      document.getElementById(element).setAttribute("readOnly", "true");
    } else {
      alert("Please fill required field(s).");
      return false;
    }
  });
}

function changeToInputPayment() {
  payment_info.forEach(
    (element) => (document.getElementById(element).readOnly = false)
  );
}

function changeToTextPayment() {
  payment_info.forEach((element) => {
    if (document.forms["editProfileForm"][element].value != "") {
      document.getElementById(element).setAttribute("readOnly", "true");
    } else {
      alert("Please fill required field(s).");
      return false;
    }
  });
}

function changeToInputAddress() {
  address_info.forEach(
    (element) => (document.getElementById(element).readOnly = false)
  );
}

function changeToTextAddress() {
  address_info.forEach((element) => {
    if (document.forms["editProfileForm"][element].value != "") {
      document.getElementById(element).setAttribute("readOnly", "true");
    } else {
      alert("Please fill required field(s).");
      return false;
    }
  });
}
