<!DOCTYPE.html>
<html>
<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width,initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="style.css">
	  <title>BOARD MEMBER</title>
	  <style>
	  .column {
  float: left;
  width: 30.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
a{
    text-decoration: none;
    font-size: 22px;
    color: black;
    padding: 10px 30px;
    transition: background-color .5s;
}

 a:hover{
    background-color: black;
    color: white;
}
.GFG {
            background-color: white;
            border: 2px solid black;
            color: green;
            padding: 10px 20px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            margin: 15px 35px;
            cursor: pointer;
            text-decoration:none;
        }
	  </style>
</head>
<body>
<img  src="https://nofoodwaste.org/images/NFW-logo.png" style="height: 100px; float: left;">
<br><br><br><br><br><br><br><br>
 <div class="row">
  <div class="column">
    <div class="card">
      <img src="dp5.jpg" alt="darsh" style="width:94%">
     <div class="container">
        <h2>Darsh Patel</h2>
        <p>Email:pateldasrh456@gmail.com</p>
        <p>contact no:+919316744741</p>
        <a href="mailto: pateldarsh456@gmail.com" class="GFG">
        contact
    </a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="yb.jpg" alt="yash" style="width:100%">
      <div class="container">
        <h2>Yash Bhavshar</h2>
        <p>Email:yashbhavsar1530@gmail.com</p>
        <p>contact no:+919558641805</p>
        
        <a href="mailto: yashbhavsar1530@gmail.com" class="GFG">
        contact
    </a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="kk.jpg" alt="krishna" style="width:91%">
      <div class="container">
        <h2>Krishna Kaloliya</h2>
        <p>Email:kaloliyakrishna571@gmail.com</p>
        <p>contact no:+917069662848</p>
        <a href="mailto: kaloliyakrishna571@gmail.com" class="GFG">
        contact
    </a>
      </div>
    </div>
  </div>
</div>
<center><a href="/dashboard">BACK</a></center> &nbsp;
</body>
</html>