<ul class="flex gap-1 items-center">
    @foreach ($data as $key => $item)
    <li>
        <a href="{{ $item['route'] }}" class="flex items-center text-paragraph !text-word-title">
            <span @if($loop->last) style="color: #5c5c5c !important;" @endif>
                {{ $item['title'] }}
            </span>
        </a>
    </li>
    @endforeach
</ul>