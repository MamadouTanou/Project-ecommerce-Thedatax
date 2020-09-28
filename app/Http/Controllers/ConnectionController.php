<?php

namespace App\Http\Controllers;

use App\Http\Requests\passwordCreateRequest;
use App\Http\Requests\passwordUpdateRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\DB;

class ConnectionController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getFormPassword()
    {
        $data = $this->userRepository->data();
        return view('connections.changePassword', $data);
    }
    
    public function formChangePassword(passwordCreateRequest $request)
    {
        $users  = DB::select('select * from users where id = ?', [1]);
        $user = $users[0];
        try {
            $password = Crypt::decrypt($user->password);
        } catch (DecryptException $e) {
            //
        }
        if($password == $request->input('password'))
        {
            return redirect('editPassword');
        }else
        {
            return redirect('getFormPassword')->withOk("Le mod de pass est incorect");

        }

    }

    public function editPassword()
    {
        $users  = DB::select('select * from users where id = ?', [1]);
        $user = $users[0];
        return view('connections.editPassword',compact('user'));

    }

    public function updatePassword(passwordUpdateRequest $request, $id)
    {
        $newPassword = Crypt::encrypt($request->input('password'));
        $user = DB::update('update users set password = ? where id = ?', [$newPassword, $id]);
        return redirect('admin')->withOk("Votre mot de pass a été modifié.");

    }
}
