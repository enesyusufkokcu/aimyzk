@extends('layouts.guest')
@section('content')
    <div class="container flex flex-col mx-auto rounded-lg h-screen">
        <div class="flex justify-center w-full h-full my-auto xl:gap-14 lg:justify-normal md:gap-5">
            <div class="flex items-center justify-center w-full lg:p-12">
                <div class="flex items-center p-4 xl:p-10 max-w-xl w-full">
                    <form action="{{ route('login') }}" method="POST"
                        class="flex flex-col w-full h-full pb-6 text-center bg-gray-100 shadow-md p-12 rounded-3xl">
                        @csrf
                        <h3 class="mb-3 text-4xl font-extrabold text-dark-gray-900">Giriş Yap</h3>
                        <p class="mb-4 text-gray-700">Email ve Şifre Bilgilerinizi Giriniz</p>

                        <label for="email" class="mb-2 text-sm text-start text-gray-900">Email*</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}"
                            placeholder="mail@mail.com"
                            class="flex items-center w-full px-5 py-4 mr-2 text-sm font-medium outline-none mb-7 bg-gray-200 text-dark-gray-900 rounded-2xl" />

                        <label for="password" class="mb-2 text-sm text-start text-gray-900">Şifre*</label>
                        <input id="password" type="password" name="password" placeholder="Şifrenizi Giriniz"
                            class="flex items-center w-full px-5 py-4 mb-5 mr-2 text-sm font-medium outline-none bg-gray-200 text-dark-gray-900 rounded-2xl" />

                        <div class="flex flex-row justify-between mb-8">
                            <label class="relative inline-flex items-center mr-3 cursor-pointer select-none">
                                <input type="checkbox" checked value="1" name="remember" class="sr-only peer">
                                <div
                                    class="w-5 h-5 bg-white border-2 rounded-sm border-gray-500 peer peer-checked:border-0 peer-checked:bg-blue-500">
                                    <img class=""
                                        src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/motion-tailwind/img/icons/check.png"
                                        alt="tick">
                                </div>
                                <span class="ml-3 text-sm font-normal text-gray-900">Beni Hatırla</span>
                            </label>
                        </div>
                        <button type="submit"
                            class="dark-grad px-6 py-3 rounded-xl inline-flex justify-center items-center gap-3 text-white font-semibold leading-6">
                            Giriş Yap
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
