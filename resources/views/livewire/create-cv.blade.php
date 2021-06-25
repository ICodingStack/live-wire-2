<div class="container">
 <div class="row">
     <div class="col-md-5">
         <h4 style="color: green;">Enter Your Information</h4>
         <div class="form-group">
             <label for="exampleInputEmail1">Full Name</label>
             <input wire:model.debounce.500ms="fullName" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full Name">

         </div>
         <div class="form-group">
             <label for="exampleInputEmail1">Email</label>
             <input wire:model.lazy="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
         </div>
         <div class="form-group">
             <label for="exampleInputEmail1">Birthday</label>
             <input wire:model.lazy="age" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
         </div>
         <div class="form-group">
             <label for="exampleInputEmail1">Nationality</label>
             <select wire:model.lazy="nationality" class="form-control form-control-lg">
                 <option>Please Select</option>
                 <option>Syria</option>
                 <option>Lebanon</option>
                 <option>USA</option>
                 <option>Italy</option>
             </select>
         </div>
         <div class="form-group">
             <label for="exampleInputEmail1">Experience</label>
             <select wire:model.lazy="exp" class="form-control form-control-lg" multiple>
                 <option>IT</option>
                 <option>Design</option>
                 <option>Drow</option>
                 <option>Office</option>
             </select>
         </div>
         <div class="form-group">
             <label for="exampleInputEmail1">Gender</label>
             <div class="form-check form-check-inline">
                 <input wire:model.lazy="gender" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Male">
                 <label class="form-check-label" for="inlineRadio1">Male</label>
             </div>
             <div class="form-check form-check-inline">
                 <input wire:model.lazy="gender" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Female">
                 <label class="form-check-label" for="inlineRadio2">Female</label>
             </div>

         </div>
         <div class="form-group">
             <label for="exampleInputEmail1">Accept Our term & conditions</label>
             <div class="form-check form-check-inline">
                 <input wire:model.debounce.500ms="terms" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes">
                 <label class="form-check-label" for="inlineCheckbox1">Yes Accept</label>
             </div>

         </div>
         <div class="form-group">
             <label for="exampleInputEmail1">Descraption</label>
             <textarea wire:model.lazy="info" class="form-control" cols="30" rows="10"></textarea>
         </div>
     </div>
     <div class="col-md-7">
         <div class="card" style="width: 50rem;">

             <div class="card-body">
                 <h4 style="color: green;">Create ur resume</h4>
                 <h5 class="card-title">Full Name : <span style="color: blue;">{{$fullName}}</span></h5>
                 <h5 class="card-title">Email : <span style="color: blue;">{{$email}}</span></h5>
                 <h5 class="card-title">Birthday : <span style="color: blue;">{{$age}}</span></h5>
                 <h5 class="card-title">Nationality : <span style="color: blue;">{{$nationality}}</span></h5>
                 <h5 class="card-title">Gender : <span style="color: blue;">{{$gender}}</span></h5>
                 <h5 class="card-title">Experience : <span style="color: blue;">{{implode(',',$exp)}}</span></h5>
                 <h5 class="card-title">Accout our term & conditions @if($terms) <i class="fa fa-check" style="color: green;"></i> @else <i class="fa fa-times" style="color:red;"></i> @endif   </h5>
                 <h5 class="card-title">Descraption</h5>
                 <p class="card-text">{{$info}}</p>
                 <a href="#" class="btn btn-primary">Save</a>
             </div>
         </div>
     </div>
 </div>

</div>
