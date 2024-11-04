<div class="border-b border-custom6 pb-3 sm:pb-5">
    <p class="font-medium text-secondary leading-[16.8px] text-xs sm:leading-[28px] sm:text-xl">
        What is your purpose of joining?
    </p>
    <div class="grid grid-cols-2 mt-3 gap-y-3 gap-x-2 sm:gap-x-[14px] sm:gap-y-6 size1:grid-cols-3 sm:mt-5">
        @foreach(\App\Models\Purpose::where('is_active', true)->orderBy('order')->get() as $purpose)
            <button type="button" 
                    data-purpose="{{ $purpose->id }}" 
                    class="purpose-btn w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base hover:bg-custom3 hover:border-custom3 transition-colors {{ in_array($purpose->id, old('purposes', [])) ? 'bg-custom3 border-custom3' : '' }}">
                {{ $purpose->name }}
            </button>
        @endforeach
    </div>
    <input type="hidden" name="purposes[]" id="selected-purposes">
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const purposeButtons = document.querySelectorAll('.purpose-btn');
    const selectedPurposesInput = document.getElementById('selected-purposes');
    const selectedPurposes = new Set();

    purposeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const purposeId = this.dataset.purpose;
            
            if (selectedPurposes.has(purposeId)) {
                selectedPurposes.delete(purposeId);
                this.classList.remove('bg-custom3', 'border-custom3');
            } else {
                selectedPurposes.add(purposeId);
                this.classList.add('bg-custom3', 'border-custom3');
            }

            selectedPurposesInput.value = Array.from(selectedPurposes).join(',');
        });
    });
});
</script>
@endpush
