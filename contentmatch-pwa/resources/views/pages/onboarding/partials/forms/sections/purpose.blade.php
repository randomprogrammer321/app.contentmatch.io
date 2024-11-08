<div class="border-b border-custom6 pb-3 sm:pb-5">
    <p class="font-medium text-secondary leading-[16.8px] text-xs sm:leading-[28px] sm:text-xl">
        What is your purpose of joining?
    </p>
    <div class="grid grid-cols-2 mt-3 gap-y-3 gap-x-2 sm:gap-x-[14px] sm:gap-y-6 size1:grid-cols-3 sm:mt-5">
        @foreach(\App\Models\Purpose::where('is_active', true)->orderBy('order')->get() as $purpose)
            <button type="button" 
                    data-purpose="{{ $purpose->id }}" 
                    class="purpose-btn w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base">
                {{ $purpose->name }}
            </button>
        @endforeach
    </div>
    <input type="hidden" name="purposes[]" id="selected-purposes">
</div>

<script>
// Immediate execution
console.log('Purpose script loaded');

// Wait for DOM
window.addEventListener('load', function() {
    console.log('Window loaded');
    
    const purposeButtons = document.querySelectorAll('.purpose-btn');
    const selectedPurposesInput = document.getElementById('selected-purposes');
    let selectedPurposes = new Set();

    console.log('Found buttons:', purposeButtons.length);

    purposeButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            console.log('Button clicked:', this.dataset.purpose);
            
            const purposeId = this.dataset.purpose;
            
            if (selectedPurposes.has(purposeId)) {
                selectedPurposes.delete(purposeId);
                this.classList.remove('bg-white', 'text-black');
                this.classList.add('text-custom2');
            } else {
                selectedPurposes.add(purposeId);
                this.classList.add('bg-white', 'text-black');
                this.classList.remove('text-custom2');
            }

            selectedPurposesInput.value = Array.from(selectedPurposes).join(',');
            console.log('Updated purposes:', selectedPurposesInput.value);
        });
    });
});
</script>
