 <!-- CSS style for navbar  -->
 <style>
nav {
    color: var(--third-color);
    background-color: transition;
    width: 100%;
    height: 4rem;
    display: flex;
    justify-content: space-between;
    position: sticky;
    top: 0;
    padding: 0;
}

nav.sticky {
    box-shadow: 0px .3rem 1rem #c9c9c9;
    background-color: var(--third-color);
    color: var(--second-color);
}

nav div {
    width: 5rem;
}

nav div img {
    width: 100%;
    height: 100%;
}

nav ul {
    justify-content: space-evenly;
}
nav ul li {padding: 0 .5rem;}
nav ul li:nth-child(2) {
    border-left: 1px solid #c9c9c9;
    border-right: 1px solid #c9c9c9;
    
}

nav button {
    width: 5rem;
    margin: .3rem 1% .3rem 6%;
}

/****************             POPUP Card         ****************/
.blur {
    width: 100%;
    top: -150%;
    left: 60%;
    height: 100%;
    background-color: rgba(56, 56, 61, 0.33);
    position: fixed;
    z-index: 2;
    opacity: 0;
}

.blur.active {
    top: 0;
    left: 0;
    opacity: 1;
    z-index: 2;
}

.popup,
.popup2 {
    z-index: 5;
    position: fixed;
    top: -100%;
    left: 50%;
    transform: translate(-50%, -50%) scale(1.25);
    width: 380px;
    padding: 1.5rem 2rem;
    background: #fff;
    box-shadow: 2px 2xp .3rem rgba(0, 0, 0, 0.15);
    border-radius: 10px;
    opacity: 0;
    transition: top 0ms ease-in-out 200ms,
        opacity 200ms ease-in-out 0ms,
        transform 200ms ease-in-out 0ms;
}

.popup.active,
.popup2.active {
    top: 50%;
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
    transition: top 0ms ease-in-out 0ms,
        opacity 200ms ease-in-out 0ms,
        transform 200ms ease-in-out 0ms;
}

.popup .close-btn,
.popup2 .close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 20px;
    background: #888;
    color: #eee;
    text-align: center;
    line-height: 1rem;
    cursor: pointer;
}

.form h2 {
    text-align: center;
    color: #222;
    margin: 10px 0px 20 px;
    font-size: 1.7rem;
}

.form_input[type="email"],
.form_input[type="password"] {
    margin-top: 5px;
    display: block;
    width: 100%;
    padding: 10px;
    outline: none;
    border: 1px solid #aaa;
    border-radius: 5px;
}

.form_input[type="checkbox"] {
    margin-right: 5px;
}

.form .form-element button {
    width: 100%;
    height: 2.5rem;
    border: none;
    outline: none;
    font-size: 1rem;
    background: #222;
    color: #f5f5f5;
    border-radius: 10px;
    cursor: pointer;

}

.form .form-element a {
    display: block;
    text-align: right;
    font-size: var(--normal-font-size);
    color: #1a79ca;
}

/********************************************/
.form .form-element {
    position: relative;
    height: 3rem;
    margin-bottom: 1.5rem;
}

.form_label {
    position: absolute;
    left: 1rem;
    top: 1rem;
    padding: 0 .25rem;
    background-color: #fff;
    color: var(--input-color);
    font-size: var(--normal-font-size);
    transition: .3s;
}

.form_input {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    font-size: var(--normal-font-size);
    border: 1px solid var(--border-color);
    border-radius: .5rem;
    outline: none;
    padding: 1rem;
    background: none;
    z-index: 1;
}

/*Input focus move up label*/
.form_input:focus+.form_label {
    top: -.5rem;
    left: .8rem;
    color: var(--first-color);
    font-size: var(--small-font-size);
    font-weight: 500;
    z-index: 10;
}

/*Input focus sticky top label*/
.form_input:not(:placeholder-shown).form_input:not(:focus)+.form_label {
    top: -.5rem;
    left: .8rem;
    font-size: var(--small-font-size);
    font-weight: 500;
    z-index: 10;
}

/*Input focus*/
.form_input:focus {
    border: 1.5px solid var(--first-color);
}

.floatGroupBuy {
    display:none;
}

/*********************************/


/**********************       End POPUP Card                 *********************/
@media only screen and (max-width: 380px) {
    body{
        font-size: 13px;
        --normal-font-size = 13px;
    }
    .popup,
    .popup2 {
        left:33%;
    }

    /*Mobile login btn*/
    .floatGroupBuy {
    position: fixed;
    width: 86px;
    bottom: 501px;
    right: 156px;
    z-index: 1000;
    display: block;
}

    .my-floatGroupBuy{
        margin-top:1px;
    }

}
 </style>

 
 <!--   POPUP signin card   -->

 <div class="blur"></div>
 <div class="popup">
     <div class="close-btn">&times;</div>
     <form action="includes/login.inc.php" method="POST" class="form">
         <h2>login</h2>
         <div class="form-element">
             <input class="form_input" type="text" id="username1" placeholder=" " name = "uid" required>
             <label class="form_label" for="email">email</label>
         </div>

         <div class="form-element">
             <input class="form_input" type="password" id="password1" placeholder=" " name = "pwd">
             <label class="form_label" for="password">password</label>
         </div>
         <div class="form-element">
             <input type="checkbox" id="remember-me" placeholder=" ">
             <label for="remember-me">remember me</label>
         </div>
         <div class="form-element">
             <button type="submit" name="submitButton1" value="submit" >login</button>
         </div>
         <div class="form-element">
             <a href="#">forget password ?</a>
             <a href="#" id="show-logUP">create acount</a>
         </div>
    </form>
 </div>


 <!---------- ********  POPUP sing UP card   ********  ------------>
 <div class="popup2">
     <div class="close-btn">&times;</div>
     <form action="includes/signup.inc.php" method="POST"  class="form">
         <h2>logup</h2>
         <div class="form-element">
             <input class="form_input" type="text" placeholder=" " name="uid">
             <label class="form_label" for=""> username</label>
         </div>
         <div class="form-element">
             <input class="form_input" type="email" id="email" placeholder=" " name = "email"> 
             <label class="form_label" for="email">email</label>
         </div>
         <div class="form-element">
             <input class="form_input" type="email" id="email" placeholder=" " name = "email2">
             <label class="form_label" for="email">confirm email</label>
         </div>
             <div class="form-element">
             <input class="form_input" type="password" id="password" placeholder=" " name = "pwd">
             <label class="form_label" for="password">password</label>
         </div>
         <div class="form-element">
             <input class="form_input" type="password" id="password" placeholder=" " name="pwdRepeat">
             <label class="form_label" for="password">confirm password</label>
         </div>

         <div class="form-element">
             <button type="submit" name="submitButton">Sign up</button>
         </div>
         <div class="form-element">
             <a href="#">forget password ?</a>
             <a href="#" id="show-loginText">singin</a>
         </div>
</form>
 </div>

 <nav>
     <div><a href="#"> <img src="media/images/logo.png" alt="CVmodo logo"> </a></div>
     <ul>
         <li><a href="#">about</a></li>
         <li><a href="#">prices</a></li>
         <li><a href="#">Q&A</a></li>
     </ul>
     <!-- if user logged in show  btn -->
<?php
      if(isset($_SESSION["userid"] )){
        echo "<button onclick=\"location.href = 'profile.php';\" class='btn_1  btn-signUp' id='profile'>" . $_SESSION["useruid"]. '</button> <a href="includes/logout.inc.php" class="header-logout-a">LOGOUT</a>';
      }
      else{

        echo "<button class='btn_1  btn-signUp' id='show-login'>Sign up</button>";
    }
?>

 </nav>
 <!--   mobile login     -->

 <div class="floatGroupBuy" >
     <button class="btn_1  my-floatGroupBuy" id="show-login">Login</button>
</div>