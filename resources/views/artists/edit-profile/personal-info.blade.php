<form id="personalInfoForm" class="lv-form" action="{{url('saveBasic')}}" method="POST">
    {{csrf_field()}}
    <h3 class="form-title">Personal Info</h3>

    <div class="layout">
        <label class="required">
            Name:
            <input type="text" name="name" value="{{$artist->name}}" placeholder="Full name">
        </label>

        <label class="required">
            Email
            <input type="text" name="email" value="{{$artist->email}}" placeholder="Enter your email">
        </label>
    </div>

    <div class="layout">
        <label class="required">
            Gender:
            <div style="padding: 4px 0;" class="layout">
                <label for="maleGender" style="width: auto;">
                    <input id="maleGender" type="radio" name="gender" {{$artist->gender == 'male' ? 'checked' : ''}} value="male"> Male
                </label>&emsp;
                <label for="femaleGender">
                    <input id="femaleGender" type="radio" name="gender" {{$artist->gender == 'female' ? 'checked' : ''}} value="female"> Female
                </label>
            </div>
        </label>

        <label class="required">
            Date of Birth:
            <input type="date" ma="2001-12-31" data-date-format="dd/mm/yyyy" name="dob" value="{{$artist->dob}}" placeholder="Enter your date of birth">
        </label>
    </div>

    <br>
    <button type="submit" disable>ARTISTIC INFO &emsp; <i class="fa fa-chevron-right"></i></button>
</form>