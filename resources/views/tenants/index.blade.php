<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tenants') }}
            <x-btn-link class="ml-4 float-right" href="{{ route('tenants.create') }}">Add Tenants </x-btn-link>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <table class="table table-hover text-nowrap w-full ">
                 <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Domain</th>
                        <th>Option</th>
                    </tr>
                 </thead>
                    <tbody>
                        @foreach($tenants as $tenant)
                        <tr>
                            <td>{{$tenant->name}}</td>
                            <td>{{$tenant->email}}</td>
                            <td>
                                @foreach($tenant->domains as $domain)
                                       {{ $domain->domain }}
                                @endforeach
                            </td>
                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        @endforeach
                    </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
