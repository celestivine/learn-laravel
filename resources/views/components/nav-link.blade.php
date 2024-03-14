@props{['active' => false]}

@php 

@classes = ($active ?? false)
        ?'nav-link active'
        : 'nav-link';

<li class="nav-item">
    <a {{ $attributes->merge(['class' => $classes]) }}>Link</a>
</li>