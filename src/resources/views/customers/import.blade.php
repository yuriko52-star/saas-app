<x-app-layout>
    <div class="import-box">
        <h1>CSVインポート</h1>

        <form action="{{ route('customers.import') }}" method="POST"
        enctype="multipart/form-data">
        @csrf

            <input type="file" name="csv_file">

            <button type="submit" class="import-btn">インポート</button>
        </form>
        @if(session('errors_csv'))
            <div>
                <ul>
                    @foreach(session('errors_csv') as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif
    </div>

</x-app-layout>