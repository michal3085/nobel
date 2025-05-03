@extends('dashboard._layout')

@section('buttons')
    <div class="col-auto">
        <a href="{{route('newsletter.index')}}" class="btn btn-success me-1 mb-1">DODAJ</a>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Newsletter [{{$recipients->count()}}]</h5>
            <div class="table-responsive scrollbar ms-n1 ps-1">
                <table class="table table-sm table-hover fs--1 mb-0">
                    <thead>
                    <tr class="row-name">
                        <th class="text-nowrap text-start">
                            Lp.
                        </th>
                        <th class="text-nowrap text-start">
                            Odbiorca
                        </th>
                        <th>
                            Czas wysyłki
                        </th>
                        <th>
                            Status
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($recipients as $key => $recipient)
                        <tr class="align-middle">
                            <td>
                                {{ $key+1 }}
                            </td>
                            <td>
                                <a href="">
                                    {{$recipient->getSubscriberMail()}}
                                </a>
                            </td>
                            <th>
                                {{ $recipient->created_at }}
                            </th>
                            <th>
                                {{ $recipient->newsletter_send_status }}
                            </th>
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
