@extends('dashboard._layout')

@section('buttons')
    <div class="col-auto">
        <a href="{{route('blog.create')}}" class="btn btn-success me-1 mb-1">DODAJ</a>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Blog [{{$posts->count()}}]</h5>
            <div class="table-responsive scrollbar ms-n1 ps-1">
                <table class="table table-sm table-hover fs--1 mb-0">
                    <thead>
                    <tr class="row-name">
                        <th class="text-nowrap text-start">
                            Lp.
                        </th>
                        <th class="text-nowrap text-start">
                            Tytuł
                        </th>
                        <th class="text-nowrap text-start">
                            Dodano
                        </th>
                        <th class="text-nowrap text-start">
                            Autor
                        </th>
                        <th class="text-nowrap text-start">
                            Edytuj
                        </th>
                        <th class="text-nowrap text-start">
                            Usuń
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $key => $post)
                        <tr class="align-middle">
                            <td>
                                {{ $key+1 }}
                            </td>
                            <td>
                                {{$post->post_title}}
                            </td>
                            <td>
                                {{$post->created_at}}
                            </td>
                            <td>
                                {{$post->post_author}}
                            </td>
                            <td>X</td>
                            <td>XX</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
