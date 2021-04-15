@extends('layouts.app', [
    'class' => 'login-page',
    'elementActive' => ''
])

@section('content')
    <div class="content col-md-12 ml-auto mr-auto">
        <div class="py-5 pb-7 pt-lg-9">
            <div class="container col-md-10">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12 pt-5">
                            <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
                                <a class="navbar-brand">Painel Forex</a>
                            </nav>


                            <?php header("Refresh:10;"); ?>

                            <div class="container" style="color:white">
                                <?php foreach ($trends as $trend) {?>
                                <?php $compra = 0; $venda = 0;?>
                                <br>
                                <br>
                                <h2 class="text-center"><?= $trend->time; ?></h2>
                                <?php $trend->ma5 == 'Venda' ? $venda = $venda + 16.6 : $compra = $compra + 16.6?>
                                <?php $trend->ma10 == 'Venda' ? $venda = $venda + 16.6 : $compra = $compra + 16.6?>
                                <?php $trend->ma20 == 'Venda' ? $venda = $venda + 16.6 : $compra = $compra + 16.6?>
                                <?php $trend->ma50 == 'Venda' ? $venda = $venda + 16.6 : $compra = $compra + 16.6?>
                                <?php $trend->ma100 == 'Venda' ? $venda = $venda + 16.6 : $compra = $compra + 16.6?>
                                <?php $trend->ma200 == 'Venda' ? $venda = $venda + 16.6 : $compra = $compra + 16.6?>
                                <div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             style="width:<?= $compra ?>%; background-color:green">
                                            Compra
                                        </div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                             style="width:<?= $venda ?>%; background-color:red">
                                            Venda
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            demo.checkFullPageBackgroundImage();
        });
    </script>
@endpush
