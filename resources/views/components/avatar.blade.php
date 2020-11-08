@props([
    'user' => auth()->user(),
    'size' => 10,
])

<div class="avatar-image">
    <img
        src="{{ $user->avatar_url }}"
        class="img-radius wid-{{ $size }}"
        alt="User Avatar"
    />
</div>
