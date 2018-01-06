<html>
<head>
    <meta charset="UTF-8">
    <meta name="Keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat-Bold">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat-ExtraBold">
    <title>TastyLeb</title>
    <style>

        * {
            font-family: 'Montserrat', serif;
        }
        body {
            margin: 0;
            padding: 0;
            font-family:;
            background-image: url("/trims/TastyLABbgdOne.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            width: 100%;
            height: auto;
            -webkit-filter: blur(0px);
        }

        .header{
            background-color: #cd0007;
            font-family:;
            width: 100%;
            height: 14%;
            margin: 0 auto;
            color: white;
            font-size: 1.5vw;
            opacity: 0.99;
        }

        .language{
            background-color: inherit;
            padding-top: 6px;
            padding-bottom: 6px;
            padding-right: 14px;
            padding-left: 14px;
            border: 1px solid #fcb400;
            border-radius: 7px;
            color: whitesmoke;
            text-decoration: none;
            font-family: 'Montserrat-bold', serif;
            font-size: 16px;
        }

        .language: hover{
            background-color: white;
            color: whitesmoke;
        }

        .content{
            background-image: url("/trims/TastyLABbgd.png");
            margin: 1% auto;
            width: 80%;
            height: auto;
            opacity: 0.97;
        }

        .content p{
            text-align: center;
            font-size: 16px;
            font-weight: 800;
            line-height: 18px;
            padding-bottom: 2%;
            font-family: 'Montserrat', serif;
        }

        .header2 {
            margin:0 auto;
            width:100%;
            height: 5%;
            background-color: #cd0007;
        }

        .header2 p{
            text-align: center;
            padding-top: 15px;
            color: whitesmoke;
            line-height: 2px;
            font-size: 18px;
        }

        .imageclass {
            text-align: center;
            padding-bottom:2%;
        }

        .imageclass img{
            padding-top: 1%;
            width: auto;
            height: 35%;
        }

        .imageclass2 {
            text-align: center;
            padding-bottom:4%;
            padding-top:2%;
        }

        .imageclass2 a{
            padding-top: 2%;
            padding-bottom: 2%;
            padding-right: 4%;
            padding-left: 4%;
            background-color: #cd0007;
            font-family: 'Montserrat', serif;
            color: whitesmoke;
            font-weight: bolder;
            border-radius: 20px;
            box-shadow: 2px 2px 2px #888888;
            text-decoration: none;
            font-size:20px;
        }
        .redp{
            color: #cd0007;
            font-size: 15px;
            line-height: 15px;
            font-weight: 700;
            padding-bottom:1%;
        }
        .exit {
            text-align: center;
        }

        .exit a {
            color: whitesmoke;
            background-color: #624f47;
            padding-right: 10%;
            padding-left: 10%;
            padding-top: 2%;
            padding-bottom: 2%;
            border-radius: 24px;
            font-size: 20px;
            font-weight: 600;
            text-decoration: solid;
        }

        /*last div*/
        .lastInline {
            padding-top: 6%;
            padding-bottom: 6%;
        }
        .lastInline p {
            color: #262626;
            font-family: 'Montserrat', serif;
            font-size:18px;
            font-weight: 900;
            text-align: left;
            padding-left: 19%;

        }
        /*list items descp*/
        .lastInline ul li {
            text-align: left;
            color: #262626;
            font-size:16px;
            font-weight: 800;
            line-height: 180%;

        }
        /*last unordered list*/
        .lastInline ul {
            text-align: center;
            padding-left: 21%;
            padding-top:-10%
        }

        .lang {
            visibility: hidden;
        }
        /*media queries to make the webpage responsive*/
        @media screen and (min-width: 500px) {
            * {
                margin: 0 ;
                border: 0 ;
                padding: 0 ;
            }
            img {
                max-width: 100%;
                padding-right: 2%;
                padding-left: 2%;
            }

            .imageclass2 img {
                width: 240px;
                height: 65px;
            }
        }

        @media screen and (max-width:499px) {
            .imageclass2 img {
                width: 200px;
                height: 55px;
            }
            .language {
                word-wrap : break-word;
                width:5pt;
                height : 15pt;
                vertical-align:top;
            }
            /*FIRST IMAGE*/
            img {
                max-width: 100%;
                padding-bottom: 2%;
            }
            /*header2 paragraph*/
            .content p{
                margin: auto auto;
                font-size: 12px;
                font-weight: 600;
                line-height: 12px;
                padding-bottom: 1%;
                padding-top: 3%;
                font-family: 'Montserrat', serif;
            }
            /*logo FIX*/
            #logo {
                width: 50%;
                height:50%;
                float: left;
                padding-right: 3%;
                padding-top: 0 !important;
                padding-bottom: 9px !important;
            }
            /*header 1*/
            .header{
                height: 10%;
                color: white;
                font-size: 9px;
            }

            /*language button*/
            .language{
                font-size: 13px;
                padding-bottom:5px;
                padding-top:5px;
            }

            /*language button location*/
            #languageB {
                display: inline !important;
                padding-left: 20% !important;
            }

            /*subscribe text*/
            .content p{
                font-size: 13px;
            }

            /*subscribe button*/
            .imageclass2 a{
                padding-top: 5%;
                padding-bottom: 5%;
                padding-right: 11%;
                padding-left: 11%;
                font-size:14px;
                border-radius: 14px;
            }

            .imageclass2 {
                padding-bottom:9%;
                padding-top:7%;
            }

            .redp{
                font-size: 17px;
                line-height: 12px;
                font-weight: 900;
                padding-bottom:7%;
            }
            /*exit button*/
            .exit a {
                padding-right: 23%;
                padding-left: 23%;
                padding-top: 4%;
                padding-bottom: 4%;
                border-radius: 16px;
                font-size: 13px;
                font-weight: 900;
            }
            .exit {
                padding-bottom:9%;
            }
            /*last inline*/

            .lastInline p {
                font-family: 'Montserrat', serif;
                font-size:14px;
                font-weight: bolder;
                line-height: 16px;
                text-align: left;
                padding-left: 6%;
            }

            .lastInline ul li {
                text-align: left;
                color: #262626;
                font-size:13px;
                font-weight: 900;
                line-height: 210%;

            }
            /*last unordered list*/
            .lastInline ul {
                text-align: center;
                padding-left: 9%;
                padding-right:3%;
                padding-top:-10%
            }


        }

    </style>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-6" style="padding-top: 20px;">
        <img src="/trims/TastyLabLogo.png" style="padding-left: 10%;" id="logo"/>
            </div>
                <div class="col-sm-3 col-md-6" id="languageB" style="padding-left: 35%;padding-top: 30px;">
                    <a href="" class="language"><b>ENGLISH</b></a>
                </div>
        </div>
    </div>
</div>

<div class="content">

    <div class="header2">
        <p><b>Free for 24 hours then AED 10 per week</b></p>
    </div>

    <div class="imageclass">
    <img src="/trims/TastyLABBanner.png">
    </div>

    <p>To subscribe in TastyLeb Video store service.<br>please click on the below button to send you the<br> <bold>PIN Code</bold></p>

    <div class="imageclass2">
        <a href="">Subscribe through PIN Code!</a>
    </div>

    <div class="redp">
    <p>Free for 24 hours then AED 10 per week</p>
    </div>

    <div class="exit">
        <a href=""><b>Exit</b></a>
    </div>

    <div class="lastInline">
        <p><b>By clicking on Subscribe, you agree to the below terms and conditions: </b>
        <ul>
            <li>You will start the paid subscription automatically after the free trial.</li>
                <li>Renewal will be automatic every week.</li>
                <li>No commitment you can cancel anytime by sending <b>XXX</b> to <b>1100</b>.</li>
            <li>For support, please contact <b>info@tastyleb.com</b></li>
            </ul></p>
        <a href="" class="lang"><b>ENGLISH</b></a>
    </div>

</div>

</body>
</html>