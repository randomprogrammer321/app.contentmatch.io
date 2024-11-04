<div class="pt-5 pb-5 border-b border-custom6 mb-5">
    <p class="font-bold text-base text-white">Group Rules</p>
    @foreach($community->rules as $index => $rule)
        <div class="flex gap-x-1 mt-2 text-white font-normal text-base">
            <p>{{ $index + 1 }}.</p>
            <p>{{ $rule }}</p>
        </div>
    @endforeach
</div> 