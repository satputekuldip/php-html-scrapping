<?php
require "vendor/autoload.php";
use PHPHtmlParser\Dom;

$name = "";
$address = "";
$dob = "";
$pincode = "";
$city = "";
$state = "";
$uid = "";
$gender = "";
$photo = "";

$dom = new Dom;
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["html_file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["html_file"]["name"], $target_dir);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    if ($imageFileType == 'html' || $imageFileType == 'htm'){
        $dom->loadFromFile($_FILES["html_file"]["name"]);

//		$name = $dom->find('input[name="user_name"]');
        $name = $dom->findById('cpBody_txt_Data_UserName')->value;
        $dob = $dom->findById('cpBody_txt_DOB')->value;
        $address = $dom->findById('cpBody_txt_postalAddress')->value;
        $pincode = $dom->findById('cpBody_txt_postalcode')->value;
        $city = $dom->findById('cpBody_txt_nicCity')->value;
        $state = $dom->findById('cpBody_ddlState')->value;
        $uid = $dom->findById('cpBody_txt_UID')->value;
		$gender = $dom->find('input[name="ctl00$cpBody$rbtnListGender"]')->value;
		$photo = $dom->findById('img_ProfileIcon')->src;

    } else {
        echo "please upload html file";
    }


}
?>


<!DOCTYPE html>
<html lang="hi"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>PDF</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://forefrontpro.xyz/aadhar4/HINDI_files/css" rel="stylesheet">
    <link href="https://forefrontpro.xyz/aadhar4/HINDI_files/css(1)" rel="stylesheet">
    <script>
       // window.onload = function() { window.print(); }
    </script>
  <style type="text/css">
    body{
      font-family: 'Roboto', sans-serif;
    }
    h1, h2, h3, h4{
      font-family: 'Open Sans', sans-serif;
    }
    .clr{
      clear: both;
    }
    .pdf{
      /*width: 650px;*/
      width: 660px;
      height: 818px;
      border: solid 2px;
      margin: 10% auto;
    }
    .left{
      width: 49.37%;
      float: left;
      border-right: solid 2px;
      height: 100%;
    }
        .right{
      width: 49.37%;
        float: left;
        border-left: dashed 1px;
        height: 100%;
        margin-left: 5px;
    }
    
    .dashed{
        border-left: solid 2px;
        margin-left: 5px;
    }
    img{
      width: 100%;
    }
    .img4{
      border-bottom: solid #e70000;
    }
    p{
      font-size: 12px;
      text-align: center;
      margin: 0;
    }
    .rtt{
      float: left;
      width: 15%;
    }
    .rtt_rt{
      /*float: left;
      width: 85%;*/
            float: left;
    width: 149%;
    padding-left: 18%;
    margin-top: -10%;
    height: 16%;
    }
    .rtt_dnld{
      float: left;
      width: 15%;
    }
    .rtt p, .brcd p{
      transform: rotate(90deg);
      margin-top: 25px;
      font-size: 8px;
      font-weight: bold;
    }
    ul li{
      font-size: 9px;
      list-style: none;
      line-height: 11px;
    }
    ul{
      padding: 0;
      margin-top: 5px;
    }
    .vld{
      float: left;
      width: 52%;
      text-align: right;
    }
    .brcd{
      float: left;
      width: 26%;
      background: url("images/q.jpg") no-repeat;
      background-size: 50px;
      margin-top: 100px;
      padding-left: 15px;
      background-position-x: center;
    }
    .brcd.print {
        display: list-item;
        list-style-image: url("images/q.jpg");
        list-style-position: inside;
        margin-top:126px;
    }
    .prnt{
        position: absolute;
        margin-top: -60px;
    }
    .vld img{
      width: 115px;
    padding-top: 92px;
    }
    h4 span, h2 span{
      color: #e70000;
    }
    h4{
      font-size: 14px;
      text-align: center;
      padding-top: 20px;
      margin: 0;
    }
    h3{
      margin: 0 0 4px;
      text-align: center;
    }
    h3 span{
      border-bottom: solid 0;
    }
    h2{
      text-align: center;
      font-size: 18px;
      letter-spacing: 1px;
      font-weight: 500;
      margin: 0;
      border-bottom: solid #e70000;
    }
    .img2{
      border-top: dashed 1px;
      margin-top: 5px;
      padding: 5px 0;
    }
    .a_lft{
      width: 20%;
      float: left;
      padding: 0 15px;
      padding-left: 0;
    }
    .a_rgt{
      width: 48%;
      float: left;
    }
    .a_rgt ul{
      margin-top: 0;
      margin-bottom: 0;
    }
    .a_rgt img{
        width: 75px;
        float: right;
        position: absolute;
            margin: 2px 154px 0;
    }
    .adhr h2{
      font-size: 14px;
      border-top: solid #e70000 2px;
      border-bottom: 0;
    }
    .adhr p{
      font-size: 10px;
    }
    .adhr h3{
      font-size: 15px;
    }
    .img6{
      border-top: solid #e70000 2px;
      padding-top: 3px;
    }
    .adhr .brcd {
      width: 5%;
    }
    .adhr .brcd p {
        font-size: 6px;
        margin-top: 10px;
    }
    .b_rgt{
      width: 36%;
      float: right;
    }
    .b_lft{
      width: 64%;
      float: left;
      min-height: 89px;
      margin-top: -3.2%;
    }
    .adhr2 ul li{
      
            font-size: 9px;
    line-height: 9px;
    margin-top: 4px;
    margin-left: -3px;
        }
    .adhr2 ul{
      padding: 0;
      margin: 0;
      margin-bottom: 8px;
      margin-left: 10px;
    }
    .adhr2 ul li span{
      font-weight: bold;
    }
    .blank{
      min-height: 124px;
    }
    .adhr h3 span{
      border-bottom: solid 0px;
    }
    .cut{
      width: 12px;
      position: absolute;
      padding: 2px 0px 0px 5px;
    }
    .cut2{
      position: absolute;
      width: 8px;
      margin: 8px 0 0 -10px;
    }
    .brcd h5{
      margin: 0;
      font-weight: bold;
      font-size: 12px;
    }
    .brcd ul li{
      font-size: 6px;
      line-height: 8px;
    }
    .one{
        height: 500px;
    }
    .two{
        height: 105px;
    }
     .three{
        height: 167px;
    }
    .rtt_rt ul{
        width: 45%;
    }
    .info h4{
        color:#f60000;
        letter-spacing: .5px;
        text-transform: uppercase;
        font-size: 12px;
        padding-top: 10px;
    }
    .info ul li, .info2 ul li{
        font-size: 10.5px;
        line-height: 16px;
    }
    .info ul li span, .info2 ul li span{
        color:#f60000;
    }
    .info2 ul li{
        padding: 4px 0;
    }
    .info2, .info{
        padding: 0 20px;
    }
    .info li::before, .info2 li::before {
      content: "■";
      color: #D60F26;
      font-size: 12px;
      padding-right: 5px;
    }
    .info2 ul{
        border: solid 1px #666;
        padding: 5px;
    }
    .info2{
        padding: 0 15px;
    }
    .info2 ul li .brk{
        color: #333;
        padding-left: 12px;
    }
    .img7{
        border-top: solid #e70000 2px;
        height: 15px;
        padding-top: 2px;
        
    }
    .rtt2{
        width: 10%;
    }
    .adhr .rtt2 p {
        font-size: 8px;
}

  </style></head>
    

  <body>
  <div class="pdf">
    
    <div class="left">
        <div class="one">
      <img src="https://forefrontpro.xyz/aadhar4/HINDI_files/top.jpg" style="height: 42%;">
      <p> नामांकन क्रम / Enrolment No:  </p>
      <div class="rtt">
        <p>Download&nbsp;Date:&nbsp;02/02/2020</p>
        <div class="clr"></div>
      </div>
      <div class="rtt_rt">
        <ul>
          <li>To</li>
          <li><?php echo $name ?></li>
          <li><?php echo $name ?></li>
          <li><?php echo $address ?></li>
        </ul>
        <div class="clr"></div>
      </div>

      <div class="rtt">
        <p style="margin-top: 77px;">Issue&nbsp;Date:&nbsp;18/01/2020</p> 
        <div class="clr"></div>
      </div>
      <div class="brcd print">
          <div class="prnt">
            <h5>Signature Valid</h5>
            <ul>
              <li>Digitally signed by DS</li>
              <li>UNIQUE IDENTIFICATION</li>
              <li>AUTHORITY OF INDIA</li>
              <li>Time: 02:10:24</li>
              <li>IST</li>
            </ul>
          </div>
        <div class="clr"></div>
      </div>
      <div class="vld">
        <img src="https://chart.googleapis.com/chart?chs=450x450&cht=qr&chl=%3C%3Fxml+version%3D%221.0%22+encoding%3D%22UTF-8%22%3F%3E+%3CPrintLetterBarcodeData+n%3D%22Lalita+Devi%22+u%3D%22XXXXXXXX3310%22+g%3D%22Female%22+d%3D%2201-01-1980%22+a%3D%22W%2Fo+Anil+Kumar%2C+D-24%2C+Ganeshwar+Nagar+Lal+Doongri%2C+Meena+Petrol+Pump+Ke+Piche%2C+%2C+Jaipur+City%2C+Jaipur%2C+Rajasthan%2C+302003%22+x%3D%22%22+s%3D%22IhX5IZDysEJ%2F2MAF3npnn0DI%2F1JTOXVGmXPG9%2FoS19xUZ1LvgdYhkdNR%2FzLrT5DKTTLY7tVrpyDGQshXbKQG9ii8U4M%2BtqhoFU8JtIPZXaECfMjHai6Zhkvn67xSjgd6qceDPnGD47t9kaO%2B1vyxaHUuIpqUanK7aQSE%2F7RStU9%2BYzbZ51dfu8nB8maFYPBomjK%2FQT96BoDWF5mLJv%2BNwTrQXWv%2BVEuARjK078zequfWFjQGC8m6g197TyRNW5nysEH6kaWx6JhbqkN4G8DEJU38kvyHgfnIl0ETyn%2BdEqJ0lAQJEvefkeCWDEaw7FMTDhnC7L9CQetvPGG%2BrQPIAg%3D%3D%22%3E&choe=UTF-8" title="">
        <div class="clr"></div>
      </div>
      
      <div class="clr"></div>
        
        </div> <!--one-->
    
        <div class="two">
          <h4>आपका <span>आधार</span> क्रमांक / Your <span>Aadhaar</span> No. :</h4>
          <h3><span><?php echo $uid ?></span></h3>
          <h2>मेरा <span>आधार</span>, मेरी पहचान</h2>
          
        </div>  <!--two-->

      <div class="adhr">
        <img src="https://forefrontpro.xyz/aadhar4/HINDI_files/cut.png" class="cut">
         <div class="three">
             
        <img src="https://forefrontpro.xyz/aadhar4/HINDI_files/front.jpg" class="img2" style="width:319px; height:32px">
        <div class="rtt rtt2">
            <p style="margin-top: 12px;">Download&nbsp;Date:&nbsp;02/02/2020</p>
            <div class="clr"></div>
        </div>
        
        <div class="a_lft">
           
           
          <img src="<?php echo $photo ?>">
        </div>
        <div class="a_rgt">
          <ul>
            <li><?php echo $name ?></li>
            <li><?php echo $name ?></li>
            <li>जन्म तिथि/DOB: <?php echo $dob ?></li>
            <li>महिला/<?php echo $gender ?></li>
          </ul>
         
        </div>
        <div class="rtt rtt2">
            <p style="margin-top: 25px;">Issue&nbsp;Date:&nbsp;18/01/2020</p>
            <div class="clr"></div>
          </div>
        </div>  <!--three-->
        <h3><span><?php echo $uid ?></span></h3>
        <!-- <h2>मेरा <span>आधार</span>, मेरी पहचान</h2> -->
        <img src="https://forefrontpro.xyz/aadhar4/HINDI_files/Hindi.jpg" class="img7">
      </div>

      <div class="clr"></div>
    </div>

    <div class="right">
        <div class="dashed">
        <img src="https://forefrontpro.xyz/aadhar4/HINDI_files/cut2.png" class="cut2">
    <div class="one">
      <img src="https://forefrontpro.xyz/aadhar4/HINDI_files/back_top.png" class="img4">
      
      <div class="info">
          <h4>सूचना</h4>
          <ul>
              <li><span>आधार </span> पहचान का प्रमाण है, नागरिकता का नहीं।</li>
             <!-- <li>पहचान का प्रमाण ऑनलाइन ऑथेन्टिकेशन द्वारा प्राप्त करें |</li>
    -->         
    <li>सुरक्षित QR कोड / ऑफलाइन XML / ऑनलाइन ऑथेंटिकेशन से पहचान प्रमाणित करें ।</li>
    <li>यह एक इलेक्ट्रॉनिक प्रक्रिया द्वारा बना हुआ पत्र है |</li>
          </ul>
          <h4>Information</h4>
          <ul>
              <li><span><b>Aadhaar</b></span> is a proof of identity, not of citizenship.</li>
              <li>Verify identity using Secure QR Code / Offline XML / Online Authentication.</li>
              <li>This is electronically generated letter.</li>
          </ul>
      </div>
      <div class="info2">
          <ul>
              <li><span>आधार</span> देश भर में मान्य है |</li>
              <!--<li><span>आधार</span> आधार भविष्य में सरकारी और गैर-सरकारी सेवाओं  <br><span class="brk"> का लाभ उठाने में उपयोगी होगा ।</span></li>-->
              <li><span>आधार</span> कई सरकारी और गैर सरकारी सेवाओं को पाना आसान बनाता है ।</li>
              <li><span>आधार</span> में मोबाइल नंबर और ईमेल ID अपडेट रखें ।</li>
              <li><span>आधार</span> को अपने स्मार्ट फोन पर रखें , mAadhaar App के साथ ।<an></an></li>
              <li><span>Aadhaar</span> is valid throughout the country.</li>
              <!--<li><span>Aadhaar</span> will be helpfull in availing Government <br><span class="brk">and Non-Government services in future.</span></li>-->
              <li><span>Aadhaar</span> helps you avail various Government and non - Government services easily.</li>
              <li>Keep your mobile number &amp; email ID updated in <span>Aadhaar</span>.</li>
              <li>Carry Aadhaar in your smart phone – use <span>mAadhaar</span> App.</li>
          </ul>
      </div>

      </div> <!--one-->
      <div class="two"></div>

      <div class="adhr adhr2">
        <img src="https://forefrontpro.xyz/aadhar4/HINDI_files/cut.png" class="cut">
        <div class="three">
        <img src="https://forefrontpro.xyz/aadhar4/HINDI_files/back.jpg" class="img2">
        <div class="b_lft">
          <ul>
            <li><span>पता:</span></li>
            <li>डब्ल्यू / ओ अनिल कुमार, डी -24, गणेश्वर नगर लाल डोंगरी, मीना पेट्रोल पंप के पिचे, जयपुर शहर, जयपुर, राजस्थान, ३०२००३</li>
          </ul>
          <ul>
            <li><span>Address:</span></li>
            <li><?php echo $address ?></li>
          </ul>
        </div>
        <div class="b_rgt">
          <img src="https://chart.googleapis.com/chart?chs=450x450&cht=qr&chl=%3C%3Fxml+version%3D%221.0%22+encoding%3D%22UTF-8%22%3F%3E+%3CPrintLetterBarcodeData+n%3D%22Lalita+Devi%22+u%3D%22XXXXXXXX3310%22+g%3D%22Female%22+d%3D%2201-01-1980%22+a%3D%22W%2Fo+Anil+Kumar%2C+D-24%2C+Ganeshwar+Nagar+Lal+Doongri%2C+Meena+Petrol+Pump+Ke+Piche%2C+%2C+Jaipur+City%2C+Jaipur%2C+Rajasthan%2C+302003%22+x%3D%22%22+s%3D%22IhX5IZDysEJ%2F2MAF3npnn0DI%2F1JTOXVGmXPG9%2FoS19xUZ1LvgdYhkdNR%2FzLrT5DKTTLY7tVrpyDGQshXbKQG9ii8U4M%2BtqhoFU8JtIPZXaECfMjHai6Zhkvn67xSjgd6qceDPnGD47t9kaO%2B1vyxaHUuIpqUanK7aQSE%2F7RStU9%2BYzbZ51dfu8nB8maFYPBomjK%2FQT96BoDWF5mLJv%2BNwTrQXWv%2BVEuARjK078zequfWFjQGC8m6g197TyRNW5nysEH6kaWx6JhbqkN4G8DEJU38kvyHgfnIl0ETyn%2BdEqJ0lAQJEvefkeCWDEaw7FMTDhnC7L9CQetvPGG%2BrQPIAg%3D%3D%22%3E&choe=UTF-8" title="">
        </div>
      
        <div class="clr"></div>
        </div>  <!--three-->
        <h3 style="margin-bottom: 3px;text-align: right;"><span><?php echo $uid ?></span></h3>
        <img src="https://forefrontpro.xyz/aadhar4/HINDI_files/back_bottom.png" style="height: 20px; margin-top: 0; border-top: #e70000 solid 1px;">
   
    
      </div>
        </div>
      <div class="clr"></div>
    </div>
    
    <div class="clr"></div>
  </div>

  

</body></html>
