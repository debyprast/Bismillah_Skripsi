<body class="bg-gradient-primary">
    <div class="container" style="margin-top:6%;">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h2 text-gray-900 mb-4"><i class="fas fa-graduation-cap"></i> LOGIN USER</h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <form class="user" method="post" action="<?= base_url('authuser'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username" placeholder="Masukkan Username" name="username" value="<?= set_value('username'); ?>">
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" placeholder="*******" name="password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            LOGIN
                                        </button>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('loginadmin') ?>" style="text-decoration:none;"><i class="fas fa-user fa-fw"></i> Login Admin</a> | 
                                        <a class="small" href="<?= base_url('register') ?>" style="text-decoration:none;"><i class="fas fa-home fa-fw"></i>Register</a> |
										<a class="small" href="<?= base_url('home') ?>" style="text-decoration:none;"><i class="fas fa-home fa-fw"></i>Halaman Utama</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
