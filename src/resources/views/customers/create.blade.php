<x-app-layout>
    <h1>顧客登録</h1>
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div>名前
            <input type="text" name="name">
        </div>
        <div>
            メール
            <input type="email" name="email">
        </div>
        <div>
            郵便番号
            <input type="text" name="postal_code">
        </div>
        <div>
            住所
            <input type="text" name="address">
        </div>
        <button type="submit">登録</button>
    </form>
</x-app-layout>