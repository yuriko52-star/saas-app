<x-app-layout>
    <div class="box">
    <h1 class="page-title">顧客一覧</h1>
    <a href="{{ route('customers.create') }}" class="create-link">新規作成</a>

    <!-- あとでCSVインポート -->

    <!-- 顧客一覧 -->
     <table border="1" class="table">
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
                <div class="actions">
                <a href="{{ route('customers.edit', $customer->id) }}" class="edit-link">編集</a>
                <form action="{{ route('customers.destroy',$customer) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn">削除</button>
                </form>
                </div>
            </td>
        </tr>
        
        @endforeach
     </table>
    </div>
</x-app-layout>