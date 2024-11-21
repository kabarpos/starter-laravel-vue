<template>
  <section class="relative h-screen">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0">
      <div class="relative h-full">
        <div class="absolute inset-0 bg-gradient-to-r from-[#1F2739]/90 to-[#325897]/80"></div>
        <img 
          :src="currentImage" 
          class="w-full h-full object-cover"
          alt="Luxury Property"
        />
      </div>
    </div>

    <!-- Content -->
    <div class="relative container mx-auto px-4 h-full flex items-center">
      <div class="max-w-3xl text-white">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">
          Discover Your Dream Luxury Home
        </h1>
        <p class="text-xl md:text-2xl mb-8 text-gray-200">
          Experience the finest collection of high-class properties curated just for you
        </p>
        
        <!-- Search Form -->
        <div class="bg-white/10 backdrop-blur-md p-6 rounded-lg">
          <div class="grid md:grid-cols-3 gap-4">
            <div class="space-y-2">
              <label class="text-sm font-medium">Location</label>
              <input 
                type="text" 
                placeholder="Enter location"
                class="w-full px-4 py-2 rounded-md bg-white/90 text-gray-800"
              >
            </div>
            <div class="space-y-2">
              <label class="text-sm font-medium">Property Type</label>
              <select class="w-full px-4 py-2 rounded-md bg-white/90 text-gray-800">
                <option value="">All Types</option>
                <option value="house">House</option>
                <option value="villa">Villa</option>
                <option value="apartment">Apartment</option>
              </select>
            </div>
            <div class="flex items-end">
              <button class="w-full bg-[#BA8C33] hover:bg-[#325897] text-white py-2 px-6 rounded-md transition-colors duration-200">
                Search Property
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Scroll Down Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
      </svg>
    </div>
  </section>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue';

const currentImageIndex = ref(0);
const images = [
  'https://images.unsplash.com/photo-1613977257363-707ba9348227?q=80&w=2070',
  'https://images.unsplash.com/photo-1613490493576-7fde63acd811?q=80&w=2071',
  'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=2070'
];

const currentImage = computed(() => images[currentImageIndex.value]);

const startSlideshow = () => {
  setInterval(() => {
    currentImageIndex.value = (currentImageIndex.value + 1) % images.length;
  }, 5000);
};

onMounted(() => {
  startSlideshow();
});
</script>
