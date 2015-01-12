<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {
                color: #0000FF;
                font-weight: bold;
                font-family: Geneva, Arial, Helvetica, sans-serif;
}
-->
</style>
</head>
<style>
.hasil { color: white;
         background-color:#F9575B;
                                 font-size:36px;
                                 padding-left:10pt;
                                 }
.style1 {
                font-size: 36px;
                font-weight: bold;
}
</style>
<body>
<form id="form1" name="form1" method="post" action="proses_hitung.php">
  <table width="434" height="86" border="2" bordercolor="#FF0000">
    <tr>
      <td align="center" valign="middle"><table width="416" border="0">
        <tr>
          <td height="43" colspan="4" align="center" bgcolor="#D0E382"> <span class="style2">Kalkulator Sederhana Dengan PHP </span></td>
        </tr>
        <tr>
          <td height="41" align="center">&nbsp;</td>
          <td colspan="3" align="left" class="style1">Hasil :
            </td>
        </tr>
        <tr>
          <td width="117" align="center"><input name="nilaiA" type="text" id="nilaiA" size="20" value=""/></td>
          <td width="99" align="center"><select name="pilih_operator">
                <option>pilih operator</option>
                <option>+</option>
                <option>-</option>
                <option>/</option>
                <option>*</option>
                        </select>
          </td>
          <td width="120" align="center"><input name="nilaiB" type="text" id="nilaiB" size="20" /></td>
          <td width="62" valign="bottom"><input name="proses" type="submit" id="proses" value="Proses" a href="kalkulator/proses_hitung.php"/>
          </td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="466" border="0">
    <tr>
      <td width="440" align="center" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
  <p align="left"></p>
</form>
</body>
</html>