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

    <div class=" container p-5" style="margin-bottom: 100px;">
        <h1>Создание нового клиента</h1>
        <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
        <form method="post" action="/clients">
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
                    <span class="input-group-text" id="">Серия паспорта</span>
                </div>
                <input type="text" name='series_passport' class="form-control" id="serialPassport" placeholder="Серия паспорта">
                <!-- <div id="nameSerialPassport" class="form-text"> Мы никому не сообщим ваши паспортные данные.</div> -->
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Номер паспорта</span>
                </div>
                <input type="text" name='number_passport' class="form-control" id="numberPassport" placeholder="Номер паспорта">
                <!-- <div id="nameNumberPassport" class="form-text">Мы никому не сообщим ваши паспортные данные.</div> -->
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Дата выдача</span>
                </div>
                <input type="date" name='date_of_issue' class="form-control" id="dateOfIssue">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Срок окончания действия</span>
                </div>
                <input type="date" name='expiration_date' class="form-control" id="expirationDate">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Орган выд документ</span>
                </div>
                <input type="text" name='government_agency' class="form-control" id="governmentAgency" placeholder="Орган выдавший документ">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Место рождения</span>
                </div>
                <input type="text" name='place_of_birth' class="form-control" id="placeOfBirth" placeholder="Место рождения">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Пол</span>
                </div>
                <select id="sex" name='type_sex' class="form-select" aria-label="Default select example" required>
                    <option disabled>Пол</option>
                    <option value="1">Женский</option>
                    <option value="2">Мужской</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Статус</span>
                </div>
                <select id="typeClient" name='type_client' class="form-select" aria-label="Default select example" required>
                    <option disabled>Статус</option>
                    <option value="1">Привилегированный</option>
                    <option value="2">VIP</option>
                    <option value="3">Обычный</option>
                </select>
            </div>
            <div class="md-3">
                <button type="submit" class="btn btn-warning">Добавить</button>
                <a href="/clients" class="btn btn-danger">Отменить</a>
            </div>


        </form>
    </div>



</body>

</html><?php /**PATH /Users/daniilalekseev/Downloads/laba5/orkis_web/resources/views/clients/create.blade.php ENDPATH**/ ?>