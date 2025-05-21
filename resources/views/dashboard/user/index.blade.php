@extends('dashboard._layout')

@section('buttons')
    <div class="col-auto">
        <a href="{{route('user.create')}}" class="btn btn-success me-1 mb-1">DODAJ</a>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Użytkownicy [{{$users->count()}}]</h5>
            <div class="table-responsive scrollbar ms-n1 ps-1">
                <table class="table table-sm table-hover fs--1 mb-0">
                    <thead>
                    <tr class="row-name">
                        <th class="text-nowrap text-start">
                            Lp.
                        </th>
                        <th class="text-nowrap text-start">
                            Nazwa
                        </th>
                        <th class="text-nowrap text-start">
                            E-mail
                        </th>
                        <th class="text-nowrap text-start">
                            Rola
                        </th>
                        <th class="text-nowrap text-start">
                            Dodany
                        </th>
                        <th class="text-nowrap text-start">
                            Usuń
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key => $user)
                        <tr class="align-middle">
                            <td>
                                {{ $key+1 }}
                            </td>
                            <td>
                                <a href="{{ route('user.edit', $user) }}">
                                    {{$user->name}}
                                </a>
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                            <td>
                                {{$user->getRoleString()}}
                            </td>
                            <td>
                                {{$user->created_at}}
                            </td>
                            <td>
{{--                                <form action="{{ route('newsletter.delete', $newsletter) }}" method="POST" onsubmit="return confirmDelete();" style="display:inline;">--}}
{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
{{--                                    <button type="submit" class="btn btn-sm text-danger">--}}
{{--                                        <i class="bi bi-trash3"></i>--}}
{{--                                    </button>--}}
{{--                                </form>--}}
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
