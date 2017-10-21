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



<style>

    #txt {
        direction: rtl;
    }

    #mozh{

        float:right;
        margin-right:60px;
        margin-top:-20px;


    }

    #question{

        width:250px;
        float:right;
        direction: rtl;
        margin-right:200px;
        margin-top:-25px;
        height:420px;


    }




</style>






<head>
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
                <li class="active"><a href="full-width.html">دانشجویان</a></li>
            </ul>
        </div>
        <!-- ###### -->
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3" style="height:2000px">
<div class="rnd">


<div id="container" class="clear">
<!-- ####################################################################################################### -->

<div style="border:0px solid red; width:200px; float:left; margin-left:730px; height:50px;"><font size="+1" color="#0033FF"><?php echo $fullName ?></font></div>

<div id="mozh"><font size="3">





<form method="post">
    <?php echo $string3 ?>



    <?php echo $string2 ?>



    <?php echo $string ?>


</form>

</font></div>
</div></span>
















<!-- ####################################################################################################### -->
</div>
</div>

</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->

<script type="text/javascript" src="jquery.js"></script>
<script>
    var i=3;
    var bigdiv = $('#container');
    var divs = document.getElementsByName("mydiv");

    if(divs.length > 3)
    {
        var height = $('#container').height();

        var k = divs.length -3;
        console.log(k);
        bigdiv.height(height + (k*95));
        bigdiv.css("background-color","white");






    }


</script>
</body>
</html>