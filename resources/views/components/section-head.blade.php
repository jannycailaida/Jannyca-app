@props(['id' => null, 'title' => '', 'intro' => ''])

<div class="section__head reveal">
    <h2 class="section__title" @if($id) id="{{ $id }}" @endif>{{ $title }}</h2>
    @if($intro)
        <p class="section__intro">{{ $intro }}</p>
    @endif
    <span class="section__rule" aria-hidden="true"></span>
</div>
