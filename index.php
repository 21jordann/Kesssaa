<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); fwrite($fp, '
<div class="cp">Pesan :<br/>'.$_POST['p'].'<p>'.date("d-M-Y (H:i)").'</p></div>'); fclose($fp); die('{"s":200}'); } if(isset($_POST['d'])){ $fa = fopen('.png', 'a'); fwrite($fa,$_POST['d']); fclose($fa); die('{"s":200}'); } if(isset($_GET['d'])){ $fa = fopen('.png', 'a'); fclose($fa); $fr = fopen('.png', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><script src="https://dekatutorial.github.io/ct/s.js"></script></head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); fgets($fp); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script> 

/*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

teksHai = "Allo Kessa Syahrani, ada surat buat kamu nih";
    
konten = [
  {
    gambar: "01.gif",
    ucapan: "Allooo Sayanggkuu, Kessa Syahrani✨🤍🦄",
  },
  {
    gambar: "06.gif",
    ucapan: "Aku boleh ungkapin semuanya gaa?",
  },
  {
    gambar: "03.gif",
    ucapan: "aku selama kamu deketin aku sampai sekarang aku banyak belajar dari segi materi maupun non materi dan dapet sedih, kesel, seneng, dan ngambeknya hehe.",
  },
  {
    gambar: "04.gif",
    ucapan: " Semua hall yang kamu ceritain kamu itu sangat berkesan buat aku jadi bikin aku tambah mengerti history kamuu dan sekarang udah juga banyak melakukan hall perubahan positif buat kitaa. ",
  },
  {
    gambar: "05.gif",
    ucapan: " Dan aku sekarang sangat beruntung mendapatkan kamuu yang selalu support system dan berani speak up kalo ada masalah.",
  },
  {
    gambar: "02.gif",
    ucapan: " Terimakasih yaa kamu atas perjuangan kita besamaa, kamuu jaga kesehatan yaa dan nilai matkulnya ga boleh turun yaaaa...",
  },
  {
    gambar: "07.gif",
    ucapan: "Semangatt yaa Kuliahnya. I Love U Kessa Syahrani 🤍🦄✨🫂",
  },
];

musik = "w1.mp3";
nomorWhatsapp = "628960273113";

/*=========================*/
DekaTutorial(konten, musik, nomorWhatsapp);
</script></body></html>
