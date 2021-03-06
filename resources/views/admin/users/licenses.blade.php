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
@section('content')
    <div id="app">
	    <?php $user = \Session::get( 'user' ); ?>
        @include('common.partials.nav')
        <div class="content">
            <div class="container-fluid">
                @include('layouts.partials.alerts')
                <div class="card">
                    <div class="card-header" data-background-color="sitebg">
                        <h1><i class="material-icons">account_box</i>
                            {{$user->first_name}}'s {{trans('nav.license_Agreements')}}
                        </h1>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table_srno">
                                <thead>
                                <tr>
                                    <th>{{trans('pages.licenses.sr_no')}}</th>
                                    <th>{{trans('pages.licenses.license_version')}}</th>
                                    <th>{{trans('pages.licenses.agreed_on')}}</th>
                                    <th>{{trans('pages.licenses.type')}}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($licenses as $license)
                                    <tr>

                                        <td></td>
                                        <td>{{$license->version}}</td>
                                        <td>{{\Carbon\Carbon::parse($license->pivot->updated_at)->diffForHumans()}}</td>
                                        <td>{{$license->pivot->type}}</td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="text-center" mt20>

                @if($user->roles[0]->slug === 'admin')
                        <a href="{{URL::to(App::getLocale().'/admin/users')}}">
                            <i class="material-icons">keyboard_backspace</i>{{trans('profile.buttons.back')}}
                        </a>
                    @elseif($user->roles[0]->slug === 'superadmin')
                        <a href="{{URL::to(App::getLocale().'/super-admin/all-users')}}">
                            <i class="material-icons">keyboard_backspace</i>{{trans('profile.buttons.back')}}
                        </a>
                    @endif
                </div>
            </div>
        </div>
        @include('common.partials.footer')
    </div>
    </div>
@endsection


