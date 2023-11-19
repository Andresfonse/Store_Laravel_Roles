<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Student;
class Users extends Component
{
 public $ids;
 public $firstname;
 public $lastname;
 public $email;
 public $phone;
 public $image;

 public function resetInputFields()
 {
 $this->firstname = '';
 $this->lastname = '';
 $this->email='';
 $this->phone='';
 $this->image='';

 }
 public function store()
 {
 $validatedData = $this->validate([
 'firstname' => 'required',
 'lastname' => 'required',
 'email' => 'required|email',
 'phone' => 'required',
 'image' => 'required'


 ]);
 Student::create($validatedData);
 session()->flash('message','Student Created Successfully!');
 $this->resetInputFields();
 $this->emit('studentAdded');
 }
 public function edit($id)
 {
 $student = Student::where('id',$id)->first();
 $this->ids = $student->id;
 $this->firstname = $student->firstname;
 $this->lastname = $student->lastname;
 $this->email = $student->email;
 $this->phone = $student->phone;
 $this->image = $student->image;

 }
 public function update()
 {
 $this->validate([
 'firstname' => 'required',
 'lastname' => 'required',
 'email' => 'required|email',
 'phone' => 'required',
 'image' => 'required'


 ]);
 if($this->ids)
 {
 $student = Student::find($this->ids);
 $student->update([
 'firstname' => $this->firstname,
 'lastname' => $this->lastname,
 'email' => $this->email,
 'phone' => $this->phone,
 'image' => $this->image

 ]);
 session()->flash('message','Student Updated Successfully');
 $this->resetInputFields();
 $this->emit('studentUpdated');
 }

 }

 public function  destroy($id)
 {
   $student = Student::where('id',$id)->first();
   $this->ids = $student->id;
 }
 public function delete()
 {
   if($this->ids)
   {
      $student = Student::find($this->ids);
      $student->delete();
      session()->flash('message','Student delte suceffull');
      $this->resetInputFields();
      $this->emit('studentDeleted');
   }
 }

 
 public function render()
 {
 $students = Student::orderBy('id','DESC')->get();
 return view('livewire.users',['users'=>$students]);
 }
}