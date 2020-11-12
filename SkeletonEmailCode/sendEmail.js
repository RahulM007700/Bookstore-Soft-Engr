  
//<!DOCTYPE html>
//
//<html>
//<head>
//    <title>Confirmation Email</title>

function registerForm(){
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
//document.getElementById("regform").submit();
            //document.getElementById("registrationModal").style.display = "none";
//return true;
}

//</head>
//<body>
//<form method="post"> 
//    <input type="button" value="Send Mail" onclick="sendEmail();"/> 
//</form>
//
//</body>
//</html>
