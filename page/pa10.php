
<body lang=EN-US style='tab-interval:36.0pt'>

  <div class=WordSection1>

    <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
    style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
    mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
    <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
      <td width=111 valign=top style='width:94.25pt;border:solid windowtext 1.0pt;
      mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
      <p class=MsoListParagraph align=center style='margin:0cm;margin-bottom:.0001pt;
      mso-add-space:auto;text-align:center;line-height:normal'><span class=SpellE><span
        style='font-family:"TH SarabunPSK",sans-serif'>
       <b> (๑)กิจกรรม/โครงงาน/ งาน </b> 
      </span></span><span
      style='font-family:"TH SarabunPSK",sans-serif'><o:p></o:p></span></p>
    </td>
    <td width=500 valign=top style='width:472.5pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span class=SpellE><span
      style='font-family:"TH SarabunPSK",sans-serif'>
     <b>  (๒)พฤติกรรมในการปฏิบัติราชการของพนักงานมหาวิทยาลัยตามสมรรถนะ </b> 
    </span></span><span
    style='font-family:"TH SarabunPSK",sans-serif'><o:p></o:p></span></p>
  </td>
  <td width=95 valign=top style='width:80.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span class=SpellE><span
    style='font-family:"TH SarabunPSK",sans-serif'>
    <b>  (๓)จำนวนพฤติกรรมที่ทำได้ </b> 
  </span></span><span
  style='font-family:"TH SarabunPSK",sans-serif'><o:p></o:p></span></p>
</td>
</tr>

<?php 

$user_c_id = $_GET['user_c_id'];
$type = $_GET['type'];


$sqlac=" SELECT * FROM f_action WHERE f_ac_user_c_id = '$user_c_id' ";
$qryac = mysqli_query($conn,$sqlac);

while ($rowac = $qryac->fetch_array()) {

  $f_ac_pam_id = $rowac['f_ac_pam_id'];

  $sqlpam=" SELECT * FROM f_pam WHERE f_id = '$f_ac_pam_id' AND f_th = '$type' AND f_staus = 0 order by f_pam_num asc ";
  $qrypam = mysqli_query($conn,$sqlpam);

  while ($rowpam = $qrypam->fetch_array()) {


    $hid = $rowpam['f_h_id'];

    ?>


    <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
      <td width=111 valign=top style='width:94.25pt;border:solid windowtext 1.0pt;
      border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
      padding:0cm 5.4pt 0cm 5.4pt'>
      <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
      normal'><span class=SpellE><span style='font-family:"TH SarabunPSK",sans-serif'>

        <?php 

        $sqlh=" SELECT * FROM f_h WHERE f_h_id = '$hid' ";
        $qryh = mysqli_query($conn,$sqlh);

        while ($rowh = $qryh->fetch_array()) {

          echo "<b>".$rowh['f_hdetail']."</b>";

        }


        ?>

      </span></span><span
      style='font-family:"TH SarabunPSK",sans-serif'><o:p></o:p></span></p>
    </td>
    <td width=500 valign=top style='width:472.5pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
    normal'><span class=SpellE><span style='font-family:"TH SarabunPSK",sans-serif'><?php echo $rowpam['f_hhh']; ?></span></span><span
    style='font-family:"TH SarabunPSK",sans-serif'><o:p></o:p></span></p>
    <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
    normal'><span style='font-family:"TH SarabunPSK",sans-serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=95 valign=top style='width:80.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"TH SarabunPSK",sans-serif'><o:p>
    <br><br><br><br><br><br><br><br><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <?php 


    echo $rowac['f_ac_score'];

  }

  ?>
<input type="hidden" name="fidp<?php echo $f_ac_pam_id ?>" id="fidp<?php echo $f_ac_pam_id ?>" value="<?php showhh($user_c_id,$f_ac_pam_id) ?>">

</o:p></span></p>
</td>
</tr>

<?php } ?>


</table>

</div>

</body>