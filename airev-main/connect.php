<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "db_contact";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
?>  
<?php  
    $username = $_POST['name'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from tbl_contact where name = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";
            
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 
 
?>  

<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.login123{

    /* opacity: 100; */
    display: inline;
}

h2 {text-align: center;}
body { background-image: linear-gradient(#5D69BE, #C89FEB);}
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
  /* color: white; */
  padding: 18px 20px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  align-self: center;
  width: 20%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  text-align: center;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  /* margin: 24px 0 12px 0; */
}

img.avatar {
  width: 15%;
  border-radius: 50%;
}

.container {
  margin: auto;
  width: 30%;
  /* border: 3px solid #73AD21; */
  padding: 10px;
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
<section class="login123">
<body>

<h2>Login Form</h2>

<form action = "fuck.php" onsubmit="return false" method = "POST">
  <div class="imgcontainer">
    <img src="avatar.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <INPUT type="text" id = 'name' name = "name"STYLE="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #ebdee7;" size="10" maxlength="30" placeholder="Enter Username" class="uname" required>

    <!-- <input  type="text" placeholder="Enter Username" class="uname" required> -->

    <label for="psw"><b>Password</b></label>
    <INPUT type="password" id ="password" name = "password" STYLE="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #dee5ec;" size="10" maxlength="30"  type="password" placeholder="Enter Password" class="psw" required>
    <!-- <input  type="password" placeholder="Enter Password" class="psw" required> -->
        
    <button type="submit" class="login_btn">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" >
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
<script type="text/javascript">
    let countjs = '<?php echo $count; ?>';
    console.log("hi");
const username_select=document.querySelector('input.uname');
const pass_select=document.querySelector('input.psw');
let username="";
let pass="";


function btn_clicked(){
    username=(username_select.value);
    pass=(pass_select.value);
    // console.log(username,pass);
    if(countjs ===1){
        document.body.querySelector(".dash123").style.opacity=100;
        document.body.querySelector(".login123").style.display="none";
        document.body.querySelector('span.admin_name').textContent=username;
    }
  
}



function btn_clicked2(){
    username_select.value="";
    pass_select.value="";
}



document.querySelector('button.login_btn').addEventListener('click',btn_clicked);
document.querySelector('button.cancelbtn').addEventListener('click',btn_clicked2);

document.querySelector('spam.admin_name').textContent=username;
</script> 


</body>
</section>
</html>
</html>








<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
    <section class="dash123">
        <head>
            <meta charset="UTF-8">
            <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
            <link rel="stylesheet" href="style.css">
            <!-- Boxicons CDN Link -->
            <link href='dash.css' rel='stylesheet'>
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
           </head>
        <body>
          <div class="sidebar">
            <div class="logo-details">
              <i class='bx bxl-c-plus-plus'></i>
              <span class="logo_name">Air EV </span>
            </div>
              <ul class="nav-links">
                <li>
                  <a href="#" class="active">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="links_name">Dashboard</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class='bx bx-box' ></i>
                    <span class="links_name">My Account</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class='bx bx-list-ul' ></i>
                    <span class="links_name">Buy/Sell Chargers</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class='bx bx-pie-chart-alt-2' ></i>
                    <span class="links_name">My vehicles</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class='bx bx-coin-stack' ></i>
                    <span class="links_name">Payment methods</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class='bx bx-book-alt' ></i>
                    <span class="links_name">Rent/Lend Charger</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class='bx bx-user' ></i>
                    <span class="links_name">Team</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class='bx bx-message' ></i>
                    <span class="links_name">Messages</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class='bx bx-heart' ></i>
                    <span class="links_name">Favrorites</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class='bx bx-cog' ></i>
                    <span class="links_name">Setting</span>
                  </a>
                </li>
                <li class="log_out">
                  <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                  </a>
                </li>
              </ul>
          </div>
          <section class="home-section">
            <nav>
              <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
              </div>
              <div class="search-box">
                <!-- <input type="text" placeholder="Search..."> -->
                <!-- <i class='bx bx-search' ></i> -->
              </div>
              <div class="profile-details">
                <!--<img src="images/profile.jpg" alt="">-->
                <span class="admin_name">Nishant Agarwal</span>
                <i class='bx bx-chevron-down' ></i>
              </div>
            </nav>
        
            <div class="home-content">
              <div class="overview-boxes">
                <!-- <div class="box">
                  
                  
                </div> -->
                <!-- <div class="box">
                  
                  <i class='bx bxs-cart-add cart two' ></i>
                </div> -->
                <div class="box">
                  <div class="right-side">
                    
                    <!-- <div class="number">$12,876</div> -->
                    <div class="indicator">
                      <!-- <i class='bx bx-up-arrow-alt'></i> -->
                      
                    </div>
                  </div>
                  <!-- <i class='bx bx-cart cart three' ></i> -->
                </div>
                <div class="box">
                  <div class="right-side">
                    <!-- <div class="box-topic">Total Return</div> -->
                    <!-- <div class="number">11,086</div> -->
                    <div class="indicator">
                      <!-- <i class='bx bx-down-arrow-alt down'></i> -->
                      <!-- <span class="text">Down From Today</span> -->
                    </div>
                  </div>
                  <!-- <i class='bx bxs-cart-download cart four' ></i> -->
                </div>
              </div>
        
              <div class="sales-boxes">
                <div class="recent-sales box">
                  <div class="title">Vechile Info</div>
                  <div class="sales-details">
                    <ul class="details">
                      <li class="topic">Charge</li>
                      
                      <li><a href="#">50%</a></li><br>
                      <!-- <li><a href="#">02 Jan 2021</a></li>
                      <li><a href="#">02 Jan 2021</a></li>
                      <li><a href="#">02 Jan 2021</a></li>
                      <li><a href="#">02 Jan 2021</a></li>
                      <li><a href="#">02 Jan 2021</a></li>
                      <li><a href="#">02 Jan 2021</a></li>  -->
                    </ul>
                    <ul class="details">
                    <li class="topic">Range left</li>
                    <li image src="charge.png"></li>
                     <li><a href="#">120 kms</a></li><br>
                    <!-- <li><a href="#">David Mart</a></li>
                    <li><a href="#">Roe Parter</a></li>
                    <li><a href="#">Diana Penty</a></li>
                    <li><a href="#">Martin Paw</a></li>
                    <li><a href="#">Doe Alex</a></li>
                    <li><a href="#">Aiana Lexa</a></li>
                    <li><a href="#">Rexel Mags</a></li>
                     <li><a href="#">Tiana Loths</a></li>  -->
                  </ul>
                  <ul class="details">
                    <li class="topic">Model</li>
                     <li><a href="#">Tesla X</a></li><br>
                    <!-- <li><a href="#">David Mart</a></li>
                    <li><a href="#">Roe Parter</a></li>
                    <li><a href="#">Diana Penty</a></li>
                    <li><a href="#">Martin Paw</a></li>
                    <li><a href="#">Doe Alex</a></li>
                    <li><a href="#">Aiana Lexa</a></li>
                    <li><a href="#">Rexel Mags</a></li>
                     <li><a href="#">Tiana Loths</a></li>  -->
                  </ul>
                  <ul class="details">
                    <li class="topic">Engine Status</li>
                    <li><a href="#">No Service Needed</a></li><br>
                    <!-- <li><a href="#">Pending</a></li>
                    <li><a href="#">Returned</a></li>
                    <li><a href="#">Delivered</a></li>
                    <li><a href="#">Pending</a></li>
                    <li><a href="#">Returned</a></li>
                    <li><a href="#">Delivered</a></li>
                     <li><a href="#">Pending</a></li>
                    <li><a href="#">Delivered</a></li> -->
                  </ul>
                  <ul class="details">
                    <li class="topic">Charging Status</li>
                    <li><a href="#">Off</a></li><br>
                    <!-- <li><a href="#">$24.55</a></li>
                    <li><a href="#">$25.88</a></li>
                    <li><a href="#">$170.66</a></li>
                    <li><a href="#">$56.56</a></li>
                    <li><a href="#">$44.95</a></li>
                    <li><a href="#">$67.33</a></li>
                     <li><a href="#">$23.53</a></li>
                     <li><a href="#">$46.52</a></li> -->
                  </ul>
                  </div>
                  <div class="button">
                    <!-- <a href="#">See All</a> -->
                  </div>
                </div>
                
            </div>
          </section>
        
          <script>
           let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
          sidebar.classList.toggle("active");
          if(sidebar.classList.contains("active")){
          sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
        }else
          sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
         </script>
        
        </body>
</section>
</html>