<div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1">
    <div class="mt-8">
        <div class="flex justify-between items-center">
            <div class="basis-1/2 relative">
                <div class="relative left-6 flex justify-center items-center w-[40px] h-[40px] rounded-full bg-primary-400 z-10">
                    <x-svg.capture />
                </div>
                <div class="absolute left-6 w-full h-[4px] bg-primary-400 inset-y-1/2 -z-5"></div>
            </div>
            <div class="basis-1/2 relative">
                <div class="relative left-6 flex justify-center items-center w-[40px] h-[40px] rounded-full bg-primary-600 z-10">
                    <x-svg.file />
                </div>
                <div class="absolute left-6 w-full h-[4px] bg-primary-600 inset-y-1/2 -z-5"></div>
            </div>
            <div class="relative">
                <div class="relative left-6 flex justify-center items-center w-[40px] h-[40px] rounded-full bg-primary-600 z-10">
                    <x-svg.publish />
                </div>
            </div>
        </div>

        <div class="flex justify-between items-center">
            <div class="basis-1/2">
                <p class="text-paragraph">Events Details</p>
            </div>
            <div class="basis-1/2">
                <p class="text-paragraph">Create Tickets</p>
            </div>
            <div class="relative">
                <p class="absolute w-[200px] text-paragraph">Publish And Review</p>
            </div>
        </div>
    </div>
</div>