@extends('dashboard._layout')

@section('buttons')
    <div class="col-auto">
        <a href="{{route('newsletter.create')}}" class="btn btn-success me-1 mb-1">DODAJ</a>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Newsletter [{{$newsletters->count()}}]</h5>
            <div class="table-responsive scrollbar ms-n1 ps-1">
                <table class="table table-sm table-hover fs--1 mb-0">
                    <thead>
                    <tr class="row-name">
                        <th class="text-nowrap text-start">
                            Lp.
                        </th>
                        <th class="text-nowrap text-start">
                            Temat
                        </th>
                        <th class="text-nowrap text-start">
                            Dodano
                        </th>
                        <th class="text-nowrap text-start">
                            Autor
                        </th>
                        <th class="text-center">
                            Aktywny
                        </th>
                        <th class="text-center">
                            Wysyłka
                        </th>
                        <th>
                            Szczegóły wysyłki
                        </th>
                        <th class="text-nowrap text-start">
                            Usuń
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($newsletters as $key => $newsletter)
                        <tr class="align-middle">
                            <td>
                                {{ $key+1 }}
                            </td>
                            <td>
                                <a href="{{ route('newsletter.edit', $newsletter) }}">
                                    {{$newsletter->newsletter_subject}}
                                </a>
                            </td>
                            <td>
                                {{$newsletter->newsletter_author}}
                            </td>
                            <td>
                                {{$newsletter->created_at}}
                            </td>
                            <td class="text-center">
                                <form action="{{ route('newsletter.status', $newsletter) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PUT')
                                    @if ($newsletter->newsletter_active === 1)
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
                            <td class="text-center">
                                @if ($newsletter->newsletter_active === 1)
                                    <a href="{{ route('newsletter.send', $newsletter) }}">
                                        <i class="bi bi-send text-success"></i>
                                    </a>
                                @endif
                            </td>
                            <td class="text-center">
                                @if($newsletter->hasBeenSent())
                                    <a href="{{ route('newsletter.sentList', $newsletter) }}">
                                        <i class="bi bi-list-check text-success"></i>
                                    </a>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('newsletter.delete', $newsletter) }}" method="POST" onsubmit="return confirmDelete();" style="display:inline;">
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
