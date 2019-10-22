
<h4 >Статистика заказов</h4>
<div class="row index-page">

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">В обработке</h5>
                </div>
                <h3 class="mt-4"><?php echo count($orderactive ); ?></h3>

            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Выполнен</h5>
                </div>
                <h3 class="mt-4"><?php echo count($orderok); ?></h3>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-tag-text-outline bg-warning text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Новые</h5>
                </div>
                <h3 class="mt-4"><?php echo count($neworder)?></h3>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-buffer bg-danger text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Списаний</h5>
                </div>
                <h3 class="mt-4"><?php echo count($offs)?></h3>
            </div>
        </div>
    </div>

</div>

<?php if(!empty($last)) : ?>
    <h4 >Последние заказы</h4>
<!-- START ROW -->
<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Дата</th>
                            <th scope="col">Статус</th>
                            <th scope="col">Работник</th>
                            <th scope="col">Клиент</th>
                            <th scope="col">Сумма</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($last as $order) : ?>
                        <tr>
                            <td><?= $order->date ?></td>
                            <td><span class="alert alert-warning">Новый</span></td>
                            <td><?= $order->worker->fio ?></td>
                            <td><?= $order->client->name ?></td>
                            <td><?= $order->price ?></td>

                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- END ROW -->
<?php endif; ?>

<?php if(!empty($waybill)) : ?>
<h4 >Последние накладные</h4>
<!-- START ROW -->
<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Дата</th>
                            <th scope="col">Поставщик</th>
                            <th scope="col">Описание</th>
                            <th scope="col">Сумма</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($waybill as $item) : ?>
                            <tr>
                                <td><?= $item->date ?></td>
                                <td><?= $item->sources->title ?></td>
                                <td><?= $item->description ?></td>
                                <td><?= $item->price ?></td>

                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- END ROW -->
<?php endif; ?>