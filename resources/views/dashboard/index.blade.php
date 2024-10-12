<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg col-lg-12">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}


                <!-- Tabela -->
                <div class="overflow-x-auto mt-6">
                    <table class="w-full table-auto border-collapse border border-slate-500">
                        <thead>
                        <tr>
                            <th class="border border-slate-600">State</th>
                            <th class="border border-slate-600">City</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="border border-slate-700">Indiana</td>
                            <td class="border border-slate-700">Indianapolis</td>
                        </tr>
                        <tr>
                            <td class="border border-slate-700">Ohio</td>
                            <td class="border border-slate-700">Columbus</td>
                        </tr>
                        <tr>
                            <td class="border border-slate-700">Michigan</td>
                            <td class="border border-slate-700">Detroit</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                </div>
                <!-- Koniec tabeli -->
            </div>
        </div>
    </div>
</x-app-layout>
