<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Question;
use App\Model\User;

class mainController extends Controller
{
    public function showLoginView()
    {
    	return view('login');
    }
    public function showSignupView()
    {
    	return view('Signup');
    }
    public function showAdminDashboard()
    {
    	return view('admin.addNewQuestion');
    }
    public function validateAdmin(Request $request)
    {
        $email = $request->username;
        $pass = $request->password;
        $matchThese = ['email' => $email, 'password' => $pass];
        $ques = Question::all();
        $record = User::where('email',$email)->where('password',$pass);
    	if($request->username == "admin" && $request->password == "admin")
    	{
    		return view('admin.addNewQuestion');
    	}
        elseif($record)
        {
            return view('user.userdashboard',compact('ques'));
        } 
    	else
    	{
    		return view('login');
    	}

    }
    public function saveQuestion(Request $request)
    {
    	// print_r($req['question']);
    	$question = new Question();
    	$question->question = $request['question'];
    	$question->choiceA = $request['choiceA'];
    	$question->choiceB = $request['choiceB'];
    	$question->choiceC = $request['choiceC'];
    	$question->choiceD = $request['choiceD'];
    	$question->correctAnswer = $request['correctAnswer'];
    	$question->save();
  		$isStore = true;
    	return view('admin.addNewQuestion',compact('isStore'));
    }
    public function showUserDashboard()
    {
    	$ques = Question::all();
    	//print_r($ques);
    	return view('user.userdashboard',compact('ques'));
    }
    public function addNewUser(Request $request)
    {
        $user = new User();
        $user->firstName = $request->fname;
        $user->lastName = $request->lname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->save();
        $isStoreUser = true;
        return view('login',compact('isStoreUser'));
    }
}
