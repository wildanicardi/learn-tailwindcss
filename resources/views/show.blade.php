@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="game-details border-b border-gray-800 pb-12 flex">
            <div class="flex-none">
                <img src="/ff7.jpg" alt="cover">
            </div>
            <div class="ml-12 mr-64">
                <h2 class="font-semibold text-4xl">FInal Fantasy VII Remake</h2>
                <div class="text-gray-400">
                    <span>Adventure, RPG</span>
                    &middot;
                    <span>Square Enix</span>
                    &middot;
                    <span>Playstation 4</span>
                </div>
                <div class="flex flex-wrap items-center mt-8">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">90%</div>
                        </div>
                        <div class="ml-4 text-xs"> Member <br>Score </div>
                    </div>
                    <div class="flex items-center ml-12">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">92%</div>
                        </div>
                        <div class="ml-4 text-xs"> Critic <br>Score </div>
                    </div>
                    <div class="flex items-center space-x-4 ml-12">
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="" class="hiver:text-gray-400">
                                A
                            </a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="" class="hiver:text-gray-400">
                                A
                            </a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="" class="hiver:text-gray-400">
                                A
                            </a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="" class="hiver:text-gray-400">
                                A
                            </a>
                        </div>
                    </div>
                </div>
                <p class="mt-12">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, harum! Cumque sequi quis earum veniam, voluptatibus vel delectus necessitatibus beatae hic labore porro itaque inventore in ad ratione quo! Ducimus?
                </p>
                <div class="mt-12">
                    <button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
                        Play Trailer
                    </button>
                </div>
            </div>
        </div>
        <div class="images-container border-b border-gray-800 pb-12 mt-8">
            <h2 class="text-blue-500 uupercase tracking-wide font-semibold">Images</h2>
            <div class="grid grid-cols-3 gap-12 mt-8">
                <div>
                    <a href="#">
                        <img src="/screenshot1.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="/screenshot2.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="/screenshot3.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="/screenshot4.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="/screenshot5.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="/screenshot6.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
            </div>
        </div>
        <div class="similar-games-container  mt-8">
            <h2 class="text-blue-500 uupercase tracking-wide font-semibold">Similar Games</h2>
            <div class="similar-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12">
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="">
                            <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px;bottom:-20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Final Fantasy Remake 7
                    </a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="">
                            <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px;bottom:-20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Final Fantasy Remake 7
                    </a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="">
                            <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px;bottom:-20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Final Fantasy Remake 7
                    </a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="">
                            <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px;bottom:-20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Final Fantasy Remake 7
                    </a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="">
                            <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px;bottom:-20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Final Fantasy Remake 7
                    </a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="">
                            <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px;bottom:-20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Final Fantasy Remake 7
                    </a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
            </div>
        </div>
    </div>
@endsection
