@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Список категорий @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.category.create')}}" class="btn btn-primary float-right">
            <i class="fas fa-plus"></i> Создать Категорию
        </a>

        <table class="table table-striped">
            <thead>
                <th>Наименование</th>
                <th>Публикация</th>
                <th>Действие</th>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{$category->title}}</td>
                        <td>{{$category->published}}</td>
                        <td><a href="{{route('admin.category.edit', ['id' => $category->id])}}"><i class="fa fa-edit"></i></a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                    </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                {{$categories->links()}}
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </td>
                </tr>
            </tfoot>
        </table>

    </div>

@endsection