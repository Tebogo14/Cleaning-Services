<div class="content">
    <div class="container-fluid-login">
        <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
                <div class="page-categories">
                    <div class="card">
                        <div class="card-header">
                            <h2> Welcome to the Clean Service Applicaton </h2>
                        </div>
                        <div class="card-body">
                            <form method="post" action="?act=login">
                                <div class="font-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control form-control-lg" , required
                                        pattern="[A-Za-z]{1,}">
                                </div>
                                <br>
                                <div class="font-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control form-control-lg">
                                </div>
                                <br>
                                <div class="font-group">
                                    <button type="submit" name="login" class="btn btn-primary btn-block btn-lg"
                                        style="width:100%">Sign in</button>
                                </div>
                                <br>
                                <p class="text-center">
                                    Not yet a member?<a href="register"> Sign up</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>