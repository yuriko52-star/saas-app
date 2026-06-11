<x-app-layout>
    <h1>顧客編集</h1>
    <form action="{{ route('customers.update', $customer) }}" method="POST">
        @csrf
        @method('PATCH')
        <div>名前
            <input type="text" name="name"
            value="{{ $customer->name }}">
        </div>
        <div>
            メール
            <input type="email" name="email"
            value="{{ $customer->email }}">
        </div>
        <div>
            郵便番号
            <input type="text" name="postal_code"
            value="{{ $customer->postal_code }}">
        </div>
        <div>
            住所
            <input type="text" name="address"
            value="{{ $customer->address }}">
        </div>
        <button type="submit">更新</button>
    </form>
</x-app-layout>