* Project license has been updated to remove the requirement for acknowledgement
* Qualcomm Technologies, Inc. will end support for DIRBS as of 1 June 2021
---

![Image of DIRBS Logo](https://avatars0.githubusercontent.com/u/42587891?s=100&v=4)

# DCP Application
## License
Copyright (c) 2018-2021 Qualcomm Technologies, Inc.

All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted (subject to the limitations in the disclaimer below) provided that the following conditions are met:

* Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
* Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
* Neither the name of Qualcomm Technologies, Inc. nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
* The origin of this software must not be misrepresented; you must not claim that you wrote the original software.
* Altered source versions must be plainly marked as such, and must not be misrepresented as being the original software.
* This notice may not be removed or altered from any source distribution.

NO EXPRESS OR IMPLIED LICENSES TO ANY PARTY'S PATENT RIGHTS ARE GRANTED BY THIS LICENSE. THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

## Quick Installation

#### Pre-requisites
- Node v8.9.4 or greater
- NPM v5.6.X or greater
- Composer v1.8.4 or greater

##### Download this project to your local system
`git clone https://github.com/CACF/dvs_app_staging.git`

##### Go to dvs_app_staging Directory
`cd dvs_app_staging`

##### Install all dependencies
- `composer install`
- `npm install`

Note: run `composer dump-autoload` for discovering new packages

##### Configurations
- Update `api_url` in `config/app.php` with API URL provide to you
- Rename `.env-example` to `.env`
- Generate key: `php artisan key:generate`

##### See the project in action at http://localhost:8000
`php artisan serve`

##### Compile Front-end assets
`npm run development`

##### Compile Front-end assets for Production
`npm run production`
