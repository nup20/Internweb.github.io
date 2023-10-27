<!DOCTYPE html>
<html>
  <head>
    <title>Firebase Phone Verification</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="main.css" rel="stylesheet">

  </head>
  <body>
    <form >
      <h1>Firebase Phone verification In PHP</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
      <input type="text" id="verificationCode" placeholder="Enter verification code">
      
      </div>
     
      <button type="button" onclick="codeverify();">Verify code</button>
    
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