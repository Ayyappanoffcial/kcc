<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            body{
                top: 10%;
                background-image: url(img/image_01.jpg);
                background-repeat: no-repeat;
                background-size: 100%;
            }
        
    nav {
        background-color:gray;
        padding: 10px;
        text-align: center;
    }
            nav a {
        text-decoration: none;
        color: #fff;
        padding: 5px 10px;
    }
    nav a:hover {
        background-color:white;
    }
    header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px 0;
    }
    .dropdown {
      position: relative;
      display: inline-block;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    /* Links inside the dropdown */
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    
    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }
    
    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
      display: block;
    }
    
    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown-content {
      background-color: #3e8e41;
    }
    .dropdown-content > a:hover{
        background-color: green;
    }
            
        </style>
</head>
 <body>
 <header>
        <h1>Welcome to the Admin Page</h1>
    </header>
                
<nav>
     <a href="in.html" class="w3-bar-item w3-button">INSERT RECORDS</a>
     <div class="dropdown">
        <a href="#" class="w3-bar-item w3-button" id ="db">REGISTER</a>
        <div class="dropdown-content">
          <a href="reg.html">Player</a>
          <a href="sreg.html">Staff</a>
          </div></div>
     <div class="dropdown"> 
    <a href="atten.html" class="w3-bar-item w3-button">ATTENDANCE</a>
    <div class="dropdown-content">
          <a href="get_players.php">Player</a>
          <a href="staf.html">Staff</a>
          </div></div>
   <a href="pview.php" class="w3-bar-item w3-button"> VIEW ATTENDANCE</a>
   <a href="delete.php" class="w3-bar-item w3-button">DELETE RECORD</a>
        </nav>
</body>