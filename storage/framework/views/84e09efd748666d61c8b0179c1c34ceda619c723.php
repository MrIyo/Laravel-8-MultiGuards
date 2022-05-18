<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Dashboard | Home</title>
    <link rel="stylesheet" href="<?php echo e(asset('/css/app.css')); ?>">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                <h4>Doctor Dashboard</h4><hr>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Hospital</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row"><?php echo e(Auth::guard('doctor')->user()->name); ?></td>
                            <td><?php echo e(Auth::guard('doctor')->user()->email); ?></td>
                            <td><?php echo e(Auth::guard('doctor')->user()->hospital); ?></td>
                            <td>
                                <a href="<?php echo e(route('doctor.logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                <form action="<?php echo e(route('doctor.logout')); ?>" id="logout-form" method="post">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH D:\Application\GB_Multiguards\resources\views/dashboard/doctor/home.blade.php ENDPATH**/ ?>