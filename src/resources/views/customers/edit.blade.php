<x-app-layout>
    <div class="update-box">
    <h1 class="page-title">顧客編集</h1>
    <form action="{{ route('customers.update', $customer) }}" method="POST">
        @csrf
        @method('PATCH')
        <dl>
            <dt>名前</dt>
        
            <dd><input type="text" name="name"
            value="{{ old('name',$customer->name) }}">
                <p class="error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </p>
            </dd>    
        
            <dt>メール</dt>
            <dd><input type="email" name="email"
            value="{{ old('email',$customer->email) }}">
                <p class="error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </p></dd>    
        
        
            <dt>郵便番号</dt>    
            <dd><input type="text" name="postal_code" id="postal_code"
            value="{{ old('postal_code',$customer->postal_code) }}"></dd>    
        
        
            <dt>住所</dt>
        
            <dd><input type="text" name="address" id="address"
            value="{{ old('address',$customer->address) }}"></dd>    
        </dl>
        <button type="submit"class="update-btn">更新</button>
    </form>
    </div>
</x-app-layout>