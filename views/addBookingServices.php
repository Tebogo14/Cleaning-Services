<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 ml-auto mr-auto">
                <div class="page-categories">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title">Service Request Details</h1>
                            <small>please provide the following information so that a request can be made.</small>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form class="needs-validation" action="./service?act=update" method="POST">
                                    <div class="input-group mb-3">
                                        <select class="custom-select" name="serviceType" id="serviceType">
                                            <option selected disabled>Select A Service Type</option>
                                            <?php
                                            foreach($list as $service)
                                            {
                                                echo "<option value = ".$service->id.">".$service->type."  [R".$service->price."]</option>";
                                            }
                                            ?>
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
                                                <?php
                                                    foreach($province as $prov)
                                                    {
                                                        echo "<option value = ".$prov->proviceId.">".$prov->proviceName."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit"
                                        class="btn btn-primary float-right">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            if(isset($invoice))
            {
            ?>
            <div class="card col-md-3">
                <div style="margin-top:10%">
                    <div class="card">
                        <div class="card-header text-center card-header-warning card-header-text">
                            <div class="card-text">
                                Invoice Summary
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-category"> Summary
                            </h6>
                            <p class="card-description small">
                                <strong>Invoice No: </strong>
                                <?php
                                    echo $invoice->invoice_no;
                                ?>                  
                            </p>
                            <p class="card-description small">
                                <strong>Service: </strong>
                                <?php
                                    echo $invoice->service_type;
                                ?> 
                            </p>
                            <p class="card-description small">
                                <strong>Amount: </strong>R
                                <?php
                                    echo $invoice->custService_amount;
                                ?> 
                            </p>
                        </div>
                    </div>
                    <div class="row title">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-info width-100"
                                onclick="location.href = 'singleInvoice?InvoiceNo=<?=$invoice->invoice_no;?>'"><span
                                    class="btn-label">
                                    <i class="fas fa-plus-circle"></i>
                                </span>View Invoice</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>