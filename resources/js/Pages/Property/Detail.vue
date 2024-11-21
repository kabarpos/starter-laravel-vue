<template>
  <AppLayout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
      <!-- Back Button -->
      <button @click="navigateBack" 
              class="inline-flex items-center text-blue-600 hover:text-blue-700 mb-8">
        <ArrowLeftIcon class="w-5 h-5 mr-2" />
        Kembali ke Daftar Properti
      </button>

      <div class="bg-white rounded-xl shadow-sm overflow-hidden">
        <!-- Image Gallery -->
        <div class="relative aspect-[16/9] overflow-hidden">
          <img :src="property.mainImage" :alt="property.name"
               class="w-full h-full object-cover">
        </div>

        <!-- Property Content -->
        <div class="p-8">
          <!-- Header -->
          <div class="flex justify-between items-start mb-6">
            <div>
              <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ property.name }}</h1>
              <p class="text-lg text-gray-600 flex items-center">
                <MapPinIcon class="w-5 h-5 mr-2" />
                {{ property.location }}
              </p>
            </div>
            <div class="text-right">
              <div class="text-3xl font-bold text-blue-600 mb-2">
                Rp {{ formatPrice(property.price) }}
              </div>
              <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">
                {{ property.type }}
              </span>
            </div>
          </div>

          <!-- Features Grid -->
          <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-8 p-6 bg-gray-50 rounded-xl">
            <div class="text-center">
              <HomeIcon class="w-8 h-8 mx-auto text-blue-600 mb-2" />
              <div class="text-sm text-gray-600">Luas Tanah</div>
              <div class="font-semibold">{{ property.landSize }} m²</div>
            </div>
            <div class="text-center">
              <Square2StackIcon class="w-8 h-8 mx-auto text-blue-600 mb-2" />
              <div class="text-sm text-gray-600">Luas Bangunan</div>
              <div class="font-semibold">{{ property.buildingSize }} m²</div>
            </div>
            <div class="text-center">
              <UserGroupIcon class="w-8 h-8 mx-auto text-blue-600 mb-2" />
              <div class="text-sm text-gray-600">Kamar Tidur</div>
              <div class="font-semibold">{{ property.bedrooms }}</div>
            </div>
            <div class="text-center">
              <HomeModernIcon class="w-8 h-8 mx-auto text-blue-600 mb-2" />
              <div class="text-sm text-gray-600">Kamar Mandi</div>
              <div class="font-semibold">{{ property.bathrooms }}</div>
            </div>
          </div>

          <!-- Description -->
          <div class="mb-8">
            <h2 class="text-xl font-bold text-gray-900 mb-4">Deskripsi</h2>
            <div class="prose prose-blue max-w-none">
              {{ property.description }}
            </div>
          </div>

          <!-- Facilities -->
          <div class="mb-8">
            <h2 class="text-xl font-bold text-gray-900 mb-4">Fasilitas</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
              <div v-for="facility in property.facilities" :key="facility" 
                   class="flex items-center text-gray-700">
                <CheckCircleIcon class="w-5 h-5 text-green-500 mr-2" />
                {{ facility }}
              </div>
            </div>
          </div>

          <!-- Contact Section -->
          <div class="bg-blue-50 rounded-xl p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-4">Hubungi Kami</h2>
            <p class="text-gray-600 mb-6">
              Tertarik dengan properti ini? Hubungi kami untuk informasi lebih lanjut atau mengatur jadwal viewing.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
              <a href="tel:+6281234567890" 
                 class="inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-lg text-base font-medium text-white bg-blue-600 hover:bg-blue-700">
                <PhoneIcon class="w-5 h-5 mr-2" />
                Telepon
              </a>
              <a href="https://wa.me/6281234567890" target="_blank"
                 class="inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-lg text-base font-medium text-white bg-green-600 hover:bg-green-700">
                <ChatBubbleLeftIcon class="w-5 h-5 mr-2" />
                WhatsApp
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
  property: {
    type: Object,
    required: true
  }
})

const navigateBack = () => {
  window.location.href = '/properties';
}

const formatPrice = (price) => {
  return new Intl.NumberFormat('id-ID').format(price)
}
</script>
