<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="col-md-9">
                    <h1>Payment</h1>
                    <small>please select you payment method.</small>
                    <br>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div id="accordion" class="col-md-10">
                    <div class="card">
                        <div class="card-header bg-light" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link btn-block" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    Our Banking Details
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                <article>
                                    <div class=" row">
                                        <div class="col-md-6">
                                            <h5>ABSA Bank.</h5>
                                            <p><strong>Account holder:</strong> The squeaky cleaners cleaning services.
                                                <br><strong>Account number:</strong> 411 314 2603 <br><strong>Branch
                                                    number:</strong>
                                                157948 <br><strong>References:</strong> >>YOUR INVOICE NUMBER<< </p><br>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Standard Bank.</h5>
                                            <p><strong>Account holder:</strong>The squeaky cleaners cleaning services.
                                                <br><strong>Account number:</strong> 220 568 5584 <br><strong>Brance
                                                    number:</strong> 145785 <br><strong>References:</strong> >>YOUR
                                                INVOICE
                                                NUMBER<< </p>
                                                    <br>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-light" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link btn-block collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    Card Details
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row justify-content-md-center">
                                    <div class=" col-xs-6 col-md-7 col-md-offset-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <h3 class="text-center">Payment Details</h3>
                                                    <img class="img-responsive cc-img"
                                                        src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <form role="form" class="needs-validation" novalidate action="?InvoiceNo=<?=$_GET['InvoiceNo'];?>&act=update
                                                    method="POST">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>CARD NUMBER</label>
                                                                <div class="input-group">
                                                                    <input type="tel" class="form-control"
                                                                        placeholder="Valid Card Number" required />
                                                                    <span class="input-group-addon"><span
                                                                            class="fa fa-credit-card"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-7 col-md-7">
                                                            <div class="form-group">
                                                                <label>EXP DATE</label>
                                                                <input type="tel" class="form-control"
                                                                    placeholder="MM / YY" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-5 col-md-5 pull-right">
                                                            <div class="form-group">
                                                                <label>CV CODE</label>
                                                                <input type="tel" class="form-control" placeholder="CVC"
                                                                    required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>CARD OWNER</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Card Owner Names" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button type="submit" name="payment"
                                                                class="btn btn-primary btn-lg btn-block">Process
                                                                payment</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-light" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link btn-block collapsed" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    EFT Payment
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                                <div class="row justify-content-md-center"">
                            <div class=" col-xs-6 col-md-7 col-md-offset-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <h3 class="text-center">EFT Payment</h3>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form" class="needs-validation" novalidate action="?InvoiceNo=<?=$_GET['InvoiceNo'];?>&act=update"
                                                method="POST">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select class="custom-select" name="province"
                                                                id="serviceType" required>
                                                                <option selected disabled>Select a Bank</option>
                                                                <option>Nedbank</option>
                                                                <option>Absa</option>
                                                                <option>Capitec Bank</option>
                                                                <option>First National Bank</option>
                                                                <option>Standard Bank</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Amount</label>
                                                            <div class="input-group">
                                                                <input type="tel" class="form-control"
                                                                    placeholder="Amount" value="R<?=$_GET['Amount'];?>"
                                                                    required />
                                                                <span class="input-group-addon"><span
                                                                        class="fa fa-credit-card"></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" name="payment"
                                                            class="btn btn-primary btn-lg btn-block">Process
                                                            payment</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
    .cc-img {
        margin: 0 auto;
        width: 100%;
    }
</style>