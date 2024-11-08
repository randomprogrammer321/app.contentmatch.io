<div class="border-b border-custom6 pb-3 sm:pb-5">
    <p class="font-medium text-secondary leading-[16.8px] text-xs sm:leading-[28px] sm:text-xl">
        What type of content do you create?
    </p>
    <div class="grid grid-cols-3 mt-3 gap-y-3 gap-x-2 sm:gap-x-[14px] sm:gap-y-6 sm:mt-5">
        @foreach(\App\Models\Category::where('is_active', true)->get() as $category)
            <button type="button" 
                data-content-type="{{ $category->id }}" 
                class="content-type-btn w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base">
                {{ $category->name }}
            </button>
        @endforeach
    </div>
    <input type="hidden" name="content_type" id="selected-content-type">
</div>

<script>
window.addEventListener('load', function() {
    const contentTypeButtons = document.querySelectorAll('.content-type-btn');
    const selectedContentTypeInput = document.getElementById('selected-content-type');
    
    contentTypeButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            // Remove active class from all buttons
            contentTypeButtons.forEach(btn => {
                btn.classList.remove('bg-white', 'text-black');
                btn.classList.add('text-custom2');
            });
            
            // Add active class to clicked button
            this.classList.add('bg-white', 'text-black');
            this.classList.remove('text-custom2');
            
            // Update hidden input
            selectedContentTypeInput.value = this.dataset.contentType;
        });
    });
});
</script>
