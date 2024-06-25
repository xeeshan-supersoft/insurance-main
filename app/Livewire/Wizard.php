<?php

namespace App\Livewire;
use App\Rules\TransparentPNG;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\AgencyInfos;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
class Wizard extends Component
{
    use WithFileUploads;

    public $image;

    public $currentStep = 1;
    
    public $name, $mc_number ,$suffix ,$fname ,$salutation, $mname ,$lname ,$title ,$prefix;
    public $address ,$address2 , $zip , $city, $state ,$country, $password ,$password_confirmation;
    public $email ,$phone, $fax, $exemail ,$secphone;
    public $websit ,$ialn , $scac, $usdot ,$imagePath;
    public $successMessage = '';
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.wizard');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
  
     public function firstStepSubmit()
     {
         $validatedData = $this->validate([
             'name' => 'required',
             'ialn' => 'required',
             'fname' => 'required',            
             'lname' => 'required', 
             'title' => 'required', 
             'suffix' => 'required', 
             'mname' => 'required',  
         ]);
         $this->currentStep = 2;
     }
     /**
      * Write code on Method
      *
      * @return response()
      */
     public function secondStepSubmit()
     {
         $validatedData = $this->validate([      
         'websit' => 'required',
         'address' => 'required', 
         'address2' => 'required',
         'state' => 'required', 
         'zip' => 'required', 
         'city' => 'required', 
         'email' => 'required|email', 
         'phone' => [
            'required',
            'regex:/^\+\d{1,2} \(\d{3}\) \d{3}-\d{4}$/', // Adjust the regex to match your phone number format requirements
        ],
         'fax' => 'required|numeric',
 ]);
 
     $this->currentStep = 3;
     
     }
   
     /**
      * Write code on Method
      *
      * @return response()
      */
 
      public function thirdStepSubmit()
      {
        $validatedData = $this->validate([
            'password' => 'required|confirmed|min:8',
    'password_confirmation' => 'required',
        ]);
        if ($validatedData['password'] !== $validatedData['password_confirmation']) {
            throw ValidationException::withMessages([
                'password_confirmation' => 'The password confirmation does not match.',
            ]);
        }
        $this->currentStep = 4;
      }

  /**
      * Write code on Method
      *
      * @return response()

      */




      public function forthStepSubmit()
      {   
  
        $this->currentStep = 5;
      }
      public function fithStepSubmit()
      {   
        $validatedData = $this->validate([
            'image' => 'required|image|mimes:png|dimensions:min_width=200,max_width=200,min_height=100,max_height=100|max:1024',
          ]);
          $name = md5($this->image . microtime()).'.'.$this->image->extension();
          $this->imagePath = $this->image->storeAs('photos', $name);
          $this->submitForm();
      }

 /**
      * Write code on Method
      *
      * @return response()
      */
     public function submitForm()
         {             
             // Create record using validated data
             $user = User::create([
                'name' => $this->fname,
                'email' =>$this->email,
                'password' => Hash::make($this->password),
                'role' => "truck_driver", 
              ]);
              $lastInsertedId = $user->id;
              AgencyInfos::create([
                'user_id' =>$lastInsertedId ,
                'name' => $this->name,
                 'title' => $this->title,
                 'ialn' => $this->ialn,
                     'mname' => $this->mname,
'lname' => $this->lname,
'suffix' => $this->suffix,
'prefix' => $this->prefix,
'address' => $this->address,
'address2' => $this->address2,
'zip' => $this->zip,
'city' => $this->city,
'state' => $this->state,
'cellphone' => $this->phone,
'fname' => $this->fname,
'is_active' => "2",
'image_path' => $this->imagePath,
             ]);     
             $this->successMessage = 'Created Successfully.';
             $this->clearForm();
           //  return $pdf->stream($cert);
              return redirect()->to('/truckform/'.$lastInsertedId );
         }
   
     /**
      * Write code on Method
      *
      * @return response()
      */
     public function back($step)
     {
         $this->currentStep = $step;    
     }
   
     /**
      * Write code on Method
      *
      * @return response()
      */
     public function clearForm()
     {
         $this->name = '';
         $this->mc_number = '';



    // 
     }
     
 
}
