<!-- SIDEBAR -->
    <div class="w-64 bg-white border-r border-gray-200 flex flex-col">
        <div class="p-6 border-b flex items-center gap-3">
            <div class="w-9 h-9 bg-red-500 rounded-xl flex items-center justify-center text-white font-bold text-2xl">T</div>
            <div>
                <h1 class="text-2xl font-semibold tracking-tight">Twilio Admin</h1>
            </div>
        </div>

        <div class="flex-1 px-3 py-6 space-y-1 overflow-y-auto">
            <a href="" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-700 font-medium {{ request()->routeIs('dashboard') ? 'bg-red-50 text-red-600' : '' }}">
                <i class="fas fa-tachometer-alt w-5"></i>
                <span>Dashboard</span>
            </a>
            <a href="" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-700 font-medium {{ request()->routeIs('sms.send') ? 'bg-red-50 text-red-600' : '' }}">
                <i class="fas fa-paper-plane w-5"></i>
                <span>Send SMS</span>
            </a>
            <a href="" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-700 font-medium {{ request()->routeIs('logs') ? 'bg-red-50 text-red-600' : '' }}">
                <i class="fas fa-list w-5"></i>
                <span>Message Logs</span>
            </a>
            <a href="" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-700 font-medium {{ request()->routeIs('call') ? 'bg-red-50 text-red-600' : '' }}">
                <i class="fas fa-phone w-5"></i>
                <span>Make Call</span>
            </a>
            <a href="" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-700 font-medium {{ request()->routeIs('whatsapp.send') ? 'bg-red-50 text-red-600' : '' }}">
                <i class="fab fa-whatsapp w-5"></i>
                <span>WhatsApp Messaging</span>
            </a>
            <a href="" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-700 font-medium {{ request()->routeIs('templates') ? 'bg-red-50 text-red-600' : '' }}">
                <i class="fas fa-file-alt w-5"></i>
                <span>Templates</span>
            </a>
        </div>

        <div class="p-4 border-t">
    <div class="flex items-center gap-3 px-4 py-3 bg-gray-50 rounded-3xl">
        <div class="w-8 h-8 bg-red-100 text-red-600 rounded-2xl flex items-center justify-center font-bold">SA</div>
        <div class="flex-1">
            <div class="font-medium text-sm">Surinder Admin</div>
            <div class="text-xs text-green-500">● Online</div>
        </div>

        <!-- Logout link triggers hidden form -->
        <a href="{{ route('logout') }}" class="text-gray-400 hover:text-red-500"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
        </a>

        <!-- Hidden logout form -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
    </div>
