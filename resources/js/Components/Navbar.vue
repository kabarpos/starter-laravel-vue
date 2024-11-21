<template>
  <nav class="bg-[#1F2739] fixed w-full z-50">
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center h-20">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <Link href="/" class="text-2xl font-bold text-white">EL MIRA</Link>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-8">
          <Link 
            v-for="item in menuItems" 
            :key="item.path"
            :href="item.path"
            class="text-gray-300 hover:text-[#BA8C33] transition-colors duration-200"
          >
            {{ item.name }}
          </Link>
        </div>

        <!-- CTA Button -->
        <div class="hidden md:block">
          <Link 
            href="/contact"
            class="bg-[#BA8C33] text-white px-6 py-2 rounded-md hover:bg-[#325897] transition-colors duration-200"
          >
            Contact Us
          </Link>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
          <button 
            @click="isOpen = !isOpen"
            class="text-gray-300 hover:text-white focus:outline-none"
          >
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path v-if="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
              <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div 
        v-show="isOpen" 
        class="md:hidden"
      >
        <div class="px-2 pt-2 pb-3 space-y-1">
          <Link 
            v-for="item in menuItems"
            :key="item.path"
            :href="item.path"
            class="block px-3 py-2 text-base font-medium text-gray-300 hover:text-white hover:bg-[#325897] rounded-md"
          >
            {{ item.name }}
          </Link>
          <Link
            href="/contact"
            class="block px-3 py-2 text-base font-medium bg-[#BA8C33] text-white hover:bg-[#325897] rounded-md mt-4"
          >
            Contact Us
          </Link>
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const isOpen = ref(false);

const menuItems = [
  { name: 'Home', path: '/' },
  { name: 'Properties', path: '/properties' },
  { name: 'About', path: '/about' },
  { name: 'Services', path: '/services' },
  { name: 'Contact', path: '/contact' }
];
</script>
