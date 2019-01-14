    <div class="contact-area d-flex align-items-center">

        <div class="contact-info" style="border-right: 1px solid #006EE3">
            <?php echo form_open('auth/register'); ?>
                <blockquote class="blockquote">
                <p class="mb-0"><h1>Register</h1></p>
                </blockquote>

                <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username-reg" aria-describedby="emailHelp" placeholder="Enter username" required>
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama-reg" aria-describedby="emailHelp" placeholder="Enter Full Name" required>
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email-reg" aria-describedby="emailHelp" placeholder="Enter Email" required>
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">No Telepon</label>
                <input type="text" class="form-control" name="hp-reg" aria-describedby="emailHelp" placeholder="Enter Number Phone" required>
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" name="pass-reg" aria-describedby="emailHelp" placeholder="Enter Password" required>
                </div>

                <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control" name="con-pass-reg" placeholder="Enter Confirm Password" required>
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            <?php echo form_close(); ?>
        </div>

        <div class="contact-info" style="border-right: 10px solid #28A745">
            <?php echo form_open('auth/login_user'); ?>
                <blockquote class="blockquote">
                <p class="mb-0"><h1>Login</h1></p>
                </blockquote>

                <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control is-valid" name="username-log" aria-describedby="emailHelp" placeholder="Enter username" required>
                </div>

                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control is-valid" name="pass-log" placeholder="Password" required>
                </div>

                <button type="submit" class="btn btn-success">Login</button>
            <?php echo form_close(); ?>
        </div>

    </div>
    <br>