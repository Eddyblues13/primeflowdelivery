@extends('layouts.app')

@section('title', 'Prime Flow Delivery - Global Logistics & Shipping')

@section('content')
<!-- Hero Section with Particles.js -->
<section class="min-h-[85vh] flex items-center relative overflow-hidden bg-slate-900">
    <!-- Particles Background -->
    <div id="particles-js" class="absolute inset-0 z-0"></div>
    
    <!-- Gradient Overlay for readability -->
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/40 to-slate-900 z-0"></div>

    <div class="hero-content container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-20 lg:py-0">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-500/10 text-indigo-300 font-semibold text-sm mb-6 border border-indigo-500/20 backdrop-blur-md shadow-sm animate-slide-in">
                <span class="flex h-2 w-2 rounded-full bg-indigo-400 animate-pulse"></span>
                Next-Generation Global Logistics
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-6 tracking-tight drop-shadow-lg">
                Global Logistics, <br/>
                <span class="bg-gradient-to-r from-indigo-400 to-cyan-400 bg-clip-text text-transparent">Reimagined.</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-300 mb-10 max-w-2xl leading-relaxed drop-shadow">
                Navigating the complexities of global trade with advanced technology, unparalleled speed, and relentless reliability. Your business, delivered seamlessly.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('track') }}"
                    class="bg-indigo-600 text-white font-semibold px-8 py-4 rounded-xl hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2 focus:ring-offset-slate-900 transition-all duration-300 shadow-[0_0_20px_rgba(79,70,229,0.4)] hover:shadow-[0_0_30px_rgba(79,70,229,0.6)] hover:-translate-y-1 flex items-center justify-center gap-2 text-lg border border-indigo-500">
                    <i data-feather="compass" class="h-5 w-5"></i>
                    <span>Track Shipment</span>
                </a>
                <a href="{{ route('contact') }}#quote-form"
                    class="bg-white/5 backdrop-blur-md text-white font-semibold px-8 py-4 rounded-xl hover:bg-white/10 border border-white/10 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-1 flex items-center justify-center gap-2 text-lg">
                    <i data-feather="file-text" class="h-5 w-5 text-indigo-400"></i>
                    <span>Request a Quote</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Tracking Widget - Sleek Glassmorphism -->
<section class="relative z-20 -mt-16 sm:-mt-24 px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto">
    <div class="bg-white/80 backdrop-blur-xl rounded-2xl p-6 sm:p-10 shadow-[0_20px_50px_rgba(0,_0,_0,_0.1)] border border-white/50 flex flex-col md:flex-row items-center gap-8 isolate relative overflow-hidden">
        <!-- Shine effect -->
        <div class="absolute inset-0 bg-gradient-to-tr from-white/40 to-transparent pointer-events-none"></div>
        
        <div class="w-full md:w-1/3 relative z-10">
            <h3 class="text-2xl font-bold text-slate-900 mb-2 tracking-tight">Track Package</h3>
            <p class="text-slate-600 text-sm">Enter your tracking code for real-time AI-powered location updates.</p>
        </div>
        <div class="w-full md:w-2/3 relative z-10">
            <form action="{{ route('package') }}" method="POST" class="flex flex-col sm:flex-row gap-3 tracking-form w-full relative">
                @csrf
                <div class="relative flex-grow">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i data-feather="package" class="h-5 w-5 text-slate-400"></i>
                    </div>
                    <input type="text" name="search" placeholder="E.g. PRM-123456789"
                        class="w-full pl-11 pr-4 py-4 bg-white/90 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500 text-slate-900 placeholder-slate-400 transition-all duration-300 text-lg shadow-inner"
                        required>
                </div>
                <button type="submit"
                    class="bg-slate-900 text-white px-8 py-4 rounded-xl hover:bg-indigo-600 transition-colors duration-300 shadow-md hover:shadow-lg flex items-center justify-center gap-2 font-semibold text-lg whitespace-nowrap">
                    <i data-feather="search" class="h-5 w-5"></i>
                    <span>Track Now</span>
                </button>
            </form>
            @if(session('error'))
            <div class="mt-4 p-3 bg-red-50/90 border border-red-200 rounded-lg animate-fade-in text-sm flex items-center gap-2 text-red-600 font-medium">
                <i data-feather="alert-circle" class="h-4 w-4"></i>
                {{ session('error') }}
            </div>
            @endif
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-slate-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12">
            <div class="text-center group">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-indigo-100 text-indigo-600 mb-6 group-hover:scale-110 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300 shadow-sm">
                    <i data-feather="box" class="h-8 w-8"></i>
                </div>
                <h3 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-2 tracking-tight">1.2M<span class="text-indigo-600">+</span></h3>
                <p class="text-slate-500 font-medium uppercase tracking-wide text-xs">Parcels Delivered</p>
            </div>
            <div class="text-center group">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-cyan-100 text-cyan-600 mb-6 group-hover:scale-110 group-hover:bg-cyan-600 group-hover:text-white transition-all duration-300 shadow-sm">
                    <i data-feather="globe" class="h-8 w-8"></i>
                </div>
                <h3 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-2 tracking-tight">150<span class="text-cyan-600">+</span></h3>
                <p class="text-slate-500 font-medium uppercase tracking-wide text-xs">Countries Reached</p>
            </div>
            <div class="text-center group">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-emerald-100 text-emerald-600 mb-6 group-hover:scale-110 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300 shadow-sm">
                    <i data-feather="clock" class="h-8 w-8"></i>
                </div>
                <h3 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-2 tracking-tight">99.7<span class="text-emerald-600">%</span></h3>
                <p class="text-slate-500 font-medium uppercase tracking-wide text-xs">On-Time Delivery</p>
            </div>
            <div class="text-center group">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-purple-100 text-purple-600 mb-6 group-hover:scale-110 group-hover:bg-purple-600 group-hover:text-white transition-all duration-300 shadow-sm">
                    <i data-feather="users" class="h-8 w-8"></i>
                </div>
                <h3 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-2 tracking-tight">25k<span class="text-purple-600">+</span></h3>
                <p class="text-slate-500 font-medium uppercase tracking-wide text-xs">Satisfied Clients</p>
            </div>
        </div>
    </div>
</section>

<!-- NEW: How It Works Section -->
<section class="py-24 bg-white border-y border-slate-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-20 animate-fade-in">
            <span class="text-indigo-600 font-bold tracking-widest uppercase text-xs mb-3 block">Simple Process</span>
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">How Prime Flow Works</h2>
            <p class="mt-6 text-slate-600 text-lg leading-relaxed">Experience logistics as it should be: transparent, efficient, and completely stress-free.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
            <!-- Connecting Line for Desktop -->
            <div class="hidden md:block absolute top-[45px] left-[10%] right-[10%] h-0.5 bg-gradient-to-r from-indigo-100 via-indigo-300 to-indigo-100 z-0"></div>

            <!-- Step 1 -->
            <div class="relative z-10 flex flex-col items-center text-center group">
                <div class="w-24 h-24 rounded-full bg-white border-4 border-indigo-50 shadow-xl flex items-center justify-center mb-6 group-hover:border-indigo-200 transition-colors duration-300 text-indigo-600">
                    <i data-feather="edit-3" class="h-10 w-10"></i>
                </div>
                <div class="bg-indigo-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm absolute top-0 right-1/4 translate-x-1/2 -translate-y-2 border-2 border-white shadow-sm">1</div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Request a Quote</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Provide your cargo details and destination. We instantly calculate the best route and price.</p>
            </div>

            <!-- Step 2 -->
            <div class="relative z-10 flex flex-col items-center text-center group">
                <div class="w-24 h-24 rounded-full bg-white border-4 border-indigo-50 shadow-xl flex items-center justify-center mb-6 group-hover:border-indigo-200 transition-colors duration-300 text-indigo-600">
                    <i data-feather="package" class="h-10 w-10"></i>
                </div>
                <div class="bg-indigo-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm absolute top-0 right-1/4 translate-x-1/2 -translate-y-2 border-2 border-white shadow-sm">2</div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Secure Pickup</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Our local experts handle packing, pickup, and customs clearance with zero hassle on your end.</p>
            </div>

            <!-- Step 3 -->
            <div class="relative z-10 flex flex-col items-center text-center group">
                <div class="w-24 h-24 rounded-full bg-white border-4 border-indigo-50 shadow-xl flex items-center justify-center mb-6 group-hover:border-indigo-200 transition-colors duration-300 text-indigo-600">
                    <i data-feather="activity" class="h-10 w-10"></i>
                </div>
                <div class="bg-indigo-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm absolute top-0 right-1/4 translate-x-1/2 -translate-y-2 border-2 border-white shadow-sm">3</div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Real-Time Transit</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Monitor your shipment 24/7 across our global network through your dedicated dashboard.</p>
            </div>

            <!-- Step 4 -->
            <div class="relative z-10 flex flex-col items-center text-center group">
                <div class="w-24 h-24 rounded-full bg-white border-4 border-indigo-50 shadow-xl flex items-center justify-center mb-6 group-hover:border-indigo-200 transition-colors duration-300 text-indigo-600">
                    <i data-feather="check-circle" class="h-10 w-10"></i>
                </div>
                <div class="bg-indigo-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm absolute top-0 right-1/4 translate-x-1/2 -translate-y-2 border-2 border-white shadow-sm">4</div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Safe Delivery</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Your cargo arrives exactly when it's supposed to, signed and secured at its final destination.</p>
            </div>
        </div>
    </div>
</section>

<!-- Core Services Section -->
<section class="py-24 bg-slate-50 relative overflow-hidden">
    <!-- Decorative Blob -->
    <div class="absolute top-0 right-0 -translate-y-12 translate-x-1/3 w-[500px] h-[500px] bg-indigo-200/40 rounded-full blur-[100px] -z-10 pointer-events-none"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="max-w-2xl animate-fade-in">
                <span class="text-indigo-600 font-bold tracking-widest uppercase text-xs mb-3 block">Solutions</span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">Premium Fleet & Services</h2>
            </div>
            <a href="{{ route('services') }}" class="hidden md:inline-flex items-center space-x-2 bg-white border border-slate-200 text-slate-700 hover:text-indigo-600 px-6 py-3 rounded-xl font-semibold hover:border-indigo-200 hover:shadow-md transition-all duration-300">
                <span>View All Services</span>
                <i data-feather="arrow-right" class="h-4 w-4"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg shadow-slate-200/50 hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-500 hover:-translate-y-2 group border border-slate-100 flex flex-col">
                <div class="h-60 overflow-hidden relative">
                    <img src="images/air.jpg" alt="Air Freight" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <span class="px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-white text-xs font-bold tracking-wider uppercase mb-3 inline-block">Fastest</span>
                        <h3 class="text-3xl font-bold text-white tracking-tight">Air Freight</h3>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <p class="text-slate-600 mb-6 leading-relaxed flex-1">When time is critical, our global air network provides unmatched speed, priority boarding, and precise tracking.</p>
                    <div class="flex items-center justify-between pt-6 border-t border-slate-100 mt-auto">
                        <div class="flex items-center gap-2 text-sm font-semibold text-slate-900">
                            <div class="w-8 h-8 rounded-full bg-indigo-50 flex items-center justify-center text-indigo-600">
                                <i data-feather="clock" class="h-4 w-4"></i>
                            </div>
                            1-3 Days
                        </div>
                        <a href="{{ route('services') }}" class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center group-hover:bg-indigo-600 group-hover:text-white text-slate-400 transition-colors duration-300">
                            <i data-feather="arrow-right" class="h-5 w-5"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg shadow-slate-200/50 hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-500 hover:-translate-y-2 group border border-slate-100 flex flex-col mt-0 md:mt-8 relative">
                <div class="h-60 overflow-hidden relative">
                    <img src="images/ocean.jpg" alt="Ocean Freight" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <span class="px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-white text-xs font-bold tracking-wider uppercase mb-3 inline-block">Economical</span>
                        <h3 class="text-3xl font-bold text-white tracking-tight">Ocean Freight</h3>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <p class="text-slate-600 mb-6 leading-relaxed flex-1">Cost-effective FCL and LCL ocean freight solutions tailored for your large-volume international supply chains.</p>
                    <div class="flex items-center justify-between pt-6 border-t border-slate-100 mt-auto">
                        <div class="flex items-center gap-2 text-sm font-semibold text-slate-900">
                            <div class="w-8 h-8 rounded-full bg-indigo-50 flex items-center justify-center text-indigo-600">
                                <i data-feather="anchor" class="h-4 w-4"></i>
                            </div>
                            15-45 Days
                        </div>
                        <a href="{{ route('services') }}" class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center group-hover:bg-indigo-600 group-hover:text-white text-slate-400 transition-colors duration-300">
                            <i data-feather="arrow-right" class="h-5 w-5"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg shadow-slate-200/50 hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-500 hover:-translate-y-2 group border border-slate-100 flex flex-col">
                <div class="h-60 overflow-hidden relative">
                    <img src="images/road.jpg" alt="Road Freight" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <span class="px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-white text-xs font-bold tracking-wider uppercase mb-3 inline-block">Flexible</span>
                        <h3 class="text-3xl font-bold text-white tracking-tight">Road Freight</h3>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <p class="text-slate-600 mb-6 leading-relaxed flex-1">Highly reliable and fully tracked domestic and cross-border road transport bridging regional hubs to your door.</p>
                    <div class="flex items-center justify-between pt-6 border-t border-slate-100 mt-auto">
                        <div class="flex items-center gap-2 text-sm font-semibold text-slate-900">
                            <div class="w-8 h-8 rounded-full bg-indigo-50 flex items-center justify-center text-indigo-600">
                                <i data-feather="truck" class="h-4 w-4"></i>
                            </div>
                            1-7 Days
                        </div>
                        <a href="{{ route('services') }}" class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center group-hover:bg-indigo-600 group-hover:text-white text-slate-400 transition-colors duration-300">
                            <i data-feather="arrow-right" class="h-5 w-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-12 text-center md:hidden">
            <a href="{{ route('services') }}" class="inline-flex items-center space-x-2 bg-white border border-slate-200 text-slate-700 hover:text-indigo-600 px-6 py-3 rounded-xl font-semibold w-full justify-center shadow-sm">
                <span>View All Services</span>
                <i data-feather="arrow-right" class="h-4 w-4"></i>
            </a>
        </div>
    </div>
</section>

<!-- NEW: Why Choose Us (Tech/Premium Focus) -->
<section class="py-24 bg-slate-900 text-white relative overflow-hidden">
    <!-- Dark particles/grid pattern could go here, for now a subtle radial gradient -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-indigo-900/40 via-slate-900 to-slate-900 -z-10"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-indigo-400 font-bold tracking-widest uppercase text-xs mb-3 block">The Prime Advantage</span>
                <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight mb-6">Engineered for absolute reliability.</h2>
                <p class="text-slate-400 text-lg leading-relaxed mb-10">
                    We combine military-grade security protocols with an AI-driven routing engine to guarantee your shipments are protected, optimized, and delivered on schedule, every single time.
                </p>
                
                <div class="space-y-8">
                    <div class="flex gap-5">
                        <div class="shrink-0 w-14 h-14 rounded-2xl bg-slate-800 border border-slate-700 flex items-center justify-center text-indigo-400 shadow-[0_0_15px_rgba(99,102,241,0.2)]">
                            <i data-feather="cpu" class="h-7 w-7"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Smart Route Optimization</h4>
                            <p class="text-slate-400 leading-relaxed text-sm">Our proprietary algorithms analyze weather, traffic, and customs delays to dynamically reroute cargo for maximum speed.</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-5">
                        <div class="shrink-0 w-14 h-14 rounded-2xl bg-slate-800 border border-slate-700 flex items-center justify-center text-emerald-400 shadow-[0_0_15px_rgba(52,211,153,0.1)]">
                            <i data-feather="shield" class="h-7 w-7"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Impenetrable Security</h4>
                            <p class="text-slate-400 leading-relaxed text-sm">24/7 armed escorts for high-value goods, GPS-tamper alerts, and comprehensive insurance coverage.</p>
                        </div>
                    </div>

                    <div class="flex gap-5">
                        <div class="shrink-0 w-14 h-14 rounded-2xl bg-slate-800 border border-slate-700 flex items-center justify-center text-cyan-400 shadow-[0_0_15px_rgba(34,211,238,0.1)]">
                            <i data-feather="headphones" class="h-7 w-7"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Dedicated Concierge</h4>
                            <p class="text-slate-400 leading-relaxed text-sm">Forget automated bots. You get a dedicated logistics expert assigned to your account available around the clock.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="relative">
                <div class="rounded-3xl overflow-hidden border border-slate-700 shadow-2xl relative z-10 bg-slate-800">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8ed7c80a30?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Warehouse Tech" class="w-full h-auto opacity-80 mix-blend-luminosity">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-80"></div>
                    
                    <!-- Tech overlay elements -->
                    <div class="absolute bottom-8 left-8 right-8 bg-slate-900/90 backdrop-blur-xl border border-slate-700 rounded-2xl p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">System Status</span>
                            <span class="flex items-center gap-2 text-xs font-bold text-emerald-400"><span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span> Optimal</span>
                        </div>
                        <div class="w-full bg-slate-800 rounded-full h-2 mb-2">
                            <div class="bg-indigo-500 h-2 rounded-full w-[94%]" style="transition: width 1s ease-in-out;"></div>
                        </div>
                        <p class="text-xs text-slate-500 text-right">94% Fleet Active</p>
                    </div>
                </div>
                
                <!-- Decorative glow -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-indigo-500/20 blur-[100px] rounded-full -z-0 pointer-events-none"></div>
            </div>
        </div>
    </div>
</section>

<!-- Modern CTA Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-indigo-600 rounded-[2.5rem] p-10 md:p-16 text-center shadow-2xl shadow-indigo-600/30 relative overflow-hidden isolate">
            <!-- Background Patterns -->
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-indigo-500 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3 -z-10 mix-blend-screen"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-blue-400 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 -z-10 mix-blend-screen opacity-50"></div>
            
            <div class="max-w-3xl mx-auto relative z-10">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/20 text-white font-medium text-sm mb-6 border border-white/30 backdrop-blur-md">
                    <i data-feather="zap" class="h-4 w-4 text-white"></i> Fast Onboarding
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6 tracking-tight">Ready to Ship with Confidence?</h2>
                <p class="text-xl text-indigo-100 mb-10 font-light leading-relaxed">
                    Join thousands of modern businesses that trust Prime Flow Delivery. Get an instant competitive quote customized for your cargo today.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-5">
                    <a href="{{ route('contact') }}#quote-form"
                        class="bg-white text-indigo-600 font-bold px-8 py-4 rounded-xl hover:bg-slate-50 transition-all duration-300 shadow-xl hover:-translate-y-1 text-lg flex items-center justify-center focus:ring-4 focus:ring-white/50">
                        Get a Free Quote
                    </a>
                    <a href="tel:+13154893120"
                        class="bg-indigo-700/50 backdrop-blur-md border border-indigo-400 text-white font-bold px-8 py-4 rounded-xl hover:bg-indigo-700 transition-all duration-300 flex items-center justify-center gap-2 hover:-translate-y-1 text-lg">
                        <i data-feather="phone-call" class="h-5 w-5"></i>
                        +1 315 489 3120
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Particles.js Initialization
        if(typeof particlesJS !== 'undefined') {
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#6366f1" // Indigo 500
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": true,
                        "anim": {
                            "enable": true,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": true,
                            "speed": 2,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#818cf8", // Indigo 400
                        "opacity": 0.3,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2,
                        "direction": "none",
                        "random": true,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 0.8
                            }
                        },
                        "push": {
                            "particles_nb": 4
                        }
                    }
                },
                "retina_detect": true
            });
        }

        // Tracking Form Logic
        const trackingForm = document.querySelector('.tracking-form');
        const trackingInput = trackingForm?.querySelector('input[name="search"]');
        
        if (trackingForm) {
            trackingForm.addEventListener('submit', function(e) {
                const trackingNumber = trackingInput.value.trim();
                
                if (!trackingNumber) {
                    e.preventDefault();
                    showTrackingError('Please enter a tracking code');
                    trackingInput.focus();
                    return;
                }
                
                // Show loading state
                const submitButton = this.querySelector('button[type="submit"]');
                if (submitButton) {
                    submitButton.disabled = true;
                    submitButton.innerHTML = `
                        <i data-feather="loader" class="h-5 w-5 animate-spin"></i>
                        <span>Tracking...</span>
                    `;
                    if (typeof feather !== 'undefined') {
                        feather.replace();
                    }
                }
            });
            
            trackingInput?.addEventListener('input', clearTrackingError);
        }
        
        function showTrackingError(message) {
            clearTrackingError();
            
            const errorDiv = document.createElement('div');
            errorDiv.className = 'mt-3 p-3 bg-red-50/90 border border-red-200 rounded-xl animate-fade-in text-sm error-msg text-red-600 font-medium flex items-center gap-2';
            errorDiv.innerHTML = `
                <i data-feather="alert-circle" class="h-4 w-4"></i>
                ${message}
            `;
            
            trackingForm.parentNode.insertBefore(errorDiv, trackingForm.nextSibling);
            if (typeof feather !== 'undefined') {
                feather.replace();
            }
        }
        
        function clearTrackingError() {
            const existingError = trackingForm.parentNode.querySelector('.error-msg');
            if (existingError) {
                existingError.remove();
            }
        }
        
        // Add keyboard shortcut (Ctrl/Cmd + K)
        document.addEventListener('keydown', function(e) {
            if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
                e.preventDefault();
                if (trackingInput) {
                    trackingInput.focus();
                }
            }
        });
    });
</script>
@endpush