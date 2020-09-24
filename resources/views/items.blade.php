<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Items</title>

        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col col-md-8">
                    <div class="row mb-5 justify-content-between">
                        <form action="" class="col-12 col-md-5">
                            <h3 class="mb-2">Отображение полей</h3>
                            <div class="row">
                                <div class="col col-md-6">
                                    <label>
                                        <input type="checkbox" name="visible_fields[]" value="title"> Название
                                    </label>
                                </div>
                                <div class="col col-md-6">
                                    <label>
                                        <input type="checkbox" name="visible_fields[]" value="author"> Автор
                                    </label>
                                </div>
                                <div class="col col-md-6">
                                    <label>
                                        <input type="checkbox" name="visible_fields[]" value="description"> Описание
                                    </label>
                                </div>
                                <div class="col col-md-6">
                                    <label>
                                        <input type="checkbox" name="visible_fields[]" value="price"> Цена
                                    </label>
                                </div>
                            </div>
                        </form>

                        <form action="" class="col-12 col-md-5">
                            <h3 class="mb-2">Фильтр</h3>
                            <div class="row">
                                <div class="col">
                                    <label>
                                        Цена: <input type="number" class="input" name="begin_price" placeholder="от" min="1"> - <input type="number" class="input" name="end_price" placeholder="до" min="2">
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>

                    @if ( Session::has('action_status') )
                        <div id="action_message" class="alert alert-success">
                            {{ Session::get('action_status') }}
                        </div>
                    @endif

                    @forelse ($items as $item)
                        @if ($loop->first)
                            <table>
                                <tr>
                                    {{-- ⥮ --}}
                                    <th>Название ⮁</th>
                                    <th>Автор ⮁</th>
                                    <th>Описание</th>
                                    <th>Цена ⮁</th>
                                    <th>Действия</th>
                                <tr>
                        @endif
                                <tr>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->author}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->price}}&nbsp;руб.</td>
                                    <td>
                                        <a href="/edit/{{$item->id}}">Редактировать</a> |
                                        <a href="/delete/{{$item->id}}">Удалить</a>
                                    </td>
                                </tr>
                        @if ($loop->last)
                            </table>
                        @endif
                    @empty
                        Записей не найдено!
                    @endforelse
                </div>

                <div class="col col-md offset-md-1">
                    <form action="/add" method="POST">
                        @csrf
                        <h3 class="mb-4">Добавить запись</h3>
                        <div class="row">
                            <div class="col col-md-3">
                                Название:
                            </div>
                            <div class="col col-md">
                                <input type="text" name="title" class="w-100" required>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col col-md-3">
                                Автор:
                            </div>
                            <div class="col col-md">
                                <input type="text" name="author" class="w-100" required>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col col-md-3">
                                Описание:
                            </div>
                            <div class="col col-md">
                                <textarea name="description" cols="30" rows="10" class="w-100"></textarea>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col col-md-3">
                                Цена:
                            </div>
                            <div class="col col-md">
                                <input type="text" name="price" class="w-100" required>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-center">
                            <button type="submit" class="btn btn-outline-dark">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script scr="/js/main.js"></script>
    </body>
</html>
