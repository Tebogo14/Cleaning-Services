<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h1>Your Invoice</h1>
                Invoice Date
                <strong>
                    <?php echo $invoice->inv_date ?>
                </strong>
                <span class="float-right"> <strong>Invoice No:</strong>
                    <?php echo $invoice->inv_no ?>
                </span>

            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">From:</h6>
                        <div>
                            <strong>Cleaning Services</strong>
                        </div>
                        <div>527A nelspruit</div>
                        <div>P.O Box 3171</div>
                        <div>Mbombela, 1216</div>
                        <div>Email: css@cleaning_services.com</div>
                        <div>Phone: (013) 766 1288</div>
                    </div>

                    <div class="col-sm-6">
                        <h6 class="mb-3">To:</h6>
                        <div>
                            <strong>
                                <?php echo "$invoice->cust_name $invoice->cust_surname"  ?>
                            </strong>
                        </div>
                        <div>
                            <?php echo nl2br ("$invoice->loc_streetname \n$invoice->loc_address\n$invoice->loc_city\n$invoice->loc_suburb\n$invoice->loc_province") ?>
                        </div>

                        <div>Email:
                            <?php echo $invoice->cust_email ?>
                        </div>
                        <div>Phone:
                            <?php echo $invoice->cust_contact_nr ?>
                        </div>
                    </div>



                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>

                                <th>Description</th>

                                <th class="right">Unit Cost</th>
                                <th class="center">Size</th>
                                <th class="right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="center">1</td>
                                <td class="left">
                                    <?php echo $invoice->service_type ?>
                                </td>

                                <td class="right">
                                    <?php echo " R$invoice->service_price" ?>
                                </td>
                                <td class="center">
                                    <?php echo $invoice->srv_size ?>
                                </td>
                                <td class="right">
                                    <?php echo "R$invoice->srv_amount" ?>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong>Subtotal</strong>
                                    </td>
                                    <td class="right">
                                        <?php echo "R$invoice->srv_amount" ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>VAT (15%)</strong>
                                    </td>
                                    <td class="right">R
                                        <?php echo round($invoice->vat,2) ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="right">
                                        <strong>R
                                            <?php echo round(($invoice->total_amount + $invoice->vat),2) ?>
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="right">
                                        <button type="button" class="btn btn-info width-100"
                                            onclick="location.href = 'payInvoice?InvoiceNo=<?=$_GET['InvoiceNo'];?>&Amount=<?=$invoice->total_amount;?>'"><span
                                                class="btn-label">
                                                <i class="fas fa-plus-circle"></i>
                                            </span>Pay Now</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>