<form method="POST" action="{{ url('/create') }}">
    {{-- @method('PUT') --}}
       @csrf

       <div class="mb-3">
           <label for="institut" class="form-label">Institusi / Universitas</label>
           <input type="text" class="form-control" id="univ" placeholder="Lengkapi Data Asal Institusi / Universitas Anda" value="{{old('user_id')}}">
         </div>

       <div class="mb-3">
         <label for="institut" class="form-label">Institusi / Universitas</label>
         <input type="text" class="form-control" id="univ" placeholder="Lengkapi Data Asal Institusi / Universitas Anda" value="{{old('name')}}">
       </div>
       <div class="mb-3">
         <label for="graduate" class="form-label">Tanggal Wisuda</label>
         <input type="date" class="form-control" id="datepicker" value="{{old('graduate')}}">
       </div>
       <div class="mb-3">
           <label for="jenjang" class="form-label">Jenjang</label>
           <select class="form-select" aria-label="Default select example">
               <option selected value="{{old('major')}}">-- Pilih Jenjang --</option>
               <option value="1">S3</option>
               <option value="2">S2</option>
               <option value="3">S1/D4</option>
               <option value="4">D3</option>
               <option value="5">SMA/SMK</option>

             </select>
       </div>
         <div class="mb-3">
           <label for="jurusan" class="form-label">Jurusan</label>
           <input type="text" class="form-control" id="jurusan" placeholder="Lengkapi Data Jurusan Anda" value="{{old('level')}}">
         </div>
         <div class="mb-3">
           <label for="nilai" class="form-label">Nilai Akhir</label>
           <input type="text" class="form-control" id="nilai" placeholder="Lengkapi Data Nilai Akhir Anda" value="{{old('gpa')}}">
         </div>

       {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}

       <div class="row">
           <div class="col">
               <a href="#" style="margin-left: 350px ;" class="btn-get-started-new scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                   <span>Cancel</span>
               </a>
               <button type="submit" style="margin-left: 10px;" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                   <span style="padding: 5px;">Save</span>
               </a>
           </div>
       </div>
     </form>
