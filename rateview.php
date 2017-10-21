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

            <div style="border:0px solid red; width:200px; float:left; margin-left:720px; height:50px;"><font size="+1" color="#0033FF"><?php echo $fullName ?></font></div>

            <div id="mozh"><font size="3">

                    <br>



                    <br />
                    <div class="form-group">


                        <label for="register-username"><i class="icon-user"></i> <b>جنسیت:</b></label>
                        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;  <?php echo $gender ?>
                    </div>

                    <br>




                    <div class="form-group">
                        <label for="register-username"><i class="icon-user"></i> <b>تلفن:</b></label> &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;   &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;	&nbsp;<?php echo $tel ?>
                    </div>


                    <br>

                    <div class="form-group">
                        <label for="register-username"><i class="icon-user"></i> <b>ایمیل:</b></label>&nbsp; &nbsp;
                        &nbsp; 	&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;	&nbsp;<?php echo $email ?>
                    </div>

                    <br>
                    <div class="form-group">
                        <label for="register-username"><i class="icon-user"></i> <b>رشته:</b></label>&nbsp; &nbsp;
                        &nbsp; 	&nbsp; 	&nbsp; 	&nbsp; 	&nbsp; 	 	<?php echo $majorString ?>
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


                        <form method="post">


                            <tr align="center" style="text-align:center;">
                                <td data-field="id">دانشگاه کاردانی</td>
                                <td><input name="associateUni"></td>
                                <td data-field="price">2</td>

                            </tr>

                            <tr align="center" style="text-align:center;">
                                <td data-field="id">معدل کاردانی</td>
                                <td><input name="associateAverage"></td>
                                <td data-field="price">2</td>

                            </tr>


                            <tr align="center" style="text-align:center;">
                                <td data-field="id">دانشگاه کارشناسی</td>
                                <td><input name="bachelorUni"></td>
                                <td data-field="price">2</td>

                            </tr>

                            <tr align="center" style="text-align:center;">
                                <td data-field="id">معدل کارشناسی</td>
                                <td><input name="bachelorAverage"></td>
                                <td data-field="price">2</td>

                            </tr>







                            <tr align="center" style="text-align:center;">
                                <td data-field="id">پایان نامه</td>
                                <td> <input name="thesis"></td>
                                <td data-field="price">3</td>

                            </tr>


                            <tr align="center" style="text-align:center;">
                                <td data-field="id">کنفرانس</td>
                                <td> <input name="conferance"></td>
                                <td data-field="price">5</td>

                            </tr>


                            <tr align="center" style="text-align:center;">
                                <td data-field="id">سابقه تدریس</td>
                                <td><input name="experience"></td>
                                <td data-field="price">2</td>

                            </tr>

                            <tr align="center" style="text-align:center;">
                                <td data-field="id">رتبه دوره کارشناسی</td>
                                <td><input name="bachelorDegree"></td>
                                <td data-field="price">3 , 2 , 1</td>

                            </tr>



                            <tr align="center" style="text-align:center;">
                                <td data-field="id">رتبه دوره کاردانی</td>
                                <td><input name="associateDegree"></td>
                                <td data-field="price">3 , 2 , 1</td>

                            </tr>



                    </tr>

                    <tr align="center" style="text-align:center;" >
                        <td data-field="id">مقاله 1</td>
                        <td><input name="article1"></td>
                        <td data-field="price">5</td>

                    </tr>



                    <tr align="center" style="text-align:center;" >
                        <td data-field="id">مقاله 2</td>
                        <td><input name="article2"></td>
                        <td data-field="price">5</td>

                    </tr>



                    <tr align="center" style="text-align:center;">
                        <td data-field="id">شرکت در جشنواره</td>
                        <td><input name="festival"></td>
                        <td data-field="price">3</td>

                    </tr>



                    <tr align="center" style="text-align:center;">
                        <td data-field="id">طرح ها و پروژه ها</td>
                        <td><input name="project"></td>
                        <td data-field="price">4</td>

                    </tr>
                    <tr align="center" style="text-align:center;">
                        <td data-field="id">مدرک زبان </td>
                        <td><input name="degreeLanguage"></td>
                        <td data-field="price">1</td>

                    </tr>

                    <tr align="center" style="text-align:center;">
                        <td data-field="id">المپیاد</td>
                        <td><input name="olympiad"></td>
                        <td data-field="price">2</td>

                    </tr>


                    <tr align="center" style="text-align:center;">
                        <td data-field="id">اختراع</td>
                        <td><input name="invention"></td>
                        <td data-field="price">2</td>

                    </tr>



                    <tr align="center" style="text-align:center;">
                        <td data-field="id">تالیف کتاب</td>
                        <td><input name="bookswritten"></td>
                        <td data-field="price">5</td>

                    </tr>



                    <tr align="center" style="text-align:center;">
                        <td data-field="id">ترجمه کتاب</td>
                        <td><input name="translation"></td>
                        <td data-field="price">3</td>

                    </tr>



                    <tr align="center" style="text-align:center;">
                        <td data-field="id">سایر موارد</td>
                        <td><input name="other"></td>
                        <td data-field="price">1</td>

                    </tr>





                    </thead>
                </table>
            </div>

            <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
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
                        <td><input name="information"></td>
                        <td data-field="price">2</td>

                    </tr>


                    <tr align="center" style="text-align:center;">
                        <td data-field="id">شیوه رفتار و برخورد</td>
                        <td><input name="shiveRaftar"></td>
                        <td data-field="price">2</td>

                    </tr>


                    <tr align="center" style="text-align:center;">
                        <td data-field="id">توانایی استدلال منطقی</td>
                        <td><input name="estedlal"></td>
                        <td data-field="price">2</td>

                    </tr>



                    <tr align="center" style="text-align:center;">
                        <td data-field="id">قدرت بیان</td>
                        <td><input name="bayan" ?></td>
                        <td data-field="price">2</td>

                    </tr>

                    <tr align="center" style="text-align:center;">
                        <td data-field="id"> تاریخ مصاحبه</td>
                        <td><?php echo $interDate ?></td>
                        <td data-field="price"> </td>

                    </tr>



                    </tr></thead></table></div>

            <button type="submit" name="grade" style="float: right; margin-right: 470px; margin-top: 50px;">ثبت</button>
            <button type="submit" name="documents" style="float: right; margin-right: 470px; margin-top: 50px;">دیدن مدارک</button>
            </form>
            <br><br><br>







        </div></span>
















        <!-- ####################################################################################################### -->
    </div>
</div>

</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->

<script type="text/javascript" src="jquery.js"></script>
<script>



</script>
</body>
</html>im