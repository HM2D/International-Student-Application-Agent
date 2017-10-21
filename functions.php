<?php







function bakhshMapping($id){


    switch($id){
        case "0":
            return [0,1,3];

        case "4":
            return [4,5];


        case "9":
            return [9,10,11,12];

        case "10":
            return [6,7];

        case "13":
            return [13,14,15,16,17];


        case "18": //shimi
            return [18,19,21];

        case "20":  //naft
            return [20];

        case "21": //haste
            return [22,23];

        case "22": //mekanik
            return [24,25];

        case "24": //hava faza
            return [26];

        case "26":  //system
            return [27];

        case "27":  //keshavarzi
            return [28];

        case "28": //riazi
            return [29,30,31];

        case "29":   //zist
            return [32,34,35];

        case "30":  //olum tarbiyat
            return [36];

        case "32":  //ravan shenasi
            return [37,38];

        case "36":  //barname rizi darsi
            return [40];

        case "37":  // modiriat
            return [39];

        case "40":  //tavan shenasio amuzesh
            return [41];

        case "39": //elmo ,,
            return [42,33];

        case "41":  //modiriat ester
            return [43];

        case "42": //hesabdari
            return [44];

        case "33":  //jame shenasi
            return [2,45];

        case "43":  //eghtesad
            return [46];

        case "44":  //zaban adabiyat
            return [47,48];

        case "2":  //adabiyat
            return [49,50,51,54];

        case "46":   //zaban shenasi
            return [52,53];

        case "47":  //hoghgh
            return [56,57,58];

        case "48":  //motaleate mantaghe
            return [59];

        case "49":   //siasi
            return [60];

        case "50":  //shahrsazi
            return [63];

        case "51":  //pazhuhesh
            return [64];

        case "52":  //biyoshimi
            return [65];

        case "53":  //fiziolzhi
            return [8];
        default: return -1;


    }
}






function majorMapping($id){


    switch($id){
        case "0":
            return "مهندسی برق -الکترونیک";
        case "1":
            return "مهندسی برق -مخابرات گرایش سیست";

        case "3":
            return "مهندسی برق - قدرت";
        case "4":
            return "مهندسی کامپیوتر گرایش هوش مصنوعی";
        case "5":
            return "مهندسی کامپیوتر گرایش نرم افزار";
        case "6":
            return "مهندسی کامپیوتر(IT)  گرایش  امنیت اطلاعات";
        case "7":
            return "مهندسی کامپیوتر(IT)  گرایش فناوری اطلاعات";
        case "9":
            return "مهندسی عمران گرایش محیط زیست";

        case "10":
            return "مهندسی عمران گرایش سازه های هیدرولیکی";

        case "11":
            return "مهندسی عمران گرایش سازه";

        case "12":
            return "مهندسی عمران گرایش مکانیک خاک و پی";

        case "13":
            return "مهندسی مواد گرایش شناسایی و انتخاب مواد";

        case "14":
            return "مهندسی مواد گرایش خوردگی و حفاظت مواد";

        case "15":
            return "مهندسی مواد گرایش شکل دادن فلزات";

        case "16":
            return "مهندسی مواد گرایش الکتروسرامیک";

        case "17":
            return "مهندسی مواد گرایش نانو مواد";

        case "18":
            return "مهندسی شیمی گرایش  فراوری و انتقال گاز";

        case "19":
            return "مهندسی شیمی";

        case "20":
            return "مهندسی نفت  گرایش مخازن هیدروکربوری";

        case "21":
            return "نانو مهندسی شیمی ";

        case "22":
            return "مهندسی هسته‏ای  گرایش راکتور";

        case "23":
            return "مهندسی هسته‏ای گرایش پرتوپزشکی";

        case "24":
            return "مهندسی مکانیک گرایش تبدیل انرژی";

        case "25":
            return "مهندسی مکانیک گرایش طراحی کاربردی";

        case "26":
            return "مهندسی هوافضا گرایش آیرودینامیک";

        case "27":
            return "مهندسی سیستم‏های انرژی  گرایش انرژی و محیط زیست";

        case "28":
            return "بیوتکنولوژی کشاورزی ";

        case "29":
            return "آمار ریاضی";

        case "30":
            return "ریاضی گرایش محض";

        case "31":
            return "ریاضی گرایش کاربردی";

        case "32":
            return "زیست شناسی گرایش سلولی و مولکولی";

        case "34":
            return "زیست شناسی گرایش  بیوشیمی";

        case "35":
            return "زیست شناسی گرایش فیزیولوژی جانوری";

        case "36":
            return "علوم تربیتی گرایش آموزش و پرورش ابتدایی";

        case "37":
            return "روانشناسی گرایش بالینی";

        case "38":
            return "روانشناسی گرایش تربیتی";

        case "40":
            return "برنامه ریزی درسی";

        case "39":
            return "مدیریت آموزشی";

        case "41":
            return "روانشناسی و آموزش کودکان استثنایی";

        case "42":
            return "علم اطلاعات و دانش شناسی گرایش مدیریت اطلاعات";

        case "33":
            return "علم اطلاعات و دانش شناسی گرایش  علم سنجی";

        case "43":
            return "MBA گرایش مدیریت استراتژیک";

        case "44":
            return "حسابداری";

        case "2":
            return "جامعه شناسی";

        case "45":
            return "جامعه شناسی گرایش  برنامه ریزی توسعه منطقه ای";

        case "46":
            return "اقتصاد گرایش اقتصاد نظری";

        case "47":
            return "زبان و ادبیات فارسی";

        case "48":
            return "زبان و ادبیات کودک و نوجوان";

        case "49":
            return "ادبیات مقاومت";

        case "50":
            return "زبان و ادبیات انگلیسی";

        case "51":
            return "آموزش زبان انگلیسی";

        case "52":
            return "زبان شناسی";

        case "53":
            return "فرهنگ و زبان‏های باستانی";

        case "54":
            return "زبان و ادبیات عرب";

        case "55":
            return "حقوق عمومی";

        case "56":
            return "حقوق بین الملل";

        case "57":
            return "حقوق خصوصی";

        case "58":
            return "حقوق جزا و جرم شناسی";

        case "59":
            return "مطالعات منطقه ای گرایش خارومیانه و شمال آفریقا";

        case "60":
            return "علوم سیاسی";

        case "61":
            return "الهیات و معارف اسلامی گرایش فلسفه و کلام اسلامی ";

        case "62":
            return "معماری";

        case "63":
            return "شهرسازی گرایش برنامه ریزی شهری";

        case "64":
            return "پژوهش هنر";

        case "65":
            return "بیوشیمی بالینی";

        case "8":
            return " فیزیولوژی";


    }
}




























function uploadattachEng($atnum,$sid,$date,$description,$type,$institution){
    $key = "englishFile" . $atnum;
    $fileName = $_FILES[$key]['name'];
    $tmpName  = $_FILES[$key]['tmp_name'];
    $fileSize = $_FILES[$key]['size'];
    $imageFileType = $_FILES[$key]['type'];
    $con3 = db_connection();

    $fp  = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);
    $query2 = "insert into degreeLanguage (sid,date,description,type,institution,content,fileName) values ('$sid','$date','$description','$type','$institution','$content','$fileName')";
    db_query($query2,$con3);


}



function uploadattachExp($atnum,$sid,$date,$description,$course,$time,$ins){
    $key = "expFile" . $atnum;
    $fileName = $_FILES[$key]['name'];
    $tmpName  = $_FILES[$key]['tmp_name'];
    $fileSize = $_FILES[$key]['size'];
    $imageFileType = $_FILES[$key]['type'];
    $con3 = db_connection();

    $fp  = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);
    $query2 = "insert into Experience (sid,course,timeSpan,description,date,institution,content,fileName,filesize,filetype) values ('$sid','$course','$time','$description','$date','$ins','$content','$fileName','$fileSize','$imageFileType')";
    db_query($query2,$con3);


}



function uploadattachTh($atnum,$sid,$thDes,$thSub,$thSup,$thDate){
    $key = "thFile" . $atnum;~

    $fileName = $_FILES[$key]['name'];
    $tmpName  = $_FILES[$key]['tmp_name'];
    $fileSize = $_FILES[$key]['size'];
    $imageFileType = $_FILES[$key]['type'];
    $con3 = db_connection();

    $fp  = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);
    $query2 = "insert into Thesis (sid,supervisor,description,date,content,fileName,filesize,filetype) values ('$sid','$thSup','$thDes','$thDate','$content','$fileName','$fileSize','$imageFileType')";
    db_query($query2,$con3);


}



function uploadattachArt($atnum,$sid,$artDes,$artDate,$artType){
    $key = "artFile" . $atnum;
    $fileName = $_FILES[$key]['name'];
    $tmpName  = $_FILES[$key]['tmp_name'];
    $fileSize = $_FILES[$key]['size'];
    $imageFileType = $_FILES[$key]['type'];
    $con3 = db_connection();

    $fp  = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);
    $query2 = "insert into article (sid,data,type,content,description,fileName,filesize,filetype) values ('$sid','$artDate','$artType','$content','$artDes','$fileName','$fileSize','$imageFileType')";
    db_query($query2, $con3);
}





function  uploadattachTr($atnum,$sid,$trDes,$trDate,$trBookName,$trLan,$trWriter){
    $key = "trFile" . $atnum;
    $fileName = $_FILES[$key]['name'];
    $tmpName  = $_FILES[$key]['tmp_name'];
    $fileSize = $_FILES[$key]['size'];
    $imageFileType = $_FILES[$key]['type'];
    $con3 = db_connection();

    $fp  = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);
    $query2 = "insert into translation (sid,bookName,language,DESCRIPTion ,date,writerName,content,fileName,filesize,filetype) values ('$sid','$trBookName','$trLan','$trDes','$trDate','$trWriter','$content','$fileName','$fileSize','$imageFileType')";
    db_query($query2, $con3);
}


function uploadattachIn($atnum,$sid,$inDes,$inDate){
    $key = "inFile" . $atnum;
    $fileName = $_FILES[$key]['name'];
    $tmpName  = $_FILES[$key]['tmp_name'];
    $fileSize = $_FILES[$key]['size'];
    $imageFileType = $_FILES[$key]['type'];
    $con3 = db_connection();

    $fp  = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);
    $query2 = "insert into invention (sid,DESCRIPTion ,date,content,fileName,filesize,filetype) values ('$sid','$inDes','$inDate','$content','$fileName','$fileSize','$imageFileType')";
    db_query($query2, $con3);

}


function uploadattachFs($atnum,$sid,$fsDate,$fsDes,$fsPlaceTaken){
    $key = "fsFile" . $atnum;
    $fileName = $_FILES[$key]['name'];
    $tmpName  = $_FILES[$key]['tmp_name'];
    $fileSize = $_FILES[$key]['size'];
    $imageFileType = $_FILES[$key]['type'];
    $con3 = db_connection();

    $fp  = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);
    $query2 = "insert into festival (sid,placeTaken,DESCRIPTion ,date,content,fileName,filesize,filetype) values ('$sid','$fsPlaceTaken','$fsDes','$fsDate','$content','$fileName','$fileSize','$imageFileType')";
    db_query($query2, $con3);
}


function uploadattachPr($atnum,$sid,$prDate,$prDes,$prTitle){
    $key = "prFile" . $atnum;
    $fileName = $_FILES[$key]['name'];
    $tmpName  = $_FILES[$key]['tmp_name'];
    $fileSize = $_FILES[$key]['size'];
    $imageFileType = $_FILES[$key]['type'];
    $con3 = db_connection();

    $fp  = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);
    $query2 = "insert into project (sid,title,date,DESCRIPTion ,content,fileName,filesize,filetype) values ('$sid','$prTitle','$prDate','$prDes','$content','$fileName','$fileSize','$imageFileType')";
    db_query($query2, $con3);
}


function uploadattachOl($atnum,$sid,$olDes,$olDate,$olIns,$olTitle){
    $key = "olFile" . $atnum;
    $fileName = $_FILES[$key]['name'];
    $tmpName  = $_FILES[$key]['tmp_name'];
    $fileSize = $_FILES[$key]['size'];
    $imageFileType = $_FILES[$key]['type'];
    $con3 = db_connection();

    $fp  = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);
    $query2 = "insert into ScientificOlympiad (sid,title,DESCRIPTion, date,institution,content,fileName,filesize,filetype) values ('$sid','$olTitle','$olDes','$olDate','$olIns','$content','$fileName','$fileSize','$imageFileType')";
    db_query($query2, $con3);
}


function uploadattachBook($atnum,$sid,$bookDes,$bookDate,$bookVolume,$bookTitle)
{
    $key = "bookFile" . $atnum;
    $fileName = $_FILES[$key]['name'];
    $tmpName = $_FILES[$key]['tmp_name'];
    $fileSize = $_FILES[$key]['size'];
    $imageFileType = $_FILES[$key]['type'];
    $con3 = db_connection();

    $fp = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);
    $query2 = "insert into BooksWritten (sid,volume,title,DESCRIPTion, date,content,fileName,filesize,filetype) values ('$sid','$bookVolume','$bookTitle','$bookDes','$bookDate','$content','$fileName','$fileSize','$imageFileType')";
    db_query($query2, $con3);

    }




?>