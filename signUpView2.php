<!DOCTYPE html>
<html dir="rtl" lang="ar">
<meta charset="UTF-8"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8 ">



<style>

    #txt {
        direction: rtl;
    }

    #mozh{

        border: solid red 3px;
        float:right;
        margin-right:60px;
        margin-top:20px;


    }

    #question{

        width:250px;
        float:right;
        direction: rtl;
        margin-right:200px;
        margin-top:25px;
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
        <div class="fl_left"><br>
            <h1><a style="margin-right:500px" href="../index.html">پردیس بین الملل قشم</a></h1>
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








            <form method="post" enctype="multipart/form-data">

                <div  id="question" style="width:800px;height:1550px; margin-right: -0px;">



                    <div style="border: solid grey 2px; width:900px; padding: 10px; border-radius:10px">
                        <font size=4><span style="float:right;">مدرک زبان </font>

                        <br><br><button type="button" id="adder" name="addanother">+</button>&nbsp;&nbsp;&nbsp;توضیحات: <input id="description" name="englishDes0" style="width:250px">
                        تاریخ: <input id="dob" name="englishDate0" type="date">
                        نوع: <SELECT NAME="englishType0"><option value="1">TOEFL</option><option value="2">IELTS</option><option value="3">MCHE</option><option value="4">TOLIMO</option><option value="5">other</option></SELECT>
                        موسسه اخذ شده: <input name="englishIns0"><br><br>
                        <input class="active" type="file" name="englishFile0"></span>
                    </div>

                    <br><br>

                    <div style="border: solid grey 2px; width:900px; padding: 10px;border-radius:10px">
                        <font size=4><span style="float:right;">سابقه تدریس </font>
                        <br><br><button type="button" id="adder" name="addanother" style="margin-left">+</button>&nbsp;&nbsp;&nbsp; توضیحات: <input id="description" name="expDes0"  style="width:239px"> تاریخ:<input type="date" name="expDate0"> درس:<input name="expCourse0"> مدت:<input name="expTime0"><br><br> موسسه:<input name="expIns0" >

                        <input type="file" name="expFile0"></span>
                        <br /> <br />
                    </div>
                    <br><br>
                    <div style="border: solid grey 2px; width:900px; padding: 10px;border-radius:10px">
                        <font size=4><span style="float:right;">پایان نامه </font>
                        <br><br><button type="button" id="adder" name="addanother">+</button>&nbsp;&nbsp;&nbsp;توضیحات: <input name="thDes0" style="width:200px">تاریخ:<input type="date" name="thDate0">موضوع:<input name="thSub0">استاد راهنما:<input name="thSup0">
                        <br><br> <input type="File" name="thFile0"></span>


                        <br /><br />
                    </div>
                    <br><br>
                    <div style="border: solid grey 2px; width:900px; padding: 10px;border-radius:10px">


                        <font size=4><span style="float:right;">مقالات علمی </font>&nbsp; &nbsp; &nbsp; &nbsp;
                        <br><br><button type="button" id="adder" name="addanother">+</button>&nbsp;&nbsp;&nbsp;توضیحات: <input name="artDes0" style="width:160px">تاریخ:<input type="date" name="artDate0">&nbsp;&nbsp;&nbsp;نوع:<select style="width:100px" name="artType0"><option value="1">علمی و پژوهشی</option><option value="2">کنفرانس علمی</option></select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="artFile0"><br><br></span>



                    </div>


                    <br><br>



                    <div style="border: solid grey 2px; width:900px; padding: 10px;border-radius:10px">

                        <font size=4><span style="float:right;">ترجمه یا تالیف </font>
                        <br><br><button type="button" id="adder" name="addanother">+</button>&nbsp;&nbsp;&nbsp;توضیحات: <input name="trDes0" style="width:210px" >تاریخ:<input type="date" name="trDate0">نام کتاب:<input name="trBookName0">زبان اصلی:<input name="trLan0"><br><br>نام نویسنده:<input name="trWriter0"><input type="file" name="trFile0"><br></span>


                    </div><br><br>

                    <div style="border: solid grey 2px; width:900px; padding: 10px;border-radius:10px">


                        <font size=4><span style="float:right;">اختراع </font>

                        <br><br><button type="button" id="adder" name="addanother">+</button>&nbsp;&nbsp;&nbsp;توضیحات: <input name="inDes0" style="width:295px"> &nbsp;تاریخ:<input type="date" name="inDate0">&nbsp; <input type="file" name="inFile0"><br><br></span>




                    </div>

                    <br><br>
                    <div  style="border: solid grey 2px; width:900px; padding: 10px;border-radius:10px">

                        <font size=4><span style="float:right;">شرکت در جشنواره </font>

                        <br><br><button type="button" id="adder" name="addanother">+</button>&nbsp;&nbsp;&nbsp;توضیحات: <input name="fsDes0" style="width:130px">&nbsp; تاریخ:<input type="date" name="fsDate0">&nbsp; مکان:<input name="fsPlaceTaken0">&nbsp; <input type="file" name="fsFile0"><br><br></span>


                    </div>
                    <br><br>
                    <div style="border: solid grey 2px; width:900px; padding: 10px;border-radius:10px">




                        <font size=4><span style="float:right;">طرح یا پروژه </font>

                        <br><br><button type="button" id="adder" name="addanother">+</button>&nbsp;&nbsp;&nbsp;توضیحات: <input id="description" name="prDes0">&nbsp;تاریخ:<input type="date" name="prDate0">&nbsp; عنوان:<input name="prTitle0">&nbsp; <input type="file" name="prFile0"></span>
                        <br /><br />
                    </div>
                    <br><br>
                    <div style="border: solid grey 2px; width:900px; padding: 10px;border-radius:10px">

                        <font size=4><span style="float:right;">المپیاد </font>
                        <br><br><button type="button" id="adder" name="addanother">+</button>&nbsp;&nbsp;&nbsp;توضیحات: <input id="description" name="olDes0" style="width:210px">&nbsp; تاریخ:<input name="olDate0" type="date">عنوان:<input name="olTitle0">&nbsp; موسسه:<input name="olIns0"><br><br>&nbsp; <input type="file" name="olFile0"><br><br>
                    </div><br><br></span>

                    <div style="border: solid grey 2px; width:900px; padding: 10px;border-radius:10px">

                        <font size=4><span style="float:right;">تالیف کتاب</font>
                        <br><br><button type="button" id="adder" name="addanother">+</button>&nbsp;&nbsp;&nbsp;توضیحات: <input id="description" name="bookDes0" style="width:240px">&nbsp; تاریخ:<input name="bookDate0" type="date">جلد:<input name="bookVolume0">&nbsp; عنوان:<input name="bookTitle0"><br><br>&nbsp; <input type="file" name="bookFile0"><br><br>
                    </div><br><br></span>






                <br><br>


        </div>
























        <br><br>
        <div style="width:500px; height:70px; float:right;margin-top:-50px; margin-left:-10px; margin-right:220px;">



        </div>

        <button type="submit" name="send" class="submitdate" style="float:left; margin-left:50%; margin-top:100px; width:50px; height:30px;">ارسال</button>
        </form>
        <br /><br /><br /><br /> <br /><br /><br /><br /><br /><br /><br /><br />


        <table >
            <tr ALIGN="RIGHT"> <th><font size="+1"> &nbsp;  &nbsp;  &nbsp;  تذكرات مهم: </font></th></tr>
            <tr ALIGN="RIGHT"> <th> <font size="-1">&nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; مسئوليت هرگونه پاسخ خلاف واقع، به عهده شما مي باشد و در صورت مشاهده طبق مقررات عمل خواهد شد. </font></th></tr>
            <tr ALIGN="RIGHT"> <th><font size="-1">&nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; تكميل بودن موارد فوق سبب تسريع در انجام ثبت نام شما مي شود، لطفاً موارد فوق را با دقت درج نماييد. </font></th></tr>
            <tr ALIGN="RIGHT"> <th> <font size="-1">&nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; به محض تغير نشاني، دانشجو موظف است مراتب را بلافاصله كتباً به دانشكده مربوطه اعلام نمايد.</font></th></tr></font>



        </table>






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

<script type="text/javascript" src="jquery.js"></script>
<script>
    var button = document.getElementsByName("addanother");
    console.log(button);
    var i = 0;
    var engcounter= 1;
    /////english
    button[0].addEventListener("click",function(){
        console.log("clicked");
        var nextupload = '<br><br>&nbsp;&nbsp;&nbsp;توضیحات: <input id="description" name="englishDes' +engcounter + '"  style="width:250px"> تاریخ: <input id="dob" name="englishDate' +engcounter + '" type="date">نوع: <SELECT NAME="englishType' +engcounter + '"><option value="1">TOEFL</option><option value="2">IELTS</option><option value="3">MCHE</option><option value="4">TOLIMO</option><option value="5">other</option></SELECT>موسسه اخذ شده: <input name="englishIns' +engcounter + '"><br><br><input class="active" type="file" name="englishFile' +engcounter + '"></span><br>';
        var div= document.createElement('div');
        div.innerHTML = nextupload;

        this.parentNode.appendChild(div);
        var mydiv =document.getElementById("question");

        var heightdiv = $("#question").height();
        $("#question").height(heightdiv + 90);

        var divheight2 =document.getElementById("question").style.height;

        console.log(divheight2);
        engcounter++;
    });

    ///exp
    var expcounter = 1;
    button[1].addEventListener("click",function(){
        console.log("clicked");
        var nextupload = ' &nbsp;&nbsp;&nbsp;توضیحات: <input id="description"  name="expDes'+expcounter+'" style="width:239px">تاریخ:<input type="date" name="expDate'+expcounter+'"> درس:<input name="expCourse'+expcounter+'">مدت:<input name="expTime'+expcounter+'"><br><br>موسسه:<input name="expIns'+expcounter+'" ><input type="file" name="expFile'+expcounter+'"></span><br /> <br />';
        var div= document.createElement('div');
        div.innerHTML = nextupload;

        this.parentNode.appendChild(div);
        var mydiv =document.getElementById("question");

        var heightdiv = $("#question").height();
        $("#question").height(heightdiv + 90);

        var divheight2 =document.getElementById("question").style.height;

        console.log(divheight2);
        expcounter++;
    });


    //thesis
    var thcounter = 1;
    button[2].addEventListener("click",function(){
        console.log("clicked");
        var nextupload = '&nbsp;&nbsp;&nbsp;توضیحات: <input name="thDes'+thcounter+'"  style="width:200px">تاریخ:<input type="date" name="thDate'+thcounter+'">موضوع:<input name="thSub'+thcounter+'">استاد راهنما:<input name="thSup'+thcounter+'"><br><br> <input type="File" name="thFile'+thcounter+'"></span><br><br>';
        var div= document.createElement('div');
        div.innerHTML = nextupload;

        this.parentNode.appendChild(div);
        var mydiv =document.getElementById("question");

        var heightdiv = $("#question").height();
        $("#question").height(heightdiv + 90);

        var divheight2 =document.getElementById("question").style.height;

        console.log(divheight2);
        thcounter++;
    });


    //articles
    var artcounter = 1;
    button[3].addEventListener("click",function(){
        console.log("clicked");
        var nextupload = '&nbsp;&nbsp;&nbsp;توضیحات: <input name="artDes'+artcounter+'" style="width:160px">تاریخ:<input type="date" name="artDate'+artcounter+'">&nbsp;&nbsp;&nbsp;نوع:<select style="width:100px" name="artType'+artcounter+'"><option value="1">علمی و پژوهشی</option><option value="2">کنفرانس علمی</option></select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="artFile'+artcounter+'"><br><br></span>'
        var div= document.createElement('div');
        div.innerHTML = nextupload;

        this.parentNode.appendChild(div);
        var mydiv =document.getElementById("question");

        var heightdiv = $("#question").height();
        $("#question").height(heightdiv + 70);

        var divheight2 =document.getElementById("question").style.height;

        console.log(divheight2);
        artcounter++;
    });  //translation
    var trcounter = 1;
    button[4].addEventListener("click",function(){
        console.log("clicked");
        var nextupload = ' <br><br>&nbsp;&nbsp;&nbsp;توضیحات: <input name="trDes'+trcounter+'" style="width:210px" >تاریخ:<input type="date" name="trDate'+trcounter+'">نام کتاب:<input name="trBookName'+trcounter+'">زبان اصلی:<input name="trLan'+trcounter+'"><br><br>نام نویسنده:<input name="trWriter'+trcounter+'"><input type="file" name="trFile'+trcounter+'"><br></span>'
        var div= document.createElement('div');
        div.innerHTML = nextupload;

        this.parentNode.appendChild(div);
        var mydiv =document.getElementById("question");

        var heightdiv = $("#question").height();
        $("#question").height(heightdiv + 70);

        var divheight2 =document.getElementById("question").style.height;

        console.log(divheight2);
        trcounter++;
    });

    //invention
    var incounter = 1;
    button[5].addEventListener("click",function(){
        console.log("clicked");
        var nextupload = '   &nbsp;&nbsp;&nbsp;توضیحات: <input name="inDes'+incounter+'" style="width:295px"> &nbsp;تاریخ:<input type="date" name="inDate'+incounter+'">&nbsp; <input type="file" name="inFile'+incounter+'"><br><br></span>'
        var div= document.createElement('div');
        div.innerHTML = nextupload;

        this.parentNode.appendChild(div);
        var mydiv =document.getElementById("question");

        var heightdiv = $("#question").height();
        $("#question").height(heightdiv + 60);

        var divheight2 =document.getElementById("question").style.height;

        console.log(divheight2);
        incounter++;
    });

    //festival
    var fscounter = 1;
    button[6].addEventListener("click",function(){
        console.log("clicked");
        var nextupload = '&nbsp;&nbsp;&nbsp;توضیحات: <input name="fsDes'+fscounter+'" style="width:130px">&nbsp; تاریخ:<input type="date" name="fsDate'+fscounter+'">&nbsp; مکان:<input name="fsPlaceTaken'+fscounter+'">&nbsp; <input type="file" name="fsFile'+fscounter+'"><br><br></span>'
        var div= document.createElement('div');
        div.innerHTML = nextupload;

        this.parentNode.appendChild(div);
        var mydiv =document.getElementById("question");

        var heightdiv = $("#question").height();
        $("#question").height(heightdiv + 60);

        var divheight2 =document.getElementById("question").style.height;

        console.log(divheight2);
        fscounter++;
    });

    //project
    var prcounter = 1;
    button[7].addEventListener("click",function(){
        console.log("clicked");
        var nextupload = '&nbsp;&nbsp;&nbsp;توضیحات: <input id="description" name="prDes'+prcounter+'">&nbsp;تاریخ:<input type="date" name="prDate'+prcounter+'">&nbsp; عنوان:<input name="prTitle'+prcounter+'">&nbsp; <input type="file" name="prFile'+prcounter+'"><br><br></span>'
        var div= document.createElement('div');
        div.innerHTML = nextupload;

        this.parentNode.appendChild(div);
        var mydiv =document.getElementById("question");

        var heightdiv = $("#question").height();
        $("#question").height(heightdiv + 60);

        var divheight2 =document.getElementById("question").style.height;

        console.log(divheight2);
        prcounter++;
    });


    //olympiad
    var olcounter = 1;
    button[8].addEventListener("click",function(){
        console.log("clicked");
        var nextupload = '&nbsp;&nbsp;&nbsp;توضیحات: <input id="description" name="olDes'+olcounter+'" style="width:210px">&nbsp; تاریخ:<input name="olDate'+olcounter+'" type="date">عنوان:<input name="olTitle'+olcounter+'">&nbsp; موسسه:<input name="olIns'+olcounter+'"><br><br>&nbsp; <input type="file" name="olFile'+olcounter+'"></div><br><br></span>';
        var div= document.createElement('div');
        div.innerHTML = nextupload;

        this.parentNode.appendChild(div);
        var mydiv =document.getElementById("question");

        var heightdiv = $("#question").height();
        $("#question").height(heightdiv + 80);

        var divheight2 =document.getElementById("question").style.height;

        console.log(divheight2);
        olcounter++;
    });

    //Bookwritten
    var bookcounter = 1;
    button[9].addEventListener("click",function(){
        console.log("clicked");
        var nextupload = '&nbsp;&nbsp;&nbsp;توضیحات: <input id="description" name="bookDes'+bookcounter+'" style="width:240px">&nbsp; تاریخ:<input name="bookDate'+bookcounter+'" type="date">عنوان:<input name="bookTitle'+bookcounter+'">&nbsp; جلد:<input name="bookVolume'+bookcounter+'"><br><br>&nbsp; <input type="file" name="bookFile'+bookcounter+'"><br><br></div></span>';
        var div= document.createElement('div');
        div.innerHTML = nextupload;

        this.parentNode.appendChild(div);
        var mydiv =document.getElementById("question");

        var heightdiv = $("#question").height();
        $("#question").height(heightdiv + 80);

        var divheight2 =document.getElementById("question").style.height;

        console.log(divheight2);
        bookcounter++;
    });









</script>
</body>
</html>