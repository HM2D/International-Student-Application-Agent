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

        border:3 px solid red;
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
            <span style="float: left; margin-left: 65px; margin-top:-20px;"><form method="post"><button type="submit" name="logOut">خروج</button> </form> </span>

        </div>
        <!-- ###### -->
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3" style="height:2000px">
    <div class="rnd">
        <div id="container" class="clear">
            <!-- ####################################################################################################### -->

            <div style="border:0px solid red; width:200px; float:left; margin-left:720px; height:50px;"><font size="+1" color="#0033FF"><?php echo $fullName ?></font></div>

            <div id="mozh"><font size="3">

                    <form method="post">
                        <br>



                        <br />
                        <div class="form-group">


                            <label for="register-username"><i class="icon-user"></i> <b>جنسیت:</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; <?php echo $gender ?>
                        </div>

                        <br>




                        <div class="form-group">
                            <label for="register-username"><i class="icon-user"></i> <b>تلفن:</b></label> &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp;	&nbsp; &nbsp;  &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;&nbsp;<?php echo $tel ?>
                        </div>


                        <br>

                        <div class="form-group">
                            <label for="register-username"><i class="icon-user"></i> <b>ایمیل:</b></label>&nbsp; &nbsp;
                            &nbsp; 	&nbsp; 	&nbsp;  &nbsp; 	&nbsp; 	&nbsp;  <?php echo $email ?>
                        </div>

                        <br>
                        <div class="form-group">
                            <label for="register-username"><i class="icon-user"></i> <b>رشته:</b></label>&nbsp; &nbsp;
                            &nbsp; 	&nbsp; 	&nbsp;  &nbsp; 	&nbsp; 	&nbsp;  &nbsp; 	&nbsp; <?php echo $majorString ?>	&nbsp;  &nbsp; 	&nbsp; 	&nbsp;  &nbsp; 	&nbsp; 	&nbsp;  &nbsp; <?php echo $major ?>
                        </div>

                        <br>


                        <div class="form-group">
                            <label for="register-username"><i class="icon-user"></i> <b>استاد:</b></label>&nbsp; &nbsp;
                            &nbsp; 	&nbsp; 	&nbsp;  &nbsp; 	&nbsp; 	&nbsp;  &nbsp; 	<?php echo $masterName ?>
                        </div>

                        <br>






                </font>

            </div>



            <br /><br /><br />




            <br><br>
            <div style="width:300px; height:70px; float:right;margin-top:70px; margin-right:550px;">


                <table  border="5px"  CELLSPACING="1" width=350px height="100px">
                    <thead>

                    <tr ALIGN="CENTER">
                        <th WIDTH="100"><font size=-1>مقطع تحصیلی</font></th>

                        <th><font size=-1>نام دانشگاه</font></th>
                        <th><font size=-1>معدل</font></th>
                        <th><font size=-1>رتبه</font></th>
                        <th><font size=-1>سیستم آموزشی</font></th>
                        <th><font size=-1>شماره مدرک</font></th>
                        <th WIDTH="60px"><font size=-1>تاریخ اخذ</font></th>



                    </tr>
                    </thead>
                    <tbody>
                    <tr ALIGN="CENTER">
                        <td WIDTH="100"><font size=-1>کاردانی</font></td>
                        <?php echo $associate ?>


                    </tr>
                    <tr ALIGN="CENTER">
                        <td WIDTH="100"><font size=-1>کارشناسی</font></td>
                        <?php echo $bachelor ?>
                    </tr>


                    </tbody>
                </table>


            </div>

            <div style="float:right; margin-right:30px; width:400px; height:500px; margin-top:-70px">
                <table style="width:400px;" cellspacing="2px;" cellpadding="2px;">
                    <thead>
                    <tr align="center" style="text-align:center;">
                        <th data-field="id" align="center" style="text-align:center">موارد</th>
                        <th data-field="name">نمره</th>
                        <th data-field="price">حداکثر نمره</th>


                    <tr align="center" style="text-align:center;">
                        <td data-field="id">دانشگاه کاردانی</td>
                        <td><?php echo $associateUni  ?></td>
                        <td data-field="price">2</td>

                    </tr>

                    <tr align="center" style="text-align:center;">
                        <td data-field="id">معدل کاردانی</td>
                        <td><?php echo $associateAverage  ?></td>
                        <td data-field="price">2</td>

                    </tr>


                    <tr align="center" style="text-align:center;">
                        <td data-field="id">دانشگاه کارشناسی</td>
                        <td><?php echo $bachelorUni  ?></td>
                        <td data-field="price">2</td>

                    </tr>

                    <tr align="center" style="text-align:center;">
                        <td data-field="id">معدل کارشناسی</td>
                        <td><?php echo $bachelorAverage ?></td>
                        <td data-field="price">2</td>

                    </tr>







                    <tr align="center" style="text-align:center;">
                        <td data-field="id">پایان نامه</td>
                        <td> <?php echo $thesis ?></td>
                        <td data-field="price">3</td>

                    </tr>


                    <tr align="center" style="text-align:center;">
                        <td data-field="id">کنفرانس</td>
                        <td><?php echo $conferance ?></td>
                        <td data-field="price">5</td>

                    </tr>


                    <tr align="center" style="text-align:center;">
                        <td data-field="id">سابقه تدریس</td>
                        <td><?php echo $experience ?></td>
                        <td data-field="price">2</td>

                    </tr>

                    <tr align="center" style="text-align:center;">
                        <td data-field="id">رتبه دوره کارشناسی</td>
                        <td><?php echo $bachelorDegree ?></td>
                        <td data-field="price">3 , 2 , 1</td>

                    </tr>



                    <tr align="center" style="text-align:center;">
                        <td data-field="id">رتبه دوره کاردانی</td>
                        <td><?php  echo $associateDegree ?></td>
                        <td data-field="price">3 , 2 , 1</td>

                    </tr>



                    </tr>

                    <tr align="center" style="text-align:center;" >
                        <td data-field="id">مقاله 1</td>
                        <td><?php echo $article ?></td>
                        <td data-field="price">5</td>

                    </tr>



                    <tr align="center" style="text-align:center;" >
                        <td data-field="id">مقاله 2</td>
                        <td><?php echo $article2 ?></td>
                        <td data-field="price">5</td>

                    </tr>



                    <tr align="center" style="text-align:center;">
                        <td data-field="id">شرکت در جشنواره</td>
                        <td><?php echo $festival ?></td>
                        <td data-field="price">3</td>

                    </tr>



                    <tr align="center" style="text-align:center;">
                        <td data-field="id">طرح ها و پروژه ها</td>
                        <td><?php echo $project ?></td>
                        <td data-field="price">4</td>

                    </tr>
                    <tr align="center" style="text-align:center;">
                        <td data-field="id">مدرک زبان </td>
                        <td><?php echo $olympiad ?></td>
                        <td data-field="price">1</td>

                    </tr>

                    <tr align="center" style="text-align:center;">
                        <td data-field="id">المپیاد</td>
                        <td><?php echo $olympiad ?></td>
                        <td data-field="price">2</td>

                    </tr>


                    <tr align="center" style="text-align:center;">
                        <td data-field="id">اختراع</td>
                        <td><?php echo $invention ?></td>
                        <td data-field="price">2</td>

                    </tr>



                    <tr align="center" style="text-align:center;">
                        <td data-field="id">تالیف کتاب</td>
                        <td><?php echo $bookswritten ?></td>
                        <td data-field="price">5</td>

                    </tr>



                    <tr align="center" style="text-align:center;">
                        <td data-field="id">ترجمه کتاب</td>
                        <td><?php echo $translation ?></td>
                        <td data-field="price">3</td>

                    </tr>



                    <tr align="center" style="text-align:center;">
                        <td data-field="id">سایر موارد</td>
                        <td><?php echo $other ?></td>
                        <td data-field="price">1</td>

                    </tr>





                    </thead>
                </table>
            </div>

            <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
            <br /> <br /> <br /> <br /> <br /> <br />

            <div style="float:right; width:300px; height:70px; margin-right:550px; margin-top:-220px; ">
                <table style="width:300px;" cellspacing="2px;" cellpadding="2px;">
                    <thead>
                    <tr align="center" style="text-align:center;">
                        <th data-field="id" align="center" style="text-align:center">موارد مصاحبه</th>
                        <th data-field="name">نمره</th>
                        <th data-field="price">حداکثر نمره</th>


                    <tr align="center" style="text-align:center;">
                        <td data-field="id">میزان اطلاعات تخصصی</td>
                        <td><?php echo $information ?></td>
            <td data-field="price">2</td>
            
        </tr>


        <tr align="center" style="text-align:center;">
            <td data-field="id">شیوه رفتار و برخورد</td>
            <td><?php echo $shiveRaftar ?></td>
            <td data-field="price">2</td>

        </tr>
        
        
          <tr align="center" style="text-align:center;">
             <td data-field="id">توانایی استدلال منطقی</td>
            <td><?php echo $estedlal ?></td>
                        <td data-field="price">2</td>

                    </tr>



                    <tr align="center" style="text-align:center;">
                        <td data-field="id">قدرت بیان</td>
                        <td><?php echo $speech ?></td>
                        <td data-field="price">2</td>

                    </tr>

                    <tr align="center" style="text-align:center;">
                        <td data-field="id"> تاریخ مصاحبه</td>
                        <td><?php echo $interDate ?></td>
                        <td data-field="price"> </td>

                    </tr>



                    </tr></thead></table></div>











            </form>
        </div></span>
















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
<script>
</script>
</body>
</html>