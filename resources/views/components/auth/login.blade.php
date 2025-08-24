<div class="min-h-screen bg-gray-100 flex items-center justify-center px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow">
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
            Sign in to your account
        </h2>

        @if (session()->has('error'))
            <div class="text-red-600 text-sm mb-4 text-center">
                {{ session('error') }}
            </div>
        @endif

        <form wire:submit.prevent="login" class="mt-8 space-y-6">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email" class="sr-only">Email address</label>
                    <input id="email" type="email" autocomplete="email" required wire:model="email"
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border 
                        border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md 
                        focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 
                        focus:z-10 sm:text-sm"
                        placeholder="Email address">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" type="password" autocomplete="current-password" required wire:model="password"
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border 
                        border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md 
                        focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 
                        focus:z-10 sm:text-sm"
                        placeholder="Password">
                </div>
            </div>

            <div>
                <button type="submit"
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent 
                       text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 
                       focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 cursor-pointer">
                    Login
                </button>
            </div>
        </form>

        <p class="mt-2 text-center text-sm text-gray-600">
            Don’t have an account?
            <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                Register
            </a>
        </p>
    </div>
</div>
