<x-app-layout>
    <div class="box">
    <h1 class="page-title">顧客一覧</h1>
    <a href="{{ route('customers.create') }}" class="create-link">新規作成</a>
    <a href="{{ route('customers.export',[
    'search_type' => request('search_type'),
    'keyword' => request('keyword'),
    ]) }}" class="export-link">CSV出力</a>
    <a href="{{ route('customers.import.form') }}" class="import-link">CSVインポート</a>

   
     
    @if(session('success'))
    <p class="message">
        {{ session('success') }}
    </p>
    @endif
    
    <!--検索機能  -->
    <form action="{{ route('customers.index') }}" method="GET">
        <select name="search_type"class="search-select">
            <option value="all"{{ request('search_type')=== 'all' ? 'selected' : '' }}>すべて</option>
            <option value="name" {{ request('search_type')=== 'name' ? 'selected' : '' }}>名前</option>
            <option value="email" {{ request('search_type')=== 'email' ? 'selected' : '' }}>メールアドレス</option>
            <option value="postal_code" {{ request('search_type')=== 'postal_code' ? 'selected' : '' }}>郵便番号</option>
            <input type="text" class="search-input" name="keyword" value="{{ request('keyword') }}">
            <button type="submit" class="search-btn">検索</button>
        </select>
    </form>
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
     {{ $customers->links() }}
    </div>
</x-app-layout>