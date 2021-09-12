<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <p>Lian</p>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('名前')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- 性別の入力欄 -->
            <div class="form-group row" style="padding-top: 10px">
                <x-label for="gender" :value="__('性別')" style="padding-top: 10px" />

                <div class="col-md-6" style="padding-top: 5px">
                    <input id="gender-m" type="radio" name="gender" value="male">
                    <label for="gender-m">男性</label>
                    <input id="gender-f" type="radio" name="gender" value="female">
                    <label for="gender-f">女性</label>
                </div>
            </div>

            <!-- 生年月日の入力欄 -->
            <div class="form-group row" style="padding-top: 10px">
                <x-label for="birthday" :value="__('生年月日')" style="padding-top: 10px" />
                <input type="date" name="birthday">
            </div>

            <!-- 所属大学の入力欄 -->
            <div class="form-group row" style="padding-top: 10px">
                <x-label for="birthday" :value="__('所属大学')" style="padding-top: 10px" />
                <select class="form-select" name="university_id">
                    <option selected>所属大学を選んでください</option>
                    <option value="1">東京大学</option>
                    <option value="2">京都大学</option>
                    <option value="3">九州工業大学</option>
                    <option value="4">北海道大学</option>
                    <option value="5">金沢工業大学</option>
                </select>
            </div>

            <!-- プロフィール画像URLの入力欄 -->
            <div class="form-group row" style="padding-top: 10px">
                <x-label for="profile_img" :value="__('プロフィール画像のURL')" style="padding-top: 10px" />
                <input type="url" name="profile_img"　value="profile_img">
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('メールアドレス')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('パスワード')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('パスワード再入力')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
