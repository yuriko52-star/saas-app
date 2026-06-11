<x-app-layout>
    <h1>顧客一覧</h1>
    <a href="{{ route('customers.create') }}" class="">新規作成</a>

    <!-- あとでCSVインポート -->

    <!-- 顧客一覧 -->
     <table border="1">
        <tr>
            <th>名前</th>
            <th>メール</th>
            <th>郵便番号</th>
            <th>住所</th>
            <th>操作</th>
        </tr>

        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->postal_code }}</td>
            <td>{{ $customer->address }}</td>
            <td>
                <a href="{{ route('customers.edit', $customer->id) }}" class="">編集</a>
            </td>
        </tr>
        
        @endforeach
     </table>
</x-app-layout>