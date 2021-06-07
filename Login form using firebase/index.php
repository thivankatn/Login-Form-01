<html>
<head>
    <title>Register</title>


<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>


</head>
<body>

<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="T.png" alt="Avatar" class="avatar">
  </div>

    <input type="text" id="number" placeholder="+947********">
    <div id="recaptcha-container"></div>
    <button type="button" onclick="phoneAuth();">SendCode</button>
</form><br>


<form>
    <input type="text" id="verificationCode" placeholder="Enter verification code">
    <button type="button" onclick="codeverify();">Verify code</button>

</form>



<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyCykW4tKypl5yBCXNQdpsVNXwVHIikodEE",
        authDomain: "t-chat-e9c61.firebaseapp.com",
        databaseURL: "https://console.firebase.google.com/project/t-chat-e9c61/database/t-chat-e9c61-default-rtdb/data",
        projectId: "t-chat-e9c61",
        storageBucket: "t-chat-e9c61.appspot.com",
        messagingSenderId: "892997796345",
        appId: "1:892997796345:web:bfd406d9ec9f08aaf3fd28"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

</script>
<script src="NumberAuthentication.js" type="text/javascript"></script>
</body>
</html>