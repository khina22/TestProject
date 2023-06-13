<?php

namespace App\Http\Controllers\registration;
use App\Models\registration\RoleModel;
use App\Models\registration\UserModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class RegistrationController extends Controller
{
    public function register(){
        //dd('reached in register method');
        //$ is used to define the variable name

        $response_data = RoleModel::where('status','active')->get();
         // Select data where the status is "active" from the RoleModel
        return view('register')->with('response_data', $response_data,);
        
    }

    public function create_role(Request $request){
        $role_data=[
            'name'          =>$request-> role_name, 
            'status'        =>$request-> status, 
            'created_by'    =>1,
            'created_at'    => date('Y-m-d h:i:s'),
        ];
        //dd($role_data);

        RoleModel::create($role_data);
        return redirect ()->away('/get_role_list/ALL/NA/ALL'); //redirect to get_role_list
    }

    public function get_role_list($param_type,$id,$status) {
        if($param_type=="ALL"){
        $response_data=RoleModel::get();
            //select all data from  t_role_master
        }

        if($param_type=="BYID"){
            $response_data=RoleModel::where('id',$id)->get();
            // select data based on id from  t_role_master
        }

        if($param_type=="status"){
            $response_data=RoleModel::where('status',$status)->get();
            // select data based on status=active from t_role_master
        }
    
    return view ('registration/list_roles')->
    with (compact('response_data'));
    }

    public function edit_role($id) {
        $data=RoleModel::where('id',$id)->first();
        return view ('edit_role')->
        with (compact('data'));

    }
    public function delete_role($id) {
        RoleModel::where('id',$id)->delete();
        return redirect ()->away('/get_role_list/ALL/NA/ALL'); 
}

    public function update_role(Request $request) {
            $role_data=[
                'name'          =>$request-> role_name, 
                'status'        =>$request-> status, 
                'updated_by'    =>1,
                'updated_at'    => date('Y-m-d h:i:s'),
            ];
            //dd($role_data);
    
            RoleModel::where('id',$request->record_id)
            ->update($role_data);
            return redirect ()->away('/get_role_list/ALL/NA/ALL'); //redirect to get_role_list
        }     

        public function register_new_user(Request $request){
            $user_data=[
                'role'          =>$request-> role, 
                'username'         =>$request-> user_name, 
                'email'            =>$request-> email, 
                'password'         =>$request-> password,
                'created_by'       =>1,
                'created_at'       => date('Y-m-d h:i:s'),
            ];
            // dd($user_data);
    
            UserModel::create($user_data);
            return redirect ()->away('/register'); //redirect to get_role_list
        }

    };

