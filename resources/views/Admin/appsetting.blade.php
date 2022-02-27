@extends('layouts.admin')
@section('title', 'appsetting')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header card-title">
            Application Setting
        </div>
        <div class="card-body col-sm-10">
            <form action="">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Application Title*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title"
                            placeholder="Application Title Here" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address"
                            placeholder="Dhak,Bangladesh" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="admin@gmail.com" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Phone" placeholder="+123456789" required>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <label for="favicon" class="col-sm-2 col-form-label">Favicon</label>
                    <input type="file" class="form-control-file" id="file">
                </div>
                <div class="form-group d-flex">
                    <label for="dashboardLogo" class="col-sm-2 col-form-label">Dashboard Logo</label>
                    <input type="file" class="form-control-file" id="file">
                </div>
                <div class="form-group row">
                    <label for="left_to_right" class="col-sm-2 col-form-label">Admin Align</label>
                    <div class="col-sm-10">
                        <select name="site_align" class="form-control">
                            <option value="LTR" selected="selected">Left to Right</option>
                            <option value="RTL">Right to Left</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="office_time" class="col-sm-2 col-form-label">Office Time</label>
                    <div class="col-sm-10">
                        <textarea name="office_time" class="form-control" placeholder="Office Time" maxlength="255"
                            rows="7">Monday - Friday: 08:00 - 22:00
                                    Saturday, Sunday: Closed
                            </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Latitude" class="col-sm-2 col-form-label">Latitude, Longitude</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Latitude" placeholder="40.6700, -73.9400" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="footer_text" class="col-sm-2 col-form-label">Footer Text</label>
                    <div class="col-sm-10">
                        <textarea name="office_time" class="form-control" placeholder="Office Time" maxlength="255"
                            rows="7">2021 © Copyright bdtask Treading System
                            </textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary mr-3 btn-md">Reset</button>
                    <button type="button" class="btn btn-secondary btn-md">Save</button>
                </div>

            </form>
        </div>

    </div>

</div>

@endsection
