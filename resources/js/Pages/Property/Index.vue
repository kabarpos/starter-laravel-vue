<template>
  <AppLayout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
      <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Properti Tersedia</h1>
        <p class="mt-2 text-lg text-gray-600">
          Temukan hunian impian Anda dari koleksi properti eksklusif kami
        </p>
      </div>

      <!-- Property Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <PropertyCard v-for="property in properties" 
                     :key="property.id" 
                     :property="property" />
      </div>
    </div>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import PropertyCard from '@/Components/PropertyCard.vue'

defineProps({
  properties: {
    type: Array,
    required: true
  }
})
</script>
