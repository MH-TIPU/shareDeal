<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    
    <style>
        @keyframes marqueeLeft {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        @keyframes marqueeRight {
            0% {
                transform: translateX(-50%);
            }

            100% {
                transform: translateX(0);
            }
        }

        .marquee-wrapper {
            display: flex;
            width: 200%;
        }

        .marquee-left {
            animation: marqueeLeft 20s linear infinite;
        }

        .marquee-right {
            animation: marqueeRight 20s linear infinite;
        }

        .marquee-wrapper:hover {
            animation-play-state: paused;
        }

        .marquee-content {
            display: flex;
            width: 100%;
            gap: 1.25rem;
            justify-content: flex-start;
        }

        .card {
            flex-shrink: 0;
            width: 300px;
            height: 180px;
        }

        @media (min-width: 641px) {
            .marquee-content {
                gap: 2rem;
            }

            .card {
                width: 380px;
                height: 180px;
            }
        }

        @media (max-width: 640px) {

            .marquee-left,
            .marquee-right {
                animation-duration: 10s;
            }

            .marquee-content p {
                font-size: 0.9rem;
                margin: 7px 3px;
            }

            .card {
                width: 250px;
                height: 160px;
            }

            .card .avatar {
                height: 30px;
                width: 30px;
                font-size: 0.9rem;
            }

            .card svg {
                width: 10px;
                height: 10px;
            }
        }
    </style>
    
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="stylesheet" href="{{ asset('c_app.css') }}">
</head>

<body data-new-gr-c-s-check-loaded="14.1256.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <div id="root">
        <div class="font-saira">
            <div class="">
                <nav
                    class="fixed top-0 left-0 w-full bg-[#4CBF42] md:bg-white text-white md:text-[#4CBF42] transition-colors z-50">
                    <div class="container mx-auto px-4">
                        <div class="flex items-center justify-between h-16">
                            <div class="flex-shrink-0">
                                <img alt="ShareDeal Logo" class="hidden md:block h-8 w-auto"
                                    src="{{ asset('assets_file/logo/logoLG.svg') }}" /><img alt="ShareDeal Logo"
                                    class="block md:hidden h-6 w-auto" src="{{ asset('assets_file/logo/logoSM.svg') }}" />
                            </div>
                            <div class="hidden md:flex items-center space-x-5">
                                <button class="text-black hover:text-[#4CBF42] transition-colors duration-300 px-2">
                                    Home</button><button
                                    class="text-[#4CBF42] border-b border-[#4CBF42] hover:text-[#4CBF42] transition-colors duration-300 px-2">
                                    Deals</button><button
                                    class="text-black hover:text-[#4CBF42] transition-colors duration-300 px-2">
                                    About Us</button><button
                                    class="text-black hover:text-[#4CBF42] transition-colors duration-300 px-2">
                                    Support
                                </button>
                            </div>
                            <div class="hidden md:flex items-center space-x-4">
                                <button
                                    class="bg-[#4CBF42] hover:bg-[#43ad39] text-white rounded-full px-4 py-2 flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-map-pin w-4 h-4" aria-hidden="true">
                                        <path
                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                        </path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg><span>Khilgaon</span></button><button
                                    class="bg-[#4CBF42] text-white rounded-full px-1 py-1 relative w-16 h-8">
                                    <div
                                        class="absolute top-1 left-1 w-7 h-6 rounded-full bg-white transition-transform duration-300 translate-x-0">
                                    </div>
                                    <div class="flex justify-between items-center gap-2 px-1">
                                        <span class="text-sm font-medium text-[#4CBF42] z-10">Bn</span><span
                                            class="text-sm font-medium text-white z-10">En</span>
                                    </div>
                                </button><button
                                    class="cursor-pointer hover:text-[#4CBF42] transition-colors text-black">
                                    Login</button><button
                                    class="bg-[#4CBF42] hover:bg-[#43ad39] text-white rounded-lg px-6 py-2">
                                    Sign up
                                </button>
                            </div>
                            <div class="md:hidden flex items-center space-x-3">
                                <div class="bg-[#4CBF42] rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-map-pin w-5 h-5 text-white" aria-hidden="true">
                                        <path
                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                        </path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                </div>
                                <button class="bg-white text-black rounded-full px-1 py-1 relative w-16 h-7">
                                    <div
                                        class="absolute top-1 left-1 w-7 h-5 rounded-full bg-[#4CBF42] transition-transform duration-300 translate-x-0">
                                    </div>
                                    <div class="flex justify-between items-center px-2">
                                        <span class="text-xs font-medium text-white z-10">Bn</span><span
                                            class="text-xs font-medium text-[#4CBF42] z-10">En</span>
                                    </div>
                                </button><button class="text-white hover:text-green-200 transition-colors p-1"
                                    aria-label="Toggle menu">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-menu w-6 h-6" aria-hidden="true">
                                        <path d="M4 5h16"></path>
                                        <path d="M4 12h16"></path>
                                        <path d="M4 19h16"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="md:hidden absolute top-full left-0 w-full bg-[#4CBF42] shadow-lg transition-all duration-300 ease-in-out overflow-hidden max-h-0 opacity-0">
                        <div class="px-4 py-4 space-y-4">
                            <button
                                class="block w-full text-left text-white hover:text-green-200 transition-colors py-2 border-b border-[#4CBF42]">
                                Home</button><button
                                class="block w-full text-left text-green-200 hover:text-green-200 transition-colors py-2 border-b border-[#4CBF42]">
                                Deals</button><button
                                class="block w-full text-left text-white hover:text-green-200 transition-colors py-2 border-b border-[#4CBF42]">
                                About Us</button><button
                                class="block w-full text-left text-white hover:text-green-200 transition-colors py-2 border-b border-[#4CBF42]">
                                Support
                            </button>
                            <div class="pt-2 space-y-3">
                                <button
                                    class="block w-full bg-[#43ad39] hover:bg-[#37902f] text-center text-white border-0 rounded-lg py-2">
                                    Login
                                </button>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="min-h-[calc(100vh-21.2rem)]">
                    <div>
                        <!-- hero section -->
                        <section
                            class="min-h-screen w-full max-w-7xl mx-auto px-3 lg:px-4 grid grid-cols-1 lg:grid-cols-2 items-center pt-20 sm:pt-10 pb-8">
                            <div class="space-y-5">
                                <div
                                    class="inline-flex items-center space-x-2 bg-gradient-to-r from-[#4A689F] to-[#41A338] text-white px-3 py-1.5 rounded-full w-fit text-sm sm:text-base">
                                    <img src="{{ asset('assets_file/icons/star.svg') }}" alt="Star icon" class="w-3 h-3 sm:w-4 sm:h-4" />
                                    <p>Join Deals</p>
                                    <img src="{{ asset('assets_file/icons/star.svg') }}" alt="Star icon" class="w-3 h-3 sm:w-4 sm:h-4" />
                                    <p>Share the Deal</p>
                                    <img src="{{ asset('assets_file/icons/star.svg') }}" alt="Star icon" class="w-3 h-3 sm:w-4 sm:h-4" />
                                    <p>Get Discount</p>
                                </div>
                                <div>
                                    <h1
                                        class="bg-gradient-to-r from-[#4CBF42] via-[#175512] to-[#4A689F] bg-clip-text text-transparent font-bold text-4xl md:text-7xl lg:text-7xl xl:text-[90px] w-fit leading-tight m-0 text-center md:text-start">
                                        One Deal, One Community, Big Savings.
                                    </h1>
                                </div>
                                <p class="text-xl sm:text-2xl md:text-3xl text-[#236924] text-center md:text-start">
                                    Bangladesh's First Group Buying Platform
                                </p>
                                <a href="https://play.google.com/store/apps/details?id=com.selefe.selefe&pcampaignid=web_share"
                                    class="flex justify-center md:justify-start">
                                    <img src="{{ asset('assets_file/logo/store.svg') }}" alt="Store logo" class="w-32 md:w-40" />
                                </a>
                                <div
                                    class="hidden md:flex flex-wrap justify-center sm:justify-start items-center gap-4 sm:gap-6 text-green-600 font-bold mt-8 sm:mt-12 lg:mt-16">
                                    <!-- Item 1 -->
                                    <div class="text-center sm:text-start">
                                        <h2
                                            class="text-4xl md:text-5xl bg-gradient-to-r from-[#278419] via-[#4DC43B] to-[#3a9b2b] bg-clip-text text-transparent">
                                            1500+
                                        </h2>
                                        <p class="text-xs sm:text-sm font-normal">
                                            Total Group Created
                                        </p>
                                    </div>
                                    <!-- Divider -->
                                    <div class="h-12 sm:h-16 w-[2px] sm:w-[3px] bg-[#3a9b2b]"></div>
                                    <!-- Item 2 -->
                                    <div class="text-center sm:text-start">
                                        <h2
                                            class="text-4xl md:text-5xl bg-gradient-to-r from-[#278419] via-[#4DC43B] to-[#3a9b2b] bg-clip-text text-transparent">
                                            150+
                                        </h2>
                                        <p class="text-xs sm:text-sm font-normal">
                                            Total Deals Delivered
                                        </p>
                                    </div>
                                    <!-- Divider -->
                                    <div class="h-12 sm:h-16 w-[2px] sm:w-[3px] bg-[#3a9b2b]"></div>
                                    <!-- Item 3 -->
                                    <div class="text-center sm:text-start">
                                        <h2
                                            class="text-4xl md:text-5xl bg-gradient-to-r from-[#278419] via-[#4DC43B] to-[#3a9b2b] bg-clip-text text-transparent">
                                            500+
                                        </h2>
                                        <p class="text-xs sm:text-sm font-normal">
                                            Farmers with us
                                        </p>
                                    </div>
                                    <!-- Divider -->
                                    <div class="h-12 sm:h-16 w-[2px] sm:w-[3px] bg-[#3a9b2b]"></div>
                                    <!-- Item 4 -->
                                    <div class="text-center sm:text-start">
                                        <h2
                                            class="text-4xl md:text-5xl bg-gradient-to-r from-[#278419] via-[#4DC43B] to-[#3a9b2b] bg-clip-text text-transparent">
                                            8+
                                        </h2>
                                        <p class="text-xs sm:text-sm font-normal">Active Deals</p>
                                    </div>
                                </div>
                            </div>
                            <div class="py-4 sm:py-6 lg:py-7 flex justify-center h-screen lg:justify-end">
                                <img src="{{ asset('assets_file/images/bannerImage.svg') }}" alt="Banner image" class="min-w-full" />
                            </div>
                        </section>

                        <!-- Popular Deals section -->
                        <section class="max-w-7xl mx-auto px-4 py-20">
                            <h2
                                class="text-3xl md:text-5xl font-bold text-center mb-8 bg-gradient-to-r from-[#175512] to-[#4CBF42] bg-clip-text text-transparent">
                                Introducing Our Popular Deals
                            </h2>
                            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-5">
                                <!-- Deal 1: Fresh Potatoes -->
                                <div class="bg-white rounded-2xl shadow-lg border border-gray-200">
                                    <div class="bg-red-700 text-white text-center py-2 rounded-t-2xl">
                                        Time Left <span id="timer-potatoes">07:56:03</span>
                                    </div>
                                    <div class="flex items-center gap-3 p-4">
                                        <img src="https://hips.hearstapps.com/hmg-prod/images/roasted-potatoes-index-66b12d409240c.jpg?crop=0.503xw:1.00xh;0.249xw,0&resize=1200:*"
                                            alt="Fresh Potatoes" class="w-40 h-40 object-cover rounded-lg mb-2" />
                                        <div>
                                            <div class="flex items-center gap-2 justify-between">
                                                <h2 class="text-lg font-bold text-gray-800">
                                                    Fresh Potato
                                                </h2>
                                                <span
                                                    class="bg-green-500 text-white text-xs font-semibold px-1 py-1 rounded-full ml-2">
                                                    Trending
                                                </span>
                                            </div>
                                            <p class="text-gray-600 text-sm">
                                                (Original Rajshahi potatoes that is directly exported
                                                through the Farmers)
                                            </p>
                                            <div class="flex items-center mt-2">
                                                <span class="text-yellow-400">★★★★☆</span>
                                                <span class="text-gray-600 text-sm ml-1">(125+ review)</span>
                                            </div>
                                            <div class="flex items-center mt-2">
                                                <div class="flex -space-x-2 mr-2">
                                                    <img src="{{ asset('assets_file/icons/star.svg') }}" alt="User"
                                                        class="w-6 h-6 rounded-full border-2 border-white" />
                                                    <img src="{{ asset('assets_file/icons/star.svg') }}" alt="User"
                                                        class="w-6 h-6 rounded-full border-2 border-white" />
                                                    <img src="{{ asset('assets_file/icons/star.svg') }}" alt="User"
                                                        class="w-6 h-6 rounded-full border-2 border-white" />
                                                </div>
                                            </div>
                                            <span class="text-gray-600 text-sm">+152 People joined</span>
                                        </div>
                                    </div>
                                    <div class="w-full pb-4 px-4">
                                        <div class="flex justify-between text-gray-700 text-sm">
                                            <span>25kg / 50kg</span>
                                            <span>25kg left</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 mt-1">
                                            <div class="bg-green-500 h-2.5 rounded-full" style="width: 50%"></div>
                                        </div>
                                        <div class="flex justify-between items-end">
                                            <a href="/details"
                                                class="bg-green-700 text-white py-2 px-4 rounded-lg mt-4 font-semibold">Join
                                                Now!</a>
                                            <div class="text-center mt-2 text-gray-600">
                                                <span class="line-through text-xl">Tk500</span>
                                                <span class="font-bold text-2xl">Tk430</span>
                                                <span class="text-green-600 font-semibold">(save 30%)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Deal 2: Fresh Mango -->
                                <div class="bg-white rounded-2xl shadow-lg border border-gray-200">
                                    <div class="bg-red-700 text-white text-center py-2 rounded-t-2xl">
                                        Time Left <span id="timer-mango">05:30:15</span>
                                    </div>
                                    <div class="flex items-center gap-3 p-4">
                                        <img src="https://www.biovie.fr/img/cms/histoire-origine-mangue.png"
                                            alt="Fresh Mango" class="w-40 h-40 object-cover rounded-lg mb-2" />
                                        <div>
                                            <div class="flex items-center gap-2 justify-between">
                                                <h2 class="text-lg font-bold text-gray-800">
                                                    Fresh Mango
                                                </h2>
                                                <span
                                                    class="bg-green-500 text-white text-xs font-semibold px-1 py-1 rounded-full ml-2">
                                                    Trending
                                                </span>
                                            </div>
                                            <p class="text-gray-600 text-sm">
                                                (Organic mango directly from local farmers)
                                            </p>
                                            <div class="flex items-center mt-2">
                                                <span class="text-yellow-400">★★★★☆</span>
                                                <span class="text-gray-600 text-sm ml-1">(90+ review)</span>
                                            </div>
                                            <div class="flex items-center mt-2">
                                                <div class="flex -space-x-2 mr-2">
                                                    <img src="{{ asset('assets_file/icons/star.svg') }}" alt="User"
                                                        class="w-6 h-6 rounded-full border-2 border-white" />
                                                    <img src="{{ asset('assets_file/icons/star.svg') }}" alt="User"
                                                        class="w-6 h-6 rounded-full border-2 border-white" />
                                                    <img src="{{ asset('assets_file/icons/star.svg') }}" alt="User"
                                                        class="w-6 h-6 rounded-full border-2 border-white" />
                                                </div>
                                            </div>
                                            <span class="text-gray-600 text-sm">+100 People joined</span>
                                        </div>
                                    </div>
                                    <div class="w-full pb-4 px-4">
                                        <div class="flex justify-between text-gray-700 text-sm">
                                            <span>20kg / 40kg</span>
                                            <span>15kg left</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 mt-1">
                                            <div class="bg-green-500 h-2.5 rounded-full" style="width: 37.5%"></div>
                                        </div>
                                        <div class="flex justify-between items-end">
                                            <a href="/details"
                                                class="bg-green-700 text-white py-2 px-4 rounded-lg mt-4 font-semibold">Join
                                                Now!</a>
                                            <div class="text-center mt-2 text-gray-600">
                                                <span class="line-through text-xl">Tk400</span>
                                                <span class="font-bold text-2xl">Tk280</span>
                                                <span class="text-green-600 font-semibold">(save 30%)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Deal 3: Fresh Carrots -->
                                <div class="bg-white rounded-2xl shadow-lg border border-gray-200">
                                    <div class="bg-red-700 text-white text-center py-2 rounded-t-2xl">
                                        Time Left <span id="timer-carrots">03:45:22</span>
                                    </div>
                                    <div class="flex items-center gap-3 p-4">
                                        <img src="https://organicbazar.net/cdn/shop/products/Untitled-design-13-1.jpg?v=1757833717"
                                            alt="Fresh Carrots" class="w-40 h-40 object-cover rounded-lg mb-2" />
                                        <div>
                                            <div class="flex items-center gap-2 justify-between">
                                                <h2 class="text-lg font-bold text-gray-800">
                                                    Fresh Carrots
                                                </h2>
                                                <span
                                                    class="bg-green-500 text-white text-xs font-semibold px-1 py-1 rounded-full ml-2">
                                                    Trending
                                                </span>
                                            </div>
                                            <p class="text-gray-600 text-sm">
                                                (Fresh carrots sourced from organic farms)
                                            </p>
                                            <div class="flex items-center mt-2">
                                                <span class="text-yellow-400">★★★★☆</span>
                                                <span class="text-gray-600 text-sm ml-1">(110+ review)</span>
                                            </div>
                                            <div class="flex items-center mt-2">
                                                <div class="flex -space-x-2 mr-2">
                                                    <img src="{{ asset('assets_file/icons/star.svg') }}" alt="User"
                                                        class="w-6 h-6 rounded-full border-2 border-white" />
                                                    <img src="{{ asset('assets_file/icons/star.svg') }}" alt="User"
                                                        class="w-6 h-6 rounded-full border-2 border-white" />
                                                    <img src="{{ asset('assets_file/icons/star.svg') }}" alt="User"
                                                        class="w-6 h-6 rounded-full border-2 border-white" />
                                                </div>
                                            </div>
                                            <span class="text-gray-600 text-sm">+120 People joined</span>
                                        </div>
                                    </div>
                                    <div class="w-full pb-4 px-4">
                                        <div class="flex justify-between text-gray-700 text-sm">
                                            <span>15kg / 30kg</span>
                                            <span>10kg left</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 mt-1">
                                            <div class="bg-green-500 h-2.5 rounded-full" style="width: 33.3%"></div>
                                        </div>
                                        <div class="flex justify-between items-end">
                                            <a href="/details"
                                                class="bg-green-700 text-white py-2 px-4 rounded-lg mt-4 font-semibold">Join
                                                Now!</a>
                                            <div class="text-center mt-2 text-gray-600">
                                                <span class="line-through text-xl">Tk300</span>
                                                <span class="font-bold text-2xl">Tk210</span>
                                                <span class="text-green-600 font-semibold">(save 30%)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <script>
                            // Function to format time as HH:MM:SS
                            function formatTime(seconds) {
                                const hrs = Math.floor(seconds / 3600);
                                const mins = Math.floor((seconds % 3600) / 60);
                                const secs = seconds % 60;
                                return `${hrs.toString().padStart(2, "0")}:${mins
                    .toString()
                    .padStart(2, "0")}:${secs.toString().padStart(2, "0")}`;
                            }

                            // Function to start a countdown timer
                            function startTimer(elementId, initialTime) {
                                let timeLeft = initialTime;
                                const timerElement = document.getElementById(elementId);

                                const interval = setInterval(() => {
                                    if (timeLeft <= 0) {
                                        clearInterval(interval);
                                        timerElement.textContent = "00:00:00";
                                        return;
                                    }
                                    timeLeft--;
                                    timerElement.textContent = formatTime(timeLeft);
                                }, 1000);
                            }

                            // Initialize timers with initial times in seconds
                            startTimer("timer-potatoes", 7 * 3600 + 56 * 60 + 3); // 07:56:03
                            startTimer("timer-mango", 5 * 3600 + 30 * 60 + 15); // 05:30:15
                            startTimer("timer-carrots", 3 * 3600 + 45 * 60 + 22); // 03:45:22
                        </script>

                        <!-- Scrolling Notifications -->
                        <section
                            class="relative h-[300px] sm:h-[400px] md:h-[500px] w-full overflow-hidden bg-gradient-to-b from-cyan-300 via-blue-400 to-blue-500 mb-20">
                            <div class="absolute opacity-100"
                                style="
                    left: 72.1183%;
                    animation: 5.28835s linear 1.05073s infinite normal none
                      running drop;
                  ">
                                <div
                                    class="flex items-center gap-2 sm:gap-3 rounded-full bg-white px-3 py-2 sm:px-4 sm:py-3 shadow-lg max-w-xs sm:max-w-sm">
                                    <div
                                        class="flex h-8 w-8 sm:h-10 sm:w-10 items-center justify-center rounded-full bg-green-500 text-white font-semibold text-sm sm:text-base">
                                        N
                                    </div>
                                    <span
                                        class="whitespace-nowrap rounded-full bg-green-500 px-3 py-1 sm:px-4 sm:py-2 text-xs sm:text-sm font-medium text-white">Nahid
                                        joined a deal from Uttara</span>
                                </div>
                            </div>
                            <div class="absolute opacity-100"
                                style="
                    left: 38.0031%;
                    animation: 6.98082s linear 0.908073s infinite normal none
                      running drop;
                  ">
                                <div
                                    class="flex items-center gap-2 sm:gap-3 rounded-full bg-white px-3 py-2 sm:px-4 sm:py-3 shadow-lg max-w-xs sm:max-w-sm">
                                    <div
                                        class="flex h-8 w-8 sm:h-10 sm:w-10 items-center justify-center rounded-full bg-green-500 text-white font-semibold text-sm sm:text-base">
                                        B
                                    </div>
                                    <span
                                        class="whitespace-nowrap rounded-full bg-green-500 px-3 py-1 sm:px-4 sm:py-2 text-xs sm:text-sm font-medium text-white">Bushra
                                        joined a deal from Gulshan</span>
                                </div>
                            </div>
                            <div class="absolute opacity-100"
                                style="
                    left: 14.9467%;
                    animation: 9.27723s linear 1.53495s infinite normal none
                      running drop;
                  ">
                                <div
                                    class="flex items-center gap-2 sm:gap-3 rounded-full bg-white px-3 py-2 sm:px-4 sm:py-3 shadow-lg max-w-xs sm:max-w-sm">
                                    <div
                                        class="flex h-8 w-8 sm:h-10 sm:w-10 items-center justify-center rounded-full bg-green-500 text-white font-semibold text-sm sm:text-base">
                                        M
                                    </div>
                                    <span
                                        class="whitespace-nowrap rounded-full bg-green-500 px-3 py-1 sm:px-4 sm:py-2 text-xs sm:text-sm font-medium text-white">Mahmud
                                        joined a deal from Dhanmondi</span>
                                </div>
                            </div>
                            <div class="absolute opacity-100"
                                style="
                    left: 37.9663%;
                    animation: 6.07684s linear 1.4625s infinite normal none
                      running drop;
                  ">
                                <div
                                    class="flex items-center gap-2 sm:gap-3 rounded-full bg-white px-3 py-2 sm:px-4 sm:py-3 shadow-lg max-w-xs sm:max-w-sm">
                                    <div
                                        class="flex h-8 w-8 sm:h-10 sm:w-10 items-center justify-center rounded-full bg-green-500 text-white font-semibold text-sm sm:text-base">
                                        A
                                    </div>
                                    <span
                                        class="whitespace-nowrap rounded-full bg-green-500 px-3 py-1 sm:px-4 sm:py-2 text-xs sm:text-sm font-medium text-white">Anika
                                        joined a deal from Banani</span>
                                </div>
                            </div>
                            <div class="absolute opacity-100"
                                style="
                    left: 7.25704%;
                    animation: 6.93825s linear 2.68668s infinite normal none
                      running drop;
                  ">
                                <div
                                    class="flex items-center gap-2 sm:gap-3 rounded-full bg-white px-3 py-2 sm:px-4 sm:py-3 shadow-lg max-w-xs sm:max-w-sm">
                                    <div
                                        class="flex h-8 w-8 sm:h-10 sm:w-10 items-center justify-center rounded-full bg-green-500 text-white font-semibold text-sm sm:text-base">
                                        S
                                    </div>
                                    <span
                                        class="whitespace-nowrap rounded-full bg-green-500 px-3 py-1 sm:px-4 sm:py-2 text-xs sm:text-sm font-medium text-white">Sakib
                                        joined a deal from Mirpur</span>
                                </div>
                            </div>
                            <div class="absolute opacity-100"
                                style="
                    left: 32.437%;
                    animation: 5.94892s linear 1.55728s infinite normal none
                      running drop;
                  ">
                                <div
                                    class="flex items-center gap-2 sm:gap-3 rounded-full bg-white px-3 py-2 sm:px-4 sm:py-3 shadow-lg max-w-xs sm:max-w-sm">
                                    <div
                                        class="flex h-8 w-8 sm:h-10 sm:w-10 items-center justify-center rounded-full bg-green-500 text-white font-semibold text-sm sm:text-base">
                                        N
                                    </div>
                                    <span
                                        class="whitespace-nowrap rounded-full bg-green-500 px-3 py-1 sm:px-4 sm:py-2 text-xs sm:text-sm font-medium text-white">Nadia
                                        joined a deal from Uttara</span>
                                </div>
                            </div>
                            <div class="absolute opacity-100"
                                style="
                    left: 6.97341%;
                    animation: 9.47808s linear 2.77076s infinite normal none
                      running drop;
                  ">
                                <div
                                    class="flex items-center gap-2 sm:gap-3 rounded-full bg-white px-3 py-2 sm:px-4 sm:py-3 shadow-lg max-w-xs sm:max-w-sm">
                                    <div
                                        class="flex h-8 w-8 sm:h-10 sm:w-10 items-center justify-center rounded-full bg-green-500 text-white font-semibold text-sm sm:text-base">
                                        R
                                    </div>
                                    <span
                                        class="whitespace-nowrap rounded-full bg-green-500 px-3 py-1 sm:px-4 sm:py-2 text-xs sm:text-sm font-medium text-white">Rafiq
                                        joined a deal from Mohakhali</span>
                                </div>
                            </div>
                            <div class="absolute opacity-100"
                                style="
                    left: 58.9862%;
                    animation: 7.25764s linear 2.51594s infinite normal none
                      running drop;
                  ">
                                <div
                                    class="flex items-center gap-2 sm:gap-3 rounded-full bg-white px-3 py-2 sm:px-4 sm:py-3 shadow-lg max-w-xs sm:max-w-sm">
                                    <div
                                        class="flex h-8 w-8 sm:h-10 sm:w-10 items-center justify-center rounded-full bg-green-500 text-white font-semibold text-sm sm:text-base">
                                        T
                                    </div>
                                    <span
                                        class="whitespace-nowrap rounded-full bg-green-500 px-3 py-1 sm:px-4 sm:py-2 text-xs sm:text-sm font-medium text-white">Tasnim
                                        joined a deal from Bashundhara</span>
                                </div>
                            </div>
                            <style>
                                @keyframes drop {
                                    0% {
                                        transform: translateY(120vh);
                                        /* start from bottom */
                                    }

                                    100% {
                                        transform: translateY(-120%);
                                        /* move to top */
                                    }
                                }
                            </style>
                        </section>

                        <!-- Mission & Vision section -->
                        <section class="pb-12">
                            <div class="max-w-7xl mx-auto px-4">
                                <div
                                    class="md:border-r-[16px] px-4 text-start md:text-center border-l-[16px] border-[#4CBF42]">
                                    <h1 class="text-3xl md:text-5xl mb-5 font-semibold text-gray-800">
                                        we work for our
                                        <span class="text-[#4CBF42]">Mission &amp; Vision</span>
                                    </h1>
                                    <p class="text-gray-600 mb-10 text-sm md:text-[20px]">
                                        Transfer funds in real-time—locally or
                                        internationally—with zero hidden fees and bank-grade
                                        security.
                                    </p>
                                </div>
                                <div
                                    class="mt-24 grid md:grid-cols-2 justify-between items-start gap-12 md:border-r-[16px] border-l-[16px] border-[#4CBF42] md:px-32 px-4">
                                    <div class="w-full text-left">
                                        <div class="flex items-center mb-4 gap-3">
                                            <div
                                                class="w-18 h-18 bg-green-100 rounded-lg flex items-center justify-center">
                                                <img alt=""
                                                    src="{{ asset('assets_file/icons/mission.svg') }}" />
                                            </div>
                                            <h2 class="text-3xl md:text-2xl font-semibold text-gray-800">
                                                Mission
                                            </h2>
                                        </div>
                                        <p class="text-gray-600 text-sm md:text-lg">
                                            To connect farmers directly with consumers through group
                                            buying, delivering fresh groceries at the lowest price,
                                            reducing waste, and building a sustainable, data-driven,
                                            and eco-friendly supply chain.
                                        </p>
                                    </div>
                                    <div class="w-full text-left">
                                        <div class="flex items-center mb-4 gap-3">
                                            <div
                                                class="w-18 h-18 bg-green-100 rounded-lg flex items-center justify-center">
                                                <img alt="" class="w-12 h-12"
                                                    src="{{ asset('assets_file/icons/vision.png') }}" />
                                            </div>
                                            <h2 class="text-3xl md:text-2xl font-semibold text-gray-800">
                                                Vision
                                            </h2>
                                        </div>
                                        <p class="text-gray-600 text-sm md:text-lg">
                                            To become Bangladesh leading grocery platform, reaching
                                            10 million households by 2032 and generating $1 billion
                                            in annual revenue, while making fresh, affordable meals
                                            accessible to every family through a fair, tech-driven
                                            ecosystem.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- How it works section -->
                        <section class="md:border-t md:border-[#4CBF42]">
                            <div class="max-w-7xl mx-auto p-4">
                                <div class="text-center mt-7">
                                    <p class="text-2xl text-[#6a6a6a] font-semibold">
                                        How ShareDeal Works
                                    </p>
                                    <h1 class="text-[#4CBF42] md:text-6xl text-3xl font-bold py-5">
                                        Three Steps to Save Money
                                    </h1>
                                </div>
                                <div class="grid grid-cols-6 items-baseline">
                                    <div class="col-span-4 hidden md:block">
                                        <img alt="" class="object-cover w-full"
                                            src="{{ asset('assets_file/images/frame.svg') }}" />
                                    </div>
                                    <div class="col-span-2 hidden md:block pb-10">
                                        <img alt="" class="object-cover w-full"
                                            src="{{ asset('assets_file/images/carts.svg') }}" />
                                    </div>
                                    <div class="col-span-6 md:hidden">
                                        <img alt="" class="object-cover w-full"
                                            src="{{ asset('assets_file/images/mobileFrame.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="md:border-y-2 md:border-[#4CBF4257] my-10">
                                <div class="container mx-auto">
                                    <div class="grid md:grid-cols-3">
                                        <div
                                            class="flex flex-col items-center space-y-3 md:p-10 p-4 bg-[#EBF5EA] border-b-2 border-[#4DC43B] md:bg-white md:border-none">
                                            <div
                                                class="w-[72px] h-[72px] rounded-full bg-[#D9F4DA] flex items-center justify-center">
                                                <img alt="" class="w-10 h-10"
                                                    src=" data:image/svg+xml,%3csvg%20width='40'%20height='28'%20viewBox='0%200%2040%2028'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M32.7021%2020.3041C31.7247%2020.3041%2030.7962%2020.687%2030.0957%2021.3793C29.3952%2022.0798%2029.0043%2022.992%2029.0043%2023.9694C29.0043%2024.9468%2029.3871%2025.859%2030.0957%2026.5595C30.8043%2027.2518%2031.7247%2027.6346%2032.7021%2027.6346C34.7058%2027.6346%2036.3348%2025.9893%2036.3348%2023.9694C36.3348%2021.9494%2034.7058%2020.3041%2032.7021%2020.3041ZM32.7021%2026.0056C31.5781%2026.0056%2030.6333%2025.0771%2030.6333%2023.9694C30.6333%2022.8617%2031.5781%2021.9331%2032.7021%2021.9331C33.8098%2021.9331%2034.7058%2022.8454%2034.7058%2023.9694C34.7058%2025.0934%2033.8098%2026.0056%2032.7021%2026.0056ZM33.6469%208.09482C33.5003%207.95635%2033.3048%207.88305%2033.1012%207.88305H28.9228C28.4749%207.88305%2028.1083%208.24957%2028.1083%208.69755V15.3764C28.1083%2015.8244%2028.4749%2016.1909%2028.9228%2016.1909H35.5528C36.0008%2016.1909%2036.3673%2015.8244%2036.3673%2015.3764V10.9048C36.3673%2010.6768%2036.2696%2010.4569%2036.0986%2010.3021L33.6469%208.09482ZM34.7383%2014.5619H29.7373V9.5039H32.7835L34.7383%2011.2632V14.5619ZM12.8121%2020.3041C11.8347%2020.3041%2010.9061%2020.687%2010.2057%2021.3793C9.50519%2022.0798%209.11423%2022.992%209.11423%2023.9694C9.11423%2024.9468%209.49705%2025.859%2010.2057%2026.5595C10.9143%2027.2518%2011.8347%2027.6346%2012.8121%2027.6346C14.8157%2027.6346%2016.4447%2025.9893%2016.4447%2023.9694C16.4447%2021.9494%2014.8157%2020.3041%2012.8121%2020.3041ZM12.8121%2026.0056C11.688%2026.0056%2010.7432%2025.0771%2010.7432%2023.9694C10.7432%2022.8617%2011.688%2021.9331%2012.8121%2021.9331C13.9198%2021.9331%2014.8157%2022.8454%2014.8157%2023.9694C14.8157%2025.0934%2013.9198%2026.0056%2012.8121%2026.0056ZM7.37935%2021.306H5.74221V19.1394C5.74221%2018.6914%205.37569%2018.3249%204.92771%2018.3249C4.47974%2018.3249%204.11322%2018.6914%204.11322%2019.1394V22.1205C4.11322%2022.5684%204.47974%2022.935%204.92771%2022.935H7.37935C7.82733%2022.935%208.19385%2022.5684%208.19385%2022.1205C8.19385%2021.6725%207.82733%2021.306%207.37935%2021.306ZM11.5089%2016.867C11.5089%2016.419%2011.1423%2016.0525%2010.6944%2016.0525H0.814498C0.366524%2016.0525%200%2016.419%200%2016.867C0%2017.3149%200.366524%2017.6815%200.814498%2017.6815H10.6944C11.1423%2017.6815%2011.5089%2017.3231%2011.5089%2016.867ZM2.46793%2013.9266L12.3478%2013.9836C12.7958%2013.9836%2013.1623%2013.6253%2013.1704%2013.1773C13.1786%2012.7212%2012.8121%2012.3546%2012.3641%2012.3546L2.48422%2012.2976C2.47607%2012.2976%202.47607%2012.2976%202.47607%2012.2976C2.0281%2012.2976%201.66158%2012.656%201.66158%2013.104C1.65343%2013.5601%202.01996%2013.9266%202.46793%2013.9266ZM4.12951%2010.2288H14.0094C14.4573%2010.2288%2014.8239%209.86228%2014.8239%209.41431C14.8239%208.96633%2014.4573%208.59981%2014.0094%208.59981H4.12951C3.68153%208.59981%203.31501%208.96633%203.31501%209.41431C3.31501%209.86228%203.68153%2010.2288%204.12951%2010.2288ZM39.6986%209.12923L33.8668%204.29926C33.7202%204.17708%2033.541%204.11193%2033.3456%204.11193H26.4875V1.17973C26.4875%200.731759%2026.121%200.365234%2025.673%200.365234H4.92771C4.47974%200.365234%204.11322%200.731759%204.11322%201.17973V7.14186C4.11322%207.58983%204.47974%207.95636%204.92771%207.95636C5.37569%207.95636%205.74221%207.58983%205.74221%207.14186V1.99423H24.8666V21.306H18.1877C17.7398%2021.306%2017.3732%2021.6725%2017.3732%2022.1205C17.3732%2022.5684%2017.7398%2022.935%2018.1877%2022.935H28.1328C28.5807%2022.935%2028.9473%2022.5684%2028.9473%2022.1205C28.9473%2021.6725%2028.5807%2021.306%2028.1328%2021.306H26.4956V5.74092H33.0605L38.371%2010.1392L38.314%2021.2897H37.4669C37.0189%2021.2897%2036.6524%2021.6562%2036.6524%2022.1042C36.6524%2022.5522%2037.0189%2022.9187%2037.4669%2022.9187H39.1203C39.5683%2022.9187%2039.9348%2022.5603%2039.9348%2022.1123L40%209.76454C39.9919%209.52019%2039.886%209.28399%2039.6986%209.12923Z'%20fill='%234CBF42'/%3e%3c/svg%3e" />
                                            </div>
                                            <h1 class="md:text-2xl text-xl font-semibold">
                                                Free Shipping
                                            </h1>
                                            <p class="#111825">Free shipping with discount</p>
                                        </div>
                                        <div
                                            class="flex flex-col items-center space-y-3 my-4 md:my-0 md:p-10 p-4 bg-[#EBF5EA] border-b-2 border-[#4DC43B] md:bg-white md:border-none">
                                            <div
                                                class="w-[72px] h-[72px] rounded-full bg-[#D9F4DA] flex items-center justify-center">
                                                <img alt="" class="w-10 h-10"
                                                    src="data:image/svg+xml,%3csvg%20width='36'%20height='36'%20viewBox='0%200%2036%2036'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M30.3165%2013.6891V12.305C30.3165%208.99244%2029.1443%205.91429%2027.0191%203.63025C24.8409%201.28571%2021.8459%200%2018.5787%200H17.4367C14.1695%200%2011.1745%201.28571%208.99636%203.63025C6.87115%205.91429%205.69888%208.99244%205.69888%2012.305V13.6891C3.11989%2013.863%201.07031%2016.0109%201.07031%2018.6353V20.7983C1.07031%2023.5286%203.29384%2025.7521%206.02409%2025.7521H8.81485C9.31401%2025.7521%209.72241%2025.3437%209.72241%2024.8445V14.5815C9.72241%2014.0824%209.31401%2013.674%208.81485%2013.674H7.51401V12.305C7.51401%206.32269%2011.7796%201.81513%2017.4291%201.81513H18.5712C24.2283%201.81513%2028.4863%206.32269%2028.4863%2012.305V13.674H27.1854C26.6863%2013.674%2026.2779%2014.0824%2026.2779%2014.5815V24.837C26.2779%2025.3361%2026.6863%2025.7445%2027.1854%2025.7445H28.456C28.0854%2030.479%2024.8258%2031.5756%2023.3132%2031.8252C22.8972%2030.5471%2021.6947%2029.6244%2020.2804%2029.6244H18.0115C16.2569%2029.6244%2014.8275%2031.0538%2014.8275%2032.8084C14.8275%2034.563%2016.2569%2036%2018.0115%2036H20.288C21.7552%2036%2022.988%2035.0017%2023.3585%2033.6555C24.0997%2033.5496%2025.272%2033.2849%2026.4367%2032.6042C28.0779%2031.6437%2030.0216%2029.6849%2030.2787%2025.737C32.8728%2025.5782%2034.93%2023.4227%2034.93%2020.7908V18.6277C34.9375%2016.0109%2032.8955%2013.8555%2030.3165%2013.6891ZM7.92241%2023.9294H6.03922C4.30729%2023.9294%202.90056%2022.5227%202.90056%2020.7908V18.6277C2.90056%2016.8958%204.30729%2015.4891%206.03922%2015.4891H7.92241V23.9294ZM20.288%2034.1849H18.0115C17.2552%2034.1849%2016.6426%2033.5723%2016.6426%2032.816C16.6426%2032.0597%2017.2552%2031.4471%2018.0115%2031.4471H20.288C21.0443%2031.4471%2021.6569%2032.0597%2021.6569%2032.816C21.6569%2033.5723%2021.0443%2034.1849%2020.288%2034.1849ZM33.1224%2020.7908C33.1224%2022.5227%2031.7157%2023.9294%2029.9838%2023.9294H28.1006V15.4891H29.9838C31.7157%2015.4891%2033.1224%2016.8958%2033.1224%2018.6277V20.7908Z'%20fill='%234CBF42'/%3e%3c/svg%3e" />
                                            </div>
                                            <h1 class="md:text-2xl text-xl font-semibold">
                                                Great Support 24/7
                                            </h1>
                                            <p class="#111825">Instant access to Contact</p>
                                        </div>
                                        <div
                                            class="flex flex-col items-center space-y-3 md:p-10 p-4 bg-[#EBF5EA] border-b-2 border-[#4DC43B] md:bg-white md:border-none">
                                            <div
                                                class="w-[72px] h-[72px] rounded-full bg-[#00B207] flex items-center justify-center">
                                                <img alt="" class="w-10 h-10"
                                                    src="data:image/svg+xml,%3csvg%20width='36'%20height='36'%20viewBox='0%200%2036%2036'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M32.3822%2031.201L30.3105%207.85427C30.2733%207.39226%2029.8858%207.04202%2029.4163%207.04202H25.0495C25.0421%203.15959%2021.8825%200%2018%200C14.1176%200%2010.958%203.15959%2010.9506%207.04202H6.58377C6.12175%207.04202%205.73425%207.39226%205.68954%207.85427L3.61792%2031.201C3.61792%2031.2308%203.61792%2031.2532%203.61792%2031.283C3.61792%2033.8837%206.00997%2036%208.94601%2036H27.0541C29.9901%2036%2032.3822%2033.8837%2032.3822%2031.283C32.3822%2031.2532%2032.3822%2031.2308%2032.3822%2031.201ZM18%201.78845C20.8988%201.78845%2023.2536%204.14324%2023.2611%207.04202H12.739C12.7465%204.14324%2015.1013%201.78845%2018%201.78845ZM27.0541%2034.2041H8.94601C7.00852%2034.2041%205.42873%2032.9149%205.40637%2031.3128L7.40347%208.83047H10.9506V11.9677C10.9506%2012.4595%2011.353%2012.8619%2011.8448%2012.8619C12.3366%2012.8619%2012.739%2012.4595%2012.739%2011.9677V8.83047H23.2611V11.9677C23.2611%2012.4595%2023.6635%2012.8619%2024.1553%2012.8619C24.6471%2012.8619%2025.0495%2012.4595%2025.0495%2011.9677V8.83047H28.5966L30.5937%2031.3202C30.5713%2032.9149%2028.9916%2034.2041%2027.0541%2034.2041Z'%20fill='white'/%3e%3cpath%20d='M21.7185%2018.6148L16.4426%2023.8907L14.289%2021.7371C13.9388%2021.3869%2013.3724%2021.3869%2013.0222%2021.7371C12.672%2022.0873%2012.672%2022.6537%2013.0222%2023.0039L15.8092%2025.7909C15.9806%2025.9623%2016.2116%2026.0517%2016.4426%2026.0517C16.6736%2026.0517%2016.8972%2025.9623%2017.076%2025.7909L22.9853%2019.8816C23.3356%2019.5313%2023.3356%2018.965%2022.9853%2018.6148C22.6351%2018.272%2022.0688%2018.272%2021.7185%2018.6148Z'%20fill='white'/%3e%3c/svg%3e" />
                                            </div>
                                            <h1 class="md:text-2xl text-xl font-semibold">
                                                100% Secure Payment
                                            </h1>
                                            <p class="#111825">We ensure your money is save</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Farmers Behalf section -->
                        <section class="py-10 px-4">
                            <div class="max-w-7xl mx-auto">
                                <div class="text-center mb-16">
                                    <h1
                                        class="text-3xl md:text-6xl text-start md:text-center font-bold text-[#4CBF42] mb-2">
                                        Farmers Behalf
                                    </h1>
                                    <div class="md:hidden flex items-center space-x-2 mb-6">
                                        <div class="h-1 w-12 sm:w-16 bg-green-500 rounded"></div>
                                        <div class="h-1 w-6 bg-[#4CBF42]/20 rounded"></div>
                                    </div>
                                </div>
                                <div class="grid lg:grid-cols-2 gap-12 items-center">
                                    <div class="grid grid-cols-2">
                                        <div class="bg-white rounded-2xl overflow-hidden border border-[#E6E6E6]">
                                            <img alt="" class="object-cover w-full h-72"
                                                src="{{ asset('assets_file/images/farmer2.jpg') }}" />
                                            <div class="p-3 md:p-6">
                                                <h3 class="md:text-2xl font-bold text-gray-800 mb-1">
                                                    Tota Mia
                                                </h3>
                                                <p class="text-gray-600 mb-3">Rajshahi</p>
                                                <div class="flex items-center space-x-1">
                                                    <span class="text-yellow-400 text-xl">★</span><span
                                                        class="text-yellow-400 text-xl">★</span><span
                                                        class="text-yellow-400 text-xl">★</span><span
                                                        class="text-yellow-400 text-xl">★</span><span
                                                        class="text-yellow-400 text-xl">★</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-white rounded-2xl overflow-hidden border border-[#E6E6E6]">
                                            <img alt="" class="object-cover w-full h-72"
                                                src="{{ asset('assets_file/images/farmer3.jpg') }}" />
                                            <div class="p-3 md:p-6">
                                                <h3 class="md:text-2xl font-bold text-gray-800 mb-1">
                                                    Md Sujon Molla
                                                </h3>
                                                <p class="text-gray-600 mb-3">Gazipur</p>
                                                <div class="flex items-center space-x-1">
                                                    <span class="text-yellow-400 text-xl">★</span><span
                                                        class="text-yellow-400 text-xl">★</span><span
                                                        class="text-yellow-400 text-xl">★</span><span
                                                        class="text-yellow-400 text-xl">★</span><span
                                                        class="text-yellow-400 text-xl">★</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="space-y-8">
                                        <div>
                                            <h2
                                                class="text-2xl md:text-4xl font-semibold text-gray-900 leading-tight mb-8">
                                                100% Trusted Organic<br />
                                                Food From Farmers
                                            </h2>
                                        </div>
                                        <div class="space-y-6">
                                            <div class="flex items-start space-x-4">
                                                <div class="flex-shrink-0">
                                                    <div
                                                        class="w-6 h-6 bg-[#4CBF42] rounded-full flex items-center justify-center">
                                                        <span class="text-white font-bold text-sm"></span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h3 class="text-xl font-semibold text-gray-800 mb-2">
                                                        Healthy &amp; natural food for lovers of healthy
                                                        food.
                                                    </h3>
                                                    <p class="text-gray-600 leading-relaxed">
                                                        Every day, we bring you
                                                        <span class="font-bold">fresh and high-quality products</span>
                                                        straight from the farm to your home. We believe in
                                                        food that is pure, safe, and full of nutrition.
                                                        Our mission is to make healthy living simple,
                                                        accessible, and enjoyable for everyone. Choose
                                                        ShareDeal for freshness you can trust and quality
                                                        you can taste.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex items-start space-x-4">
                                                <div class="flex-shrink-0">
                                                    <div
                                                        class="w-6 h-6 bg-[#4CBF42] rounded-full flex items-center justify-center">
                                                        <span class="text-white font-bold text-sm"></span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h3 class="text-xl font-semibold text-gray-800 mb-2">
                                                        Every day fresh and quality products for you.
                                                    </h3>
                                                    <p class="text-gray-600 leading-relaxed">
                                                        We deliver only the freshest groceries, carefully
                                                        sourced from trusted farmers. Our focus is on
                                                        quality, nutrition, and taste in every product.
                                                        From farm to home, we ensure safe and natural food
                                                        for your family. Because you deserve freshness and
                                                        quality every single day.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-4">
                                            <button
                                                class="bg-[#4CBF42] text-white font-semibold py-4 px-8 rounded-full text-lg transition-colors duration-200 flex items-center space-x-2 group">
                                                <span>Shop Now</span><span
                                                    class="transform group-hover:translate-x-1 transition-transform duration-200">→</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- About Us section -->
                        <section class="min-h-screen py-6 sm:py-8 md:py-12 px-4 sm:px-6 md:px-8">
                            <div class="max-w-7xl mx-auto">
                                <div class="mb-8 sm:mb-10 md:mb-12">
                                    <h1 class="text-3xl sm:text-3xl md:text-4xl font-bold text-green-500 mb-4">
                                        About Us
                                    </h1>
                                    <div class="flex items-center space-x-2 mb-6">
                                        <div class="h-1 w-12 sm:w-16 bg-green-500 rounded"></div>
                                        <div class="h-1 w-6 bg-[#4CBF42]/20 rounded"></div>
                                    </div>
                                    <p class="text-gray-700 text-base sm:text-lg max-w-md">
                                        At ShareDeal, we take pride in our values - service,
                                        integrity, and excellence.
                                    </p>
                                </div>
                                <div class="grid lg:grid-cols-2 gap-6 sm:gap-8 md:gap-12">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-8 md:gap-10">
                                        <div>
                                            <div class="mb-4">
                                                <span
                                                    class="text-3xl sm:text-4xl md:text-6xl font-bold text-green-500">1.</span>
                                                <h2
                                                    class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800 mt-1 sm:mt-2">
                                                    Who We Are
                                                </h2>
                                            </div>
                                            <p class="text-gray-700 text-sm sm:text-base leading-relaxed text-justify">
                                                ShareDeal is Bangladesh innovative group-buying
                                                grocery platform, connecting farmers directly with
                                                communities. We are a tech-driven, customer-focused
                                                team on a mission to make fresh, affordable meals
                                                accessible to everyone
                                            </p>
                                        </div>
                                        <div>
                                            <div class="mb-4">
                                                <span
                                                    class="text-3xl sm:text-4xl md:text-6xl font-bold text-green-500">2.</span>
                                                <h2
                                                    class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800 mt-1 sm:mt-2">
                                                    What do we do
                                                </h2>
                                            </div>
                                            <p class="text-gray-700 text-sm sm:text-base leading-relaxed text-justify">
                                                We give you a free course that guides you. We organize
                                                group orders, source fresh produce directly from
                                                farmers, and deliver it efficiently to customers
                                                doorsteps. By combining technology, logistics, and
                                                community, we reduce costs and create value for both
                                                farmers and families, ensuring freshness throughout
                                                the process.
                                            </p>
                                        </div>
                                        <div>
                                            <div class="mb-4">
                                                <span
                                                    class="text-3xl sm:text-4xl md:text-6xl font-bold text-green-500">3.</span>
                                                <h2
                                                    class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800 mt-1 sm:mt-2">
                                                    How do we help
                                                </h2>
                                            </div>
                                            <div class="space-y-3 sm:space-y-4">
                                                <div class="flex items-start space-x-3">
                                                    <div class="flex-shrink-0 mt-1">
                                                        <div
                                                            class="w-5 sm:w-6 h-5 sm:h-6 bg-green-500 rounded-full flex items-center justify-center">
                                                            <span
                                                                class="text-white font-bold text-xs sm:text-sm"></span>
                                                        </div>
                                                    </div>
                                                    <p class="text-gray-700 text-sm sm:text-base">
                                                        <strong>Save Money:</strong> Customers get
                                                        groceries at the lowest possible price through
                                                        bulk buying.
                                                    </p>
                                                </div>
                                                <div class="flex items-start space-x-3">
                                                    <div class="flex-shrink-0 mt-1">
                                                        <div
                                                            class="w-5 sm:w-6 h-5 sm:h-6 bg-green-500 rounded-full flex items-center justify-center">
                                                            <span
                                                                class="text-white font-bold text-xs sm:text-sm"></span>
                                                        </div>
                                                    </div>
                                                    <p class="text-gray-700 text-sm sm:text-base">
                                                        <strong>Support Farmers:</strong> Farmers earn
                                                        fair prices without middlemen.
                                                    </p>
                                                </div>
                                                <div class="flex items-start space-x-3">
                                                    <div class="flex-shrink-0 mt-1">
                                                        <div
                                                            class="w-5 sm:w-6 h-5 sm:h-6 bg-green-500 rounded-full flex items-center justify-center">
                                                            <span
                                                                class="text-white font-bold text-xs sm:text-sm"></span>
                                                        </div>
                                                    </div>
                                                    <p class="text-gray-700 text-sm sm:text-base">
                                                        <strong>Reduce Waste:</strong> Optimized orders
                                                        and supply chain minimize food wastage.
                                                    </p>
                                                </div>
                                                <div class="flex items-start space-x-3">
                                                    <div class="flex-shrink-0 mt-1">
                                                        <div
                                                            class="w-5 sm:w-6 h-5 sm:h-6 bg-green-500 rounded-full flex items-center justify-center">
                                                            <span
                                                                class="text-white font-bold text-xs sm:text-sm"></span>
                                                        </div>
                                                    </div>
                                                    <p class="text-gray-700 text-sm sm:text-base">
                                                        <strong>Convenience:</strong> Fresh groceries
                                                        delivered directly to your doorstep.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="mb-4">
                                                <span
                                                    class="text-3xl sm:text-4xl md:text-6xl font-bold text-green-500">4.</span>
                                                <h2
                                                    class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800 mt-1 sm:mt-2">
                                                    Create success story
                                                </h2>
                                            </div>
                                            <p class="text-gray-700 text-sm sm:text-base leading-relaxed text-justify">
                                                Thousands of families have already saved money while
                                                enjoying fresh food, and hundreds of farmers have
                                                grown their businesses with us. By 2032, we aim to
                                                reach 10 million customers and generate $1 billion in
                                                annual revenue, transforming Bangladesh grocery
                                                ecosystem and creating countless success stories along
                                                the way.
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div
                                            class="grid grid-cols-2 sm:grid-cols-6 grid-rows-9 gap-2 sm:gap-3 h-[400px] sm:h-[500px]">
                                            <div
                                                class="col-span-2 sm:col-span-3 row-start-2 row-span-3 overflow-hidden">
                                                <img alt="Team collaboration meeting"
                                                    class="w-full h-full object-cover"
                                                    src="{{ asset('assets_file/images/meeting.jpg') }}" />
                                            </div>
                                            <div
                                                class="col-span-2 sm:col-span-3 row-start-1 row-span-4 sm:row-span-5 col-start-3 sm:col-start-4 overflow-hidden">
                                                <img alt="Shopping cart with groceries"
                                                    class="w-full h-full object-cover"
                                                    src="{{ asset('assets_file/images/shop.jpg') }}" />
                                            </div>
                                            <div
                                                class="col-span-2 sm:col-span-3 row-span-5 sm:row-span-6 row-start-5 overflow-hidden">
                                                <img alt="Agricultural discussion" class="w-full h-full object-cover"
                                                    src="{{ asset('assets_file/images/conversation.jpg') }}" />
                                            </div>
                                            <div
                                                class="col-span-2 sm:col-span-3 row-span-3 col-start-3 sm:col-start-4 row-start-6 overflow-hidden">
                                                <img alt="Nurturing plant seedling" class="w-full h-full object-cover"
                                                    src="{{ asset('assets_file/images/plant.jpg') }}" />
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end mt-6 sm:mt-8 md:mt-10">
                                            <button
                                                class="px-6 sm:px-8 py-2 sm:py-3 border border-green-500 text-gray-700 rounded-md hover:bg-green-50 transition-colors font-medium shadow-md sm:shadow-2xl text-sm sm:text-base">
                                                Learn more
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Newsletter section -->
                        <section class="mb-6 overflow-hidden">
                            <span class="flex justify-center items-center gap-2 my-7 opacity-40"><img alt=""
                                    src="{{ asset('assets_file/icons/support.svg') }}" />
                                <p class="text-xl font-bold text-[#111825]">
                                    Supported By
                                </p>
                            </span>
                            <style>
                                @keyframes marquee {
                                    0% {
                                        transform: translateX(0);
                                    }

                                    100% {
                                        transform: translateX(-50%);
                                    }

                                    /* Move half the total width for seamless loop */
                                }

                                .marquee-container {
                                    display: flex;
                                    gap: 1.25rem;
                                    /* gap-5 = 1.25rem for smaller screens, adjustable */
                                    animation: marquee 30s linear infinite;
                                    width: 200%;
                                    /* Double width to accommodate duplicated content */
                                }

                                .marquee-container:hover {
                                    animation-play-state: paused;
                                }

                                .card-container {
                                    flex-shrink: 0;
                                    width: calc(33.33vw - 0.9375rem);
                                    /* ~33% viewport width minus half gap for 3 cards per view */
                                    max-width: 150px;
                                    min-width: 100px;
                                    height: 80px;
                                    /* Fixed height for consistency */
                                }

                                @media (min-width: 641px) {
                                    .marquee-container {
                                        gap: 2.5rem;
                                        /* gap-10 = 2.5rem for desktop */
                                    }

                                    .card-container {
                                        width: calc(50vw - 3.75rem);
                                        /* 50% viewport width minus half gap */
                                        max-width: 200px;
                                        min-width: 150px;
                                        height: 100px;
                                    }
                                }

                                @media (max-width: 640px) {
                                    .marquee-container {
                                        animation-duration: 10s;
                                        /* Slower speed for better visibility on phones */
                                    }

                                    .card-container {
                                        width: calc(33.33vw - 0.625rem);
                                        /* Adjusted for 3 cards per view on small screens */
                                        max-width: 120px;
                                        min-width: 80px;
                                        height: 60px;
                                    }
                                }
                            </style>
                            <div class="overflow-hidden">
                                <div class="marquee-container">
                                    <div class="card-container">
                                        <div
                                            class="border-2 px-2 py-3 rounded-2xl border-[#00000018] h-full flex items-center justify-center">
                                            <img alt="Sponsor Logo 1" class="object-cover md:p-12 p-6"
                                                src="{{ asset('assets_file/supportImage/support.png') }}" />
                                        </div>
                                    </div>
                                    <div class="card-container">
                                        <div
                                            class="border-2 px-2 py-3 rounded-2xl border-[#00000018] h-full flex items-center justify-center">
                                            <img alt="Sponsor Logo 2" class="object-cover md:p-12 p-6"
                                                src="{{ asset('assets_file/supportImage/support1.png') }}" />
                                        </div>
                                    </div>
                                    <div class="card-container">
                                        <div
                                            class="border-2 px-2 py-3 rounded-2xl border-[#00000018] h-full flex items-center justify-center">
                                            <img alt="Sponsor Logo 3" class="object-cover md:p-12 p-6"
                                                src="{{ asset('assets_file/supportImage/support2.png') }}" />
                                        </div>
                                    </div>
                                    <div class="card-container">
                                        <div
                                            class="border-2 px-2 py-3 rounded-2xl border-[#00000018] h-full flex items-center justify-center">
                                            <img alt="Sponsor Logo 1" class="object-cover md:p-12 p-6"
                                                src="{{ asset('assets_file/supportImage/support3.png') }}" />
                                        </div>
                                    </div>
                                    <div class="card-container">
                                        <div
                                            class="border-2 px-2 py-3 rounded-2xl border-[#00000018] h-full flex items-center justify-center">
                                            <img alt="Sponsor Logo 2" class="object-cover md:p-12 p-6"
                                                src="{{ asset('assets_file/supportImage/support4.png') }}" />
                                        </div>
                                    </div>
                                    <div class="card-container">
                                        <div
                                            class="border-2 px-2 py-3 rounded-2xl border-[#00000018] h-full flex items-center justify-center">
                                            <img alt="Sponsor Logo 3" class="object-cover md:p-12 p-6"
                                                src="{{ asset('assets_file/supportImage/support5.png') }}" />
                                        </div>
                                    </div>
                                    <div class="card-container">
                                        <div
                                            class="border-2 px-2 py-3 rounded-2xl border-[#00000018] h-full flex items-center justify-center">
                                            <img alt="Sponsor Logo 1" class="object-cover md:p-12 p-6"
                                                src="{{ asset('assets_file/supportImage/support.png') }}" />
                                        </div>
                                    </div>
                                    <div class="card-container">
                                        <div
                                            class="border-2 px-2 py-3 rounded-2xl border-[#00000018] h-full flex items-center justify-center">
                                            <img alt="Sponsor Logo 2" class="object-cover md:p-12 p-6"
                                                src="{{ asset('assets_file/supportImage/support1.png') }}" />
                                        </div>
                                    </div>
                                    <div class="card-container">
                                        <div
                                            class="border-2 px-2 py-3 rounded-2xl border-[#00000018] h-full flex items-center justify-center">
                                            <img alt="Sponsor Logo 3" class="object-cover md:p-12 p-6"
                                                src="{{ asset('assets_file/supportImage/support2.png') }}" />
                                        </div>
                                    </div>
                                    <div class="card-container">
                                        <div
                                            class="border-2 px-2 py-3 rounded-2xl border-[#00000018] h-full flex items-center justify-center">
                                            <img alt="Sponsor Logo 1" class="object-cover md:p-12 p-6"
                                                src="{{ asset('assets_file/supportImage/support3.png') }}" />
                                        </div>
                                    </div>
                                    <div class="card-container">
                                        <div
                                            class="border-2 px-2 py-3 rounded-2xl border-[#00000018] h-full flex items-center justify-center">
                                            <img alt="Sponsor Logo 2" class="object-cover md:p-12 p-6"
                                                src="{{ asset('assets_file/supportImage/support4.png') }}" />
                                        </div>
                                    </div>
                                    <div class="card-container">
                                        <div
                                            class="border-2 px-2 py-3 rounded-2xl border-[#00000018] h-full flex items-center justify-center">
                                            <img alt="Sponsor Logo 3" class="object-cover md:p-12 p-6"
                                                src="{{ asset('assets_file/supportImage/support5.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Why Choose Us section -->
                        <section class="py-6 sm:py-8 md:py-12 px-4 sm:px-6 md:px-8">
                            <div class="text-center max-w-7xl mx-auto">
                                <h1
                                    class="md:text-4xl text-start md:text-center text-3xl font-semibold text-[#4CBF42]">
                                    Why Choose ShareDeal
                                </h1>
                                <div class="md:hidden flex items-center justify-start mt-4">
                                    <span class="w-16 h-1 bg-green-500"></span><span
                                        class="w-4 h-1 bg-green-200 ml-2"></span>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mt-10 px-4">
                                    <div>
                                        <div
                                            class="flex justify-center w-[110px] h-[110px] mx-auto p-5 bg-white rounded-full shadow-xl shadow-[#4cbf4228] mb-5 border border-green-200">
                                            <img alt="" src="{{ asset('assets_file/icons/layer.svg') }}" />
                                        </div>
                                        <h1 class="text-2xl font-semibold mb-3 text-[#236924]">
                                            Sustainable Products
                                        </h1>
                                        <p>
                                            Explore our carefully curated selection of sustainable
                                            products, each designed to reduce your carbon footprint
                                        </p>
                                    </div>
                                    <div>
                                        <div
                                            class="flex justify-center w-[110px] h-[110px] mx-auto p-5 bg-white rounded-full shadow-xl shadow-[#4cbf4228] mb-5 border border-green-200">
                                            <img alt="" src="{{ asset('assets_file/icons/layer-1.svg') }}" />
                                        </div>
                                        <h1 class="text-2xl font-semibold mb-3 text-[#236924]">
                                            Eco-Friendly Choices
                                        </h1>
                                        <p>
                                            Make conscious choices with our eco-friendly products,
                                            knowing that your purchases promote ethical sourcing and
                                            responsible manufacturing practices.
                                        </p>
                                    </div>
                                    <div>
                                        <div
                                            class="flex justify-center w-[110px] h-[110px] mx-auto p-5 bg-white rounded-full shadow-xl shadow-[#4cbf4228] mb-5 border border-green-200">
                                            <img alt="" src="{{ asset('assets_file/icons/layer-2.svg') }}" />
                                        </div>
                                        <h1 class="text-2xl font-semibold mb-3 text-[#236924]">
                                            High-Quality Selection
                                        </h1>
                                        <p>
                                            Invest in long-lasting and reliable products that meet
                                            our stringent quality standards, ensuring your
                                            satisfaction and the longevity of your purchases.
                                        </p>
                                    </div>
                                    <div>
                                        <div
                                            class="flex justify-center w-[110px] h-[110px] mx-auto p-5 bg-white rounded-full shadow-xl shadow-[#4cbf4228] mb-5 border border-green-200">
                                            <img alt="" src="{{ asset('assets_file/icons/layer-3.svg') }}" />
                                        </div>
                                        <h1 class="text-2xl font-semibold mb-3 text-[#236924]">
                                            Sustainable Packaging
                                        </h1>
                                        <p>
                                            Our sustainable packaging ensures that your orders
                                            arrive safely while minimizing their impact on the
                                            planet.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Categories Section -->
                        <section class="py-6 sm:py-8 md:py-12 px-4">
                            <div class="max-w-7xl mx-auto">
                                <div class="py-10">
                                    <h1 class="md:text-5xl text-3xl font-bold text-gray-900">
                                        Grocery Categories
                                    </h1>
                                    <div class="flex items-center justify-start mt-4">
                                        <span class="w-4 h-1 bg-green-200 mr-2"></span><span
                                            class="w-16 h-1 bg-green-500"></span><span
                                            class="w-4 h-1 bg-green-200 ml-2"></span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 md:grid-cols-6 md:gap-10 gap-5">
                                    <div
                                        class="bg-white rounded-xl border border-gray-200 hover:border-[#4CBF42] md:p-10 p-7 flex flex-col items-center justify-center text-center hover:shadow-xl hover:shadow-[#4cbf4228] transform duration-400">
                                        <img alt="Vegetables" class="w-24 h-24 object-contain mb-4"
                                            src="{{ asset('assets_file/images/vegetable.svg') }}" />
                                        <h2 class="md:text-xl text-lg text-[#4CBF42] mb-2">
                                            Vegetables
                                        </h2>
                                        <p class="text-blue-900 text-sm">165 Products</p>
                                    </div>
                                    <div
                                        class="bg-white rounded-xl border border-gray-200 hover:border-[#4CBF42] md:p-10 p-7 flex flex-col items-center justify-center text-center hover:shadow-xl hover:shadow-[#4cbf4228] transform duration-400">
                                        <img alt="Fruits" class="w-24 h-24 object-contain mb-4"
                                            src="{{ asset('assets_file/images/fruits.svg') }}" />
                                        <h2 class="md:text-xl text-lg text-[#4CBF42] mb-2">
                                            Fruits
                                        </h2>
                                        <p class="text-blue-900 text-sm">120 Products</p>
                                    </div>
                                    <div
                                        class="bg-white rounded-xl border border-gray-200 hover:border-[#4CBF42] md:p-10 p-7 flex flex-col items-center justify-center text-center hover:shadow-xl hover:shadow-[#4cbf4228] transform duration-400">
                                        <img alt="Fish" class="w-24 h-24 object-contain mb-4"
                                            src="{{ asset('assets_file/images/fish.svg') }}" />
                                        <h2 class="md:text-xl text-lg text-[#4CBF42] mb-2">
                                            Fish
                                        </h2>
                                        <p class="text-blue-900 text-sm">80 Products</p>
                                    </div>
                                    <div
                                        class="bg-white rounded-xl border border-gray-200 hover:border-[#4CBF42] md:p-10 p-7 flex flex-col items-center justify-center text-center hover:shadow-xl hover:shadow-[#4cbf4228] transform duration-400">
                                        <img alt="Meat" class="w-24 h-24 object-contain mb-4"
                                            src="{{ asset('assets_file/images/meat.svg') }}" />
                                        <h2 class="md:text-xl text-lg text-[#4CBF42] mb-2">
                                            Meat
                                        </h2>
                                        <p class="text-blue-900 text-sm">95 Products</p>
                                    </div>
                                    <div
                                        class="bg-white rounded-xl border border-gray-200 hover:border-[#4CBF42] md:p-10 p-7 flex flex-col items-center justify-center text-center hover:shadow-xl hover:shadow-[#4cbf4228] transform duration-400">
                                        <img alt="Drinks" class="w-24 h-24 object-contain mb-4"
                                            src="{{ asset('assets_file/images/soft-drink.svg') }}" />
                                        <h2 class="md:text-xl text-lg text-[#4CBF42] mb-2">
                                            Drinks
                                        </h2>
                                        <p class="text-blue-900 text-sm">200 Products</p>
                                    </div>
                                    <div
                                        class="bg-white rounded-xl border border-gray-200 hover:border-[#4CBF42] md:p-10 p-7 flex flex-col items-center justify-center text-center hover:shadow-xl hover:shadow-[#4cbf4228] transform duration-400">
                                        <img alt="Snacks" class="w-24 h-24 object-contain mb-4"
                                            src="{{ asset('assets_file/images/snacks.svg') }}" />
                                        <h2 class="md:text-xl text-lg text-[#4CBF42] mb-2">
                                            Snacks
                                        </h2>
                                        <p class="text-blue-900 text-sm">150 Products</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Testimonial Section -->
                        <div class="mb-6 overflow-hidden">
                            <div class="text-center my-10 space-y-3">
                                <p class="text-xl text-[#1118258A]">Testimonial</p>
                                <h1 class="text-4xl text-[#4CBF42] font-semibold">
                                    What people think about us
                                </h1>
                            </div>
                            <div class="overflow-hidden whitespace-nowrap pb-10">
                                <div id="marquee-left" class="marquee-wrapper marquee-left">
                                    <div id="marquee-content-left" class="marquee-content">
                                        <!-- Testimonials will be injected here -->
                                    </div>
                                </div>
                                <div id="marquee-right" class="marquee-wrapper marquee-right">
                                    <div id="marquee-content-right" class="marquee-content">
                                        <!-- Testimonials will be injected here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            const testimonials = [{
                                    id: 1,
                                    name: "Afsana Islam",
                                    rating: 5,
                                    text: "Many customers are satisfied with the express service. Because of not having a lift, there is a problem going to the market. That’s why orders from selefe regularly.",
                                },
                                {
                                    id: 2,
                                    name: "Jamil Hossain",
                                    rating: 5,
                                    text: "Selefe makes grocery shopping easier and more convenient. With a simple, user-friendly interface, it lets you quickly find and order all your essentials.",
                                },
                                {
                                    id: 3,
                                    name: "Raju Ahmed",
                                    rating: 4,
                                    text: "I recently purchased Alu, peyaj, and oil from Selefe App, and I am very happy with my online shopping experience. Their App was user-friendly, making it easy to find the perfect item.",
                                },
                                {
                                    id: 4,
                                    name: "Raisul islam emon",
                                    rating: 5,
                                    text: "I buy 2 or 3 time in Selefe. I am soo happy 👍😊😊 for there service. That's mean delivery time mentented produced package, good produced,Good behavior of customer.",
                                },
                                {
                                    id: 5,
                                    name: "Md Kayes",
                                    rating: 5,
                                    text: "Selefe has truly revolutionized the way I grocery shop. It's efficient, user-friendly, and has made my life so much easier. Thanks selefe Team.",
                                },
                                {
                                    id: 6,
                                    name: "Asad Ullah Arnob",
                                    rating: 5,
                                    text: "this apps products ar so good and there's every dilivery ar soo faster and i like this grocery app take love selefe and always support everyone thank you❤️",
                                },
                                {
                                    id: 7,
                                    name: "Nafees Ahmed",
                                    rating: 5,
                                    text: "The best platform in our locality. Hope that you will keep the good work and honesty and will expand the whole city. Thank you.",
                                },
                                {
                                    id: 8,
                                    name: "Sumaya Tayeba",
                                    rating: 5,
                                    text: "Great app for quick groceries shopping!",
                                },
                                {
                                    id: 9,
                                    name: "Al-Amin Shakil",
                                    rating: 5,
                                    text: "What a platform! The price here is lower than the market, like seriously? Free home delivery in 20 minutes just wow. such a nice platform. Wishing SELEFE a bright future",
                                },
                                {
                                    id: 10,
                                    name: "AROSH GEMARZ",
                                    rating: 5,
                                    text: "Wow just wow free delivery. Abar price kom.Vai Joss app e app e update tara tari koren aro product anen.insaallah ei @Selefe App will be best",
                                },
                                {
                                    id: 11,
                                    name: "Sheikh Samir",
                                    rating: 5,
                                    text: "service valo bt delivery ektu slow fast kortay hoibo overoll good🖤",
                                },
                                {
                                    id: 12,
                                    name: "Afsanaswarna",
                                    rating: 5,
                                    text: "বাজার থেকে সবচেয়ে কম দামে পাইছি। ধন্যবাদ শেয়ারডিল টিমকে।",
                                },
                                {
                                    id: 13,
                                    name: "Rakibul Islam",
                                    rating: 5,
                                    text: "ফ্যামিলিতে গ্রোসারি আইটেম ক্রয় করার জন্য এর চেয়ে ভালো অফার আর হতে পারে না �",
                                },
                                {
                                    id: 14,
                                    name: "Sumon Doctors",
                                    rating: 5,
                                    text: "আপনাদের সেলেফি কে অসংখ্য ধন্যবাদ কারণ সময় মত প্রতিটা পণ্য অর্ডার দেওয়ার সাথে সাথেই অন্তত ১০-১৫ মিনিটে পৌছায় দেয়। সবার শেষে আবারো থ্যাংকস জানালাম",
                                },
                                {
                                    id: 15,
                                    name: "Md sabon",
                                    rating: 5,
                                    text: "সত্যিকার অর্থে তাদের সার্ভিস এর পণ্যের ব্যাপারে আমি সন্তুষ্ট। তাদের ডেলিভারি ও খুবই ফাষ্ট। সেলেফীর সাথে আছি সবসময়।",
                                },
                            ];

                            function createStarRating(rating) {
                                let stars = "";
                                for (let i = 0; i < 5; i++) {
                                    stars += `
          <svg class="${
            i < rating ? "text-yellow-400" : "text-gray-300"
          } fill-current ${
                      window.innerWidth <= 640 ? "w-2.5 h-2.5" : "w-4 h-4"
                    }" viewBox="0 0 24 24">
            <path d="M12 .587l3.668 7.431 8.332 1.151-6.001 5.822 1.418 8.257L12 18.897l-7.417 3.364 1.418-8.257-6.001-5.822 8.332-1.151z" />
          </svg>
        `;
                                }
                                return stars;
                            }

                            function initializeTestimonials() {
                                const containers = [
                                    document.getElementById("marquee-content-left"),
                                    document.getElementById("marquee-content-right"),
                                ];

                                containers.forEach((container) => {
                                    testimonials.forEach((testimonial) => {
                                        const cardDiv = document.createElement("div");
                                        cardDiv.className = "card mb-5";
                                        cardDiv.innerHTML = `
            <div class="p-3 sm:p-5 shadow-2xl rounded-2xl">
              <div class="flex justify-between">
                <div class="flex items-center gap-2 sm:gap-3">
                  <div class="avatar flex items-center justify-center h-8 w-8 sm:h-12 sm:w-12 rounded-full bg-[#236924] text-white font-medium">
                    ${testimonial.name.charAt(0).toUpperCase()}
                  </div>
                  <div>
                    <h1 class="text-xs sm:text-md font-medium text-gray-900">
                      ${testimonial.name}
                    </h1>
                    <div class="flex items-center">
                      ${createStarRating(testimonial.rating)}
                    </div>
                  </div>
                </div>
                <div class="ml-auto text-green-700 font-bold text-3xl sm:text-6xl">
                  <img src="{{ asset('assets_file/icons/car.svg') }}" alt="Quote icon" class="${
                    window.innerWidth <= 640 ? "w-6 h-6" : "w-12 h-12"
                  }" />
                </div>
              </div>
              <p class="text-xs sm:text-sm text-gray-600 mt-1 text-wrap">
                ${testimonial.text}
              </p>
            </div>
          `;
                                        container.appendChild(cardDiv);
                                    });
                                });
                            }

                            window.onload = initializeTestimonials;
                        </script>

                        <!-- Download Section -->
                        <section class="relative bg-gradient-to-b from-[#4b854c] to-[#246a25]"
                            style="
                  background-image: linear-gradient(
                      to right,
                      rgba(255, 255, 255, 0.04) 1px,
                      transparent 1px
                    ),
                    linear-gradient(
                      rgba(255, 255, 255, 0.04) 1px,
                      transparent 1px
                    ),
                    linear-gradient(rgb(75, 133, 76), rgb(36, 106, 37));
                  background-size: 70px 70px, 70px 70px, 100% 100%;
                ">
                            <div class="py-16 md:grid grid-cols-1 md:grid-cols-6 items-center gap-10">
                                <div class="text-white md:ml-52 p-4 col-span-4">
                                    <h2 class="text-3xl md:text-6xl font-bold leading-snug">
                                        Download ShareDeal &amp; Start <br />Saving Up to
                                        <span class="text-[#FFD700]">20%</span> on Groceries.
                                    </h2>
                                    <p class="my-4 text-gray-200">
                                        Download our App from play store and play.
                                    </p>
                                    <a href="https://play.google.com/store/apps/details?id=com.selefe.selefe&amp;pcampaignid=web_share"
                                        class="mt-6"><img alt="Google Play" class="h-12 cursor-pointer"
                                            src="{{ asset('assets_file/icons/playstore.svg') }}" /></a>
                                </div>
                                <div class="flex justify-end col-span-2">
                                    <img alt="App Preview" class="w-full drop-shadow-2xl"
                                        src="{{ asset('assets_file/images/handmobile.png') }}" />
                                </div>
                            </div>
                        </section>

                        <!-- FAQ Section -->
                        <div class="max-w-7xl mx-auto p-4 sm:p-6 bg-white">
                            <div class="flex items-center gap-5 mb-8 md:mb-12 shadow-md p-6 rounded-3xl">
                                <img src="{{ asset('assets_file/icons/faq.png') }}" alt="FAQ Icon" class="w-8 h-8" />
                                <h2 class="text-2xl sm:text-3xl font-semibold text-[#4CBF42]">
                                    FAQs
                                </h2>
                            </div>
                            <div class="flex flex-col md:flex-row md:gap-6 shadow-lg p-4 md:p-6 rounded-3xl">
                                <!-- Left Column -->
                                <div class="flex-1 space-y-6">
                                    <div class="shadow rounded-2xl overflow-hidden transition-all duration-300 bg-gradient-to-r from-[#4CBF4233] to-[#EBF5EA]"
                                        data-index="0">
                                        <button
                                            class="w-full text-left py-4 px-6 flex justify-between items-center text-black font-semibold focus:outline-none"
                                            onclick="toggleFAQ(0)" aria-expanded="true" aria-controls="faq-answer-0">
                                            <span class="text-lg text-[#236924]">What is ShareDeal?</span>
                                            <span
                                                class="w-5 h-5 rounded flex items-center justify-center transition-colors duration-200 bg-[#4CBF42] text-white">−</span>
                                        </button>
                                        <div class="max-h-40" id="faq-answer-0">
                                            <div class="py-4 px-6 text-gray-600 text-sm sm:text-base">
                                                <p>
                                                    ShareDeal is a group-buying grocery platform where
                                                    people team up to buy groceries at wholesale prices.
                                                    By ordering together, everyone saves money while
                                                    farmers earn fair prices.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shadow rounded-2xl overflow-hidden transition-all duration-300 bg-white"
                                        data-index="1">
                                        <button
                                            class="w-full text-left py-4 px-6 flex justify-between items-center text-black font-semibold focus:outline-none"
                                            onclick="toggleFAQ(1)" aria-expanded="false"
                                            aria-controls="faq-answer-1">
                                            <span class="text-lg text-gray-800">How does ShareDeal help me save
                                                money?</span>
                                            <span
                                                class="w-5 h-5 rounded flex items-center justify-center transition-colors duration-200 bg-gray-200 text-gray-600">+</span>
                                        </button>
                                        <div class="max-h-0 overflow-hidden transition-all duration-300"
                                            id="faq-answer-1">
                                            <div class="py-4 px-6 text-gray-600 text-sm sm:text-base">
                                                <p>
                                                    When multiple people in your area order the same
                                                    item, ShareDeal combines those orders into one bulk
                                                    purchase. This lowers the cost per unit, and the
                                                    savings are passed directly to you.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shadow rounded-2xl overflow-hidden transition-all duration-300 bg-white"
                                        data-index="2">
                                        <button
                                            class="w-full text-left py-4 px-6 flex justify-between items-center text-black font-semibold focus:outline-none"
                                            onclick="toggleFAQ(2)" aria-expanded="false"
                                            aria-controls="faq-answer-2">
                                            <span class="text-lg text-gray-800">Is ShareDeal only for groceries?</span>
                                            <span
                                                class="w-5 h-5 rounded flex items-center justify-center transition-colors duration-200 bg-gray-200 text-gray-600">+</span>
                                        </button>
                                        <div class="max-h-0 overflow-hidden transition-all duration-300"
                                            id="faq-answer-2">
                                            <div class="py-4 px-6 text-gray-600 text-sm sm:text-base">
                                                <p>
                                                    Currently, ShareDeal focuses on fresh groceries and
                                                    daily essentials. In the future, we plan to expand
                                                    into more household products.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shadow rounded-2xl overflow-hidden transition-all duration-300 bg-white"
                                        data-index="3">
                                        <button
                                            class="w-full text-left py-4 px-6 flex justify-between items-center text-black font-semibold focus:outline-none"
                                            onclick="toggleFAQ(3)" aria-expanded="false"
                                            aria-controls="faq-answer-3">
                                            <span class="text-lg text-gray-800">How do deliveries work?</span>
                                            <span
                                                class="w-5 h-5 rounded flex items-center justify-center transition-colors duration-200 bg-gray-200 text-gray-600">+</span>
                                        </button>
                                        <div class="max-h-0 overflow-hidden transition-all duration-300"
                                            id="faq-answer-3">
                                            <div class="py-4 px-6 text-gray-600 text-sm sm:text-base">
                                                <p>
                                                    We collect orders, group them, and deliver directly
                                                    to your community. Our optimized delivery routes
                                                    ensure fresh products arrive on time while reducing
                                                    delivery costs and carbon footprint.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shadow rounded-2xl overflow-hidden transition-all duration-300 bg-white"
                                        data-index="4">
                                        <button
                                            class="w-full text-left py-4 px-6 flex justify-between items-center text-black font-semibold focus:outline-none"
                                            onclick="toggleFAQ(4)" aria-expanded="false"
                                            aria-controls="faq-answer-4">
                                            <span class="text-lg text-gray-800">Where does ShareDeal source products
                                                from?</span>
                                            <span
                                                class="w-5 h-5 rounded flex items-center justify-center transition-colors duration-200 bg-gray-200 text-gray-600">+</span>
                                        </button>
                                        <div class="max-h-0 overflow-hidden transition-all duration-300"
                                            id="faq-answer-4">
                                            <div class="py-4 px-6 text-gray-600 text-sm sm:text-base">
                                                <p>
                                                    We source directly from local farmers and trusted
                                                    suppliers to ensure freshness, fair pricing, and
                                                    support for Bangladesh’s agricultural economy.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Column -->
                                <div class="flex-1 space-y-6 mt-6 md:mt-0">
                                    <div class="shadow rounded-2xl overflow-hidden transition-all duration-300 bg-white"
                                        data-index="5">
                                        <button
                                            class="w-full text-left py-4 px-6 flex justify-between items-center text-black font-semibold focus:outline-none"
                                            onclick="toggleFAQ(5)" aria-expanded="false"
                                            aria-controls="faq-answer-5">
                                            <span class="text-lg text-gray-800">Do I need a group to order?</span>
                                            <span
                                                class="w-5 h-5 rounded flex items-center justify-center transition-colors duration-200 bg-gray-200 text-gray-600">+</span>
                                        </button>
                                        <div class="max-h-0 overflow-hidden transition-all duration-300"
                                            id="faq-answer-5">
                                            <div class="py-4 px-6 text-gray-600 text-sm sm:text-base">
                                                <p>
                                                    No. You can order alone. But when others in your
                                                    area order the same item, you automatically join a
                                                    group and unlock lower prices.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shadow rounded-2xl overflow-hidden transition-all duration-300 bg-white"
                                        data-index="6">
                                        <button
                                            class="w-full text-left py-4 px-6 flex justify-between items-center text-black font-semibold focus:outline-none"
                                            onclick="toggleFAQ(6)" aria-expanded="false"
                                            aria-controls="faq-answer-6">
                                            <span class="text-lg text-gray-800">What areas does ShareDeal serve right
                                                now?</span>
                                            <span
                                                class="w-5 h-5 rounded flex items-center justify-center transition-colors duration-200 bg-gray-200 text-gray-600">+</span>
                                        </button>
                                        <div class="max-h-0 overflow-hidden transition-all duration-300"
                                            id="faq-answer-6">
                                            <div class="py-4 px-6 text-gray-600 text-sm sm:text-base">
                                                <p>
                                                    We are currently operating in Banasree, Aftabnagar,
                                                    Rampura, and Mirpur. We are expanding to new areas
                                                    soon.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shadow rounded-2xl overflow-hidden transition-all duration-300 bg-white"
                                        data-index="7">
                                        <button
                                            class="w-full text-left py-4 px-6 flex justify-between items-center text-black font-semibold focus:outline-none"
                                            onclick="toggleFAQ(7)" aria-expanded="false"
                                            aria-controls="faq-answer-7">
                                            <span class="text-lg text-gray-800">Is ShareDeal eco-friendly?</span>
                                            <span
                                                class="w-5 h-5 rounded flex items-center justify-center transition-colors duration-200 bg-gray-200 text-gray-600">+</span>
                                        </button>
                                        <div class="max-h-0 overflow-hidden transition-all duration-300"
                                            id="faq-answer-7">
                                            <div class="py-4 px-6 text-gray-600 text-sm sm:text-base">
                                                <p>
                                                    Yes, we use eco-friendly packaging, optimize
                                                    delivery routes, and reduce food waste by connecting
                                                    demand directly with supply.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shadow rounded-2xl overflow-hidden transition-all duration-300 bg-white"
                                        data-index="8">
                                        <button
                                            class="w-full text-left py-4 px-6 flex justify-between items-center text-black font-semibold focus:outline-none"
                                            onclick="toggleFAQ(8)" aria-expanded="false"
                                            aria-controls="faq-answer-8">
                                            <span class="text-lg text-gray-800">How do I pay?</span>
                                            <span
                                                class="w-5 h-5 rounded flex items-center justify-center transition-colors duration-200 bg-gray-200 text-gray-600">+</span>
                                        </button>
                                        <div class="max-h-0 overflow-hidden transition-all duration-300"
                                            id="faq-answer-8">
                                            <div class="py-4 px-6 text-gray-600 text-sm sm:text-base">
                                                <p>
                                                    You can pay via Cash on Delivery (COD) or Mobile
                                                    Payment (bKash, Nagad, Rocket, etc.).
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shadow rounded-2xl overflow-hidden transition-all duration-300 bg-white"
                                        data-index="9">
                                        <button
                                            class="w-full text-left py-4 px-6 flex justify-between items-center text-black font-semibold focus:outline-none"
                                            onclick="toggleFAQ(9)" aria-expanded="false"
                                            aria-controls="faq-answer-9">
                                            <span class="text-lg text-gray-800">How do I join ShareDeal?</span>
                                            <span
                                                class="w-5 h-5 rounded flex items-center justify-center transition-colors duration-200 bg-gray-200 text-gray-600">+</span>
                                        </button>
                                        <div class="max-h-0 overflow-hidden transition-all duration-300"
                                            id="faq-answer-9">
                                            <div class="py-4 px-6 text-gray-600 text-sm sm:text-base">
                                                <p>
                                                    Download our app, create a free account, and start
                                                    ordering. You’ll see ongoing deals and can join
                                                    groups instantly.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            let openIndex = 0;

                            function toggleFAQ(index) {
                                if (openIndex === index) {
                                    // Close the current open FAQ
                                    const currentFAQ = document.querySelector(
                                        `[data-index="${index}"]`
                                    );
                                    currentFAQ.classList.remove(
                                        "bg-gradient-to-r",
                                        "from-[#4CBF4233]",
                                        "to-[#EBF5EA]"
                                    );
                                    currentFAQ
                                        .querySelector("span.text-lg")
                                        .classList.remove("text-[#236924]");
                                    currentFAQ
                                        .querySelector("span.text-lg")
                                        .classList.add("text-gray-800");
                                    currentFAQ
                                        .querySelector("span.w-5")
                                        .classList.remove("bg-[#4CBF42]", "text-white");
                                    currentFAQ
                                        .querySelector("span.w-5")
                                        .classList.add("bg-gray-200", "text-gray-600");
                                    currentFAQ.querySelector("span.w-5").textContent = "+";
                                    document
                                        .getElementById(`faq-answer-${index}`)
                                        .classList.add("max-h-0");
                                    document
                                        .getElementById(`faq-answer-${index}`)
                                        .classList.remove("max-h-40");
                                    currentFAQ
                                        .querySelector("button")
                                        .setAttribute("aria-expanded", "false");
                                    openIndex = null;
                                } else {
                                    // Close previously open FAQ
                                    if (openIndex !== null) {
                                        const prevFAQ = document.querySelector(
                                            `[data-index="${openIndex}"]`
                                        );
                                        prevFAQ.classList.remove(
                                            "bg-gradient-to-r",
                                            "from-[#4CBF4233]",
                                            "to-[#EBF5EA]"
                                        );
                                        prevFAQ
                                            .querySelector("span.text-lg")
                                            .classList.remove("text-[#236924]");
                                        prevFAQ
                                            .querySelector("span.text-lg")
                                            .classList.add("text-gray-800");
                                        prevFAQ
                                            .querySelector("span.w-5")
                                            .classList.remove("bg-[#4CBF42]", "text-white");
                                        prevFAQ
                                            .querySelector("span.w-5")
                                            .classList.add("bg-gray-200", "text-gray-600");
                                        prevFAQ.querySelector("span.w-5").textContent = "+";
                                        document
                                            .getElementById(`faq-answer-${openIndex}`)
                                            .classList.add("max-h-0");
                                        document
                                            .getElementById(`faq-answer-${openIndex}`)
                                            .classList.remove("max-h-40");
                                        prevFAQ
                                            .querySelector("button")
                                            .setAttribute("aria-expanded", "false");
                                    }
                                    // Open new FAQ
                                    const newFAQ = document.querySelector(
                                        `[data-index="${index}"]`
                                    );
                                    newFAQ.classList.add(
                                        "bg-gradient-to-r",
                                        "from-[#4CBF4233]",
                                        "to-[#EBF5EA]"
                                    );
                                    newFAQ
                                        .querySelector("span.text-lg")
                                        .classList.add("text-[#236924]");
                                    newFAQ
                                        .querySelector("span.text-lg")
                                        .classList.remove("text-gray-800");
                                    newFAQ
                                        .querySelector("span.w-5")
                                        .classList.add("bg-[#4CBF42]", "text-white");
                                    newFAQ
                                        .querySelector("span.w-5")
                                        .classList.remove("bg-gray-200", "text-gray-600");
                                    newFAQ.querySelector("span.w-5").textContent = "−";
                                    document
                                        .getElementById(`faq-answer-${index}`)
                                        .classList.remove("max-h-0");
                                    document
                                        .getElementById(`faq-answer-${index}`)
                                        .classList.add("max-h-40");
                                    newFAQ
                                        .querySelector("button")
                                        .setAttribute("aria-expanded", "true");
                                    openIndex = index;
                                }
                            }
                        </script>

                        <!-- UN SDG Section -->
                        <section class="max-w-7xl mx-auto px-4 py-12">
                            <div class="text-center md:w-4/6 mx-auto mb-10">
                                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                                    Contributing to the
                                    <span
                                        class="bg-gradient-to-r from-[#4CBF42] via-[#175512] to-[#4A689F] bg-clip-text text-transparent">UN
                                        Sustainable Development Goals</span>
                                </h2>
                                <p class="">
                                    Our agritech solutions directly support global
                                    sustainability objectives, creating measurable impact across
                                    six key development areas.
                                </p>
                            </div>
                            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 md:gap-10 gap-6">
                                <div class="bg-white p-4 rounded border border-[#eb1c2d]">
                                    <img alt="Goal 1" class="mb-4 w-1/2 mx-auto"
                                        src="{{ asset('assets_file/images/goal1.png') }}" />
                                    <div class="text-center">
                                        <h3 class="font-semibold text-lg mb-3 text-[#eb1c2d]">
                                            No Poverty
                                        </h3>
                                        <p class="text-sm">
                                            Empowering farmers with fair income opportunities
                                        </p>
                                    </div>
                                </div>
                                <div class="bg-white p-4 rounded border border-[#d3a029]">
                                    <img alt="Goal 1" class="mb-4 w-1/2 mx-auto"
                                        src="{{ asset('assets_file/images/goal2.png') }}" />
                                    <div class="text-center">
                                        <h3 class="font-semibold text-lg mb-3 text-[#d3a029]">
                                            No Poverty
                                        </h3>
                                        <p class="text-sm">
                                            Empowering farmers with fair income opportunities
                                        </p>
                                    </div>
                                </div>
                                <div class="bg-white p-4 rounded border border-[#ef402b]">
                                    <img alt="Goal 1" class="mb-4 w-1/2 mx-auto"
                                        src="{{ asset('assets_file/images/goal3.png') }}" />
                                    <div class="text-center">
                                        <h3 class="font-semibold text-lg mb-3 text-[#ef402b]">
                                            No Poverty
                                        </h3>
                                        <p class="text-sm">
                                            Empowering farmers with fair income opportunities
                                        </p>
                                    </div>
                                </div>
                                <div class="bg-white p-4 rounded border border-[#8f1838]">
                                    <img alt="Goal 1" class="mb-4 w-1/2 mx-auto"
                                        src="{{ asset('assets_file/images/goal4.png') }}" />
                                    <div class="text-center">
                                        <h3 class="font-semibold text-lg mb-3 text-[#8f1838]">
                                            No Poverty
                                        </h3>
                                        <p class="text-sm">
                                            Empowering farmers with fair income opportunities
                                        </p>
                                    </div>
                                </div>
                                <div class="bg-white p-4 rounded border border-[#f36d25]">
                                    <img alt="Goal 1" class="mb-4 w-1/2 mx-auto"
                                        src="{{ asset('assets_file/images/goal5.png') }}" />
                                    <div class="text-center">
                                        <h3 class="font-semibold text-lg mb-3 text-[#f36d25]">
                                            No Poverty
                                        </h3>
                                        <p class="text-sm">
                                            Empowering farmers with fair income opportunities
                                        </p>
                                    </div>
                                </div>
                                <div class="bg-white p-4 rounded border border-[#e11484]">
                                    <img alt="Goal 1" class="mb-4 w-1/2 mx-auto"
                                        src="{{ asset('assets_file/images/goal6.png') }}" />
                                    <div class="text-center">
                                        <h3 class="font-semibold text-lg mb-3 text-[#e11484]">
                                            No Poverty
                                        </h3>
                                        <p class="text-sm">
                                            Empowering farmers with fair income opportunities
                                        </p>
                                    </div>
                                </div>
                                <div class="bg-white p-4 rounded border border-[#f99d26]">
                                    <img alt="Goal 1" class="mb-4 w-1/2 mx-auto"
                                        src="{{ asset('assets_file/images/goal7.png') }}" />
                                    <div class="text-center">
                                        <h3 class="font-semibold text-lg mb-3 text-[#f99d26]">
                                            No Poverty
                                        </h3>
                                        <p class="text-sm">
                                            Empowering farmers with fair income opportunities
                                        </p>
                                    </div>
                                </div>
                                <div class="bg-white p-4 rounded border border-[#cf8d2a]">
                                    <img alt="Goal 1" class="mb-4 w-1/2 mx-auto"
                                        src="{{ asset('assets_file/images/goal8.png') }}" />
                                    <div class="text-center">
                                        <h3 class="font-semibold text-lg mb-3 text-[#cf8d2a]">
                                            No Poverty
                                        </h3>
                                        <p class="text-sm">
                                            Empowering farmers with fair income opportunities
                                        </p>
                                    </div>
                                </div>
                                <div class="bg-white p-4 rounded border border-[#48773e]">
                                    <img alt="Goal 1" class="mb-4 w-1/2 mx-auto"
                                        src="{{ asset('assets_file/images/goal9.png') }}" />
                                    <div class="text-center">
                                        <h3 class="font-semibold text-lg mb-3 text-[#48773e]">
                                            No Poverty
                                        </h3>
                                        <p class="text-sm">
                                            Empowering farmers with fair income opportunities
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Join Us Section -->
                        <section
                            class="relative w-full min-h-[600px] flex flex-col items-center justify-center text-white overflow-hidden">
                            <video class="absolute inset-0 w-full h-full object-cover z-0"
                                src="{{ asset('assets_file/videos/joinUsBg.mp4') }}" autoplay="" loop=""
                                playsinline=""></video>
                            <div class="absolute inset-0 bg-black/20 z-10"></div>
                            <button
                                class="bg-[#236924] text-white font-medium py-2 px-6 rounded-md shadow-lg transition-all transform hover:scale-105 z-20 my-7">
                                Join Us
                            </button>
                            <h1 class="text-4xl md:text-5xl font-medium mb-4 text-center px-4 z-20 relative">
                                Grow with Us or Save With Us
                            </h1>
                            <p class="text-lg md:text-xl mb-8 text-center px-4 opacity-90 max-w-2xl z-20 relative">
                                Join thousands of farmers and retailers creating a sustainable
                                agricultural future for<br class="sm:hidden" /><span class="font-medium">
                                    Bangladesh.</span>
                            </p>
                            <div
                                class="flex flex-col sm:flex-row items-center justify-center mb-8 space-y-4 sm:space-y-0 sm:space-x-4 px-4 z-20 relative">
                                <button
                                    class="bg-[#236924] text-white font-medium py-3 px-6 rounded-full shadow-lg transition-all transform hover:scale-105 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-up-right" aria-hidden="true">
                                        <path d="M7 7h10v10"></path>
                                        <path d="M7 17 17 7"></path>
                                    </svg>Join As Farmer</button><span
                                    class="text-white font-medium hidden sm:inline">or</span><button
                                    class="bg-white hover:bg-gray-100 text-green-700 font-medium py-3 px-6 rounded-full shadow-lg transition-all transform hover:scale-105 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-up-right" aria-hidden="true">
                                        <path d="M7 7h10v10"></path>
                                        <path d="M7 17 17 7"></path>
                                    </svg>Join As Supplier
                                </button>
                            </div>
                            <div class="flex gap-3 justify-center items-center sm:space-x-6 p-4 z-20 relative">
                                <div
                                    class="bg-[#23692433] backdrop-blur-sm rounded-2xl p-3 text-center border border-green-600/30 shadow-xl min-w-[110px]">
                                    <div class="flex justify-center mb-2">
                                        <img alt=""
                                            src="data:image/svg+xml,%3csvg%20width='34'%20height='34'%20viewBox='0%200%2034%2034'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M23.8278%2013.1468C23.8466%2013.3537%2023.8598%2013.5619%2023.8598%2013.7716C23.8598%2015.5945%2023.1357%2017.3426%2021.8467%2018.6316C20.5578%2019.9205%2018.8096%2020.6447%2016.9867%2020.6447C15.1639%2020.6447%2013.4157%2019.9205%2012.1267%2018.6316C10.8378%2017.3426%2010.1137%2015.5945%2010.1137%2013.7716C10.1137%2013.5619%2010.1275%2013.3537%2010.1456%2013.1468H23.8278ZM27.8996%2010.9946C27.9763%2010.7345%2027.9656%2010.4565%2027.8694%2010.203C27.7731%209.94947%2027.5964%209.73447%2027.3664%209.59084L17.9878%203.6682C17.6878%203.48013%2017.3408%203.38037%2016.9867%203.38037C16.6326%203.38037%2016.2856%203.48013%2015.9856%203.6682L6.60631%209.59084C6.37723%209.73548%206.20136%209.95064%206.1052%2010.2039C6.00904%2010.4572%205.99779%2010.7349%206.07314%2010.9951C6.1485%2011.2553%206.30638%2011.484%206.52301%2011.6467C6.73963%2011.8094%207.00326%2011.8973%207.27417%2011.8971H26.6993C26.9706%2011.8989%2027.2351%2011.8115%2027.452%2011.6485C27.669%2011.4855%2027.8258%2011.2558%2027.8996%2010.9946ZM25.8196%2019.9345C25.1892%2019.3071%2024.4933%2018.7492%2023.7438%2018.2703C23.0035%2019.3851%2021.999%2020.2994%2020.8197%2020.9317C19.6404%2021.5641%2018.3229%2021.8949%2016.9848%2021.8947C15.6466%2021.8945%2014.3293%2021.5633%2013.1502%2020.9306C11.971%2020.2978%2010.9668%2019.3832%2010.2268%2018.2683C8.4674%2019.3974%207.01999%2020.9506%206.0176%2022.7852C5.01522%2024.6197%204.49%2026.6768%204.49023%2028.7674C4.49079%2029.2644%204.68845%2029.7408%205.03986%2030.0922C5.39128%2030.4436%205.86773%2030.6413%206.36471%2030.6419H27.6087C28.1057%2030.6413%2028.5822%2030.4436%2028.9336%2030.0922C29.285%2029.7408%2029.4826%2029.2644%2029.4832%2028.7674C29.4882%2027.1258%2029.167%2025.4995%2028.538%2023.9832C27.9091%2022.4668%2026.9851%2021.0906%2025.8196%2019.9345Z'%20fill='white'/%3e%3c/svg%3e" />
                                    </div>
                                    <p class="text-sm font-medium mb-1">Farmer</p>
                                    <p class="text-2xl font-medium">500+</p>
                                </div>
                                <div
                                    class="bg-[#23692433] backdrop-blur-sm rounded-2xl p-3 text-center border border-green-600/30 shadow-xl min-w-[110px]">
                                    <div class="flex justify-center mb-2">
                                        <img alt=""
                                            src="data:image/svg+xml,%3csvg%20width='35'%20height='34'%20viewBox='0%200%2035%2034'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M17.4916%2016.838C20.9285%2016.838%2023.7398%2014.0263%2023.7398%2010.5898C23.7398%207.15333%2020.9285%204.34155%2017.4916%204.34155C14.0547%204.34155%2011.2434%207.15333%2011.2434%2010.5898C11.2434%2014.0263%2014.0547%2016.838%2017.4916%2016.838ZM17.4916%2019.9622C13.3523%2019.9622%204.99512%2022.0711%204.99512%2026.2104V29.3345H29.9881V26.2104C29.9881%2022.0711%2021.6309%2019.9622%2017.4916%2019.9622Z'%20fill='white'/%3e%3c/svg%3e" />
                                    </div>
                                    <p class="text-sm font-medium mb-1">Users</p>
                                    <p class="text-2xl font-medium">15000+</p>
                                </div>
                                <div
                                    class="bg-[#23692433] backdrop-blur-sm rounded-2xl p-3 text-center border border-green-600/30 shadow-xl min-w-[110px]">
                                    <div class="flex justify-center mb-2">
                                        <img alt="" src="{{ asset('assets_file/icons/shop.svg') }}" />
                                    </div>
                                    <p class="text-sm font-medium mb-1">Retailer</p>
                                    <p class="text-2xl font-medium">100+</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <!-- footer Section start -->
                <footer class="bg-white text-gray-800">
                    <div class="">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto p-6">
                            <div class="col-span-1">
                                <img alt="ShareDeal Logo" class="h-8 w-auto" src="{{ asset('assets_file/logo/logoLG.svg') }}" />
                                <p class="text-xs sm:text-sm mt-2 text-gray-600">
                                    Morbi cursus porttitor enim lobortis molestie. Duis gravida
                                    turpis dui, eget bibendum magna.
                                </p>
                                <div class="flex space-x-2 mt-3 sm:mt-4">
                                    <a href="#"
                                        class="text-green-600 hover:bg-[#4CBF42] p-2 rounded-full hover:text-white transform duration-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-facebook size-7" aria-hidden="true">
                                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                            </path>
                                        </svg></a><a href="#"
                                        class="text-green-600 hover:bg-[#4CBF42] p-2 rounded-full hover:text-white transform duration-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-twitter size-7" aria-hidden="true">
                                            <path
                                                d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z">
                                            </path>
                                        </svg></a><a href="#"
                                        class="text-green-600 hover:bg-[#4CBF42] p-2 rounded-full hover:text-white transform duration-500"><svg
                                            stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 1024 1024" class="size-7" height="16" width="16"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M886.796 351.459c-3.822-186.292-156.11-321.28-362.52-321.28-22.331 0-45.064 1.61-67.798 4.828C291.11 57.941 164.165 177.038 140.425 331.141c-16.9 109.844 18.508 241.816 135.393 271.591l16.9 4.225 9.858-14.284c3.42-4.829 33.395-49.088 28.566-85.703-2.414-18.306-13.48-29.572-20.118-36.21l-3.219-3.22c-18.306-28.768-25.95-77.452-18.306-118.291 18.508-100.59 102.399-173.617 208.62-181.664 7.445-.604 14.888-.805 22.132-.805 110.045 0 184.48 65.584 189.712 166.978 4.828 97.974-24.544 187.297-76.85 233.166l-3.42 3.018c-12.272 10.864-21.929 19.514-42.047 22.532-5.231.805-10.462 1.207-15.29 1.207-40.237 0-62.165-26.556-62.97-52.71-1.005-29.371 10.663-61.56 23.136-95.76 15.29-42.047 31.183-85.703 25.349-130.768-6.238-46.673-48.686-83.087-96.768-83.087-12.272 0-24.745 2.414-36.816 6.84C336.975 271.39 324.1 385.66 356.087 477.8c-7.644 36.413-17.502 72.424-27.963 110.447-31.183 114.471-63.572 232.965-39.029 371.778l5.432 30.78 28.769-11.87c27.963-11.668 43.051-37.419 55.524-58.744 2.414-4.024 4.828-8.048 7.041-11.87 40.839-64.177 63.773-140.826 81.477-215.262 44.057 33.194 89.122 43.858 153.298 36.817 177.44-19.314 269.58-209.428 266.16-378.418zM406.587 481.223l1.413-7.04-2.615-6.84C378.025 395.12 384.26 307.205 442 285.277c6.237-2.414 12.674-3.621 18.911-3.621 23.538 0 44.259 17.3 47.076 39.43 4.426 32.994-8.852 68.803-22.733 107.027-13.48 37.016-27.562 75.24-26.153 114.47 1.609 49.089 41.845 101.194 113.062 101.194 7.444 0 15.088-.604 22.933-1.81 34.804-5.232 54.116-22.332 67.997-34.805l3.22-2.817c63.37-55.727 99.38-160.54 93.748-273.402-6.84-136.399-115.678-224.918-265.556-213.652-129.358 9.859-231.356 99.182-254.09 222.505-9.858 53.111.401 115.275 25.349 154.506 3.017 4.627 6.437 8.248 9.656 11.467 2.213 2.414 5.834 5.834 6.035 7.444.805 6.84-3.42 20.923-10.662 34.804-72.827-30.982-93.347-128.956-80.874-209.628 20.118-131.973 129.961-234.172 273.402-254.09 20.52-2.816 41.04-4.225 60.956-4.225 177.842 0 309.212 114.471 312.23 272.194 3.017 146.861-73.633 311.426-221.097 327.721-10.058 1.006-19.514 1.609-28.365 1.609-53.514 0-82.281-18.508-116.884-52.91L437.97 596.7l-9.858 44.259c-18.911 84.093-40.839 172.008-84.294 240.409-2.817 4.426-5.634 9.254-8.451 14.284-1.006 1.81-2.012 3.62-3.219 5.23-8.047-107.428 18.508-204.8 44.461-299.554 10.662-39.23 21.928-80.07 29.976-120.104z">
                                            </path>
                                        </svg></a><a href="#"
                                        class="text-green-600 hover:bg-[#4CBF42] p-2 rounded-full hover:text-white transform duration-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-instagram size-7" aria-hidden="true">
                                            <rect width="20" height="20" x="2" y="2" rx="5"
                                                ry="5"></rect>
                                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5">
                                            </line>
                                        </svg></a>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <h4 class="text-base sm:text-lg font-semibold pb-1">
                                    Quick Links
                                </h4>
                                <div class="border-b-3 border-green-600 w-10"></div>
                                <ul class="mt-2 sm:mt-4 space-y-1 sm:space-y-2">
                                    <li>
                                        <a href="#home"
                                            class="text-xs sm:text-sm text-gray-600 hover:text-green-600">Home</a>
                                    </li>
                                    <li>
                                        <a href="#deals"
                                            class="text-xs sm:text-sm text-gray-600 hover:text-green-600">Deals</a>
                                    </li>
                                    <li>
                                        <a href="#about"
                                            class="text-xs sm:text-sm text-gray-600 hover:text-green-600">About Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-span-1">
                                <h4 class="text-base sm:text-lg font-semibold pb-1">
                                    Support
                                </h4>
                                <div class="border-b-3 border-green-600 w-10"></div>
                                <ul class="mt-2 sm:mt-4 space-y-1 sm:space-y-2">
                                    <li>
                                        <a href="#faqs"
                                            class="text-xs sm:text-sm text-gray-600 hover:text-green-600">FAQs</a>
                                    </li>
                                    <li>
                                        <a href="#terms"
                                            class="text-xs sm:text-sm text-gray-600 hover:text-green-600">Terms &amp;
                                            Condition</a>
                                    </li>
                                    <li>
                                        <a href="#privacy"
                                            class="text-xs sm:text-sm text-gray-600 hover:text-green-600">Privacy
                                            Policy</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-span-1">
                                <h4 class="text-base sm:text-lg font-semibold pb-1">
                                    Download Mobile App
                                </h4>
                                <div class="border-b-3 border-green-600 w-10"></div>
                                <a href="https://play.google.com/store/apps/details?id=com.selefe.selefe&amp;pcampaignid=web_share"
                                    class="mt-2 sm:mt-4 inline-block"><img alt=""
                                        src="{{ asset('assets_file/logo/googlePlay.svg') }}" /></a>
                            </div>
                        </div>
                        <div class="mt-6 p-4 bg-[#4CBF42]">
                            <div class="max-w-7xl mx-auto md:grid grid-cols-3 items-center gap-4 sm:gap-0">
                                <p class="text-xs sm:text-sm text-gray-200 md:text-left text-center md:pb-0 pb-3">
                                    © 2021. All Rights Reserved
                                </p>
                                <div class="flex space-x-2 justify-center sm:space-x-4">
                                    <img alt="Apple Pay" class="h-5 sm:h-8"
                                        src="{{ asset('assets_file/paymentLogo/visa.svg') }}" /><img
                                        alt="Visa" class="h-5 sm:h-8"
                                        src="{{ asset('assets_file/paymentLogo/mastercard.svg') }}" /><img
                                        alt="MasterCard" class="h-5 sm:h-8"
                                        src="{{ asset('assets_file/paymentLogo/discover.svg') }}" /><img
                                        alt="Discover" class="h-5 sm:h-8"
                                        src="{{ asset('assets_file/paymentLogo/applePay.svg') }}" /><img
                                        alt="Secure Payment" class="h-5 sm:h-8" src="{{ asset('assets_file/paymentLogo/cart.svg') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script src="{{ asset('c_app.js') }}"></script>

</body>

</html>
