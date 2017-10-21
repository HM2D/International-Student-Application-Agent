<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Academic Education
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html dir="rtl" lang="ar">
<meta charset="UTF-8"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8 ">





<head>


    <style>

        body {
            background: url('/assets/example/bg_suburb.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .panel-default {
            opacity: 0.9;
            margin-top:30px;
        }
        .form-group.last {
            margin-bottom:0px;
        }



    </style>

    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />


    <div style="float:left; margin-left:70px; margin-top:10px;"><img width="70px" height="70px" style="border:1px solid black;border-radius: 25%;" src="2.jpg" /></div>
    <title>Academic Education | Full Width</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />





</head>
<body id="top">
<div class="wrapper row1">
    <div id="header" class="clear">
        <div class="fl_left">
            <h1><a href="../index.html">پردیس بین الملل قشم</a></h1>
            <p></p>
        </div>
        <div class="fl_right">



            <ul style="float:right; margin-right:80px;">
                <li class="last"><a href="#">خانه</a></li>
                <li><a href="#">سنجش</a></li>

                <li><a href="#">ورود دانشجو</a></li>
                <li><a href="#"> ورود اعضا </a></li>
            </ul>
            <form action="#" method="post" id="sitesearch">
                <fieldset>
                    <strong>جستجو</strong>
                    <input type="text" value="" onfocus="this.value=(this.value=='')? '' : this.value ;" />
                    <input type="image" src="layout/images/search.gif" id="search" alt="Search" />
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
    <div class="rnd">
        <!-- ###### -->
        <div id="topnav">
            <ul>
                <li><a href="../index.html">صفحه اصلی</a></li>
                <li><a href="style-demo.html">درباره دانشگاه</a></li>

                <li><a href="3-columns.html">بخش ها</a></li>
                <li><a href="portfolio.html">امور آموزش</a></li>
                <li><a href="gallery.html">هییت علمی</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="last"><a href="#">امور اداری</a></li>
                <li><a href="#">تماس با دانشگاه</a></li>
                <li class="active"><a href="full-width.html">ثبت نام</a></li>
            </ul>

            <span style="float: left; margin-left: 65px; margin-top:-20px;"><form method="post"><button type="submit" name="logOut">خروج</button> </form> </span>
        </div>
        <!-- ###### -->
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
    <div class="rnd">
        <div id="container" class="clear">
            <!-- ####################################################################################################### -->
            <div class="container" style="float:right; margin-right:180px;">
                <div class="row">
                    <div class="col-md-4 col-md-offset-7">
                        <div class="panel panel-default">
                            <div class="panel-heading"> <strong class="">ورود اعضا </srtrong>

                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="post">
                                    <div class="form-group">
                                        <span align="center" style="margin-left: 20px; color: #ff0000"> <?php echo $_SESSION['result'] ?></span>
                                        <br><br>

                                        <label for="inputEmail3" class="col-sm-3 control-label">نام کاربری</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="userName" name="userName" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">رمز ورود</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="pass" class="form-control" id="pass" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <div class="checkbox">
                                                <label class="">
                                                    <input type="checkbox" class="">&nbsp;&nbsp; &nbsp;&nbsp; مرا به خاطر بسپار&nbsp;&nbsp; </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group last">
                                        <div class="col-sm-offset-3 col-sm-9">

                                            <button type="submit" name="Login" value="1" class="btn btn-success btn-sm">ورود</button>
                                            <button type="reset" id="cleaner" class="btn btn-default btn-sm">پاک کردن</button>


                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">فراموش کردید؟ <a href="#" class="">انجا کلیک کنید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ####################################################################################################### -->
        </div>
    </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper">
    <div id="copyright" class="clear">
        <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
        <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    </div>
</div>
</body>

<script>
    var butt= document.getElementById("cleaner");
    butt.addEventListener("click",function(){
        document.getElementById("pass").innerHTML="";
        document.getElementById("userName").innerHTML="";


    });







</script>
</html>