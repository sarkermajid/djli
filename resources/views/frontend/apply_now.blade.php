@extends('frontend.index')

@section('frontend')
<section id="contact" class="contact">
    <div class="container" style="margin-top: 80px;">
      <div class="row mt-5 justify-content-center" data-aos="fade-up">
        <div class="col-lg-12">
            <form action="forms/contact.php" method="post" role="form" class="form-design">
            <div class="row">
                <div style="text-align:center; padding-bottom:20px;">
                    <img src="{{ asset('frontend/assets/img/LOGO DJLI.png') }}" style="width:80px;" alt="">
                </div>
              <h3 class="text-center mb-5" style="color: #EA232A">DHAKA JAPANESE LANGUAGE INSTITUTE APPLICATION FORM</h3>
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
                            <option value="passport">PASSPORT</option>
                            <option value="nid">NID</option>
                            <option value="birth_cer">BIRTH CERTIFICATE</option>
                        </select>
                    </div>
                </div>
              </div>
              <div class="col-md-12 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="NAME" required>
              </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="EMAIL" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="PHONE" required>
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
                    <input type="text" class="form-control" name="present_address" id="present_address" placeholder="PRESENT ADDRESS" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                    <input type="text" class="form-control" name="permanent_address" id="permanent_address" placeholder="PERMANENT ADDRESS" required>
                </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="upn" id="upn" placeholder="UNION PORISHAD NAME" required>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group mt-3">
                        <label for="passport" class="mb-2 ml-2">PASSPORT</label>
                        <select class="form-select" id="passport" aria-label="Default select example">
                            <option disabled selected> --- SELECT --- </option>
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row" id="passportDetails" style="display: none;">
                <div class="col-md-6 form-group mt-3">
                    <input type="text" class="form-control" id="date_issue" name="date_issue"
                        placeholder="DATE OF ISSUE" onfocus="(this.type='date')"
                        onblur="if(!this.value) this.type='text';">
                </div>
                <div class="col-md-6 form-group mt-3">
                    <input type="text" class="form-control" id="date_expiration" name="date_expiration"
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
                                <input type="text" class="form-control" id="" name="p_sch_name" placeholder="NAME OF SCHOOL" required>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="date_expiration" name="p_sch_graduation"
                                placeholder="DATE OF ENTRANCE/DATE OF GRADUATION" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="p_location" name="p_location" placeholder="LOCATION" required>
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
                                <input type="text" class="form-control" id="" name="p_sch_name" placeholder="NAME OF SCHOOL" required>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="date_expiration" name="p_sch_graduation"
                                placeholder="DATE OF ENTRANCE/DATE OF GRADUATION" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="p_location" name="p_location" placeholder="LOCATION" required>
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
                                <input type="text" class="form-control" id="" name="p_sch_name" placeholder="NAME OF SCHOOL" required>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="date_expiration" name="p_sch_graduation"
                                placeholder="DATE OF ENTRANCE/DATE OF GRADUATION" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="p_location" name="p_location" placeholder="LOCATION" required>
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
                                <input type="text" class="form-control" id="" name="p_sch_name" placeholder="NAME OF SCHOOL" required>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="date_expiration" name="p_sch_graduation"
                                placeholder="DATE OF ENTRANCE/DATE OF GRADUATION" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="p_location" name="p_location" placeholder="LOCATION" required>
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
                                <input type="text" class="form-control" id="" name="p_sch_name" placeholder="NAME OF SCHOOL" required>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="date_expiration" name="p_sch_graduation"
                                placeholder="DATE OF ENTRANCE/DATE OF GRADUATION" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="p_location" name="p_location" placeholder="LOCATION" required>
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
@endsection
