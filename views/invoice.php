<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <br>
                <h1>Invoice Details</h1>
                <small>This are all you request that have been made.</small>
                <br>
            </div>
            <div class="card-body">
            <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Invoice Number</th>
                            <th scope="col">Service Type</th>
                            <th scope="col">Service Date</th>
                            <th scope="col">Invoice amount</th>
                            <th scope="col text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php foreach($invoice as $inv){ ?> 
                        <tr>
                            <td>
                                <?php echo $inv->invoice_no ?>
                            </td>
                            <td>
                                <?php echo $inv->service_type?>
                            </td>
                            <td>
                                <?php echo $inv->custService_date ?>
                            </td>
                            <td>
                                <?php echo "R".$inv->custService_amount ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-info col-md-10" onclick="location.href = 'singleInvoice?InvoiceNo=<?=$inv->invoice_no?>'"
                                    >View Full Detail</button>
                                <?php } ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>