<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <script src="../js/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <title>Home</title>
</head>
<body class="contactBody">
        <nav role="navigation">
          <div class="logo">
             
                  <a href="index.html"><img src="../images/logo.svg" class="sotiredofthis"></a>
              
          </div>
                <div id="menuToggle">
                  <!-- fake on click -->
                  <input type="checkbox" />
                  
                  <!-- Hamburger nom nom-->
                  <span></span>
                  <span></span>
                  <span></span>
                
                  <ul id="menu">
                    <a href="../index.html"><li>Home</li></a>
                    <a href="../about.html"><li>About</li></a>
                    <a href="../gallery.html"><li>Work</li></a>
                    <a href="index.php"><li>Contact</li></a>
                  </ul>
                </div>
              </nav>

    <main>
       
        <h1>Let's get in touch</h1>
        <form class="contact-form" action="../includes/contact.php" method="post" id="form">
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" rows="8" cols="80"></textarea>
            <button type="submit" name="submit">SEND</button>
        </form>

</main>


<script src="..js/contact.js"></script>
</body>
</html>

<style type="text/css">
input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
  color: #fcfdfd;
  font-size: 0.875em;
}

input:focus::-webkit-input-placeholder, textarea:focus::-webkit-input-placeholder {
  color: #fcfdfd;
}

input::-moz-placeholder, textarea::-moz-placeholder {
  color: #fcfdfd;
  font-size: 0.875em;
}

input:focus::-moz-placeholder, textarea:focus::-moz-placeholder {
  color: #fcfdfd;
}

input::placeholder, textarea::placeholder {
  color: #fcfdfd;
  font-size: 0.875em;
}

input:focus::placeholder, textarea::focus:placeholder {
  color: #fcfdfd;
}

input::-ms-placeholder, textarea::-ms-placeholder {
  color: #fcfdfd;
  font-size: 0.875em;
}

input:focus::-ms-placeholder, textarea:focus::-ms-placeholder {
  color: #fcfdfd;
}

/* on hover placeholder */

input:hover::-webkit-input-placeholder, textarea:hover::-webkit-input-placeholder {
  color: #fcfdfd;
  font-size: 0.875em;
}

input:hover:focus::-webkit-input-placeholder, textarea:hover:focus::-webkit-input-placeholder {
  color: #fcfdfd;
}

input:hover::-moz-placeholder, textarea:hover::-moz-placeholder {
  color: #fcfdfd;
  font-size: 0.875em;
}

input:hover:focus::-moz-placeholder, textarea:hover:focus::-moz-placeholder {
  color: #fcfdfd;
}

input:hover::placeholder, textarea:hover::placeholder {
  color: #fcfdfd; 
  font-size: 0.875em;
}

input:hover:focus::placeholder, textarea:hover:focus::placeholder {
  color: #fcfdfd;
}

input:hover::placeholder, textarea:hover::placeholder {
  color: #fcfdfd;
  font-size: 0.875em;
}

input:hover:focus::-ms-placeholder, textarea:hover::focus:-ms-placeholder {
  color: #cbc6c1;
}



header {
  position: relative;
  margin: 100px 0 25px 0;
  font-size: 2.3em;
  text-align: center;
  letter-spacing: 7px;
}

#form {
  position: relative;
  width: 500px;
  margin: 50px auto 100px auto;
}

input {
  font-family: 'Lato', sans-serif;
  font-size: 0.875em;
  width: 470px;
  height: 50px;
  padding: 0px 15px 0px 15px;
  
  background: transparent;
  outline: none;
  color: #fcfdfd;
  
  border: solid 1px#b0b2e1;
  border-bottom: none;
  
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
}

input:hover {
  background:#b0b2e1;
  color: #e2dedb;
}

textarea {
  width: 470px;
  max-width: 470px;
  height: 110px;
  max-height: 110px;
  padding: 15px;
  
  background: transparent;
  outline: none;
  
  color: #b0b2e1;
  font-family: 'Lato', sans-serif;
  font-size: 0.875em;
  
  border: solid 1px #b0b2e1;
  
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
}

textarea:hover {
  background: #b0b2e1;
  color: #e2dedb;
}

button {
  width: 502px;
  
  padding: 0;
  margin: -5px 0px 0px 0px;
  
  font-family: 'Lato', sans-serif;
  font-size: 0.875em;
  color: #b0b2e1;
  
  outline:none;
  cursor: pointer;
  
  border: solid 1px #b3aca7;
  border-top: none;
}

button:hover {
  color: #e2dedb;
}



h1 {
  text-align: center;
  font-family: 'Montserrat', sans-serif;
}

.contactBody {
  background: linear-gradient(107deg, #1f1d42, #6a4cf7, #ec58bf);
background-size: 600% 600%;

-webkit-animation: AnimationName 24s ease infinite;
-moz-animation: AnimationName 24s ease infinite;
animation: AnimationName 24s ease infinite;

@-webkit-keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-moz-keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@keyframes AnimationName { 
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
}
   

</style>