<?php $__env->startSection('content'); ?>

<body style="background-color:#96CEB4;">


    <div class="container">
        <div class=" row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Авторизация</div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row" style="margin-bottom: 15px">
                                <label for="email" class="col-md-4 col-form-label text-md-right" style="text-align: end;">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right" style="text-align: end;">Пароль</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                        <label class="form-check-label" for="remember" style="margin-bottom: 15px">
                                            Запомнить меня
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-warning">
                                        Войти
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class='card mt-6'>
                    <div class="card-header">Сотрудники</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead style="background-color: #064635; color:aliceblue">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">ФИО</th>
                                    <th scope="col">Должность</th>
                                    <th scope="col">Почта</th>
                                    <th scope="col">Пароль</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                use App\Models\User;
                                use Illuminate\Support\Facades\DB;

                                $users = User::join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
                                    ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
                                    ->orderBy('users.id')
                                    ->get([
                                        DB::raw('roles.name AS type_position'),
                                        'users.name',
                                        'users.email',
                                        'users.password_text',
                                    ]);
                                ?>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($user->id); ?></th>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->type_position); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->password_text); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/daniilalekseev/Downloads/laba5/orkis_web/resources/views/auth/login.blade.php ENDPATH**/ ?>