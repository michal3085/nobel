@extends('dashboard._layout')

@section('buttons')

@endsection

@section('content')
    @foreach($sections as $key => $section)
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">{{ $section->qa_section_name }} - Wątki: {{ $section->getThreadsCount() }}</h5>
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
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($section->relationQuestionAnswers as $key => $thread)
                            <tr class="align-middle">
                                <td>
                                    {{ $key+1 }}
                                </td>
                                <td>
                                    <a href="{{ route('qa.edit', $thread) }}">
                                        {{ $thread->qa_title }}
                                    </a>
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
