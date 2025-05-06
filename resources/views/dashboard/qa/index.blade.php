@extends('dashboard._layout')

@section('buttons')

@endsection

@section('content')
    @foreach($sections as $key => $section)
        <div class="card mb-2">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h5 class="card-title mb-0">
                        {{ $section->qa_section_name }} - Wątki: {{ $section->getThreadsCount() }}
                    </h5>
                    <div class="col-auto">
                        <a href="{{ route('qa.create', $section) }}" class="btn btn-success btn-sm">DODAJ</a>
                    </div>
                </div>
                <div class="table-responsive scrollbar ms-n1 ps-1">
                    <table class="table table-sm table-hover fs--1 mb-0">
                        <thead>
                        <tr class="row-name">
                            <th class="text-nowrap text-start">Lp.</th>
                            <th class="text-nowrap text-start">Temat</th>
                            <th class="text-center">Aktywny</th>
                            <th>Usuń</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($section->relationQuestionAnswers as $key => $thread)
                            <tr class="align-middle">
                                <td>{{ $key + 1 }}</td>
                                <td class="text-start">
                                    <a href="{{ route('qa.edit', $thread) }}">
                                        {{ $thread->qa_title }}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('qa.status', $thread) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('PUT')
                                        @if ($thread->qa_active === 1)
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
                                    <form action="{{ route('qa.delete', $thread) }}" method="POST" onsubmit="return confirmDelete();" style="display:inline;">
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
    @endforeach

    <script>
        function confirmDelete() {
            return confirm('Czy na pewno chcesz usunąć?');
        }
    </script>
@endsection
