<div class="p-3 h-24 w-56 flex justify-between border-2 border-gray-300 rounded-xl">
    <div class="">
        <h4 class="font-bold text-xl">
            @if ($type === 'cut-type')
            Cut Slope
            @elseif ($type === 'fill-type')
            Fill Slope
            @elseif ($type === 'rock-type')
            Rock Slope
            @elseif ($type === 'retaining-type')
            Retaining Wall
            @elseif ($type === 'combine-type')
            Combine Slope
            @endif
        </h4>
        <span class="font-semibold text-gray-600">Side {{$side}}</span>
    </div>
    <img src="/components/icons/{{$type}}.svg" class="w-10 h-10" alt="">
</div>