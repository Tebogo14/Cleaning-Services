<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <br>
                <h1>Service Request Details</h1>
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
                            <th scope="col text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($invoice as $inv){ ?> 
                        <tr>
                        <form action="?act=delete" method="POST">
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
                                <button type="submit" name="delete" value="<?= $inv->invoice_no?>" class="btn btn-danger col-md-6"
                                    >Cancel</button>
                                <?php } ?>
                            </td>
                        </tr>
                      </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>