<div class="content">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="page-categories">
                        <div class="card">
                            <div class="card-header">
                                <h1>Users Details</h1>
                                <small>This are all you user on the system.</small>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Surname</th>
                                            <th scope="col">Email Address</th>
                                            <th scope="col text-center">Username</th>
                                            <th scope="col text-center">Contact Number</th>
                                            <th scope="col text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($list as $customer){ ?>
                                        <form action="?act=delete" method="POST">
                                            <tr>
                                                <td>
                                                    <?php echo $customer->firstname; ?>
                                                </td>
                                                <td>
                                                    <?php echo $customer->lastName; ?>
                                                </td>
                                                <td>
                                                    <?php echo $customer->Email; ?>
                                                </td>
                                                <td>
                                                    <?php echo $customer->username; ?>
                                                </td>
                                                <td>
                                                    <?php echo $customer->contact; ?>
                                                </td>
                                                <td>
                                                    <button type="submit" name="delete" value="<?= $customer->username; ?>"
                                                        class="btn btn-danger col-md-12">Delete</button>
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
            </div>
        </div>
    </div>
</div>