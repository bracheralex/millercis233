

    <label class="form-label" for ="first_name">First name</label>
     <input class="form-input" type="text" name="first_name" id="first_name" value="{{old('first_name',$profile->first_name)}}">

        <label class="form-label" for ="last_name">Last name</label>
           <input class="form-input" type="text" name="last_name" id="last_name" value="{{old('last_name', $profile->last_name)}}" ></label>

      <label class="form-label" for ="email">Email</label>
           <input class="form-input" type="text" name="email" id="email" value="{{old('email', $profile->email)}}" ></label>

              <label class="form-label" for ="phone_number">Phone Number</label>
           <input class="form-input" type="text" name="phone_number" id="phone_number" value="{{old('phone_number', $profile->phone_number)}}" ></label>

               <label class="form-label" for ="social_name">Social Account</label>
           <input class="form-input" type="text" name="social_name" id="social_name" value="{{old('social_name', $profile->social_name)}}" ></label>

                    <label class="form-label" for ="name">User Name for Social Account</label>
           <input class="form-input" type="text" name="name" id="name" value="{{old('name', $profile->name)}}" ></label>



           </select>