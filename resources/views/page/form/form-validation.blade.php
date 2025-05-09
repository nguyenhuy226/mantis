@extends('layout')

@section('content')
 <!-- [ Main Content ] start -->
 <section class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Forms</a></li>
                <li class="breadcrumb-item" aria-current="page">Form Validation</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Form Validation</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ Form Validation ] start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>Form Validation</h5>
            </div>
            <div class="card-body">
              <form class="validate-me" id="validate-me" data-validate>
                <div class="form-group row">
                  <label class="col-lg-4 col-form-label text-lg-end">Upload any file:</label>
                  <div class="col-lg-6">
                    <input name="file" id="file" type="file" class="form-control" data-bouncer-target="#file-error-msg" required>
                    <small id="file-error-msg" class="form-text text-danger"></small>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-4 col-form-label text-lg-end">Color Picker:</label>
                  <div class="col-lg-6">
                    <input
                      type="color"
                      name="color"
                      id="color"
                      class="form-control form-control-color">
                    <small class="form-text text-muted">7-Character Hexadecimal (ex. #f7f7f7)</small>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-4 col-form-label text-lg-end">Date:</label>
                  <div class="col-lg-6">
                    <input type="date" class="form-control" name=" date" id="date" required>
                    <small class="form-text text-muted">YYYY-MM-DD</small>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-4 col-form-label text-lg-end">Time:</label>
                  <div class="col-lg-6">
                    <input type="time" class="form-control" name=" time" id="time" required>
                    <small class="form-text text-muted">HH:MM (24-hour time)</small>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-4 col-form-label text-lg-end">Month:</label>
                  <div class="col-lg-6">
                    <input type="month" class="form-control" name="month" id="month" required>
                    <small class="form-text text-muted">YYYY-MM</small>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-4 col-form-label text-lg-end">Email:</label>
                  <div class="col-lg-6">
                    <input
                      type="email"
                      name="email"
                      id="email"
                      class="form-control"
                      data-bouncer-message="The domain portion of the email address is invalid (the portion after the @)."
                      required
                   >
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-4 col-form-label text-lg-end">URL:</label>
                  <div class="col-lg-6">
                    <input
                      type="url"
                      name="url"
                      id="url"
                      class="form-control"
                      data-bouncer-message="The URL is a missing a TLD (for example, .com)."
                      required
                   >
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-4 col-form-label text-lg-end">URL without TLD allowed:</label>
                  <div class="col-lg-6">
                    <input
                      type="url"
                      name="url_not_ld"
                      id="url_not_ld"
                      class="form-control"
                      pattern="(?:(?:https?|HTTPS?|ftp|FTP):\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-zA-Z\u00a1-\uffff0-9]-*)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]-*)*[a-zA-Z\u00a1-\uffff0-9]+)*)(?::\d{2,5})?(?:[\/?#]\S*)?"
                      required
                   >
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-4 col-form-label text-lg-end">Number</label>
                  <div class="col-lg-6">
                    <input type="number" class="form-control" name="number" id="number" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-4 col-form-label text-lg-end">Number (no decimals)</label>
                  <div class="col-lg-6">
                    <input
                      type="number"
                      class="form-control"
                      step="any"
                      name="integer"
                      id="integer"
                      required
                   >
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-4 col-form-label text-lg-end">Number with Min and Max</label>
                  <div class="col-lg-6">
                    <input type="number" class="form-control" min="2" max="7" name="number_min_max" id="number_min_max" required>
                    <small class="form-text text-muted">Must be between 2 and 7</small>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-4 col-form-label text-lg-end">Telephone Number</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" name="tel" id="tel" pattern="^(?:\d{3}[\-]\d{3}[\-]\d{4})$" required>
                    <small class="form-text text-muted">123-456-7890</small>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-4 col-form-label text-lg-end">Password</label>
                  <div class="col-lg-6">
                    <input
                      type="password"
                      class="form-control"
                      name="password"
                      id="password"
                      data-bouncer-message="Please choose a password that includes at least 1 uppercase character, 1 lowercase character, and 1 number."
                      pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*"
                      required
                   >
                    <small class="form-text text-muted">At least 1 uppercase character, 1 lowercase character, and 1 number</small>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-4 col-form-label text-lg-end">Confirm Password</label>
                  <div class="col-lg-6">
                    <input
                      type="password"
                      name="confirm-password"
                      id="confirm-password"
                      data-bouncer-match="#password"
                      class="form-control"
                      data-bouncer-mismatch-message="Your passwords do not match."
                      required
                   >
                    <small class="form-text text-muted">must match the field above</small>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-4 col-form-label text-lg-end">Text with MinLength and MaxLength</label>
                  <div class="col-lg-6">
                    <input class="form-control" type="text" minlength="3" maxlength="9" name="text_min_max" id="text_min_max" required>
                    <small class="form-text text-muted">must be between 3 and 9 characters long</small>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-4 col-form-label text-lg-end">Select</label>
                  <div class="col-lg-6">
                    <select class="form-control" name="select" id="select" required>
                      <option label="select"></option>
                      <option>Harry Potter</option>
                      <option>Lord of the Rings</option>
                      <option>Star Wars</option>
                      <option>Start Trek</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-4 col-form-label text-lg-end">Radio Buttons</label>
                  <div class="col-lg-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radio" id="radio-1" required>
                      <label class="form-check-label" for="radio-1"> Yes </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radio" id="radio-2" required>
                      <label class="form-check-label" for="radio-2"> No </label>
                    </div>
                  </div>
                </div>

                <div class="form-group row align-items-center">
                  <label class="col-lg-4 col-form-label text-lg-end">Checkboxes</label>
                  <div class="col-lg-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="checkbox-1" id="checkbox-1" required>
                      <label class="form-check-label" for="checkbox-1"> Default checkbox </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row mb-0">
                  <div class="col-lg-4 col-form-label"></div>
                  <div class="col-lg-6">
                    <input type="submit" class="btn btn-primary" value="Submit">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- [ Form Validation ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </section>
  <!-- [ Main Content ] end -->
@endsection