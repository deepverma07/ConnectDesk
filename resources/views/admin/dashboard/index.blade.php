@extends('admin.layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-3xl p-8 card-hover border">
            <div class="flex justify-between">
                <div>
                    <p class="text-gray-500">Total SMS Sent</p>
                    <p class="text-6xl font-semibold mt-3">248</p>
                </div>
                <div class="w-14 h-14 bg-blue-100 rounded-3xl flex items-center justify-center text-4xl text-blue-600">
                    <i class="fas fa-paper-plane"></i>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl p-8 card-hover border">
            <div class="flex justify-between">
                <div>
                    <p class="text-gray-500">Total WhatsApp</p>
                    <p class="text-6xl font-semibold mt-3">184</p>
                </div>
                <div class="w-14 h-14 bg-green-100 rounded-3xl flex items-center justify-center text-4xl text-green-600">
                    <i class="fab fa-whatsapp"></i>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl p-8 card-hover border">
            <div class="flex justify-between">
                <div>
                    <p class="text-gray-500">Total Calls Made</p>
                    <p class="text-6xl font-semibold mt-3">67</p>
                </div>
                <div class="w-14 h-14 bg-purple-100 rounded-3xl flex items-center justify-center text-4xl text-purple-600">
                    <i class="fas fa-phone"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10 bg-white rounded-3xl p-8">
        <h3 class="font-semibold text-lg mb-6">Recent Activity</h3>
        <p class="text-gray-400 text-center py-12">Recent messages and calls will appear here once you start using the dashboard.</p>
    </div>
</div>
@endsection