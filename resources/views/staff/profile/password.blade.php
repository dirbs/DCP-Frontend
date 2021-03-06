{{--/** Copyright (c) 2018-2019 Qualcomm Technologies, Inc.
All rights reserved.
Redistribution and use in source and binary forms, with or without modification, are permitted (subject to the limitations in the disclaimer below) provided that the following conditions are met:
Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
Neither the name of Qualcomm Technologies, Inc. nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
The origin of this software must not be misrepresented; you must not claim that you wrote the original software. If you use this software in a product, an acknowledgment is required by displaying the trademark/log as per the details provided here: https://www.qualcomm.com/documents/dirbs-logo-and-brand-guidelines
Altered source versions must be plainly marked as such, and must not be misrepresented as being the original software.
This notice may not be removed or altered from any source distribution.
NO EXPRESS OR IMPLIED LICENSES TO ANY PARTY'S PATENT RIGHTS ARE GRANTED BY THIS LICENSE. THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.*/--}}
@extends('common.layouts.base')
@section('title',trans('titles.common.edit_password'))
@section('content')
    @include('common.partials.nav')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header" data-background-color="sitebg">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1 class="text-uppercase"><strong>

                                    {{trans('profile.edit')}}

                                </strong></h1>
                            <h6>{{trans('messages.change_dcp_password')}}</h6>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            {{ Form::model($user, array('url' => array(App::getLocale().'/staff/profile/'. $user->id. '/password'), 'method' => 'POST','class'=>'password-edit')) }}
                            {{method_field('put')}}
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="form-group">

                                <div class="inputbox ion-control">

                                    <i class="ion material-icons" rel="tooltip"
                                       title="{{trans('profile.tooltips.enter_old_password_for_the_user_to_be_edited')}}">lock</i>

                                    {{ Form::password('old_password', array('class' => 'form-control', 'placeholder' => trans('profile.fields.old_password'))) }}
                                </div>
                            </div>
                            @if ($errors->has('old_password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('old_password') }}</strong>
                                </span>
                            @endif


                            <div class="form-group">

                                <div class="inputbox ion-control">
                                    <i class="ion material-icons" rel="tooltip"
                                       title="{{trans('profile.tooltips.enter_new_password_for_the_user_to_be_edited')}}">lock_open</i>

                                    {{ Form::password('password', array('id'=>'password','class' => 'form-control', 'placeholder' => trans('profile.fields.new_password'),'minlength'=>'8')) }}
                                </div>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                            <div class="form-group">

                                <div class="inputbox ion-control">
                                    <i class="ion material-icons" rel="tooltip"
                                       title="{{trans('profile.tooltips.re_enter_new_password_for_the_user_to_be_edited')}}">lock_outline</i>

                                    {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => trans('profile.fields.retype_new_password'))) }}
                                </div>
                            </div>
                            <span class='help-block-password'></span>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif

                            <div class="form-group">
                                <p class="pull-right">

                                    {{ Form::submit(trans('profile.buttons.update'), array('class' => 'btn blue-btn')) }}
                                </p>
                                <p>
                                        <span class="forgot-link">
                                                <a href="{{URL::to(App::getLocale().'/staff/profile')}}">
                                                    <i class="material-icons">keyboard_backspace</i>&nbsp;&nbsp;{{trans('profile.buttons.back')}}
                                                </a>
                                        </span>
                                </p>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('common.partials.footer')
    </div>
@endsection
