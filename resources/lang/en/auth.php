<?php
/** Copyright (c) 2018-2019 Qualcomm Technologies, Inc.
All rights reserved.
Redistribution and use in source and binary forms, with or without modification, are permitted (subject to the limitations in the disclaimer below) provided that the following conditions are met:
Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
Neither the name of Qualcomm Technologies, Inc. nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
The origin of this software must not be misrepresented; you must not claim that you wrote the original software. If you use this software in a product, an acknowledgment is required by displaying the trademark/log as per the details provided here: https://www.qualcomm.com/documents/dirbs-logo-and-brand-guidelines
Altered source versions must be plainly marked as such, and must not be misrepresented as being the original software.
This notice may not be removed or altered from any source distribution.
NO EXPRESS OR IMPLIED LICENSES TO ANY PARTY'S PATENT RIGHTS ARE GRANTED BY THIS LICENSE. THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.*/
return [

	/*
	|--------------------------------------------------------------------------
	| Authentication Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines are used during authentication for various
	| messages that we need to display to the user. You are free to modify
	| these language lines according to your application's requirements.
	|
	*/

	'failed'   => 'These credentials do not match our records.',
	'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

	'login_page' => [
		'signin_text' => 'Sign in to start your session',
		'login'       => 'Login',
		'email'       => 'Email Address',
		'password'    => 'Password'
	],


	'forgot_your_password'          => 'Forgot your password?',
	'dont_have_an_account'          => "Don't have an account?",
	'register_now'                  => 'Register Now',
	'register'                      => 'Register',
	'first_name'                    => 'First Name',
	'last_name'                     => 'Last Name',
	'confirm_password'              => 'Confirm Password',
	'already_have_an_account'       => 'Already have an account?',
	'reset_password'                => 'Reset Password',
	'send_password_reset_link'      => 'Send Password Reset Link',
	'create_account'                => 'Create your DCP Account',
	'enter_new_password'            => 'Enter your new password',
	'enter_email_to_reset_password' => 'Enter your email to reset password',
	'logout'                        => 'Logout',


	'register_form'  => [
		'error'            => 'Your form has errors',
		'failed'           => 'Registration Failed',
		'email'            => 'Please check your Email to activate your account',
		'success'          => 'Registration Successful',
		'validation_rules' => [
			'required'                  => [
				'first_name'            => 'First Name is Required',
				'last_name'             => 'Last Name is Required',
				'email'                 => 'Email Address is Required',
				'password'              => 'Password is Required',
				'password_confirmation' => 'Password Confirmation is Required',
				'old_password'          => 'Old Password is Required'
			],
			'email'                     => 'Please enter valid Email Address',
			'email_validation_regex'    => 'Please enter valid Email Address e.g. username@3gca.org',
			'password_validation_regex' => 'Please make a strong password (Password must contains at least one uppercase/lowercase letters, one number and one special character)',
			'min_length'                => 'Your password must be at least 8 characters long',
			'password'                  => [
				'equal_to' => 'Please enter the same password as above',
			]
		]
	]
	,
	'password_reset' => [
		'token_mismatch' => 'Token Mismatched, Please try again',
		'success'        => 'Your password has successfully changed, Please login to continue',
	]


];

