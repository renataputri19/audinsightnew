<x-filament-panels::page>
    <div>
        <h2>Manage Requirements</h2>
        <ul>
            @foreach($requirements as $requirement)
                <li>{{ $requirement->sub_sub_clause_id }}: {{ json_encode($requirement->document) }}</li>
            @endforeach
        </ul>
    </div>
</x-filament-panels::page>
