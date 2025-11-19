@extends('layouts.admin')
@section('breadcumb')
    <x-admin.breadcumb>
        <x-admin.breadcumb-link :link="route('admin.old-activities.index')">Geçmiş Etkinlikler</x-admin.breadcumb-link>
        <x-admin.breadcumb-link active>Düzenle</x-admin.breadcumb-link>
    </x-admin.breadcumb>
@endsection
@section('content')
    <x-admin.card title="Geçmiş Etkinlik Düzenle" class="" id="">
        <x-slot name="body">
            <form action="{{ route('admin.old-activities.update', ['oldActivity' => $oldActivity]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form__cols__1">
                    @if ($oldActivity->image)
                        <img class="w-full max-w-sm" src="{{ asset('storage/' . $oldActivity->image) }}" alt="{{ $oldActivity->title }}">
                    @endif
                    <div class="form__group">
                        <label class="form_label_1" for="">Başlık*</label>
                        <input class="form_input_1" id="title" type="text" name="title"
                            value="{{ $oldActivity->title }}">
                    </div>
                    <div class="form__group">
                        <label class="form_label_1" for="">Görsel</label>
                        <input class="form_input_1" id="image" type="file" name="image">
                    </div>
                    <div class="form__group">
                        <label class="form_label_1" for="">Metin*</label>
                        <textarea rows="10" cols="10" id="content" name="content">{{ $oldActivity->content }}</textarea>
                    </div>
                </div>

                <div class="flex justify-end col-span-3">
                    <button class="form_btn_purple" type="submit">kaydet</button>
                </div>
            </form>
        </x-slot>
    </x-admin.card>
@endsection
@section('javascript')
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
