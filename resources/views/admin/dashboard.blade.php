@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <h4><span class="badge badge-primary">Категорий - 0</span></h4>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <h4><span class="badge badge-primary">Материалов - 0</span></h4>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <h4><span class="badge badge-primary">Посетителей - 0</span></h4>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <h4><span class="badge badge-primary">Сегодня - 0</span></h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        Создать категоию
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <h4>Категория первая</h4>
                        <p>Кол-во категорий</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        Создать материал
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <h4>Материал первый</h4>
                        <p>Кол-во материалов</p>
                    </a>
                </div>
            </div>
        </div>

    </div>

@endsection