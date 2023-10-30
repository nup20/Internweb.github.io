 // Get the modal
 var modal = document.getElementById("myModal");

 // Get the button that opens the modal
 var btn = document.getElementById("myBtn");

 // Get the <span> element that closes the modal
 var span = document.getElementsByClassName("close")[0];

 // When the user clicks the button, open the modal 
 btn.onclick = function() {
     modal.style.display = "block";
 }

 // When the user clicks on <span> (x), close the modal
 span.onclick = function() {
     modal.style.display = "none";
 }

 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 }

 // Function to generate a random 6-digit OTP
 function generateOTP() {
     var otp = Math.floor(100000 + Math.random() * 900000);
     document.getElementById("otp").value = otp;
 }

 // Function to verify the entered OTP
 function verifyOTP() {
     var enteredOTP = document.getElementById("otp").value;
     // Perform OTP verification logic here
     // For example: if (enteredOTP === generatedOTP) { alert("OTP Verified!"); }
     alert("OTP Verified!");
 }

 // Get the generate OTP button and attach the generateOTP function to its click event
 document.getElementById("generateOTP").addEventListener("click", generateOTP);

 // Get the verify OTP button and attach the verifyOTP function to its click event
 document.getElementById("verifyOTP").addEventListener("click", verifyOTP);

 // Get the form and attach a submit event listener
 document.getElementById("otpForm").addEventListener("submit", function(event) {
     // Prevent the form from submitting (you can handle form submission here if needed)
     event.preventDefault();
     // Your form submission logic goes here
     alert("Form Submitted!");
 });