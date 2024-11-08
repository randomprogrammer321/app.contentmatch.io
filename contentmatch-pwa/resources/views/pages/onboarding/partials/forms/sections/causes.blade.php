<div class="border-b border-custom6 pb-3 sm:pb-5">
    <p class="font-medium text-secondary leading-[28px] mt-3 text-xs sm:text-xl sm:mt-5">
        What are your causes?
    </p>
    <div class="flex flex-wrap size1:grid size1:grid-cols-3 mt-3 gap-y-3 gap-x-2 sm:mt-5 sm:gap-x-[14px] sm:gap-y-6">
        @foreach(\App\Models\SupportiveCause::where('is_active', true)->orderBy('order')->get() as $cause)
            <button type="button" 
                    data-cause="{{ $cause->id }}" 
                    class="cause-btn flex-grow px-1 h-[33px] w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px] transition-all duration-200 hover:bg-white hover:text-black">
                {{ $cause->name }}
            </button>
        @endforeach
    </div>
    <input type="hidden" name="causes[]" id="selected-causes">
</div>

<script>
window.addEventListener('load', function() {
    const causeButtons = document.querySelectorAll('.cause-btn');
    const selectedCausesInput = document.getElementById('selected-causes');
    let selectedCauses = new Set();

    causeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const causeId = this.dataset.cause;
            
            if (selectedCauses.has(causeId)) {
                // Deselect
                selectedCauses.delete(causeId);
                this.classList.remove('bg-white', 'text-black');
                this.classList.add('text-custom2');
            } else {
                // Select
                selectedCauses.add(causeId);
                this.classList.add('bg-white', 'text-black');
                this.classList.remove('text-custom2');
            }

            // Update hidden input with comma-separated IDs
            selectedCausesInput.value = Array.from(selectedCauses).join(',');
        });
    });
});
</script>

