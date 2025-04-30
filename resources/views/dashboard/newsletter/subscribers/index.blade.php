@extends('dashboard._layout')

@section('buttons')

@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Newsletter | Subskrybenci [{{$subscribers->count()}}]</h5>
            <div class="table-responsive scrollbar ms-n1 ps-1">
                <table class="table table-sm table-hover fs--1 mb-0">
                    <thead>
                    <tr class="row-name">
                        <th class="text-nowrap text-start">
                            Lp.
                        </th>
                        <th class="text-nowrap text-start">
                            E-mail
                        </th>
                        <th class="text-nowrap text-start">
                            Dodano
                        </th>
                        <th class="text-center">
                            Aktywny
                        </th>
                        <th class="text-nowrap text-start">
                            Usuń
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subscribers as $key => $subscriber)
                        <tr class="align-middle">
                            <td>
                                {{ $key+1 }}
                            </td>
                            <td>
                                {{$subscriber->ns_mail_address}}
                            </td>
                            <td>
                                {{$subscriber->created_at}}
                            </td>
                            <td class="text-center">
                                <form action="{{ route('newsletter.subscriber.status', $subscriber) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PUT')
                                    @if ($subscriber->ns_active === 1)
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
                                <form action="{{ route('newsletter.subscriber.delete', $subscriber) }}" method="POST" onsubmit="return confirmDelete();" style="display:inline;">
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
