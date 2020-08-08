
@extends('Pages.layout.menu')
@section('content')


<div class="container">
    <a class="position-absolute" id="btnCV" href="./Pages/Teacher/CV/{{Auth::user()->id}}"><button type="reset2" class="btn btn-primary" >CV Cá Nhân</button></a>
    <form class="" method="POST" action="./Pages/Teacher/updateProfile/{{Auth::user()->id}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <button type="submit" class="btn btn-primary" >Ghi nhận</button>
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Thông tin thầy/cô</h6>
                    </div>
                    <div class="card-body row">
                        <div class="col-md-6 mb-3 avatar-info">
                            <br>
                            <p></p>
                            <div class="avatar-info-area" style="background-image: url('upload/teacher/{{$teacher->Hinh}}');" ></div>
                            <input type="file" name="Hinh" class="form-control-file border">
                        </div>
                        <div class="col-md-6 mb-3 info-individual">
                            <input type="hidden" value="{{Auth::user()->id}}" name="id" class="form-control">
                            <label for="teachertName">Tên thầy/cô</label>
                            <input name="name" type="text" value="{{Auth::user()->name}}" readonly class="form-control" placeholder="" id="txtTeacherName">
                            <label for="yearOlds">Tuổi</label>
                            <input name="age" type="number" value="{{$teacher->age}}" class="form-control" placeholder="" id="txtYearOlds">
                            <label for="teacherGender"> Giới tính:</label>
                            <p></p>
                            <input id="txtTeacherGender"  <?php if($teacher->gender=="Nam"){echo "checked";}?>  value="Nam" type="radio" class="form-check-inline" name="gender">Nam
                            <input id="txtTeacherGender"  <?php if($teacher->gender=="Nữ"){echo "checked";}?> value="Nữ" type="radio" class="form-check-inline" name="gender">Nữ
                            <input id="txtTeacherGender"  <?php if($teacher->gender=="Khác"){echo "checked";}?> value="Khác" type="radio" class="form-check-inline" name="gender">Other
                            <label for="emailOther">Địa chỉ email</label>
                            <input value="{{Auth::user()->email}}" name="email" type="email" class="form-control" readonly placeholder="" id="txtEmailOther">
                            <label for="mobile">Số điện thoại</label>
                            <input name="mobile" type="tel"  value="{{$teacher->mobile}}" class="form-control" placeholder="" id="txtMobile">
                     
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Thông tin cơ bản</h6>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                            <label for="department">Khoa</label>
                            <select name="department" class="form-control" id="sel1">
                                <option  <?php if($teacher->department=="Công nghệ thông tin"){echo "selected";}?> value="Công nghệ thông tin"  name="department">Công nghệ thông tin</option>
                                <option  <?php if($teacher->department=="Điện tử viễn thông"){echo "selected";}?> value="Điện tử viễn thông"  name="department">Điện tử viễn thông</option>
                                <option <?php if($teacher->department=="Vật lý kỹ thuật"){echo "selected";}?> value="Vật lý kỹ thuật"  name="department">Vật lý kỹ thuật</option>
                                <option <?php if($teacher->department=="Hàng không vũ trụ"){echo "selected";}?> value="Hàng không vũ trụ"  name="department">Hàng không vũ trụ</option>
                            </select>
                        </div>
                        <label for="major">Ngành</label>
                        <input name="major" type="text" value="{{$teacher->major}}"  class="form-control" placeholder="" id="txtMajor">
                        <label for="numberCMT">Số chứng minh thư</label>
                        <input name="numberCMT" type="text" value="{{$teacher->numberCMT}}"  class="form-control" placeholder="" id="txtNumberCMT">
                        <label for="position">Vị trí/chức vụ</label>
                        <input name="position" type="text" value="{{$teacher->position}}"  class="form-control" placeholder="" id="txtPosition">
                        <label for="office">Văn phòng</label>
                        <input name="office" type="text"  value="{{$teacher->office}}" class="form-control" placeholder="" id="txtOffice">
                    
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Chi tiết thông tin tuyển</h6>
                    </div>
                    <div class="card-body">
                        <label for="offer">Yêu cầu/Tiêu chí</label>
                        <textarea name="offer" class="form-control" rows="5" id="txtOffer"><?php echo $teacher->offer?></textarea>
                        <label for="topic">Đề tài nghiên cứu</label>
                        <textarea name="topicResearch" class="form-control" rows="5" id="txtTopic"><?php echo $teacher->topicResearch?></textarea>
                        <label for="numbers">Số lượng</label>
                        <input name="numbers" value="{{$teacher->numbers}}"  type="number" class="form-control" name="numbers" value="" id="txtNumbers" />
                        <textarea  name="bonus" value="{{$teacher->bonus}}"class="form-control" rows="5" id="txtBonus"></textarea>
                        <label for="startDayOffer">Ngày bắt đầu đợt tuyển</label>
                        <label for="startDayOffer">Ngày bắt đầu đợt tuyển</label>
                        <input name="startDayOffer" value="{{$teacher->startDayOffer}}"  type="date" class="form-control"  id="txtStartDayOffer">
                        <label for="endDayOffer">Ngày kết thúc đợt tuyển</label>
                        <input name="endDayOffer" value="{{$teacher->endDayOffer}}"  type="date" class="form-control" placeholder="" id="txtEndDayOffer">
                        
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

