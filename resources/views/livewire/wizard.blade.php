<div class="container">

    @if(!empty($successMessage))
    <div class="alert alert-success">
        {{ $successMessage }}
    </div>
    @endif
    <div class="row p-2  bg-white">
        <div class="row stepwizard ">
            <div class="stepwizard-row setup-panel d-flex flex-row  justify-content-between">
                <div class="stepwizard-step d-flex flex-row  align-items-center ">
                    <a href="#step-1" type="button"
                        class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                    <button class="btn " {{ $currentStep !=2 ? 'btn-default' : 'btn-primary' }}> Step 1 </button>
                </div>
                <div class="stepwizard-step d-flex flex-row align-items-center">
                    <a href="#step-2" type="button"
                        class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                    <button class="btn " {{ $currentStep !=2 ? 'btn-default' : 'btn-primary' }}> Step 2 </button>
                </div>
                <div class="stepwizard-step d-flex flex-row align-items-center">
                    <a href="#step-3" type="button"
                        class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}"
                        disabled="disabled">3</a>
                    <button class="btn " {{ $currentStep !=2 ? 'btn-default' : 'btn-primary' }}> Step 3 </button>
                </div>
                <div class="stepwizard-step d-flex flex-row align-items-center">
                    <a href="#step-4" type="button"
                        class="btn btn-circle {{ $currentStep != 4 ? 'btn-default' : 'btn-primary' }}"
                        disabled="disabled">4</a>
                    <button class="btn " {{ $currentStep !=3 ? 'btn-default' : 'btn-primary' }}> Step 4 </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-3 setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
        <div class="col-xs-12">
            <div class="row px-5">
                <div class="col-md-6">


                    <div class="form-group p-3">
                        <label for="title">Company Name:</label>
                        <input type="text" wire:model="name" class="form-control" id="taskTitle">
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group p-3">
                        <label for="description">Federal Registration No. (MC Number)</label>
                        <input type="number" oninput="this.value=this.value.slice(0,8)" maxlength="8"
                            wire:model="mc_number" class="form-control" id="productAmount" />
                        @error('mc_number') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group p-3">
                        <label for="description">US Tax ID / Canadian Business Number</label>
                        <input type="text" wire:model="tax" class="form-control" id="productAmount" />
                        @error('tax') <span class="error">{{ $message }}</span> @enderror

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group p-3">
                        <label for="title">SCAC Code</label>
                        <input type="text" wire:model="scac" maxlength="4" class="form-control" id="taskTitle">
                        @error('scac') <span class="error">{{ $message }}</span> @enderror

                    </div>
                    <div class="form-group p-3">
                        <label for="description">US DOT #</label>
                        <input type="number" wire:model="usdot" oninput="this.value=this.value.slice(0,8)" maxlength="8"
                            class="form-control" id="productAmount" />
                            @error('usdot') <span class="error">{{ $message }}</span> @enderror

                        </div>

                    <div class="form-group p-3">
                        <label for="description">Company Website address:</label>
                        <input type="text" wire:model="websit" class="form-control" id="productAmount" />
                        @error('websit') <span class="error">{{ $message }}</span> @enderror

                    </div>

                </div>
            </div>
            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit"
                type="button">Next</button>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
        <div class="col-xs-12">
            <div class="row px-5">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group py-3">
                                <label for="exampleFormControlSelect1">Prefix</label>
                                <select class="form-select"  id="exampleFormControlSelect1"
                                    aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Mr</option>
                                    <option value="2">Mrs</option>
                                    <option value="3">Ms</option>
                                </select>

                            </div>
                            <div class="form-group py-3">
                                <label for="description">Middel Name:</label>
                                <input type="text" wire:model="mname" class="form-control" id="productAmount" />
                                @error('mname') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group py-3">
                                <label for="description">Suffix</label>
                                <input type="text" wire:model="suffix" class="form-control" id="productAmount" />
                                @error('suffix') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group py-3">
                                <label for="description">salutation</label>
                                <input type="text" wire:model="salutation" class="form-control" id="productAmount" />
                                @error('slutation') <span class="error">{{ $message }}</span> @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-3">
                                <label for="description">First Name:</label>
                                <input type="text" wire:model="fname" class="form-control" id="productAmount" />
                                @error('fname') <span class="error">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group py-3">
                                <label for="description">Last Name:</label>
                                <input type="text" wire:model="lname" class="form-control" id="productAmount" />
                                @error('lname') <span class="error">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group py-3">
                                <label for="description">Title:</label>
                                <input type="text" wire:model="title" class="form-control" id="productAmount" />
                                @error('title') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group py-3">
                                <label for="description">Email:</label>
                                <input type="email" wire:model="email" class="form-control" id="productAmount" />
                                @error('email') <span class="error">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group py-3">
                                <label for="description">Phone No:</label>
                                <input type="tel" wire:model="phone" class="form-control" id="productAmount" />
                                @error('phone') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group py-3">
                                <label for="description">Fax No:</label>
                                <input type="tel" wire:model="fax" class="form-control" id="productAmount" />
                                @error('fax') <span class="error">{{ $message }}</span> @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-3">
                                <label for="description">Second Email:</label>
                                <input type="email" wire:model="exemail" class="form-control" id="productAmount" />
                                @error('exemail') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group py-3">
                                <label for="description">Second Phone No:</label>
                                <input type="tel" wire:model="secphone" class="form-control" id="productAmount" />
                                @error('secphone') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group py-3">
                                <label for="description">Address:</label>
                                <input type="text" wire:model="address" class="form-control" id="productAmount" />
                                @error('address') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group py-3">
                                <label for="description">Address 2</label>
                                <input type="text" wire:model="address2" class="form-control" id="productAmount" />
                                @error('address2') <span class="error">{{ $message }}</span> @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-3">
                                <label for="description">Zip Code:</label>
                                <input type="number" oninput="this.value=this.value.slice(0,5)" maxlength="5" wire:model="zip" class="form-control" id="productAmount" />
                                @error('zip') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group py-3">
                                <label for="description">City:</label>
                                <input type="text" wire:model="city" class="form-control" id="productAmount" />
                                @error('city') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-3">
                                <label for="description">State:</label>
                                <input type="text" wire:model="state" class="form-control" id="productAmount" />
                                @error('state') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group py-3">
                                <label for="description">Country:</label>
                                <input type="text" wire:model="country" class="form-control" id="productAmount" />
                                @error('country') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                    wire:click="secondStepSubmit">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button"
                    wire:click="back(1)">Back</button>
        </div>
    </div>
 <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
        <div class="col-xs-12">
            <div class="row justify-content-center">
                <div class="col-xs-6  col-md-6">
                    <div class="form-group my-5">
                        
                        <label class="form-label" for="basic-default-password42">Password</label>    
                        <div class="input-group">
                        <input type="text"  wire:model="password" class="form-control" />
                        <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>  

                        @error('password') <span class="error">{{ $message }}</span> @enderror    
                    </div>
                </div>
                    <div class="form-group mb-5">
                        <label class="form-label" for="basic-default-password42">Password</label>    
                            <div class="input-group">
                        <input type="text" wire:model="password_confirmation" class="form-control" />  
                             <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>  
                        @error('password') <span class="error">{{ $message }}</span> @enderror    
                    </div>    
                </div>    
                </div>
            </div>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                wire:click="thirdStepSubmit">Next</button>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
        <div class="col-xs-12">
            <div class="row justify-content-center">
            <div class="col-md-6">            
                <table class="">


                    <tr>
                        <th style="width:70%">Company Name:</th>
                        <th style=" text-align: right;">{{$name}}</th>
                    </tr>
                    <tr>
                        <td>Federal Registration No. (MC Number)</td>
                        <td style=" text-align: right;" >{{$mc_number}}</td>
                    </tr>
                    <tr>
                        <td>US Tax ID / Canadian Business Number</td>
                        <td style=" text-align: right;">{{$tax}}</td>
                    </tr>
                    <tr>
                        <td>SCAC Code </td>
                        <td style=" text-align: right;">{{$scac}}</td>
                    <tr>
                        <td> US DOT #</td>
                        <td style=" text-align: right;" >{{$usdot}}</td>
                    </tr>
                    <tr>
                        <td> Company Website address:</td>
                        <td style=" text-align: right;" >{{$websit}}</td>
                    </tr>
                </table>
                </div>

                <div class="col-md-6">            
                    <table class=" ">
                        <tr >
                            <th style="width:50%"> Prefix</th>
                            <th style=" text-align: right;" >-</th>
                        </tr>
                        <tr>
                            <td>First Name: </td>
                            <td style=" text-align: right;" >{{$fname}}</td>
                        </tr>
                        <tr>
                            <td>Middel Name: </td>
                            <td style=" text-align: right;" >{{$mname}}</td>
                        </tr>
                        <tr>
                            <td>Last Name: </td>
                            <td style=" text-align: right;" >{{$lname}}</td>
                        <tr>
                            <td>Suffix </td>
                            <td style=" text-align: right;" >{{$suffix}}</td>
                        </tr>
                        <tr>
                            <td>Title </td>
                            <td style=" text-align: right;" >{{$title}}</td>
                        </tr>
                        <tr>
                            <td>Salutation </td>
                            <td style=" text-align: right;" >{{$salutation}}</td>
                        </tr>
                        <tr>
                            <td>Email </td>
                            <td style=" text-align: right;" >{{$email}}</td>
                        </tr>
                        <tr>
                            <td>Second Email: </td>
                            <td style=" text-align: right;" >{{$exemail}}</td>
                        </tr>
                        <tr>
                            <td>Phone No: </td>
                            <td style=" text-align: right;" >{{$phone}}</td>
                        </tr>
                        <tr>
                            <td>Second Phone No </td>
                            <td style=" text-align: right;" >{{$secphone}}</td>
                        </tr>
                        <tr>
                            <td>Fax No: </td>
                            <td style=" text-align: right;" >{{$fax}}</td>
                        </tr>
                        <tr>
                            <td>Address: </td>
                            <td style=" text-align: right;" >{{$address}}</td>
                        </tr>
                        <tr>
                            <td>Address2: </td>
                            <td style=" text-align: right;" >{{$address2}}</td>
                        </tr>

                        <tr>
                            <td>Zip Code: </td>
                            <td style=" text-align: right;" >{{$zip}}</td>
                        </tr>
                        <tr>
                            <td>State: </td>
                            <td style=" text-align: right;" >{{$state}}</td>
                        </tr>
                        <tr>
                            <td>Country: </td>
                            <td style=" text-align: right;" >{{$country}}</td>
                        </tr>
                      
                    </table>
                    </div>

                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right"  wire:click="forthStepSubmit"
                     type="button">Next!</button>
                 <button class="btn btn-danger nextBtn btn-lg pull-right" type="button"
                     wire:click="back(3)">Back</button>
            </div>
    </div>
    <div class="row setup-content {{ $currentStep != 5 ? 'displayNone' : '' }}" id="step-5">
        <div class="col-xs-12">
            <div class="row justify-content-center" style="height: 80vh">  
                <h4 style="font-weight: 600;  " class="text-center"> Accept the terms & conditions of the UIIA electronically as below</h4>
           <h6>Accept the terms & conditions below:</h6>
        
           <div class="px-3">
           <div class="form-check mb-5 pb-5 ">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2"  />
            <label class="form-check-label" for="defaultCheck2">
                I accept the terms and conditions of the UIIA and submit the following signature page as confirmation of my agreement to this Addendum.
            </label>
          </div>     
            <div >
             
              <input type="file" wire:model="image" class="form-control" id="inputGroupFile01" aria-describedby="defaultFormControlHelp">
              @error('image') <span class="error">{{ $message }}</span> @enderror   
              <div id="defaultFormControlHelp" class="form-text text-center" style="color: #24235b  !important "> <b>Notice: </b> Images must be in transparent PNG format, with dimensions of 200px (width) by 100px (height), and file size less than 100KB</div>
            </div>       
        </div> 
        <button class="btn btn-success btn-lg pull-right" wire:click="fithStepSubmit"
        type="button">Finish!</button>   
        </div>    
    </div>
</div>