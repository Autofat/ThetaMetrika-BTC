<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-cyan-100">
    <div class="relative overflow-hidden">
        <!-- Navigation -->
        <div class="relative pb-16 sm:pb-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6">
                <nav class="relative flex items-center justify-between pt-6 pb-6 sm:h-10 md:justify-center">
                    <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                        <div class="flex items-center justify-between w-full md:w-auto">
                            <a href="#">
                                <span class="sr-only">ThetaMetrika</span>
                                <div class="h-8 w-8 bg-indigo-600 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">TM</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="hidden md:flex md:space-x-10">
                        <a href="#"
                            class="font-medium text-gray-500 hover:text-gray-900 transition-colors">Features</a>
                        <a href="#"
                            class="font-medium text-gray-500 hover:text-gray-900 transition-colors">About</a>
                        <a href="#"
                            class="font-medium text-gray-500 hover:text-gray-900 transition-colors">Contact</a>
                    </div>
                    <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                        <span class="inline-flex rounded-md shadow">
                            <a href="{{ route('login') }}"
                                class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 transition-colors">
                                Log in
                            </a>
                        </span>
                        <span class="ml-3 inline-flex rounded-md shadow">
                            <a href="{{ route('register') }}"
                                class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 transition-colors">
                                Sign up
                            </a>
                        </span>
                    </div>
                </nav>
            </div>

            <!-- Hero section -->
            <div class="mx-auto mt-16 max-w-7xl px-4 sm:mt-24 sm:px-6">
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block">Welcome to</span>
                        <span class="block text-indigo-600">ThetaMetrika</span>
                    </h1>
                    <p class="mx-auto mt-3 max-w-md text-base text-gray-500 sm:text-lg md:mt-5 md:max-w-3xl md:text-xl">
                        A powerful platform for managing users, transactions, and analytics. Built with Laravel and
                        Livewire for seamless user experience.
                    </p>
                    <div class="mx-auto mt-5 max-w-md sm:flex sm:justify-center md:mt-8">
                        <div class="rounded-md shadow">
                            <a href="{{ route('register') }}"
                                class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 md:py-4 md:px-10 md:text-lg transition-colors">
                                Get started
                            </a>
                        </div>
                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                            <a href="{{ route('login') }}"
                                class="flex w-full items-center justify-center rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50 md:py-4 md:px-10 md:text-lg transition-colors">
                                Sign in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature section -->
        <div class="relative bg-white py-16 sm:py-24 lg:py-32">
            <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="text-base font-semibold uppercase tracking-wider text-indigo-600">Platform Features</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Everything you need to manage your users
                </p>
                <p class="mx-auto mt-5 max-w-prose text-xl text-gray-500">
                    Comprehensive user management with role-based access control and transaction tracking.
                </p>
                <div class="mt-12">
                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        <!-- Feature 1 -->
                        <div class="pt-6">
                            <div class="flow-root rounded-lg bg-gray-50 px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                                        <span
                                            class="inline-flex items-center justify-center rounded-md bg-indigo-500 p-3 shadow-lg">
                                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">User Management
                                    </h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        Complete user management system with role-based permissions and user profiles.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="pt-6">
                            <div class="flow-root rounded-lg bg-gray-50 px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                                        <span
                                            class="inline-flex items-center justify-center rounded-md bg-indigo-500 p-3 shadow-lg">
                                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Role Management
                                    </h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        Advanced role and permission system using Spatie Laravel Permission package.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="pt-6">
                            <div class="flow-root rounded-lg bg-gray-50 px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                                        <span
                                            class="inline-flex items-center justify-center rounded-md bg-indigo-500 p-3 shadow-lg">
                                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Analytics
                                        Dashboard</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        Real-time analytics and reporting with interactive charts and user insights.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
