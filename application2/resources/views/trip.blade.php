@extends('layouts.masteradmin')

@section('content')

<div class="container">
        <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="16%" align="left" valign="top">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td><strong>พ.ศ.</strong></td>
                                <td>&nbsp;</td>
                            </tr>
                        </table></td>  
                </tr>
            </table>
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="5" >
        <tr>
            <td align="center" class="sample">
    <table class="table table-striped table-dark">
        <tr bgcolor="#A3B2CC">
            <td width="4%" height="10" align="center" bgcolor="#2A007C" class="style4"><b>ลำดับ</b></td>
            <td width="4%" height="10" align="center" bgcolor="#2A007C" class="style4">&nbsp;</td>
            <td width="9%" height="10" align="center" bgcolor="#2A007C" class="style4 "><strong >รหัสTrip <br>{{$trips}}</strong></td>
            <td width="30%" height="10" align="center" bgcolor="#2A007C" class="style4 "><strong>ชื่อTrip <br>{{$tripsname}}</strong></td>
            <td width="30%" height="10" align="center" bgcolor="#2A007C" class="style4"><strong>ชื่อStaff</strong></td>
            <td width="30%" height="10" align="center" bgcolor="#2A007C" class="style4"><strong>หมายเหตุ</strong></td>
            <td width="70%" height="10" align="center" bgcolor="#2A007C" class="style4"><strong>ทำรายการอนุมัติ</strong></td>
            <td width="70%" height="10" align="center" bgcolor="#2A007C" class="style4"><strong>ออกรายงาน GL</strong></td>
            <td width="50%" height="10" align="center" bgcolor="#2A007C" class="style4"><strong>เครื่องมือ</strong></td>
            <td width="8%" align="center" bgcolor="#2A007C" class="style4"><strong>ล้างสถานะ</strong></td>
            
          </tr>
        </table>

    </td>
</tr>
</table>
  </div>
  @endsection