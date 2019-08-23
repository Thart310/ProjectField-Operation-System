@extends('layouts.masteradmin')

@section('content')
<div class="container">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="5" >
    <tr>
        <td align="center" class="sample">
            <!------------------------------------------------------------------>
            <table class="table table-striped table-dark" >
                <tr>
                    <td>

                        <table width="95%" border="0" align="center" cellpadding="1" cellspacing="5">
                            <tr>
                                <td colspan="2" align="left" class="style4">&nbsp;&nbsp;หมวดรายการค่าใช้จ่าย</td>
                            </tr>
                            <tr>
                                <td width="5%" align="left"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Blue_sphere.svg/768px-Blue_sphere.svg.png" title="แสดงทั้งหมด" width="29" height="29"></td>
                                <td width="40%" style="background-color:#FFFFFF">&nbsp;<a href="">แสดงทั้งหมด</a>&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="left"><img src="https://cdn.pixabay.com/photo/2014/12/21/23/30/water-drop-575495_960_720.png" title="เฉพาะที่ยังดำเนินการ" width="24" height="24"></td>
                                <td style="background-color:#FFFFFF">&nbsp;<a href="">เฉพาะที่ยังดำเนินการ</a>&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="left"><img src="https://cdn.pixabay.com/photo/2012/04/10/16/49/sun-26345_960_720.png" title="สรุปค่าใช้จ่ายเสร็จสิ้น" width="24" height="24"></td>
                                <td style="background-color:#FFFFFF">&nbsp;<a href="">สรุปค่าใช้จ่ายเสร็จสิ้น</a>&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="left"><img src="https://cdn.pixabay.com/photo/2016/07/05/15/27/icon-1498822_960_720.png" title="ผ่านการตรวจรับเอกสารรอการอนุมัติ" width="24" height="24"></td>
                                <td style="background-color:#FFFFFF">&nbsp;<a href="">ผ่านการตรวจรับเอกสาร รอการอนุมัติ</a>&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="left"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b6/Realistic_Go_Stone.svg/1024px-Realistic_Go_Stone.svg.png" title="บันทึกรายการค่าใช้จ่ายเสร็จสิ้น" width="24" height="24"></td>
                                <td style="background-color:#FFFFFF">&nbsp;<a href="">บันทึกรายการค่าใช้จ่ายเสร็จสิ้น</a>&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="left"><img src="https://cdn.pixabay.com/photo/2012/05/07/02/46/red-47690_960_720.png" title="อยู่ในระหว่างการป้อนรายการ" width="24" height="24"></td>
                                <td style="background-color:#FFFFFF">&nbsp;<a href=""> อยู่ในระหว่างการป้อนรายการ </a>&nbsp;</td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            <!------------------------------------------------------------------>
        </td>
    </tr>
</table>
</div>
<div class="container">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="5" >
        <tr>
            <td align="center" class="sample">
    <table class="table table-striped table-dark">
        <tr bgcolor="#A3B2CC">
            <td width="4%" height="10" align="center" bgcolor="#2A007C" class="style4"><b>ลำดับ</b></td>
            <td width="4%" height="10" align="center" bgcolor="#2A007C" class="style4">&nbsp;</td>
            <td width="9%" height="10" align="center" bgcolor="#2A007C" class="style4"><strong>รหัสTrip</strong></td>
            <td width="30%" height="10" align="center" bgcolor="#2A007C" class="style4"><strong>ชื่อTrip</strong></td>
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
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header ">สถานะรายงาน</div> --}}

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    {{-- <table class="table table-striped table-dark">
                            <tbody>
                              <tr>
                               <th scope="row"> <a href="#" >ทำรายการเสร็จสิ้น</a></th>
                               
                              </tr>
                              <tr>
                                <th scope="row">รอเอกสารส่งบัญชี</th>
                              
                              </tr>
                              <tr>
                                <th scope="row">กรอกข้อมูลไม่ครบ</th>
                                
                              </tr>
                            </tbody>
                          </table> --}}
                {{-- </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection