
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="page-categories">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="card-title">Service Request Details</h1>
                                <small>please provide the following information so that a request can be made.</small>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <form class="needs-validation" novalidate action="createNewBooking" method="POST">
                                        <div class="input-group mb-3">

                                            <select class="custom-select" name="serviceType" id="serviceType">
                                                <option selected disabled>Select A Service Type</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="width">Width size</label>
                                                <input type="number" name="width" class="form-control" required
                                                    placeholder="Enter size in meters">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="Length">Length size</label>
                                                <input type="number" name="length" class="form-control" required
                                                    placeholder="Enter size in meters">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="servicedate">Service Date</label>
                                            <input type="date" name="servicedate" class="form-control" required
                                                placeholder="Please select the service date">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="streetName">Street Name</label>
                                                <input type="text" name="streetName" class="form-control" required
                                                    placeholder="Enter Street Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="postalAddress">Postal Address</label>
                                                <input type="text" name="postalAddress" class="form-control" required
                                                    placeholder="Enter Postal Address">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="streetName">Suburb Name</label>
                                                <input type="text" name="suburb" class="form-control" required
                                                    placeholder="Enter Suburb Name">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="postalAddress">City Name</label>
                                                <input type="text" name="city" class="form-control" required
                                                    placeholder="Enter City Address">
                                            </div>
                                            <br>
                                            <div class="form-group col-md-4">
                                                <select class="custom-select" name="province" id="serviceType" required
                                                    style=" margin-top: 10%;">
                                                    <option selected disabled>Select A Provinces</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
