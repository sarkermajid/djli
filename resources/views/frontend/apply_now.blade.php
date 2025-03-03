@extends('frontend.index')

@section('frontend')
<section id="contact" class="contact">
    <div class="container" style="margin-top: 100px;">
      <div class="row mt-5 justify-content-center" data-aos="fade-up">
        <div class="col-lg-12">
            <form action="{{ route('submitForm') }}" method="post" role="form" class="form-design" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div style="text-align:center; padding-bottom:20px;">
                    <img src="{{ asset('frontend/assets/img/LOGO DJLI.png') }}" style="width:80px;" alt="">
                </div>
              <h3 class="text-center mb-5" style="color: #EA232A">DHAKA JAPANESE LANGUAGE INSTITUTE APPLICATION FORM</h3>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('warning'))
                    <div class="alert alert-warning">
                        {{ session('warning') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              <div class="row">
                <div class="col-md-6 form-group">

                </div>
                <div class="col-md-3 form-group">
                    <label for="apply_period" class="mb-1">APPLICATION PERIOD</label>
                    <select class="form-select" id="apply_period">
                        <option disabled selected> --- SELECT --- </option>
                        <option value="april">APRIL</option>
                        <option value="july">JULY</option>
                        <option value="october">OCTOBER</option>
                    </select>
                </div>
                <div class="col-md-3 form-group">
                    <div class="form-group">
                        <label for="as_per" class="mb-1">AS PER</label>
                        <select class="form-select" name="as_per" id="as_per">
                            <option disabled selected> --- SELECT --- </option>
                            <option value="Passport">PASSPORT</option>
                            <option value="Nid">NID</option>
                            <option value="Birth_Certificate">BIRTH CERTIFICATE</option>
                        </select>
                    </div>
                </div>
              </div>

              <div class="col-md-12 form-group">
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="NAME" required>
              </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group mt-3">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="EMAIL" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" id="phone" placeholder="PHONE" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 form-group mt-3">
                    <input type="text" class="form-control" id="dob" name="dob"
                    placeholder="DATE OF BIRTH" onfocus="(this.type='date')"
                    onblur="if(!this.value) this.type='text';">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group mt-3">
                    <input type="text" class="form-control" value="{{ old('present_address') }}" name="present_address" id="present_address" placeholder="PRESENT ADDRESS" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                    <input type="text" class="form-control" value="{{ old('permanent_address') }}" name="permanent_address" id="permanent_address" placeholder="PERMANENT ADDRESS" required>
                </div>
            </div>

            <div class="form-group mt-3">
              <input type="text" class="form-control" name="upn" id="upn" value="{{ old('upn') }}" placeholder="UNION PORISHAD NAME" required>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group mt-3">
                        <label for="passport" class="mb-2 ml-2">PASSPORT</label>
                        <select class="form-select" value="{{ old('passport') }}" id="passport" aria-label="Default select example">
                            <option disabled selected> --- SELECT --- </option>
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row" id="passportDetails" style="display: none;">
                <div class="col-md-6 form-group mt-3">
                    <input type="text" class="form-control" id="date_issue" value="{{ old('date_issue') }}" name="date_issue"
                        placeholder="DATE OF ISSUE" onfocus="(this.type='date')"
                        onblur="if(!this.value) this.type='text';">
                </div>
                <div class="col-md-6 form-group mt-3">
                    <input type="text" class="form-control" id="date_expiration" value="{{ old('date_expiration') }}" name="date_expiration"
                        placeholder="DATE OF EXPIRATION" onfocus="(this.type='date')"
                        onblur="if(!this.value) this.type='text';">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group mt-3">
                        <label for="passport" class="mb-2 ml-2">PRIMARY</label>
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="p_sch_name"  value="{{ old('p_sch_name') }}" name="p_sch_name" placeholder="NAME OF SCHOOL" required>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="date_expiration" value="{{ old('p_sch_graduation') }}" name="p_sch_graduation"
                                placeholder="DATE OF ENTRANCE/DATE OF GRADUATION" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="p_location" name="p_location" value="{{ old('p_location') }}" placeholder="LOCATION" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group mt-3">
                        <label for="passport" class="mb-2 ml-2">SSC</label>
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="ssc_name" value="{{ old('ssc_name') }}" name="ssc_name" placeholder="NAME OF SCHOOL" required>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="ssc_date_exp" value="{{ old('ssc_date_exp') }}" name="ssc_date_exp"
                                placeholder="DATE OF ENTRANCE/DATE OF GRADUATION" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="ssc_location" value="{{ old('ssc_location') }}" name="ssc_location" placeholder="LOCATION" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group mt-3">
                        <label for="passport" class="mb-2 ml-2">HSC</label>
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="hsc_name" value="{{ old('hsc_name') }}" name="hsc_name" placeholder="NAME OF SCHOOL" required>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="hsc_date_exp" value="{{ old('hsc_date_exp') }}" name="hsc_date_exp"
                                placeholder="DATE OF ENTRANCE/DATE OF GRADUATION" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="hsc_location" value="{{ old('hsc_location') }}" name="hsc_location" placeholder="LOCATION" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group mt-3">
                        <label for="passport" class="mb-2 ml-2">BACHELOR</label>
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="bsc_name" value="{{ old('bsc_name') }}" name="bsc_name" placeholder="NAME OF SCHOOL">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="bsc_date_exp" value="{{ old('bsc_date_exp') }}" name="bsc_date_exp"
                                placeholder="DATE OF ENTRANCE/DATE OF GRADUATION" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="bsc_location" value="{{ old('bsc_location') }}" name="bsc_location" placeholder="LOCATION">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group mt-3">
                        <label for="passport" class="mb-2 ml-2">MASTERS</label>
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="msc_name" value="{{ old('msc_name') }}" name="msc_name" placeholder="NAME OF SCHOOL">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="msc_date_exp" value="{{ old('msc_date_exp') }}" name="msc_date_exp"
                                placeholder="DATE OF ENTRANCE/DATE OF GRADUATION" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="msc_location" value="{{ old('msc_location') }}" name="msc_location" placeholder="LOCATION">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group mt-3">
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="" class="mb-2 ml-2">JAPANESE LANGUAGE ABILITY</label>
                            </div>
                            <div class="col-lg-9">
                                <!-- Yes/No Radio Button Option -->
                                <div class="">
                                    <label class="mb-2">DID YOU APPLY BEFORE IN JAPAN ?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="applied_yes" style="height: 15px;" name="apply_before" value="Yes">
                                        <label class="form-check-label" for="applied_yes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="applied_no" style="height: 15px;" name="apply_before" value="No">
                                        <label class="form-check-label" for="applied_no">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="exam_name[]" name="exam_name[]" placeholder="NAME OF EXAM" >
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="exam_year[]" name="exam_year[]" placeholder="YEAR OF EXAM" >
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="result[]" name="result[]" placeholder="RESULT">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="exam_name[]" name="exam_name[]" placeholder="NAME OF EXAM" >
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="exam_year[]" name="exam_year[]" placeholder="YEAR OF EXAM" >
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="result[]" name="result[]" placeholder="RESULT">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="exam_name[]" name="exam_name[]" placeholder="NAME OF EXAM" >
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="exam_year[]" name="exam_year[]" placeholder="YEAR OF EXAM" >
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="result[]" name="result[]" placeholder="RESULT">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="exam_name[]" name="exam_name[]" placeholder="NAME OF EXAM" >
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="exam_year[]" name="exam_year[]" placeholder="YEAR OF EXAM" >
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="result[]" name="result[]" placeholder="RESULT">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group mt-3">
                        <label for="" class="mb-2 ml-2">FAMILY INFORMATION</label>
                        <div class="row">
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="fm_name[]" name="fm_name[]" placeholder="NAME" >
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="relationship" name="relationship[]" placeholder="RELATIONSHIP" >
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="fm_dob[]" name="fm_dob[]"
                                placeholder="DATE OF BIRTH" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="occupation[]" name="occupation[]" placeholder="OCCUPATION">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="fm_name[]" name="fm_name[]" placeholder="NAME" >
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="relationship" name="relationship[]" placeholder="RELATIONSHIP" >
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="fm_dob[]" name="fm_dob[]"
                                placeholder="DATE OF BIRTH" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="occupation[]" name="occupation[]" placeholder="OCCUPATION">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="fm_name[]" name="fm_name[]" placeholder="NAME" >
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="relationship" name="relationship[]" placeholder="RELATIONSHIP" >
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="fm_dob[]" name="fm_dob[]"
                                placeholder="DATE OF BIRTH" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="occupation[]" name="occupation[]" placeholder="OCCUPATION">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="fm_name[]" name="fm_name[]" placeholder="NAME" >
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="relationship" name="relationship[]" placeholder="RELATIONSHIP" >
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="fm_dob[]" name="fm_dob[]"
                                placeholder="DATE OF BIRTH" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="occupation[]" name="occupation[]" placeholder="OCCUPATION">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="fm_name[]" name="fm_name[]" placeholder="NAME" >
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="relationship" name="relationship[]" placeholder="RELATIONSHIP" >
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="fm_dob[]" name="fm_dob[]"
                                placeholder="DATE OF BIRTH" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="occupation[]" name="occupation[]" placeholder="OCCUPATION">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="fm_name[]" name="fm_name[]" placeholder="NAME" >
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="relationship" name="relationship[]" placeholder="RELATIONSHIP" >
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="fm_dob[]" name="fm_dob[]"
                                placeholder="DATE OF BIRTH" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="occupation[]" name="occupation[]" placeholder="OCCUPATION">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="fm_name[]" name="fm_name[]" placeholder="NAME" >
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="relationship" name="relationship[]" placeholder="RELATIONSHIP" >
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="fm_dob[]" name="fm_dob[]"
                                placeholder="DATE OF BIRTH" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="occupation[]" name="occupation[]" placeholder="OCCUPATION">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group mt-3">
                        <label for="passport" class="mb-2 ml-2">FINANCIAL SUPPORTER</label>
                        <div class="row">
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="s_name" value="{{ old('s_name') }}" name="s_name" placeholder="SUPPORTER NAME">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="s_phone" name="s_phone" value="{{ old('s_phone') }}" placeholder="PHONE">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="s_address" name="s_address" value="{{ old('s_address') }}" placeholder="SUPPORTER ADDRESS">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name') }}" placeholder="COMPANY NAME">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group mt-3">
                        <label for="image" class="mb-2 ml-2">YOUR IMAGE</label>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="file" name="image" class="form-control"
                                id="image" required accept=".jpg,.jpeg,.png">

                                <img class="mt-3" src="" id="showPhoto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group mt-3">
                        <label for="document" class="mb-2 ml-2">
                            PLEASE SUBMIT ALL REQUIRED DOCUMENTS, INCLUDING SSC AND HSC CERTIFICATES, MARK SHEETS, NID, AND PASSPORT
                        </label>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="file" name="document" class="form-control" id="document"
                                required accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="text-center mt-5"><button type="submit">SUBMIT APPLICATION</button></div>
          </form>
        </div>
      </div>
    </div>
  </section>


<script>
      document.getElementById("passport").addEventListener("change", function() {
          var passportDetails = document.getElementById("passportDetails");
          if (this.value == "1") {
              passportDetails.style.display = "flex";
          } else {
              passportDetails.style.display = "none";
          }
      });
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
{{-- image preview js --}}
<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showPhoto').attr('src', e.target.result).width(300).height(300);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
<script>
    // Ensure only one checkbox is selected at a time
    document.querySelectorAll('input[name="applied_before"]').forEach((checkbox) => {
        checkbox.addEventListener('change', function() {
            document.querySelectorAll('input[name="applied_before"]').forEach((other) => {
                if (other !== this) other.checked = false;
            });
        });
    });
</script>
<script>
    // for notification alert auto remove 3sec
    $(document).ready(function () {
        setTimeout(function () {
            $(".alert").fadeOut("slow");
        }, 3000); // 3 seconds
    });
</script>
@endsection
