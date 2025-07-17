@extends('layouts.base')

@section('title', 'Logo Test')

@section('body')
<div class="p-6 bg-white">
    <h1 class="text-3xl font-bold text-green-800 text-center mb-8">LV Demo - Logo Implementation Test</h1>
    
    <!-- Component Usage Demo -->
    <div class="mb-8 p-6 bg-gray-50 rounded-lg">
        <h2 class="text-xl font-semibold mb-4">✅ Logo Component Usage</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="text-center p-4 bg-white rounded border">
                <h3 class="font-medium mb-2">Icon Type</h3>
                <x-logo type="icon" class="h-12 mx-auto" />
                <p class="text-sm text-gray-600 mt-2">type="icon"</p>
            </div>
            
            <div class="text-center p-4 bg-white rounded border">
                <h3 class="font-medium mb-2">Default Type</h3>
                <x-logo class="h-12 mx-auto" />
                <p class="text-sm text-gray-600 mt-2">default</p>
            </div>
            
            <div class="text-center p-4 bg-white rounded border">
                <h3 class="font-medium mb-2">Large Type</h3>
                <x-logo type="large" class="h-16 mx-auto" />
                <p class="text-sm text-gray-600 mt-2">type="large"</p>
            </div>
        </div>
    </div>
    
    <!-- Responsive Test -->
    <div class="mb-8 p-6 bg-gray-50 rounded-lg">
        <h2 class="text-xl font-semibold mb-4">✅ Responsive Design</h2>
        <div class="flex flex-wrap items-center justify-center gap-6">
            <div class="text-center">
                <p class="text-sm mb-2">Mobile (h-6)</p>
                <x-logo class="h-6" />
            </div>
            <div class="text-center">
                <p class="text-sm mb-2">Tablet (h-8)</p>
                <x-logo class="h-8" />
            </div>
            <div class="text-center">
                <p class="text-sm mb-2">Desktop (h-12)</p>
                <x-logo class="h-12" />
            </div>
        </div>
    </div>
    
    <!-- Auth Page Simulation -->
    <div class="mb-8 p-6 bg-gray-50 rounded-lg">
        <h2 class="text-xl font-semibold mb-4">✅ Auth Page Implementation</h2>
        <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow text-center">
            <a href="{{ url('/') }}">
                <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
            </a>
            <h3 class="mt-6 text-2xl font-bold text-gray-900">Sign in to your account</h3>
            <p class="mt-2 text-sm text-gray-600">Demo of auth page logo usage</p>
        </div>
    </div>
    
    <!-- Implementation Status -->
    <div class="p-6 bg-blue-50 border border-blue-200 rounded-lg">
        <h2 class="text-xl font-semibold text-blue-900 mb-4">📋 Implementation Status</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
            <div>
                <h3 class="font-medium text-blue-800 mb-2">✅ Files Updated:</h3>
                <ul class="space-y-1 text-blue-700">
                    <li>• /resources/views/components/logo.blade.php</li>
                    <li>• /resources/views/layouts/navbar.blade.php</li>
                    <li>• /resources/views/layouts/base.blade.php</li>
                </ul>
            </div>
            <div>
                <h3 class="font-medium text-blue-800 mb-2">✅ Assets Created:</h3>
                <ul class="space-y-1 text-blue-700">
                    <li>• /public/images/logos/logo.svg</li>
                    <li>• /public/images/logos/logo-icon.svg</li>
                    <li>• /public/images/logos/logo-large.svg</li>
                    <li>• /public/images/logos/favicon.svg</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection