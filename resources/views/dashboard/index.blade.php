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
                        <th class="text-center">
                            Status (widoczność)
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
                                <a href="{{route('blog.edit', $post)}}">
                                    {{$post->post_title}}
                                </a>
                            </td>
                            <td>
                                {{$post->created_at}}
                            </td>
                            <td>
                                {{$post->post_author}}
                            </td>
                            <td class="text-center">
                                <form action="{{ route('blog.change.status', $post) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PUT')
                                    @if ($post->post_active === 'true')
                                        <button type="submit" class="btn btn-sm text-success">
                                            <i class="bi bi-eye-fill"></i>
                                        </button>
                                    @else
                                        <button type="submit" class="btn btn-sm text-danger">
                                            <i class="bi bi-eye-slash-fill"></i>
                                        </button>
                                    @endif
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('blog.destroy', $post) }}" method="POST" onsubmit="return confirmDelete();" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm text-danger">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete() {
            return confirm('Czy na pewno chcesz usunąć?');
        }
    </script>
@endsection
