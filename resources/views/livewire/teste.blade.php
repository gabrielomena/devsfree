<div>
    <input wire:model.live="busca" />
    <br>
    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
</div>
