<?php require_once('class_db.php'); ?>
<br>
<table class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0" style="margin-left: -0.25pt; border: none;">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
 height:23.65pt">
 <td width="294" valign="top" style="width:320.5pt;border:solid windowtext 1.0pt;
 mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.65pt">
 <p class="MsoNormal" style="margin-top:12.0pt;tab-stops:82.5pt"><span lang="TH" style="font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;
 font-family:&quot;TH SarabunPSK&quot;,sans-serif">ส่วนที่ 3 </span><span style="font-family:&quot;TH SarabunPSK&quot;,sans-serif">:</span><span lang="TH" style="font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;
 font-family:&quot;TH SarabunPSK&quot;,sans-serif"> แผนพัฒนาการปฏิบัติราชการรายบุคคล</span><span style="font-family:&quot;TH SarabunPSK&quot;,sans-serif"><o:p></o:p></span></p>
</td>
</tr>
</tbody></table>

<br>

<form action="page/ph3_db.php" method="post" >


  <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="border: none;">
   <tbody><tr>
    <td width="200" style="width:150.25pt;border:solid windowtext 1.0pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
    <p class="MsoNormal" align="center" style="margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center;line-height:normal"><span lang="TH" style="font-size:14.0pt;
    mso-ansi-font-size:11.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif">ความรู้/ทักษะ/สมรรถนะ</span><span style="font-family:&quot;TH SarabunPSK&quot;,sans-serif"><o:p></o:p></span></p>
    <p class="MsoNormal" align="center" style="margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center;line-height:normal"><span lang="TH" style="font-size:14.0pt;
    mso-ansi-font-size:11.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif">ที่ต้องได้รับการพัฒนา<o:p></o:p></span></p>
  </td>
  <td width="200" style="width:150.25pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal" align="center" style="margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal"><span lang="TH" style="font-size:14.0pt;
  mso-ansi-font-size:11.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif">วิธีการพัฒนา</span><span style="font-family:&quot;TH SarabunPSK&quot;,sans-serif"><o:p></o:p></span></p>
</td>
<td width="200" style="width:150.3pt;border:solid windowtext 1.0pt;border-left:
none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
padding:0cm 5.4pt 0cm 5.4pt">
<p class="MsoNormal" align="center" style="margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal"><span lang="TH" style="font-size:14.0pt;
mso-ansi-font-size:11.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif">ช่วงเวลาที่ต้องการ</span><span style="font-family:&quot;TH SarabunPSK&quot;,sans-serif"><o:p></o:p></span></p>
<p class="MsoNormal" align="center" style="margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal"><span lang="TH" style="font-size:14.0pt;
mso-ansi-font-size:11.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif">การพัฒนา</span><span style="font-family:&quot;TH SarabunPSK&quot;,sans-serif"><o:p></o:p></span></p>
</td>
</tr>
<?php



if (isset($_GET['showphhh'])) {

 $user_c_id = $_GET['user_c_id'];
  //$type = $_GET['type'];

 $sqlscore = " SELECT * FROM f_phhh WHERE f_phhh_user_c_id = '$user_c_id'";
 $qryscore = mysqli_query($conn,$sqlscore);
  //$rowscore = mysqli_fetch_assoc($qryscore);

 $rowcheckac = mysqli_num_rows($qryscore);

 if ($rowcheckac > 0) {



  while ($rownew = $qryscore->fetch_array()) {
   $detail1 = $rownew['f_phhh_detail1'];
   $detail2 = $rownew['f_phhh_detail2'];
   $detail3 = $rownew['f_phhh_detail3'];
   ?>

   <tr>
    <td width="200" valign="top" style="width:150.25pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt">
    <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
    normal"><span style="font-family:&quot;TH SarabunPSK&quot;,sans-serif"><?php echo($detail1) ?></span></p>
  </td>
  <td width="200" valign="top" style="width:150.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-family:&quot;TH SarabunPSK&quot;,sans-serif"><?php echo($detail2) ?></span></p>
</td>
<td width="200" valign="top" style="width:150.3pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-family:&quot;TH SarabunPSK&quot;,sans-serif"><?php echo($detail3) ?></span></p>
</td>
</tr>

<?php } ?>


<?php  } }else{?>

 <?php for ($i=0; $i < 6; $i++) { ?>

  <input type="hidden" name="user_c_id" value="<?php echo($_GET['user_c_id']) ?>">
  <input type="hidden" name="type" value="<?php echo($_GET['type']) ?>">
  <input type="hidden" name="saveh3" value="saveh3">

  <tr>
    <td width="200" valign="top" style="width:150.25pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt">
    <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
    normal"><span style="font-family:&quot;TH SarabunPSK&quot;,sans-serif"><input type="text" name="h31[]" value="&nbsp;" style="border: none;"></span></p>
  </td>
  <td width="200" valign="top" style="width:150.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-family:&quot;TH SarabunPSK&quot;,sans-serif"><input type="text" name="h32[]" value="&nbsp;" style="border: none;"></span></p>
</td>
<td width="200" valign="top" style="width:150.3pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><span style="font-family:&quot;TH SarabunPSK&quot;,sans-serif"><input type="text" name="h33[]" value="&nbsp;" style="border: none;"></span></p>
</td>
</tr>

<?php } }?>
</tbody>
</table>

<?php if (isset($_GET['add'])) { ?>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">บันทึก</button>
  </div>
<?php }elseif (isset($_GET['showphhh'])&&isset($_GET['print']) == ''){ ?>
 <div class="card-footer">

  <a href="index.php?ph&print&user_c_id=<?= $user_c_id ?>&showphhh" class="btn btn-primary noprint">ตวจสอบทั้งหมด</a>
</div>

<?php } ?>
</form>
