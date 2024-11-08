<div class="border-b border-custom6 pb-3 mt-5 sm:pb-5">
    <p class="font-medium text-secondary leading-[16.8px] text-xs sm:leading-[28px] sm:text-xl">
        What is your audience size?
    </p>
    <div class="grid grid-cols-1 mt-3 gap-y-3 gap-x-2 sm:gap-x-[14px] sm:gap-y-6 sm:grid-cols-2 size1:grid-cols-3 sm:mt-5">
        @foreach(\App\Models\AudienceSize::where('is_active', true)->get() as $audienceSize)
            <button type="button" 
                data-audience-size="{{ $audienceSize->id }}" 
                class="audience-size-btn w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base">
                {{ $audienceSize->name }}
            </button>
        @endforeach
    </div>
    <input type="hidden" name="audience_size" id="selected-audience-size">
</div>

<script>
window.addEventListener('load', function() {
    const audienceSizeButtons = document.querySelectorAll('.audience-size-btn');
    const selectedAudienceSizeInput = document.getElementById('selected-audience-size');
    
    audienceSizeButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            // Remove active class from all buttons
            audienceSizeButtons.forEach(btn => {
                btn.classList.remove('bg-white', 'text-black');
                btn.classList.add('text-custom2');
            });
            
            // Add active class to clicked button
            this.classList.add('bg-white', 'text-black');
            this.classList.remove('text-custom2');
            
            // Update hidden input
            selectedAudienceSizeInput.value = this.dataset.audienceSize;
        });
    });
});
</script>
