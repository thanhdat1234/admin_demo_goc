<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminEditRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' 			=> 'required|max:40|min:5',
			'email' 		=> 'required|email',
			'password' 		=> 'min:6|max:20',
			'repassword' 	=> 'min:6|max:20|same:password',
		];
	}
	public function messages(){
		return[
			'name.required' 	=> 'Mời bạn nhập Tên đăng nhâp !',
			'name.unique'		=> 'Tên đăng nhập đã tồn tại !',
			'name.min' 			=> 'Tên đăng nhập phải ít nhất 5 ký tự !',
			'name.max'			=> 'Tên đăng nhập không được quá 40 ký tự !',
			'email.required'	=> 'Mời bạn nhập email !',
			'email.email'		=> 'Email bạn nhập chưa chính xác !',
			'email.unique'		=> 'Email đã tồn tại !',
			'password.min' 		=> 'Mật khẩu phải ít nhất 6 ký tự !',
			'password.max' 		=> 'Mật khẩu không quá 20 ký tự !',
			'repassword.min' 	=> 'Mật khẩu phải ít nhất 6 ký tự !',
			'repassword.max' 	=> 'Mật khẩu không quá 20 ký tự !',
			'repassword.same' 	=> 'Nhập lại mật khẩu không đúng!',
		];
	}

}
