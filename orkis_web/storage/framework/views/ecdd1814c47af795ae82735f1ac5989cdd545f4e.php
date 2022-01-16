<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>

<body style="background-color:#96CEB4;">

    <div class="container p-5" style="margin-bottom: 100px;">
        <h1>Создание нового сотрудника</h1>
        <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
        <form method="post" action="/employees" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Имя</span>
                </div>
                <input type="text" name='name' class="form-control" id="name" placeholder="Имя">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Фамилия</span>
                </div>
                <input type="text" name='surname' class="form-control" id="surname" placeholder="Фамилия">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Отчество</span>
                </div>
                <input type="text" name='patronymic' class="form-control" id="patronymic" placeholder="Отчество">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Дата рождения</span>
                </div>
                <input type="date" name='bth' class="form-control" id="bth">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Фото</span>
                </div>
                <input type="file" name='photo' class="form-control" id="photo">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Должность сотрудника</span>
                </div>
                <select id="position" name='type_position' class="form-select" aria-label="Default select example" required>
                    <option disabled>-- Выберите должность сотрудника --</option>
                    <option value="1">Бухгалтер</option>
                    <option value="2">Администратор</option>
                    <option value="3">Менеджер</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Организация</span>
                </div>
                <select id="Id_organization" name='Id_organization' class="form-select" aria-label="Default select example" required>
                    <option disabled>Организация</option>
                    <?php $__currentLoopData = $listOrganizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organization): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($organization->id); ?>"><?php echo e($organization->organization_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Почта</span>
                </div>
                <input type="email" name='email' class="form-control" id="email" placeholder="Email">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Пароль</span>
                </div>
                <input type="text" name='password' class="form-control" id="password" placeholder="пароль">
            </div>
            <div class="md-3">
                <button type="submit" class="btn btn-warning">Добавить</button>
                <a href="/employees" class="btn btn-danger">Отменить</a>
            </div>

        </form>
    </div>

</body>

</html><?php /**PATH /Users/daniilalekseev/Downloads/laba5/orkis_web/resources/views/employees/create.blade.php ENDPATH**/ ?>