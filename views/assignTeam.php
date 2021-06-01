<div class="content">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="page-categories">
                        <div class="card">
                            <div class="card-header">
                                <h1>Opened Request Details</h1>
                                <small>This are all you open cases on the system.</small>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Service Date</th>
                                            <th scope="col">Service size</th>
                                            <th scope="col text-center">Service Type</th>
                                            <th scope="col text-center">Service Amount</th>
                                            <th scope="col text-center">Assigned Team</th>
                                            <th scope="col text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($list as $service){
                                            ?>
                                        <form action="?act=update" method="POST">
                                            <tr>
                                                <td>
                                                    <input hidden name="serviceId"
                                                        value="<?=$service->srv_id;?>" />
                                                    <?php echo $service->custService_date; ?>
                                                </td>
                                                <td>
                                                    <?php echo $service->custService_size; ?>
                                                </td>
                                                <td>
                                                    <?php echo $service->service_type; ?>
                                                </td>
                                                <td>
                                                    <?php echo "R".$service->custService_amount; ?>
                                                </td>
                                                <td>
                                                    <div class="form-group col-md-12">
                                                    <?php
                                                    if($service->TeamId == 0)
                                                    {
                                                    ?>
                                                    <select class="custom-select" name="team" id="serviceType">
                                                        <option selected disabled>Select a Team</option>
                                                        <?php
                                                            foreach($team as $teams)
                                                            {
                                                                echo "<option value = '$teams->TeamId'>$teams->TeamName</option>";
                                                            }
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                    </select>
                                                    <?php
                                                     echo $service->TeamName;
                                                    }
                                                    ?>
                                                    </div>
                                                <td>
                                                    <button type="submit" name="delete"
                                                        class="btn btn-success col-md-12">Assign Team</button>
                                                <td>
                                            </tr>
                                        </form>
                                         <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>