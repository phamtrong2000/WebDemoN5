<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\student;
use App\teacher;
use App\company;
use App\User;
use App\blog;
use App\Model\Category;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    //
    public function getHome(){
        $category = category::all()[0];
        return view('Pages.Teacher.home', ['category'=>$category]);

    }
    public function getBlog(){
            $category = category::all()[2];
        $BL_Tr = DB::table('blog')->paginate(4);
        return view('Pages.Teacher.Blog', ['BL_Tr' => $BL_Tr, 'category'=>$category]);
    }
    public function getDS1(Request $request){
        $category = category::all()[5];
        if($request->search){
            $search = $request->search;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('user.id as id1','name as name1','email as email1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->where('name', 'like', "%$search%")
            ->orwhere('offer', 'like', "%$search%")
            ->orwhere('address', 'like', "%$search%")
            ->orwhere('mobile', 'like', "%$search%")
            ->orwhere('salary', 'like', "%$search%")
            ->orwhere('email', 'like', "%$search%")
            ->paginate(2);
        }
        elseif($request->name) {
            $filter = $request->name;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('user.id as id1','name as name1','email as email1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->where('user.id', $filter)
            ->paginate(2);
        }
        elseif($request->email) {
            $filter = $request->email;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('user.id as id1','name as name1','email as email1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->where('user.id', $filter)
            ->paginate(2);
        }
        elseif($request->offer) {
            $filter = $request->offer;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('user.id as id1','name as name1','email as email1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->where('offer', $filter)
            ->paginate(2);
        }
        elseif($request->address) {
            $filter = $request->address;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('user.id as id1','name as name1','email as email1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->where('address', $filter)
            ->paginate(2);
        }
        elseif($request->mobile) {
            $filter = $request->mobile;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('user.id as id1','name as name1','email as email1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->where('mobile', $filter)
            ->paginate(2);
        }
        elseif($request->salary) {
            $filter = $request->salary;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('user.id as id1','name as name1','email as email1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->where('salary', $filter)
            ->paginate(2);    
        }
        elseif($request->number) {
            $filter = $request->number;
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('user.id as id1','name as name1','email as email1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->where('numbers', $filter)
            ->paginate(2);
        }
        else {
            $data = DB::table('company')
            ->join('user', 'company.id','=','user.id')
            ->select('user.id as id1','name as name1','email as email1', 'offer as offer1', 'address as address1', 'mobile as mobile1', 'salary as salary1')
            ->paginate(2);
        }
        
        $user = DB::table('user')
        ->join('company','user.id','=','company.id')
        ->select("user.*")
        ->get();

        $user1 = DB::table('user')
        ->join('company','user.id','=','company.id')
        ->orderBy('name', 'asc')
        ->get();

        $user2 = DB::table('user')
        ->join('company','user.id','=','company.id')
        ->orderBy('email', 'asc')
        ->get();
        
        $company = DB::table('company')
        ->select("*")
        ->get();

        return view('Pages.Teacher.DS1', ['user' => $user,'user1'=>$user1,'user2'=>$user2,'company' => $company,  'data' => $data, 'category'=>$category]);
    }
    public function getDS2(Request $request){
        $category = category::all()[4];
        if($request->search)
        {
        $search = $request->search;
        $data = DB::table('students')
        ->join('user','user.id','=','students.id')
        ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1')
        ->where('name', 'like', "%$search%")
        ->where('email', 'like', "%$search%")
        ->orwhere('mobile', 'like', "%$search%")
        ->orwhere('department', 'like', "%$search%")
        ->orwhere('gpa', 'like', "%$search%")
        ->orwhere('skill', 'like', "%$search%")
        ->paginate(2);
        }
        
        elseif($request->name)
        {
            $filter = $request->name;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1')
            ->where('user.id', $filter)
            ->paginate(2);
            
        }
        elseif($request->email)
        {
            $filter = $request->email;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1')
            ->where('user.id', $filter)
            ->paginate(2);
            
        }
        elseif($request->mobile)
        {
            $filter = $request->mobile;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1')
            ->where('mobile', $filter)
            ->paginate(2);
            
        }
        elseif($request->department)
        {
            $filter = $request->department;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1')
            ->where('department', $filter)
            ->paginate(2);
            
        }
        elseif($request->gpa)
        {
            $filter = $request->gpa;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1')
            ->where('gpa', $filter)
            ->paginate(2);
            
        }
        elseif($request->skill)
        {
            $filter = $request->skill;
            $data =DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1')
            ->where('skill', $filter)
            ->paginate(2);
            
        }
        
        else {
            $data = DB::table('students')
            ->join('user','user.id','=','students.id')
            ->select('user.id as id1','user.name as name1','user.email as email1','students.mobile as mobile1','students.department as department1', 'students.gpa as gpa1','students.skill as skill1')
            ->paginate(2);
        }

    $user = DB::table('user')
    ->join('students','user.id','=','students.id')
    ->select("user.*")
    ->get();
    $user1 = DB::table('user')
    ->join('students','user.id','=','students.id')
    ->orderBy('name', 'asc')
    ->get();

    $user2 = DB::table('user')
    ->join('students','user.id','=','students.id')
    ->orderBy('email', 'asc')
    ->get();
    
    $students = DB::table('students')
    ->select("*")
    ->get();
        
    return view('Pages.Teacher.DS2',['user' => $user,'user1'=> $user1,'user2'=>$user2 ,'students' => $students, 'data' => $data, 'category'=>$category]);
}
    public function getHelp(){
        $category = category::all()[7];
        return view('Pages.Teacher.Help', ['category'=>$category]);
    }
    public function getProfile($id){
        $teacher = teacher::find($id);
        $category = category::all()[1];
        if($teacher != null)

        return view('Pages.Teacher.Profile',['teacher'=>$teacher, 'category'=>$category]);
        else return view('Pages.Teacher.Profile2');


    }
    public function getSetting(){
        $category = category::all()[6];
        return view('Pages.Teacher.Setting', ['category'=>$category]);
    }
    public function postUpdate(Request $request, $id){
        $teacher = teacher::find($id);
        $category = category::all()[1];
        if($teacher == null){
            $teacher2 = new teacher;
            $teacher2 ->id =$request ->id;
            $teacher2 ->age =$request ->age;
            $teacher2 ->gender =$request ->gender;
            $teacher2 ->mobile =$request ->mobile;
            $teacher2 ->department =$request ->department;
            $teacher2 ->major =$request ->major;
            $teacher2 ->numberCMT =$request ->numberCMT;
            $teacher2 ->position =$request ->position;
            $teacher2 ->office =$request ->office;
            $teacher2 ->offer =$request ->offer;
            $teacher2 ->topicResearch =$request ->topicResearch;
            $teacher2 ->numbers =$request ->numbers;
            $teacher ->bonus =$request ->bonus;
            $teacher2 ->startDayOffer =$request ->startDayOffer;
            $teacher2 ->endDayOffer =$request ->endDayOffer;
            if($request->hasFile('Hinh')){
                $file = $request ->file('Hinh');
                $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){

                }
                $name = $file-> getClientOriginalName();
                $Hinh = Str::random(4).'_'. $name;
                while(file_exists('upload/teacher'.$Hinh)){
                    $Hinh = Str::random(4)."_". $name;
                }
                $file->move('upload/teacher', $Hinh);
                $teacher2->Hinh = $Hinh;
            }
            $teacher2->save();
            return view('Pages.Teacher.Profile',['teacher'=>$teacher2, 'category'=>$category]);
        }


        else {
            $teacher ->age =$request ->age;
            $teacher ->gender =$request ->gender;
            $teacher ->mobile =$request ->mobile;
            $teacher ->department =$request ->department;
            $teacher ->major =$request ->major;
            $teacher ->numberCMT =$request ->numberCMT;
            $teacher ->position =$request ->position;
            $teacher ->office =$request ->office;
            $teacher ->offer =$request ->offer;
            $teacher ->topicResearch =$request ->topicResearch;
            $teacher ->numbers =$request ->numbers;
            $teacher ->bonus =$request ->bonus;
            $teacher ->startDayOffer =$request ->startDayOffer;
            $teacher ->endDayOffer =$request ->endDayOffer;
            if($request->hasFile('Hinh')){
                $file = $request ->file('Hinh');
                $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){

                }
                $name = $file-> getClientOriginalName();
                $Hinh = Str::random(4).'_'. $name;
                while(file_exists('upload/teacher'.$Hinh)){
                    $Hinh = Str::random(4)."_". $name;
                }
                $file->move('upload/teacher', $Hinh);
                $teacher->Hinh = $Hinh;
            }
            $teacher->save();
            return view('Pages.Teacher.Profile',['teacher'=>$teacher, 'category'=>$category]);
        }
    }
    public function getCV($id){
        $teacher = teacher::find($id);
        $user = User::find($id);
        $category = category::all()[8];
        if($teacher != null){
          
            return view('Pages.Teacher.CV',['teacher'=>$teacher, 'user'=>$user, 'category'=>$category]);
        }

    }
    public function getShare($id){
        $category = category::all()[9];
        $user = User::find($id);
        $user_blog = blog::where('id', $id);
        
        if($user_blog != null){
            $blog = $user_blog->first();
            $BL_temp = $user_blog->simplePaginate(2);
            return view('Pages.Teacher.Share',['blog'=>$blog, 'user_blog'=>$user_blog, 'user'=>$user, 'category'=>$category, 'BL_temp' => $BL_temp]);
        }
        

    }
    public function getShare2( $id_blog){
        $category = category::all()[9];
        
        $blog = blog::find($id_blog);
        
        if($blog != null){
            $user = User::find($blog -> id);
            $user_blog = blog::where('id', $blog ->id);
            $BL_temp = $user_blog;
            return view('Pages.Teacher.Share',['blog'=>$blog, 'user_blog'=>$user_blog, 'user'=>$user, 'category'=>$category, 'BL_temp' => $BL_temp]);
        }
    }

    public function postBlog(Request $request) { 
        $category = category::all()[2]; 
        $BL_St = DB::table('blog')->paginate(4);
        $this->validate($request, [
            'Tieude'=>'required',
            'Noidung'=>'required',
            'Tomtat'=>'required'
        ],[
            'Tieude.required'=>'Bạn chưa nhập tóm tắt',
            'Noidung.required'=>'Bạn chưa nhập nội dung',
            'Tomtat.required'=>'Bạn chưa nhập tóm tắt'
        ]);

        $blog = new bLog;
        $blog->id = Auth::user()->id;
        $blog->title = $request->Tieude;
        $blog->content = $request->Noidung;
        $blog->description = $request->Tomtat;

        if($request->hasFile('Hinh')){
            $file = $request ->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){

            }
            $name = $file-> getClientOriginalName();
            $Hinh = Str::random(4).'_'. $name;
            while(file_exists('upload/blog/'.$Hinh)){
                $Hinh = Str::random(4)."_". $name;
            }
            $file->move('upload/blog', $Hinh);
            $blog->Hinh = $Hinh;
        }
        
        $blog->save();
        return view('Pages.Teacher.Blog',['category'=>$category,'BL_St' => $BL_St]) -> with('thongbao','thành công');
    }

    public function updateBlog(Request $request, $id_blog){
        $category = category::all()[2]; 
        $BL_St = DB::table('blog')->paginate(4);
        $blog= blog::find($id_blog);

        $this->validate($request, [
            'Tieude'=>'required',
            'Noidung'=>'required',
            'Tomtat'=>'required'
        ],[
            'Tieude.required'=>'Bạn chưa nhập tieude',
            'Noidung.required'=>'Bạn chưa nhập nội dung',
            'Tomtat.required'=>'Bạn chưa nhập tóm tắt'
        ]);

        $blog->title = $request->Tieude;
        $blog->content = $request->Noidung;
        $blog->description = $request->Tomtat;

        if($request->hasFile('Hinh')){
            $file = $request ->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){

            }
            $name = $file-> getClientOriginalName();
            $Hinh = Str::random(4).'_'. $name;
            while(file_exists('upload/blog/'.$Hinh)){
                $Hinh = Str::random(4)."_". $name;
            }
            $file->move('upload/blog', $Hinh);
            if($blog->Hinh != NULL)
            unlink('upload/blog/'.$blog->Hinh);
            else
            $blog->Hinh = $Hinh;
        }
        
        $blog->save();

        return view('Pages/Teacher/updateBlog',['blog'=>$blog,'category'=>$category,'BL_St' => $BL_St]);
    
    }
    public function getUpdateBlog($id_blog){
        $category = category::all()[2]; 
        $BL_St = DB::table('blog')->paginate(4);

        $blog= blog::find($id_blog);

        return view('Pages/Teacher/updateBlog',['blog'=>$blog,'category'=>$category,'BL_St' => $BL_St]);
    }

    public function delBlog($id_blog) {
        $category = category::all()[2]; 
        $blog = blog::find($id_blog);
        $blog->delete();
        return view('Pages/Teacher/delBlog',['category'=>$category]);
    
    }
}
