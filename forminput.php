<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
</head>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="/project01/brain.png" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">VERIFY</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">WHAT THE HEALTH</h1>
    <p>Interesting facts about the main</p>
    <p>internal organ systems of humans</p>
    <img src="/project01/brain-machine-wallpaper-preview.jpg" alt="boy" class="w3-image" width="992" height="1108">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">about us</h2>
    <hr style="width:200px" class="w3-opacity">
    <p> เว็ปไซต์นี้สร้างขึ้นมาเพื่อศึกษาและดูลักษณะของอวัยะภายในของมนุษย์โดยละเอียดซึ่งเว็ปไซต์นี้เหมาะสำหรับนักเรียนและนักศึกษา
        ที่ต้องการศึกษาระบบอวัยวะภายในของมนุษย์เพื่อใช้ในการทำโปรเจคหรือโครงงานที่ต้องการใช้ข้อมูลอย่างละเอียด
        และเหมาะสำหรับคุณครูและอาจาร์ยที่ต้องการข้อมูลสำหรับประกอบสื่อการสอนที่ต้องศึกษาเกี่ยวกับระบบภาญในของมนุษย์
    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">ORGAN</h3>
    <p class="w3-wide">BRAIN</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:100%"></div>
    </div>
    <p class="w3-wide">HEART</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:100%"></div>
    </div>
    <p class="w3-wide">LUNG</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:100%"></div>
    </div>
    <p class="w3-wide">KIDNEY</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:100%"></div>
    </div><br>
    
    <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">BRAIN</span><br>
        1
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">HEART</span><br>
        2
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">LUNG</span><br>
        3
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">KIDNEY</span><br>
        4
      </div>
    </div>
    
    <!-- Testimonials -->
    <h3 class="w3-padding-24 w3-text-light-grey">1) BRAIN</h3>  
        <img src="/project01/f008-001-9780323113281.jpg" style="width:70%">
        <hr style="width:200px" class="w3-opacity">
    <p align ="left"> ระบบประสาท (Nervous system) มีหน้าที่ควบคุมและประสานการทำงานของระบบ
อวัยวะต่างๆของร่างกาย (เช่น ระบบทางเดินหายใจ ระบบทางเดินอาหาร ระบบต่อมไร้ ท่อ ระบบอวัยวะสืบพันธุ์ชาย หรือ ระบบอวัยวะสืบพันธุ์สตรี เป็นต้น) หลังจากที่ระบบ ประสาทรวบ รวมข้อมูลจากสิ่งแวดล้อมภายนอก ที่มีความสัมพันธ์กับระบบอวัยวะต่างๆ ของร่างกาย ก็จะมีการวิเคราะห์ และสั่งการให้อวัยวะนั้นๆมีการตอบสนองที่เหมาะสม เพื่อรักษาสมดุลต่างๆของร่างกายและเพื่อตอบสนองต่อความต้องการของร่างกาย
หน้าที่ของระบบประสาทมี 4 ประการ
<br> 1). รวบรวมข้อมูล ทั้งจากภายนอกและภายในร่างกาย </br>
<br> 2). นำส่งข้อมูลไปยังระบบประสาทส่วนกลางเพื่อทำการวิเคราะห์ </br>
<br> 3). วิเคราะห์ข้อมูล เพื่อให้มีการตอบสนองที่เหมาะสม </br>
<br> 4). สั่งงานไปยังอวัยวะ หรือ ระบบอวัยวะต่างๆ เช่น กล้ามเนื้อ ต่อมไร้ท่อ ต่อมมีท่อต่างๆ </br>
หรืออวัยวะอื่นๆให้มีการตอบสนองที่เหมาะสม
ระบบประสาทแบ่งเป็น 2 ชนิดได้แก่
<br> 1).ระบบประสาทส่วนกลาง (Central nervous system: CNS) </br>
<br> : ศูนย์กลางควบคุมการทำงานของร่างกาย และเป็นโครงสร้างที่ใหญ่และสำคัญที่สุด ของระบบประสาท ประกอบด้วยสมองและไขสันหลัง ทําหน้าที่ร่วมกับระบบประสาท ส่วนปลาย (Peripheral nervous system หรือ PNS) ในการควบคุมพฤติกรรม การ ทำงานของระบบอวัยวะต่างๆทั่วทั้งร่างกาย มีอวัยวะและเชลล์ที่สำคัญคือสมอง, ไขสันหลัง, และ เซลล์ประสาท</br>
</p>
<div class="w3-half">
      <img src="/project01/1362540192.jpg" style="width:80%">
      </div>
      <div class="w3-half">
      <img src="/project01/spinal-cord-diagram-updated.PNG" style="width:80%">
      <hr style="width:200px" class="w3-opacity">
      </div>

  <p align ="left"> โดยสมองอยู่ในกะโหลกศีรษะ และ ไขสันหลังอยู่ในช่องไขสันหลัง(ช่องในกระดูกสัน หลัง)ที่อยู่ทางด้านหลังของร่างกายตั้งแต่ต้นคอถึงกันกบ โครงสร้างเหล่านี้ถูกปกคลุม ด้วยเยื่อหุ้มสมองและเยื่อหุ้มไขสันหลัง (Meninges) สมองยังล้อมรอบด้วยกะโหลก ศีรษะ และไขสันหลังยังล้อมรอบด้วยกระดูกสันหลังเพื่อช่วยป้องกันการกระทบ
กระเทือน
<br> • ซีรีบรัม (Cerebrum) มีขนาดใหญ่สุด มีรอยหยักเป็นจำนวนมาก ทำหน้าที่เกี่ยวกับ การเรียนรู้ ความสามารถต่างๆ เป็นศูนย์การทำงานของกล้ามเนื้อ การพูด การมอง เห็น การดมกลิ่น การชิมรส แบ่งเป็นสองซีก แต่ละชิกจะแบ่งได้เป็น 4 ส่วน ดังนี้ </br>
<br> -สมองกลีบหน้า (Frontal lobe): ทำหน้าที่ควบคุมการเคลื่อนไหว การออกเสียง ความคิด ความจำ สติปัญญา บุคลิก ความรู้สึก พื้นอารมณ์ </br>
<br> -สมองกลีบขมับ (Temporal lobe): ทำหน้าที่ควบคุมการได้ยิน การดมกลิ่น </br>
<br> -สมองกลีบหลัง (Occipital lobe): ทําหน้าที่ควบคุมการมองเห็น </br>
<br> -สมองกลีบด้านข้าง (Parietal lobe): ทำหน้าที่ควบคุมความรู้สึกด้านการสัมผัส การพูด การรับรส </br>
<br> • ออลเฟกทอรีบัสน์ (Olfactory bulb) อยู่ด้านหน้าสุด ทำหน้าที่ ดมกลิ่น </br>
<br> • ธาลามัส (Thalamus): อยู่เหนือไฮโปธาลามัส ทำหน้าที่เป็นสถานีถ่ายทอดกระแส ประสาท เพื่อส่งไปจุดต่างๆในสมอง รับรู้และตอบสนองความรู้สึกเจ็บปวด ทำให้มี การสั่งการแสดงออกพฤติกรรมด้านความเจ็บปวด </br>
<br> • ไฮโปธาลามัส (Hypothalamus) ทำหน้าที่เป็นศูนย์กลางของระบบประสาท อัตโนมัติ และสร้างฮอร์โมนต่างๆเพื่อควบคุมการผลิตฮอร์โมนจากต่อมใต้สมอง ซึ่งจะทำการควบคุมสมดุลของปริมาณน้ำและสารละลายเกลือแร่ในเลือด และยัง เกี่ยวกับการควบคุมอุณหภูมิร่างกาย อารมณ์ความรู้สึก การหิว การอิ่ม และความรู้สึกทางเพศ วงจรการตื่นและการหลับ </br>
1.2). สมองส่วนกลาง (Midbrain): เป็นสมองที่ต่อจากสมองส่วนหน้า เป็นสถานี รับ-ส่ง การทำงานระหว่างสมองส่วนหน้ากับสมองส่วนท้าย และสมองส่วนหน้ากับลูกตา ทำ หน้าที่เกี่ยวกับการเคลื่อนไหวของลูกตาและม่านตา
</p>
<div>
     <img src="/project01/midbrain.png" style="width: 50%">
     </div>
    <p align ="left"> 1.3). สมองส่วนท้าย (Hindbrain) ประกอบด้วย
</p>
      <div>
       <img src="/project01/Brain_sagittal_section_stem_highlighted.svg.png" style="width: 40%">
      </div>
    <p align ="left"> • พอนส์ (Pons) อยู่ด้านหน้าของซีรี่เบลลัมติดกับสมองส่วนกลาง ทำหน้าที่ควบคุม การทำงานบางอย่างของร่างกาย เช่น การเคี้ยวอาหาร การหลั่งน้ำลาย การ เคลื่อนไหวของกล้ามเนื้อบริเวณใบหน้า การกลอกตา การหายใจ
<br> • เมดัลลา (Medullo) เป็นสมองส่วนท้ายสุด ต่อกับไขสันหลัง เป็นทางผ่านของ กระแสประสาทระหว่างสมองกับไขสันหลัง เป็นศูนย์กลางการควบคุมการทำงาน เหนืออำนาจจิตใจ เช่น ไอ จาม สะอีก หายใจ การเต้นของ </br>
<br> • ซีรีเบลลัม (Cerebellum) อยู่ใต้เซรีบรัม ควบคุมระบบกล้ามเนื้อให้สัมพันธ์กันและ ควบคุมการทรงตัวของร่างกาย และการเคลื่อนไหวที่ต้องการความแม่นยำสูง </br>
<br> 2). ระบบประสาทส่วนปลาย (Peripheral nervous system ย่อว่า PNS)
: ประกอบด้วยระบบประสาทที่ไม่ได้อยู่ในระบบประสาทส่วนกลาง เป็นเซลล์ประสาทที่ ทำหน้าที่เก็บข้อมูลจากร่างกาย และนำส่งไปยังระบบประสาทส่วนกลาง ระบบประสาท ส่วนปลายมีหน้าที่รับและนำความรู้สึกเข้าสู่ระบบประสาทส่วนกลางและนำไปสู่หน่วย ปฏิบัติการตามอวัยวะต่างๆ ซึ่งประกอบด้วยหน่วยรับความรู้สึกและอวัยวะรับสัมผัส รวมทั้งเซลล์ประสาทและเส้นประสาทที่อยู่นอกระบบประสาทส่วนกลาง จำแนกตามลักษณะการทำงานได้ 2 แบบดังนี้
<br> -ระบบประสาทภายใต้อำนาจจิตใจ (Voluntary nervous system): เป็นระบบควบคุม การทำงานของกล้ามเนื้อที่บังคับได้ รวมทั้งการตอบสนองต่อสิ่งเร้าภายนอก </br>
<br> -ระบบประสาทนอกอำนาจจิตใจ (Involuntary nervous system หรือ Autonomic nervous system): เป็นระบบประสาทที่ทำงานโดยอัตโนมัติ มีศูนย์กลางควบคุมอยู่ใน สมองและไขสันหลัง ได้แก่ การเกิดปฏิกิริยาโต้ตอบแบบเฉียบพลัน (Reflex) และเมื่อมีกระตุ้น/สิ่งเร้า มากระตุ้นที่อวัยวะรับสัมผัส <br>
      
      <!-- Testimonials -->
    <h3 class="w3-padding-24 w3-text-light-grey">2) HEART</h3>
        <img src="/project01/HeartanatomyPI.jpg" style="width:50%">
        <hr style="width:200px" class="w3-opacity">
    <p align ="left"> หัวใจเป็นอวัยวะกล้ามเนื้อตั้งอยู่ภายในกึ่งกลางทรวงอก (mediastinum) หลังต่อ กระดูกสันอก (Sternum) และอยู่หน้ากระดูกสันหลัง (vertebral column) ถูกหุ้มด้วย ถุงเยื่อใส (fibroserous) ที่เรียกว่าเยื่อหุ้มหัวใจ (pericardium) รูปร่างทรงกรวยส่วน ปลายเรียวเล็กลงมีทิศชี้ลงค่อนไปทางซ้ายตั้งอยู่ภายในทรวงอกอยู่ระหว่างปอดทั้งสอง ช้างด้านหลังของกระดูกหน้าอกโตขค่อนไปทางซ้ายส่วนของหัวใจ 2 ใน 3 จะอยู่ทาง ด้านซ้ายจากแนวกึ่งกลางตัวและ 1 ใน 3 จะอยู่ทางด้านขวาจากแนวกึ่งกลางตัว ส่วนบน เป็นฐานกว้างประกอบด้วยหลอดเลือดใหญ่ๆ มาเปิดระหว่างหัวใจซีกซ้ายกับซีกขวา
    <hr style="width:200px" class="w3-opacity">
        <img src="/project01/161050384_2913144782258664_140078145548357148_n.jpg" style="width:50%">
        <hr style="width:200px" class="w3-opacity">
<br> ผนังของหัวใจ (wall of the heart) ประกอบด้วยเนื้อเยื่อ 3 ส่วน 
<br> 1). ถุงหุ้มหัวใจ (pericardium) : มีลักษณะเป็นเนื้อเยื่อชนิดที่เป็นพังผืดและชนิดที่มี ความยืดหยุ่นสีขาว เยื่อหุ้มหัวใจลักษณะเป็นถุงรูปโคนซึ่งมีหัวใจส่วนต้นของเส้นเลือด แดงที่ออกจากหัวใจอยู่ภายในถุง เยื่อหุ้มหัวใจประกอบด้วยแผ่น 2 แผ่นคือแผ่นด้าน นอกและแผ่นด้านในซึ่งหุ้มรอบหัวใจอยู่ระหว่างแผ่น 2 แผ่นเป็นช่องของเยื่อหุ้มหัวใจซึ่ง ปกติแล้วช่วงนี้จะแฟบปิด </br>
<br> 2).กล้ามเนื้อหัวใจ (myocardium) : เซลล์กล้ามเนื้อหัวใจมีลักษณะเป็นกล้ามเนื้อลาย อยู่นอกอำนาจจิตใจจะมีเส้นใหญ่กล้ามเนื้อเพอร์คืนเจ (perkinje fibre) ทำหน้าที่เป็นสื่อ นำไฟฟ้าของหัวใจซึ่งขนาดจะใหญ่กว่าเส้นใยกล้ามเนื้อหัวใจธรรมดา </br>
<br> 3) ผนังหัวใจด้านใน (endocardium) : เป็นแผ่นบางบุผนังด้านในของหัวใจ รวมทั้งเป็นส่วนของลิ้นหัวใจ </br>
        <hr style="width:200px" class="w3-opacity">
        <img src="/project01/136194077_3593643280672750_3535084474377014899_n.jpg" style="width:50%">
        <hr style="width:200px" class="w3-opacity">
  ลิ้นหัวใจมีทั้งหมด 4 ลิ้น
ทำหน้าที่กั้นระหว่างห้องหัวใจทั้ง 4 ห้อง เพื่อควบคุมการไหลเวียนเลือดให้เป็นไปตาม ทิศทางที่ถูกต้องและป้องกันเลือดไหลย้อนกลับ
<br> 1). Tricuspid Valve : สิ้นหัวใจที่กั้นระหว่างหัวใจห้องบนขวากับหัวใจห้องล่างขวา ประกอบด้วย แผ่นลิ้นหัวใจรูปสามเหลี่ยม 3 แผ่น จะเปิดในจังหวะหัวใจคลายตัว ทำให้ เลือดไหลจากหัวใจห้องบนขวาสู่ ห้องล่างขวา </br>
<br> 2).Pulmonary Valve : ลิ้นหัวใจที่กั้นระหว่างหัวใจห้องล่างขวากับหลอดเลือดแดงที่ไป ปอด ประกอบด้วยแผ่นลิ้นหัวใจรูปคล้ายเสี้ยวพระจันทร์ 3 แผ่น โดยมีด้านนูนหันไป ทางเส้นเลือดแดงพัลโมนารี จะเปิดในจังหวะหัวใจบีบตัว ทำให้เลือดไหลจากหัวใจห้อง ล่างขวาไปยังเส้นเลือดแดงพัลโมนารี </br>
<br> 3). Bicuspid Valve (Mitral Vale) : ลิ้นหัวใจที่กั้นระหว่างหัวใจห้องบนซ้าย และหัวใจ ห้องล่างซ้าย ประกอบด้วยแผ่นลิ้นหัวใจรูปสามเหลี่ยม 2 แผ่นเปิดในจังหวะหัวใจคลาย ตัว ทำให้เลือดไหลจากหัวใจ ห้องบนซ้ายสู่ห้องล่างซ้าย </br>
<br> 4). Aortic Valve : ลิ้นหัวใจที่กั้นระหว่างหัวใจห้องล่างซ้ายกับหลอดเลือดแดงใหญ่ที่ไป เลี้ยงร่างกาย ประกอบด้วยลิ้นหัวใจ 3 แผ่นคล้ายเสี้ยวพระจันทร์โดยอยู่ด้านหน้า 2 แผ่นและอยู่ด้านหลัง 1 แผ่น จะเปิดในจังหวะหัวใจบีบตัว ทำให้เลือดไหลจากหัวใจห้อง ล่างซ้ายไปยังเส้นเลือดแดงเอออร์ต้า </br>
        <hr style="width:200px" class="w3-opacity">
        <img src="/project01/1000_F_163503565_MVWh3KE9HO6mBpcuIQWv5k8VyOsyRfwe.jpg" style="width:50%">
        <hr style="width:200px" class="w3-opacity">
<br> การทำงานของหัวใจ </br>
        หัวใจของมนุษย์มีทั้งหมด 4 ห้องประกอบไปด้วยหัวใจห้องบนขวา (RA:Right Atrium) หัวใจห้องล่างขวา (RV:Right Ventricle) ห้องบนซ้าย (LA:Left Atrium) และห้องล่าง ซ้าย (LV:Left Ventricle) </br>
        การทำงานของหัวใจคือ หัวใจจะรับเลือดที่มีออกซิเจนต่ำจาก ร่างกาย เข้าสู่หัวใจห้องบนขวาผ่านทาง หลอดเลือดดำใหญ่(Superior vena cava)ที่นำ เลือดจากส่วนบนของร่างกายโดยประกอบไปด้วยส่วนหัว คอ และแขนทั้งสองข้าง และ หลอดเลือดดำใหญ่ (Inferior vena cava) ที่นำเลือดจากส่วนล่างของร่างกายตั้งแต่ส่วน อกลงไป จากนั้นเลือดจะไหลลงมาที่ห้องล่างขวาผ่านลิ้นหัวใจ Tricuspid Valve
        และ เลือดจะถูกส่งออกไปฟอกที่ปอดผ่านหลอดเลือดแดงที่มีชื่อว่า Pulmonary artery ผ่าน ทางลิ้นหัวใจ Pulmonary Valve เมื่อฟอกเสร็จแล้วจะไหลกลับเข้าหัวใจที่ห้องซ้ายบน ผ่านหลอดเลือดดำที่มีชื่อว่า Pulmonary vein แล้วไหลลงหัวใจห้องล่างซ้ายผ่านลิ้น หัวใจ Bicuspid Valve (Mitral Valve) จากนั้นจะสูบฉีดเลือดไปเลี้ยงส่วนต่างๆของ ร่างกายผ่านหลอดเลือดแดงที่ใหญ่ที่สุดของร่างกาย (Aorta) ผ่านลิ้นหัวใจ Aortic Valve 

        <!-- Testimonials -->
    <h3 class="w3-padding-24 w3-text-light-grey">3) LUNG</h3>
    <img src="/project01/800px-Lungs_-_Kenhub.png" style="width:70%">
        <hr style="width:200px" class="w3-opacity">
        <p align ="left"> ปอด(lung)
       มนุษย์มีปอด 2 ข้าง คือ ปอดซ้ายและปอดขวา อยู่ในช่องทรวงอกตั้งแต่ระดับกระดูกไหปลาร้าจนถึงประมาณชายโครงทั้ง 2 ข้าง ซ้ายและขวาตามลำดับเช่นเดียวกัน ปอดจะมีกระดูกซี่โครงและกล้ามเนื้อระหว่างซี่โครงหุ้มเป็นผนังด้านนอก และมีกล้ามเนื้อกะบังลม (Diaphragm) กั้นด้านล่างระหว่างปอดและช่องท้อง และระหว่างปอดทั้ง 2 ข้างเป็นที่ตั้งของหัวใจและของต่อมไทมัส (Thymus) ซึ่งต่อมไร้ท่อชนิดหนึ่ง มีหน้าที่เกี่ยวข้องกับภูมิคุ้มกันต้านทานโรคของร่างกาย โดยรวมปอดอยู่ในบริเวณที่เรียกว่า Mediastinum ซึ่งเป็นชื่อเรียกพื้นที่ที่อยู่ระหว่างปอดทั้งสองข้าง(เนื้อเยื่อคั่นระหว่างปอดสองข้าง) โดยประกอบด้วย เนื้อเยื่อเกี่ยวพัน หลอดเลือดใหญ่ของปอดและหัวใจ ต่อมไทมัส หลอดอาหาร (Esophagus) หลอดลมใหญ่ เป็นต้น
       โครงสร้างปอด
       ปอดมีถุงลมขนาดเล็ก(Alveoli)อยู่ภายในจำนวนมากมาย ทำให้ปอดมีลักษณะมีรูพรุนขนาดเล็กๆอยู่ในทุกส่วน ลักษณะคล้ายฟองน้ำ ปอดแต่ละข้างจะแบ่งออกเป็นกลีบ (Lobe) 
       -ปอดขวามี 3 กลีบ ได้แก่ กลีบบน(Upper lobe), กลีบกลาง(Middle lobe) และกลีบล่าง(Lower lobe) 
       -ปอดซ้ายมี 2 กลีบได้แก่ กลีบบน(Upper lobe) และกลีบล่าง(Lower lobe) 
       มีเยื่อหุ้มปอดเป็นพังผืดบางๆคลุมอยู่ภายนอก เรียกว่า Pleura
       ภายในปอดจะมีท่อลมใหญ่ที่เรียกว่า ‘Trachea’ แยกออกเป็นท่อนำอากาศตั้งแต่ท่อขนาดใหญ่ที่ขั้วปอด เรียกว่า ‘Main bronchus’ ซ้ายและขวา เมื่อเข้ามาภายในปอด Bronchus จะแยกออกเป็นหลอดลมขนาดเล็กจำนวนมาก กลายเป็นบรองคัสขนาดเล็ก(Small bronchus) บรองคิโอลหรือหลอดลมฝอย(Bronchiole) และสิ้นสุดเป็นถุงลมขนาดเล็กจำนวนมากมาย(Alveoli) ซึ่งเป็นส่วนที่เกิดการแลกเปลี่ยนก๊าซกับหลอดเลือดฝอยในปอด
       หลอดเลือดของปอด
        <hr style="width:200px" class="w3-opacity">
        <img src="/project01/Respiratory-240x300.jpg" style="width:30%">
        <hr style="width:200px" class="w3-opacity">
        <br> 1.หลอดเลือดเข้าสู่ปอด มี 2 ระบบ ได้แก่… </br>
           <br> -Pulmonary artery : หลอดเลือดที่นำเลือดที่มีปริมาณ CO2 สูงเข้าปอด ซึ่งเมื่อเข้าไปในปอดแล้วจะแยกออกเป็นหลอดเลือดขนาดเล็กจำนวนมากมายจนกลายเป็นหลอดเลือดฝอยอยู่รอบๆผนังถุงลม และทำให้เกิดการแลกเปลี่ยนก๊าซขึ้นดังกล่าว แล้วหลอดเลือดแดงที่ไปเลี้ยงปอดและเซลล์ของปอด ชื่อ Bronchial artery </br>
           <br> -Pulmonary vein : หลอดเลือดที่ออกจากปอด ซึ่งมี 4 เส้น โดย 2 เส้นมาจากปอดซ้ายและอีก 2 เส้นมาจากปอดขวา โดยนำเลือดแดงจากปอดทั้ง 2 ข้างมาเข้าหัวใจห้องซ้ายบน(Left atrium) เพื่อให้หัวใจสูบฉีดเลือดเลี้ยงทั่วร่างกาย </br>
           <br> การทำงานของปอด </br>
           ปอดต้องทำหน้าที่ในการนำลมหายใจภายนอกจากอากาศที่มี O2 สูงเข้ามาในปอด โดยต้องอาศัยการทำงานของกล้ามเนื้อกระบังลม กล้ามเนื้อซี่โครง กล้ามเนื้อรอบๆทรวงอก และกล้ามเนื้อช่องท้องร่วมกันซึ่งความดันภายในปอด(Pปอด)จะแปรผกผันกับปริมาตรภายในปอด(Vปอด) โดยเมื่อ…
           หายใจเข้า  Pปอดน้อย  Vปอดมาก  ซี่โครงยกสูงขึ้น กะบังลมลดต่ำลง
           หายใจออก  Pปอดมาก  Vปอดน้อย  ซี่โครงลดต่ำลง กะบังลมยกสูงขึ้น
           ลมหายใจเข้าจะถูกทำให้อิ่มตัวด้วยไอน้ำโดยการทำงานของไซนัส (Sinus)ต่างๆในโพรงกระดูกรอบๆจมูก เวลาหายใจเข้า ปอดจะโป่งพองลมอย่างเต็มที่และจะหดตัวแฟบลงเวลาหายใจออก การที่ปอดสามารถยืดหดตัวได้นี้เนื่องจากมีเนื้อเยื่อเกี่ยวพันชนิดอิลาสติค(Elastic fiber) อยู่เป็นจำนวนมากในเนื้อปอด ปอดรับเลือดที่มีปริมาณ CO2 สูงจากหัวใจห้องขวาล่าง(Right ventricle) ทางหลอดเลือดใหญ่ ชื่อ ‘Pulmonary artery’ เพื่อนำมาแลกเปลี่ยนแก๊ส(Gas exchange)ระหว่างถุงลมและหลอดเลือดฝอยด้วยวิธีการแพร่โดย เมื่อลมหายใจเข้าไปถึงถุงลมก็จะมีการแลกเปลี่ยน O2 ให้เข้าไปในหลอดเลือดฝอยในผนังถุงลมและรับ CO2 จากเลือดเข้ามาในถุงลม จากนั้น CO2 ก็ถูกปล่อยออกนอกร่างกายทางลมหายใจออก ทำให้เลือดที่มีปริมาณ CO2 สูง O2 ต่ำเป็นเลือดที่มีปริมาณ CO2 ต่ำ O2 สูง หลังจากนั้นก็จะนำเลือดที่มีปริมาณ CO2 ต่ำ O2 สูงกลับสู่หัวใจห้องซ้ายบน(Left atrium) ทางหลอดเลือดใหญ่ ชื่อ ‘Pulmonary vein’ เพื่อให้หัวใจสูบฉีดไปเลี้ยงร่างกายต่อไป
           เพิ่มเติม นอกจากนั้นปอดยังทำหน้าที่ปรับดุลกรดด่าง(pH) ของร่างกายให้คงที่อยู่ที่ pH 7.4 โดยการทำงานร่วมกับไตและร่วมกับการหายใจช้าหรือเร็วตามการกำหนดจากสมองโดยอัตโนมัติ
        <br> โรคที่มักพบ </br>
           1.โรคถุงลมโป่งพอง : ภาวะที่ถุงลมภายในปอดมีการขยายตัวมากกว่าปกติ ส่งผลให้พื้นที่ผิวในปอดลดน้อยลงจนทำให้หายใจลำบากและทำให้อวัยวะต่างๆ ของร่างกายได้รับออกซิเจนไม่เพียงพอ 
           สาเหตุอาจเกิดจาก…
           <br> -การหายใจและสูดดมเอามลพิษเข้าสู่ร่างกายเป็นเวลานาน ซึ่งมลพิษดังกล่าวมักอยู่ในรูปของฝุ่น ควัน ก๊าซ สารเคมีที่มีอนุภาคเล็กๆ เข้า จึงเกิดการสะสมจนทำลายระบบทางเดินหายใจ </br>
           <br> -การสูบบุหรี่ ซึ่งกว่าร้อยละ 90 นั้น สาเหตุของโรคถุงลมโป่งพองเกิดมาจากการสูบบุหรี่ </br>
           <br> -มลภาวะในอากาศตามท้องถนน ตามโรงงานต่าง ๆ เช่น ควันรถยนต์ ควันอาหาร </br>
        <hr style="width:200px" class="w3-opacity">
        <img src="/project01/unnamed.jpg" style="width:60%">
        <hr style="width:200px" class="w3-opacity">
         <br> 2.โรคปอดอักเสบ เกิดได้จาก 2 สาเหตุ ได้แก่… </br>
           2.1 ปอดอักเสบจากการติดเชื้อ หรือ pneumonia (ปอดบวม) เป็นชนิดของปอดอักเสบที่พบได้บ่อยที่สุด โดยเชื้อโรคที่เข้าสู่ปอดและทำให้เกิดการอักเสบของถุงลมปอดและเนื้อเยื่อโดยรอบ ได้แก่ 
           <br> -เชื้อไวรัส  เช่น เชื้อ Respiratory Syncytial Virus (RSV), เชื้อ Influenza หรือเชื้อไข้หวัดใหญ่ </br>
           <br> -เชื้อแบคทีเรีย เช่น เชื้อ Streptococcus pneumoniae, เชื้อ Haemophilus influenzae type b, เชื้อ Chlamydia pneumoniae, เชื้อ Legionella spp. และเชื้อ Mycoplasma pneumoniae </br>
           <br> -เชื้อรา เช่น เชื้อราจากมูลนกหรือจากซากพืชซากสัตว์ </br>
           ซึ่งเชื้อที่พบจะแตกต่างกันในแต่ละกลุ่มอายุ และสภาพแวดล้อมที่เกิดโรค เช่น ได้รับเชื้อจากที่ชุมชนทั่วไปหรือจากภายในโรงพยาบาล 
           <br> 2.2 ปอดอักเสบที่ไม่ได้เกิดจากการติดเชื้อ เช่น… </br>
           <br> -เกิดจากการหายใจเอาสารที่ก่อให้เกิดการระคายเคืองต่อระบบทางเดินหายใจ เช่น ฝุ่น ควัน สารเคมีที่ระเหยได้ </br>
           <br>-การใช้ยาปฏิชีวนะ ยาเคมีบำบัด และยาสำหรับควบคุมการเต้นของหัวใจบางชนิดก็อาจทำให้เกิดภาวะปอดอักเสบได้ </br>
        <hr style="width:200px" class="w3-opacity">
        <img src="/project01/1512628736.jpg" style="width:60%">
        <hr style="width:200px" class="w3-opacity">
        <!-- Testimonials -->
       <h3 class="w3-padding-24 w3-text-light-grey">4) STOMACH</h3>
       <img src="/project01/article-Stomach-6yI.jpg" style="width:70%">
            <p align ="left"> กระเพาะอาหาร(stomach)
              เมื่อไม่มีอาหารกระเพาะมีปริมาตร 50 cm3 แต่เมื่อมีอาหารจะสามารถขยายได้ถึง 2000 cm3(40 เท่า)
              กล้ามเนื้อกระเพาะมี 3 ชั้น
              <br> 1.ชั้นนอก : กล้ามเนื้อตามยาว </br>
              <br> 2.ชั้นกลาง : กล้ามเนื้อตามขวาง </br>
              <br> 3.ชั้นใน : กล้ามเนื้อแนวทแยง </br>
              ซึ่งชั้นในสุดจะสร้างน้ำย่อยและเมือก
              ภายในกระเพาะอาหารมีผนังมีการพับทบไปมา ลักษณะเป็นคลื่น เรียกว่า ‘รูกี(Rugae)’
              และมีส่วนที่พับเว้าลึกลงเข้าไปภายใน เรียกว่า ‘Gastric Pit’ ภายในมีต่อมสร้างน้ำย่อยประมาณ 35 ล้านต่อม เรียกว่า ‘Gastric Gland’ ซึ่งประกอบด้วยเซลล์ที่ทำหน้าที่หลั่งสารต่างๆ ได้แก่…
              <br> 1.มิวคัสเซลล์(Mucous cell) : ทำหน้าที่สร้างเมือกที่มีฤทธิ์เป็นเบส มาเคลือบผิวกระเพาะอาหารเพื่อป้องกันกระเพาะอาหารจากความเป็นกรด </br>
              <br> 2.พาเรียทัลเซลล์(Parietal cell) : ทำหน้าที่ผลิดตกรดไฮโดรคลอริก(HCl) หรือ กรดเกลือ เพื่อ… <br>
                  <br> -กระตุ้นการทำงานของเอนไซม์ในกระเพาะอาหาร </br>
                  <br> -ปรับค่า pH ภายในกระเพาะอาหารให้เป็นกรด(โดยมี pH ประมาณ 2) </br>
                  <br> -ทำลายเชื้อโรคที่มากับอาหาร <br>
              <br> 3.ชีฟเซลล์(Chief cell) : ทำหน้าที่สร้างเอนไซม์เพื่อย่อยอาหาร โดยมีเอนไซม์ที่สำคัญ ได้แก่ เอนไซม์เพปซิโนเจน(Pepsinogen), โพรเรนนิน(Prorennin) และไลเปส(Lipase) ซึ่งส่วนใหญ่นิยมเรียกว่า แกสตริกไลเปส(Gastric Lipase) เนื่องจากเป็นไลเปสที่สร้างในกระเพาะอาหาร </br>
              <br> 4.จีเซลล์(G-cell) : ทำหน้าที่สร้างฮอร์โมนแกสทริน(Gastrin) เพื่อกระตุ้นการหลั่งเอนไซม์ในกระเพาะอาหาร, การหลั่งกรดเกลือ และการบีบตัวของกระเพาะอาหาร </br>
              <br> โครงสร้างของกระเพาะอาหาร </br>
            เป็นส่วนของทางเดินอาหารที่ต่อจากหลอดอาหาร อยู่ทางด้านบนซ้ายของช่องท้อง รูปร่างคล้ายตัวเจ (J) 
            มีกล้ามเนื้อหูรูดอยู่ทั้งตอนบนและตอนล่าง ได้แก่ 
            <br> -คาร์ดิแอคสฟิงเตอร์(Cardiac sphincter) : อยู่ระหว่างหลอดอาหารกับกระเพาะอาหาร ทำหน้าที่ป้องกันไม่ให้อาหารไหลย้อนกลับไปยังหลอดอาหาร </br>
            <br>-ไพรอลิกสฟิงเตอร์(Pyrolic sphincter) : อยู่ระหว่างกระเพาะอาหารกับลำไส้เล็ก ทำหน้าที่ป้องกันไม่ให้อาหารไหลออกจากกระเพาะอาหารขณะย่อย </br>
            กระเพาะอาหารแบ่งเป็น 3 ส่วนใหญ่ ได้แก่
            <br> 1.กระเพาะอาหารส่วนต้น(Cardiac stomach) มีหูรูดกั้นอาหารย้อนกลับและอยู่ใกล้หัวใจ </br>
            <br> 2.กระเพาะอาหารส่วนกลาง(Fundus) เป็นส่วนที่เป็นกระพุ้งใหญ่ที่สุด </br>
            <br> 3.กระเพาะอาหารส่วนท้าย(Pyloric stomach) เป็นส่วนปลายสุดของกระเพาะ ติดกับลำไส้เล็ก และมีหูรูดกั้นอาหารไหลขณะย่อย </br>
            <br> หลักการทำงานของกระเพาะอาหาร </br>
            เมื่อมีสิ่งเร้า เช่น อาหาร ภาพของอาหาร กลิ่นของอาหาร มากระตุ้นสิ่งเร้าเหล่านี้จะเป็นกระตุ้นเส้นประสาทสมองคู่ที่ 10 หรือ Vagus Nerve ให้มีการสั่งการลงไปที่ G-Cell ที่อยู่บริเวณผนังด้านในกระเพาะอาหาร โดย G-Cell จะถูกกระตุ้นให้มีการหลั่งฮอร์โมน Gastrin เมื่อหลั่งฮอร์โมน Gastrin แล้วฮอร์โมนนี้จะไปกระตุ้นให้ Parietal Cell หลั่งกรด HCl และไปกระตุ้นให้ Chief Cell หลั่งเอนไซม์ Pepsinogen ออกมา หลังจากนั้นกรด HCl ก็จะไปกระตุ้นเอนไซม์ Pepsinogen ซึ่งยังเป็นเอนไซม์ที่ inactive หรือยังไม่ Active นั้นให้กลายเป็นเอนไซม์ Pepsin ซึ่งเป็นเอนไซม์ที่ Active และพร้อมที่จะทำงาน แล้ว Pepsin ก็จะไปย่อยโปรตีนหรือ polypeptide ที่มีขนาดใหญ่โดยมีการย่อยแบบสุ่มให้กลายเป็น small polypeptide สายสั้นลง นอกจากนี้ กรด HCl ก็จะไปกระตุ้นเอนไซม์ Prorenin ซึ่งยังเป็นเอนไซม์ที่ยังไม่ Active นั้นให้กลายเป็นเอนไซม์ Renin ซึ่งเป็นเอนไซม์ที่ Active แล้วซึ่งจะย่อยโปรตีนที่ละลายอยู่ในน้ำนมหรือ casein  เมื่อ casein ถูกย่อยแล้วจะได้ paracasein จากนั้น paracasein จะรวมตัวกับแคลเซียมในน้ำนมและเกิดการตกตะกอนเป็นลิ่มนมที่ไม่ละลายน้ำ หลังจากนั้นเอนไซม์ Pepsin ก็จะมาย่อยลิ่มนมนี้จนได้ small polypeptide สุดท้ายอาหารที่ถูกย่อยโดยกระเพาะอาหารจะมีขนาดเล็กลงและมีการรวมตัวกับน้ำย่อย จะมีลักษณะคล้ายซุปข้นๆ เรียกว่า ‘ไคม์(Chyme)’ ซึ่ง Chyme ก็จะถูกส่งต่อไปยังลำไส้เล็กเพื่อเกิดการย่อยและดูดซึมอาหารต่อไป 
            หน้าที่ของกระเพาะอาหาร
            <br> -กักเก็บและคลุกเคล้าอาหารนาน 3-4 ชั่วโมง </br>
            <br> -หลั่งสารเมือกเคลือบผนังกระเพาะป้องกันการถูกย่อยโดยน้ำย่อยในกระเพาะ </br>
            <br> -หลั่งน้ำย่อยหลายชนิด คือ Lipase, Prorenin, Pepsinigen </br>
            <br> -ทำการดูดซึมสารต่างๆเป็นแห่งแรก เช่น แอลกอฮอล์ 30-40%, วิตามิน B12, แร่ธาตุ และยาบางชนิด </br>
            การย่อยโปรตีนในกระเพาะอาหาร
            เพิ่มเติม : ในกระเพาะไม่มีการย่อยไขมัน เนื่องจากในกระเพาะมีเอนไซม์ไลเปส(Lipase)น้อยมากและสภาวะไม่เหมาะสำหรับการทำงานของเอนไซม์ไลเปสที่ทำงานได้ดีในสภาวะเบส
            <hr style="width:200px" class="w3-opacity"> 
            <img src="/project01/en_magen_anatomie_replacement_image.jpg" style="width:60%">
            <hr style="width:200px" class="w3-opacity">
            <p> โรคที่มักพบในกระเพาะอาหาร
            <br> 1.โรคแผลในกระเพาะอาหาร ซึ่งมีสาเหตุหลายประการ ได้แก่… </br>
             <br> -การทานอาหารไม่เป็นเวลา เนื่องจากร่างกายมีระบบควบคุมการหลั่งกรด HCl และเอนไซม์ให้เป็นเวลาตามปกติที่เคยรับประทานอาหาร ดังนั้นเมื่อกระเพาะอาหารไม่มีอาหารแต่ก็ยังคงมีการหลั่งกรด HCl และ Pepsinogen ตามปกติทำให้ผนังของกระเพาะอาหารถูกกรดทำลายจนเป็นแผล </br>
             <br> -การดื่มเครื่องดื่มที่มีแอลกอฮอล์หรือมีคาเฟอีนรวมถึงอาหารที่มีรสจัด ก็จะกระตุ้นให้กระเพาะอาหารหลั่งกรด HCl มากกว่าปกติ </br>
             <br> -การพักผ่อนไม่เพียงพอ ความเครียด ความวิตกกังวลก็เป็นปัจจัยหนึ่งที่ทำให้กรด HCl หลั่งออกมามากกว่าปกติ </br>
             <br> -การทานยาบางชนิด เช่น ยา steroid, ยาแก้ปวด, ยาแก้อักเสบบางชนิดจะทำให้การสร้างเมือกที่ผนังกระเพาะอาหารลดลง ส่งผลให้กรด HCl ทำลายผนังด้านในของกระเพาะอาหารจนเป็นแผลได้ </br>
             <br> -มีการติดเชื้อแบคทีเรีย Helicobacter pylori(H. pylori) ซึ่งเป็นแบคทีเรียที่ทนกรด แบคทีเรียชนิดนี้จะทำให้การหลั่งเมือกในกระเพาะอาหารลดลงและนำไปสู่การเกิดแผลในกระเพาะอาหาร </br>
             <hr style="width:200px" class="w3-opacity"> 
            <img src="/project01/80298271_737903230028719_6898539246353645568_n.jpg" style="width:50%">
            <hr style="width:200px" class="w3-opacity">
               <br> 2.โรคกรดไหลย้อน ซึ่งเป็นภาวะที่กรดหรือเอนไซม์จากกระเพาะอาหารไหลย้อนกลับขึ้นมายังหลอดอาหารจนทำให้หลอดอาหารเกิดการอักเสบ ซึ่งสาเหตุเกิดจาก… <br>
               <br> -การทำงานที่ผิดปกติของกล้ามเนื้อหูรูดระหว่างหลอดอาหารกับกระเพาะอาหาร(Cardiac sphincter) </br>
               <br> -กิจกรรมในชีวิตประจำวัน เช่น การทานอาหารที่มากเกินไปในมื้อเดียว การทานอาหารแล้วนอน การดื่มน้ำอัดลม การทานอาหาร </br>
               <hr style="width:200px" class="w3-opacity"> 
            <img src="/project01/GERD.jpg" style="width:50%">
            <hr style="width:200px" class="w3-opacity">
            <!-- Testimonials -->
       <h3 class="w3-padding-24 w3-text-light-grey">5) KIDNEY</h3>
       <img src="/project01/Blausen_0592_KidneyAnatomy_01.png" style="width:50%">
            <p> ไต(kidney) ทำหน้าที่กรองของเสียในร่างกายและน้ำส่วนเกินโดยกำจัดออกทางปัสสาวะรวมทั้งควบคุมความเข้มข้นของเกลือแร่ของของเหลวในเนื้อเยื่อทั่วร่างกาย 
              ไตเป็นต่อมไร้ท่อโดยสร้างและหลั่งฮอร์โมน erythropoietin เข้าไปในเลือด
              <br> ไตมี2ข้าง มีสีน้ำตาลแดง มีรูปร่างคล้ายเมล็ดถั่ว วางตัวอยู่ในท้องทางด้านหลังแต่ละอันวางขนานอยู่ทางด้านข้างของกระดูกสันหลังโดยอยู่หลังเยื่อบุช่องท้องไตถูกหุ้มภายนอกโดยแผ่นเนื้อเยื่อไขมัน </br>
              เนื้อไตมี2ลักษณะคือ
              <br> renal medulla เป็นก้อนซีดลายรูปกรวยเรียกว่า renal pyramids ในแต่ละ  pyramids จะมีท่อส่วนปลายของหน่วยไตมาเปิดสู่ papillae มีประมาณ 116 ถึง 776 ท่อ </br>
              <br> renal cortex เป็นส่วนที่อยู่ใต้ถุงหุ้มไต ถ้าใช้เลนขยายส่องดูชั้นของไตที่อยู่เหนือฐานของจะเห็นเป็นเส้นแผ่จากฐานของ เข้าไปใน cortical lobules ไปทางถุงหุ้มไตแล้วเล็กจนจางหายเรียกว่า medullary rays </br>
              เนื้อไตประกอบด้วยหน่วยที่เล็กที่สุดทำหน้าที่กรองเลือดเรียกว่า nephron
                nephron ประกอบด้วยโครงสร้าง2ส่วนคือ 1.renal tubule 2.glomerulus

                  <br> 1.renal tubule ทำหน้าที่สร้างน้ำปัสสาวะประกอบด้วยส่วนย่อย 4ส่วน คือ </br>
                  <br> 1.1 glomerular (Bowman’s)capsule </br>
                  <br> 1.2 proximal tubule </br>
                  <br> 1.3 loop of Henle </br>
                  <br> 1.4 distal tubule </br>
                  <br> 2. glomerulus เป็นกลุ่มของหลอดเลือดฝอยที่นำเลือดจากส่วนต่างๆของร่างกายเข้ามากรองที่ nephron </br>
                  <hr style="width:200px" class="w3-opacity"> 
            <img src="/project01/Fig-2.-Internal-anatomy-of-the-kidney-1024x586.jpg" style="width:60%">
            <hr style="width:200px" class="w3-opacity">
            หน้าที่ทั่วไปของไต
                <br> 1. เซลล์ปัสสาวะ (formation of urine) </br>
                ทำหน้าที่ขับของเสียออกนอกร่างกาย ของเสียแบ่งออกเป็น2ชนิด
                <br> 1.1 ก๊าซที่สำคัญคือ CO₂ ถูกขับออกทางลมหายใจออก </br>
                <br> 1.2 solidที่ละลายในเลือด เช่น urea, uric acid, creatinine </br>
                <br> 2. ควบคุมความสมดุลของน้ำ </br>
                <br> 3.ควบคุมความสมดุลของสารเกลือแร่ต่างๆ </br>
                <br> 4.ควบคุมความเป็นกรด-ด่าง </br>
                <br> 5.สร้างและหลั่งฮอร์โมนที่ไปกระตุ้นไขกระดูกให้สร้างเม็ดเลือดแดง </br>
                <br> 6.ทำลายสารพิษ </br>                                        
                <br> การทำงานของไต </br>
                หน้าที่หลักของไตคือการกรองเอาของเสียที่ร่างกายต้องการออกมาในรูปของปัสสาวะและร่างกายมีวิธีการดูดซึมสารต่างๆกับอีกครั้ง โดยกระบวนการสร้างปัสสาวะของไต urine information 
                จะเริ่มต้นจากเลือดแดงที่ไหลเข้าสู่ไตแล้วส่วนหนึ่งของ plasma จะ กรองผ่าน Glomerular membrane เข้าสู่ Bowman’s space แล้วจึงไหลผ่านลงตามท่อไต 
                ท่อไตทำหน้าที่ดูดซึมสารต่างๆที่เป็นประโยชน์เข้าสู่ร่างกายแล้วขับสารที่ไม่ต้องการทิ้ง ปัสสาวะไหลจาก collecting duct เข้าสู่กรวยไตและท่อนำปัสสาวะเพื่อนำไปเก็บในกระเพาะปัสสาวะ urinary  bladder
                <p> ดังนั้นกระบวนการสร้างปัสสาวะมีอยู่3ขั้นตอนใหญ่ๆคือ
                 <br> 1. กระบวนการกรองที่ glomerulus เรียกว่า Glomerular filtration </br>
                 <br> 2. กระบวนการดูดซึมกลับที่ท่อไตเรียกว่า Tubular reabsorption </br>
                 <br> 3. กระบวนการขับออกที่ท่อไตเรียกว่า Tubular secretion </br>
          <h3 class="w3-padding-24 w3-text-light-grey">6) INTESTINE</h3>
          <img src="/project01/3-large-intestine-asklepios-medical-atlas.jpg" style="width:50%">
        <hr style="width:200px" class="w3-opacity">
              <p> ลำไส้(intestine) 
                  แบ่งออกเป็น2ส่วน ส่วนต้นคือลำไส้เล็ก Small intestine
                  ส่วนปลายมีกากอาหารอยู่ซึ่งมีขนาดใหญ่กว่าคือส่วนของลำไส้ใหญ่ Large intestine
                  <br> ลำไส้ใหญ่ Large intestine </br>
                ผนังของลำไส้ใหญ่ประกอบด้วย4ชั้น คือ
                <br> 1.Mucosa ชั้นเยื่อเมือก มีgoblet cells </br>
                <br> 2.Submucosa เป็นชั้นของเนื้อยึดต่อ </br>
                <br> 3.Muscularis ชั้นกล้ามเนื้อ มี2ชั้น คือ ชั้นในเรียงตัวเป็นวงรอบ ชั้นนอกเรียงตัวตามยาว </br>
                <br> 4.Serosa เยื่อบุช่องท้องที่หุ้มลำไส้ใหญ่ </br>
                <br> -กระเปาะลำไส้ใหญ่ หรือ ซีกัม (Caecum) เป็นลำไส้ใหญ่ส่วนแรก ต่อจากลำไส้เล็กส่วนไอเลียม ) ซึ่งทำหน้าที่รับกากอาหารจากลำไส้เล็ก ที่ซีกัมมีส่วนของไส้ติ่ง (Vermifrom appendix) ยื่นออกมาเพื่อป้องกันไม่ให้อาหารย้อนกลับไปยังลำไส้เล็ก </br>
                <br> -ลำไส้ใหญ่ส่วนกลาง (Colon) เป็นลำไส้ใหญ่ส่วนที่ยาวที่สุด </br>
                   คือ ลำไส้ใหญ่ส่วนต่อมาจากซีกัมขึ้นไป ลักษณะภายนอก เป็นปล้องๆ (Haustrum) โดยไขมันรอบโคลอน (Pericolic fat) จะมีลักษณะเป็นติ่ง (Appendices epiploicae) ซึ่งเป็นลักษณะเฉพาะของลำไส้ใหญ่ที่แตกต่างจากลำไส้เล็ก
                   <br> 1.ลำไส้ใหญ่ส่วนขึ้น (Ascending colon): เป็นลำไส้ใหญ่ส่วนด้านข้างขวาของช่องท้อง เป็นลำไส้ใหญ่ส่วนต่อขึ้นมาจากซีกัม ยาวขึ้นจนถึงบริเวณใต้ตับ </br>
                   <br> 2. ลำไส้ใหญ่ส่วนขวาง (Transverse colon) อยู่บริเวณใต้ตับด้านขวาของช่องท้อง ที่เรียกว่า เฮปพาติคเฟลกเชอร์ </br>
                   <br> 3.(Descending colon) เป็นลำไส้ใหญ่ส่วนที่ต่อลงมาจากสปีนิคเฟลกเชอร์ ลงมาถึงด้านข้างซ้ายของช่องท้องจนมาสิ้นสุดที่ลำไส้ใหญ่ส่วนที่เรียกว่า ลำไส้คด (Sigmoid colon) </br>
                   <br> 4. ลำไส้คด(Sigmoid colon)ลักษณะขดเป็นรูปตัวอักษร S เป็นลำไส้ส่วนต่อลงมาจากเดสเซนดิ้งโคลอน และไปสิ้นสุดที่ ไส้ตรง (Rectum) </br>
                   <hr style="width:200px" class="w3-opacity">
                   <img src="/project01/Fig-1-Anatomy-of-the-large-intestine-1024x891.jpg" style="width:50%">
               <hr style="width:200px" class="w3-opacity">
               ลำไส้เล็ก เป็นบริเวณที่มีการย่อย และการดูดซึมมากที่สุด โดยเอนไซม์ ในลำไส้เล็กจะทำงาน ได้ดีในสภาพที่เป็นเบส ซึ่งเอนไซม์ที่ลำไส้เล็กสร้างขึ้น ได้แก่
               มอลเทส (maltase) เป็นเอนไซม์ที่ย่อยน้ำตาลมอลโทส ให้เป็นกลูโคส
               ซูเครส (sucrase) เป็นเอนไซม์ที่ย่อยน้ำตาลทรายหรือน้ำตาลซูโครส (sucrose) ให้เป็นกลูโคสกับ ฟรักโทส (fructose)
               แล็กเทส (lactase) เป็นเอนไซม์ที่ย่อยน้ำตาลแล็กโทส (lactose) ให้เป็นกลูโคสกับกาแล็กโทส (galactose)
               ลำไส้เล็กแบ่งเป็นสามส่วนดังนี้
               <br> 1.ลำไส้เล็กส่วนต้น(Duodenum) อยู่ทางด้านขวาของช่องท้องมีลักษณะโค้งเป็นรูปตัว c ยาวประมาณ 10นิ้ว มีช่องเปิดของท่อที่เกิดจากการรวมกันของท่อน้ำดีจากตับและถุงน้ำดี และท่อน้ำย่อยจากตับอ่อนบริเวณรอบรอบท่อจะมีกล้ามเนื้อหูรูดควบคุมการเปิดปิด </br>
               <br> 2.ลำไส้เล็กส่วนกลาง(Jejunum) ความยาวประมาณ 8ฟุต โดยลำไส้เล็กส่วนกลางนี้เป็นส่วนที่มีวิลไลมากที่สุดและมีการดูดซึมมากที่สุดด้วย </br>
               <br> 3.ลำไส้เล็กส่วนปลาย (Ileum) เป็นลำไส้เล็กส่วนที่สั้นที่สุด เป็นที่ที่เกิดการย่อยเชิงเคมีมากที่สุด และเป็นลำไส้เล็กส่วนสุดท้ายที่ปลายสุดต่อกับลำไส้ใหญ่ส่วนต้น(Caecum)โดยมีลิ้นกั้นเรียกว่า iliocecal valve เพื่อป้องกันไม่ให้อาหารไหลย้อนกลับไปที่ ileum </br>
               <hr style="width:200px" class="w3-opacity">
                   <img src="/project01/485883_1_En_1_Fig2_HTML.png" style="width:50%">
               <hr style="width:200px" class="w3-opacity">
               <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">VERIFY</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>click this to verify</p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
<!-- END PAGE CONTENT -->
</div>

    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>
    
      
 

</body>
</html>