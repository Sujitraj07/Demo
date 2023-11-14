<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("52.jpg");

  min-height: 600px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: center;
  right: 0;
  margin: 20px;
  max-width: 450px;
  padding: 16px;
  background-color: rgba(228, 15, 15, 0.918);
  background: transparent;
  border: 2px solid blueviolet;
  box-shadow: crimson;

}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: 3px solid gray;
  background: rgba(0, 0, 255, 0.274);
  border-radius: 20px;
}

input[name=Name]:hover{
  border: 3px solid crimson;
  /* font-size: 17px; */
}
input[name=Username]:hover{
  border: 3px solid rgb(248, 232, 12);
}
input[placeholder=email]:hover{
  border-color: 3px solid green;
}

.submit{
  width: 250px;
  height: 40px;
  background-color: blue;
  color: rgb(248, 232, 12);
  border:3px solid silver;
  margin-left: 80px;
  cursor: pointer;
}

.submit:hover{
  border:3px solid lawngreen;
  background: rgb(113, 0, 128);

}
#submitButton {
 margin-top: 2em;
 margin-bottom: 2em;
 background-color: #066c77;
 border: 0px;
 font-weight: bold;
 width: 200px;
 height: 40px;
 margin-left: 2px;
}
#submitButton:hover{
    background-color: magenta;
    border:0.02px solid mediumspringgreen;
    cursor: pointer;
}
#refreshButton {
 background-color: #066c77;
 border: 0px;
 font-weight: bold;
 width: 200px;
 height: 40px;
 margin-left: 6px;
}
#refreshButton:hover{
    background-color: olivedrab;
    border: 0.01px solid orangered;
    cursor: pointer;
}
#text:hover{
  border-color: red;
}




</style>
</head>
<body>


<div class="bg-img">
  <form action="/action_page.php" class="container">
    <h1>Register</h1>


    <label class="Name" for="Name"><b>Full Name</b></label>
    <input type="text" placeholder="Your Name" name="name" required>
    <label class="text" for="Username"><b>Username</b></label>
    <input type="text" placeholder="Username" name="username" required>
    
    <div class="password">

      <!-- <h1 style="text-align:center;">Password validation in javascript</h1> -->
      <form onsubmit="return myfun()">
        <label class="text" for="password"><b>Password:</b></label>
          <input type="password" placeholder="Password" id="password" value="" name="password">
          <span id="messages" style="color:red;"> </span>
          <label class="text" for=" Confirm Password"><b> Confirm Password:</b></label>
              <input type="password" placeholder="Confirm password" id="password2" value="" name="conform_pass">
              <span id="messagess"> </span>
              <label class="text" for="email"><b>Contact Number</b></label>
        <input type="text" placeholder="Contact Number" name="mobile_no" required>
         <label class="text" for="email"><b>Email</b></label>
        <input type="text" placeholder="email" name="email" required>
              <input class="submit" type="Submit" Value="Submit"   id="submit">

              <head>
                <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
               </head>
               <body>
</html>
