//<!DOCTYPE html>
//
//<html>
//<head>
//    <title>Confirmation Email</title>

        document.getElementById("regform").submit();
        
        function makeUserID() {
            var userID = '';
            var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var length = 7;
            for (var i = 0; i < length; i++ ) {
               userID += chars.charAt(Math.floor(Math.random() * chars.length));
            }                  
            return userID;
        }
                
        function sendEmail() {
            Email.send({
                Host: "smtp.gmail.com",
                Username: "onlinebookstoreTeamBC8@gmail.com",
                Password: "ugaSEFALL2020",
                To: "olc39417@uga.edu",
                From: "onlinebookstoreTeamBC8@gmail.com",
                Subject: "Welcome to the Online Bookstore!",
                Body: "Welcome!\nHere is your verification code: " + verificationCode + ". And here is your unique user identification number: " + makeUserID() +". You can use this to sign in as well!",
        });
                    document.getElementById("registrationModal").style.display = "none";

        }

//</head>
//<body>
//<form method="post"> 
//    <input type="button" value="Send Mail" onclick="sendEmail();"/> 
//</form>
//
//</body>
//</html>
