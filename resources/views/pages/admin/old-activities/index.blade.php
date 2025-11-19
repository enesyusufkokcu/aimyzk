@extends('layouts.admin')
@section('breadcumb')
    <x-admin.breadcumb>
        <x-admin.breadcumb-link active>Geçmiş Etkinlikler</x-admin.breadcumb-link>
    </x-admin.breadcumb>
@endsection
@section('content')
    <x-admin.table>
        <x-slot name="head">
            <th>Başlık</th>
            <th class="text-center">İşlem</th>
        </x-slot>
        <x-slot name="body">
            @foreach ($oldActivities as $oldActivity)
                <tr>
                    <td class="capitalize">{{ $oldActivity->title }}</td>
                    <td class="flex gap-2 items-center justify-center">
                        <a class="table_edit_button"
                            href="{{ route('admin.old-activities.edit', ['oldActivity' => $oldActivity]) }}">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M16.04 3.02001L8.16 10.9C7.86 11.2 7.56 11.79 7.5 12.22L7.07 15.23C6.91 16.32 7.68 17.08 8.77 16.93L11.78 16.5C12.2 16.44 12.79 16.14 13.1 15.84L20.98 7.96001C22.34 6.60001 22.98 5.02001 20.98 3.02001C18.98 1.02001 17.4 1.66001 16.04 3.02001Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M14.91 4.1499C15.58 6.5399 17.45 8.4099 19.85 9.0899" stroke="currentColor"
                                    stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                        <form id="delete-{{ $oldActivity->id }}"
                            action="{{ route('admin.old-activities.delete', ['oldActivity' => $oldActivity]) }}"
                            method="post"> @csrf
                            <button form="delete-{{ $oldActivity->id }}" type="submit" class="table_delete_button">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M21 6.73C20.98 6.73 20.95 6.73 20.92 6.73C15.63 6.2 10.35 6 5.12 6.53L3.08 6.73C2.66 6.77 2.29 6.47 2.25 6.05C2.21 5.63 2.51 5.27 2.92 5.23L4.96 5.03C10.28 4.49 15.67 4.7 21.07 5.23C21.48 5.27 21.78 5.64 21.74 6.05C21.71 6.44 21.38 6.73 21 6.73Z"
                                        fill="currentColor" />
                                    <path
                                        d="M8.5 5.72C8.46 5.72 8.42 5.72 8.37 5.71C7.97 5.64 7.69 5.25 7.76 4.85L7.98 3.54C8.14 2.58 8.36 1.25 10.69 1.25H13.31C15.65 1.25 15.87 2.63 16.02 3.55L16.24 4.85C16.31 5.26 16.03 5.65 15.63 5.71C15.22 5.78 14.83 5.5 14.77 5.1L14.55 3.8C14.41 2.93 14.38 2.76 13.32 2.76H10.7C9.64 2.76 9.62 2.9 9.47 3.79L9.24 5.09C9.18 5.46 8.86 5.72 8.5 5.72Z"
                                        fill="currentColor" />
                                    <path
                                        d="M15.21 22.75H8.79C5.3 22.75 5.16 20.82 5.05 19.26L4.4 9.19C4.37 8.78 4.69 8.42 5.1 8.39C5.52 8.37 5.87 8.68 5.9 9.09L6.55 19.16C6.66 20.68 6.7 21.25 8.79 21.25H15.21C17.31 21.25 17.35 20.68 17.45 19.16L18.1 9.09C18.13 8.68 18.49 8.37 18.9 8.39C19.31 8.42 19.63 8.77 19.6 9.19L18.95 19.26C18.84 20.82 18.7 22.75 15.21 22.75Z"
                                        fill="currentColor" />
                                    <path
                                        d="M13.66 17.25H10.33C9.92 17.25 9.58 16.91 9.58 16.5C9.58 16.09 9.92 15.75 10.33 15.75H13.66C14.07 15.75 14.41 16.09 14.41 16.5C14.41 16.91 14.07 17.25 13.66 17.25Z"
                                        fill="currentColor" />
                                    <path
                                        d="M14.5 13.25H9.5C9.09 13.25 8.75 12.91 8.75 12.5C8.75 12.09 9.09 11.75 9.5 11.75H14.5C14.91 11.75 15.25 12.09 15.25 12.5C15.25 12.91 14.91 13.25 14.5 13.25Z"
                                        fill="currentColor" />
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-admin.table>
@endsection
@section('javascript')
@endsection
