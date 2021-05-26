<div class="content">
    <div class="container-fluid-login">
        <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
                <div class="page-categories">
                    <div class="card">
                        <div class="card-header">
                            <h2> Register </h2>
                        </div>
                        <div class="card-body">
                        <form method="post" action="?act=register">
     
                        <br><div class="font-group">
                        <label>Firstname</label>
                        <input type="text" name="firstname" class="form-control form-control-lg ", required pattern="[a-zA-Z]{3,}">
                        </div>
                        
                        <br><div class="font-group">
                        <label>Lastname</label>
                        <input type="text" name="lastname" class="form-control form-control-lg" ,required pattern="[A-Za-z]{1,}" >
                        </div>
                        
                        <br><div class="font-group">
                        <label>Contact</label>
                        <input type="text" name="contact" class="form-control form-control-lg", required pattern="[0-9]{10}">
                        </div>
                    
                        
                        <br><div class="font-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control form-control-lg">
                        </div>
                        
                        <br><div class="font-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control form-control-lg", required pattern="[A-Za-z]{1,}">
                        </div>
                        
                        <br><div class="font-group">
                        <label>Password</label>
                        <input type="password" name="password"class="form-control form-control-lg">
                        </div>
                        
                        <br><div class="font-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password_2"class="form-control form-control-lg">
                        </div>
                        
                        <br>
                        <div class="font-group" >
                       
                        <button type="submit" name="register" class="btn btn-primary btn-block btn-lg" style="width:100%"> Sign up</button>
                        </div>
                        <br>
                        <p class="text-center">
                          Already a member?<a href="./" > Sign in</a>  
                        </p>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>