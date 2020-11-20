function registerForm() {
    document.getElementById("regform").submit();
}

function sendEmail() {
    Email.send({
        Host: "smtp.gmail.com",
        Username: "onlinebookstoreTeamBC8@gmail.com",
        Password: "ugaSEFALL2020",
        To: sessionValue,
        From: "onlinebookstoreTeamBC8@gmail.com",
        Subject: "Welcome to the Online Bookstore!",
        Body: "Welcome!\nHere is your verification code: " + verificationCode + ".",
    });
}

function sendPromotionEmail() {
    Email.send({
        Host: "smtp.gmail.com",
        To: sessionValue,
        From: "onlinebookstoreTeamBC8@gmail.com",
        Subject: "New Promotion!",
        Body: "A promotion for " + promotionName + "is now available." + "This discount is $" + discount + "off." + "\nHere is your promotion code: " + promotionCode + ".",
    });
}