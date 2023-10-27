<!DOCTYPE html>
<html>
  <head>
    <title>Firebase Phone Verification</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="main.css" rel="stylesheet">

  </head>
  <body>
    <form action="verification.php">
      <h1>Firebase Phone verification In PHP</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
      <label for="Iname"><strong>Name</strong></label>
        <input type="text" id="number" placeholder="Enter phone number" name="Iname" required>
        <label for="Iemail"><strong>Email Id</strong></label>
        <input type="text" id="number" placeholder="Enter phone number" name="Iemail" required>
        <label for="Iphno"><strong>Phone Number</strong></label>
        <input type="text" id="number" placeholder="Enter phone number" name="Iphno" required>
      </div>
      <div id="recaptcha-container"></div>
      <button type="button" onclick="phoneAuth();">Send Otp</button>
    
    </form>

    <form>
         <div class="container">
        <label for="uname"><strong>verification number</strong></label>
        <input type="text" id="verificationCode" placeholder="Enter otp" name="uname" required>
        
         </div>
        <button type="button" onclick="codeverify();">submit</button>
    </form>
    <script src= "https://www.gstatic.com/firebasejs/10.5.0/firebase.js"></script>
    <script src= "https://www.gstatic.com/firebasejs/10.5.0/firebase-analytics.js"></script>

    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
      apiKey: "AIzaSyA9PlXPs0nKb0Ef338rP5-MmGsqz0gRbUE",
      authDomain: "otp-v-4dad2.firebaseapp.com",
      projectId: "otp-v-4dad2",
      storageBucket: "otp-v-4dad2.appspot.com",
      messagingSenderId: "1002501064669",
      appId: "1:1002501064669:web:f67bf1619caace67e01834",
      measurementId: "G-Y3B1QVHS54"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
     firebase.analytics();
</script>
    <script src="firebase.js" type="text/javascript"></script>
  </body>
</html>
