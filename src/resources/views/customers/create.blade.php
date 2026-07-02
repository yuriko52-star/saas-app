<x-app-layout>
    <div class="create-box">
        <h1 class="page-title">顧客登録</h1>
            <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <dl>
                <dt>名前</dt>
                <dd><input type="text" name="name" value="{{ old('name') }}">
                    <p class="error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </p>
                </dd>
                
                <dt>メール</dt>
                <dd><input type="email" name="email"value="{{ old('email') }}">
                    <p class="error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </p>
                </dd>
                <dt>郵便番号</dt>
                <dd><input type="text" name="postal_code" id="postal_code" value="{{ old('postal_code') }}"></dd>
                <dt>住所</dt>
                <dd><input type="text" name="address" id="address" value="{{ old('address') }}"></dd>
            </dl>
            <button type="submit" class="register-btn">登録</button>
        </form>
    </div>
</x-app-layout>