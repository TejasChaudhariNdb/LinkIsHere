<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="vendor/madin.css" rel='stylesheet'>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="vendor/materialize.min.css" media="screen,projection" />
    <link rel="icon" type="image/png" href="profile/linkishere.png">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <style>

        .profile-image {

            min-width: 54px;
    min-height: 54px;
    height: auto;
    width: 90px;
    display: inline !important;
    border-radius: 50%;
    width: 100%;
    height: auto;
    border: 5px solid #fff;
    top: -80px;
        }

        .profile {
             height: auto;
    margin-top: 12%;
    width: 50%;
    text-align: center;
    margin: 0 auto;
    left: 0;
    right: 0;

        }

        .user_name {
            font-family: 'Roboto';
           font-size: 20px;
    margin: 0;
    font-weight: bold;
    display: inline-block;
    vertical-align: middle;
    margin: 0 0 15px 0;
        }

        .links {
            text-align: center;

            transition: transform .5s cubic-bezier(.2, 3, .4, 1), -webkit-transform .5s cubic-bezier(.2, 3, .4, 1);
        }

        .link-text {
            font-family: 'Roboto';
            font-size: 1.2rem;

        }

        .link {
            padding: 0px 20px;
          /*  border-radius: 800px !important;  */
            border: solid white;
            transition: transform .5s cubic-bezier(.2, 3, .4, 1), -webkit-transform .5s cubic-bezier(.2, 3, .4, 1);
        }

        .link:hover {
            transform: scale(1.025, 1.025);
            transition: transform .5s cubic-bezier(.2, 3, .4, 1), -webkit-transform .5s cubic-bezier(.2, 3, .4, 1);
        }

        .footer {
            font-family: 'Roboto';
            font-size: 1.4rem;
            text-align: center;
            margin-top: 5%;
            margin-bottom: 5%;
        }

        .footer-text {

            color: black !important;
        }

        .footer-image {
            height: auto;
            width: 43px;
            margin-bottom: -10px;
        }

        body {
            /* background-image: url("https://cdn.britannica.com/86/170586-050-AB7FEFAE.jpg"); */
            background-attachment: fixed;
            background-position: center;
        }
.social-icons{
    width: 12%;
    height: auto;
    padding: 5px;
    margin: 5px;
    margin-right: 10%;
    margin-left: 2%;
    margin-top: 6%;
}
}
        /* Animation  */

        .count_text {
            -webkit-animation-name: color2;
            -webkit-animation-duration: 2s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-timing-function: linear;
            -webkit-animation-delay: 0s;

        }

        @-webkit-keyframes color2 {
            0% {
                transform: scale(1.025, 1.025);
                transition: transform .1s cubic-bezier(.2, 3, .4, 1), -webkit-transform .1s cubic-bezier(.2, 3, .4, 1);

            }

            100% {

                transition: transform .1s cubic-bezier(.2, 3, .4, 1), -webkit-transform .1s cubic-bezier(.2, 3, .4, 1);

            }
        }
    
    
    /*new*/
    
    .profile-card{
		    background-color: #333333;

    margin-top: 25%;
		
		}
   .bio{
	   text-align: center;
	       font-size: 15px;
    line-height: 25px;
    margin: 0;
    padding: 0 20px;

	   }
	   
	   .profile-info{
		    margin-top: -67px !important;

		       width: 100%;
    margin: 0;
    display: block;
    color: #fff;
    text-align: center;
		   }
    </style>
    
    <div class="container">
		
    <div class="profile-card  card   white-text">
		
	
    <div class="profile"  href="#user">
		
		<img class="profile-image  materialboxed" src="profile/tejas2.jpg">
      
</div>
<div class="profile-info">
 <h1 class="user_name">@tejas.codes</h1><img src='virefied.svg' >

 <p class="bio">Designer, Front End Developer, WordPress Developer.  Akshay Kumar Fan.  KiranaZone  Founder.</p>
</div>
 
   
   
</div>
   </div>

    <div class="links container">
        <div class="link card blue  count_text">
            <a href="@tejas.html">
                <p class="link-text  white-text ">Get Started</p>
            </a>
        </div>
        <div class="link card blue ">
            <p class="link-text  white-text">Build Your Website Free</p>
        </div>
        <div class="link card blue ">
            <p class="link-text  white-text">Login </p>
        </div>
        <div class="link card blue ">
            <p class="link-text  white-text">Contact Us</p>
        </div>
        <div class="link card blue ">
            <p class="link-text  white-text">Privacy</p>
        </div>
        <div class="link card blue ">
            <p class="link-text  white-text">Help Center</p>
        </div>
    </div>

    <div class="social-contain">
        <img class="social-icons" src="icons/fb.png"/>
        <img class="social-icons" src="icons/twitter.png"/>
        <img class="social-icons" src="icons/tik.png"/>
        <img class="social-icons" src="icons/youtube.png"/>

    </div>
    <footer>
        <div class="footer"> <img class="footer-image" src="profile/linkishere.png">


            <a href="https://linkishere.com" target="_blank" class="footer-text">LinkIsHere</a></div>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script type="text/javascript" src="vendor/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.materialboxed').materialbox();
        });

    </script>

</body>

</html>