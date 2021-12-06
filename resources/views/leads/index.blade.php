@extends('layouts.main')

@push('header-styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"/>
@endpush

@section('content')
    <div class="max-w-5xl mx-auto px-5">
        @if ($leads->count())
            <h1 class="my-6 text-3xl font-bold">Admin Leads Page</h1>

            <div class="flex flex-col mb-6">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                           First Name
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                           Last Name
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Email
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Phone Number
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($leads as $lead)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $lead->first_name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $lead->last_name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="mailto:{{ $lead->email }}" class="text-sm text-blue-500">
                                                {{ $lead->email }}
                                            </a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="tel:{{ $lead->phone_number }}" class="text-sm text-blue-500">
                                                {{ $lead->phone_number }}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{ $leads->links() }}
        @else
            <div class="h-screen flex justify-center items-center">
                <p class="text-center">No Leads yet. Please check back later.</p>
            </div>
        @endif
    </div>
@endsection
