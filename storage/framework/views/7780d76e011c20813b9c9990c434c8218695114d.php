<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard | Home</title>
    <link rel="stylesheet" href="<?php echo e(asset('/css/app.css')); ?>">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                <h4>User Dashboard</h4><hr>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo e(Auth::guard('web')->user()->name); ?></td>
                            <td><?php echo e(Auth::guard('web')->user()->email); ?></td>
                            <td>
                                <a href="<?php echo e(route('user.logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                <form action="<?php echo e(route('user.logout')); ?>" method="post" class="d-none" id="logout-form">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
<?php /**PATH D:\Application\GB_Multiguards\resources\views/dashboard/user/home.blade.php ENDPATH**/ ?>