<form method="POST" action="{{ route('register.process') }}">
    @csrf
    <input type="email" name="email" class="w-full h-[45px] text-xs bg-transparent text-custom2 px-0 border-0 border-b-[1px] border-custom1 placeholder-custom2 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-[14px] focus:border-b-[2px] focus:border-custom3" placeholder="Enter email address" required />
    @error('email')
        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
    @enderror
    <input type="submit" class="outline-none w-full shadow-combined h-[44px] mt-[16px] rounded-[40px] text-custom2 bg-custom3 transition-transform duration-300 hover:scale-105">
        Continue
    </input>
</form>
